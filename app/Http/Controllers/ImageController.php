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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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
