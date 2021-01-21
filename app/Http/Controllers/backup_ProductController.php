<?php

namespace App\Http\Controllers;

use App\Http\Resources\DetailResource;
use App\Http\Resources\ListCollection;
use App\Http\Resources\ProductByCategoryCollection;
use App\Http\Resources\ProductByCategoryResources;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
	public function index()
	{
		//test up
		$products = Product::paginate();
		return new ListCollection($products);
	}
	
	public function show($id)
	{
		try {
			$product = Product::findOrFail($id);
		} catch(\Throwable $th) {
			return response()->error('Product not found');
		}
		$product = new DetailResource($product);
		return response()->successWithKey($product, 'product');
	}

	public function getCategories()
	{
		$categories = Category::all();
		return response()->success($categories);
	}

	public function byCategory($id)
	{
		try {
			$products = Category::findOrFail($id)->products()->paginate();
		} catch(\Throwable $th) {
			response()->error('Category not found');
		}

		$products = new ProductByCategoryCollection($products);
		return response()->successWithKey($products, 'products');
	}
}
