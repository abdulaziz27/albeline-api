<?php

namespace App\Http\Controllers;

use App\Http\Resources\BannerResource;
use App\Models\Banner;
use App\Models\Image;
use App\StatusCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function show($id)
    {
        try {
            $image = Image::findOrFail($id);
        } catch(\Throwable $th) {
            return response()->error('Image is not found', StatusCode::NOT_FOUND);
        }

        $path = Storage::disk('local')->path("public/images/$image->path");
        return response()->file($path);
    }

    public function banner($banner)
	{
		if($banner != 'big' && $banner != 'small') {
			return response()->error("tidak ada tipe banner dengan nama tersebut");
		}

		if($banner == 'big') {
			$banner = Banner::where("big_banner", true)->get();
			return response()->successWithKey(BannerResource::collection($banner), 'banners');
		} elseif ($banner == 'small') {
			$banner = Banner::where("big_banner", false)->get();
			return response()->successWithKey(BannerResource::collection($banner), 'banners');
		} else {
			return response()->error("tidak ada tipe banner dengan nama tersebut");
		}
		
	}
}
