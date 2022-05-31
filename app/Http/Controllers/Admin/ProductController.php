<?php

namespace App\Http\Controllers\Admin;

use App\Classes\ImageHandler;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('components.admin.product.index', [
            'products' => Product::all(),
        ]);
    }

    public function create()
    {
        return view('components.admin.product.create' ,[
            'brands' => Brand::all(),
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'short_description' => 'required',
            'brand_id' => 'required',
        ]);

        Product::create([
            'name' => $request['name'],
            'short_description' => $request['short_description'],
            'description' => $request['description'],
            'cover' => ImageHandler::handleUpload($request, 'cover'),
            'images' => ImageHandler::handleMultipleUpload($request, 'images'),
            'file_names' => $request['file_names'],
            'files' => ImageHandler::handleMultipleUpload($request, 'files'),
            'brand_id' => $request['brand_id'],
        ]);

        return redirect(route('product.index'))->with('success', 'Saved successfully');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('components.admin.product.edit' ,[
            'product' => Product::find($id),
            'brands' => Brand::all(),
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'short_description' => 'required',
            'brand_id' => 'required',
        ]);

        $product = Product::find($id);

        $product->update([
            'name' => $request['name'],
            'short_description' => $request['short_description'],
            'description' => $request['description'],
            'cover' => ImageHandler::handleUpload($request, 'cover', $product->cover),
            'images' => ImageHandler::handleMultipleUpload($request, 'images', $product->images),
            'file_names' => $request['file_names'],
            'files' => ImageHandler::handleMultipleUpload($request, 'files', $product->files),
            'brand_id' => $request['brand_id'],
        ]);

        return redirect(route('product.index'))->with('success', 'Updated successfully');
    }

    public function destroy($id)
    {
        $product = Product::find($id);

        if ($product->cover) {
            ImageHandler::handleDelete($product->cover);
        }

        if ($product->images) {
            ImageHandler::handleMultipleDelete($product->images);
        }

        $product->delete();

        return redirect()->back()->with('success', 'Deleted successfully');
    }
}
