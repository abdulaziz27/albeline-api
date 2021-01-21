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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate();
		return new ListCollection($products);
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
			$product = Product::findOrFail($id);
		} catch(\Throwable $th) {
			return response()->error('Product not found');
		}
		$product = new DetailResource($product);
		return response()->successWithKey($product, 'product');
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
