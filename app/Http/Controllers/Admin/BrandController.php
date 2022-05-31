<?php

namespace App\Http\Controllers\Admin;

use App\Classes\ImageHandler;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        return view('components.admin.brand.index', [
            'brands' => Brand::orderBy('sort')->get(),
        ]);
    }

    public function create()
    {
        return view('components.admin.brand.create');
    }

    public function store(Request $request)
    {
        Brand::create([
            'name' => $request['name'],
            'sort' => $request['sort'],
            'description' => $request['description'],
            'image' => ImageHandler::handleUpload($request, 'image'),
            'image_dark' => ImageHandler::handleUpload($request, 'image_dark'),
        ]);

        return redirect(route('brand.index'))->with('success', 'Saved successfully');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('components.admin.brand.edit' ,[
            'brand' => Brand::find($id),
        ]);
    }

    public function update(Request $request, $id)
    {
        $brand = Brand::find($id);

        $brand->update([
            'name' => $request['name'],
            'sort' => $request['sort'],
            'description' => $request['description'],
            'image' => ImageHandler::handleUpload($request, 'image', $brand->image),
            'image_dark' => ImageHandler::handleUpload($request, 'image_dark', $brand->image_dark),
        ]);

        return redirect(route('brand.index'))->with('success', 'Updated successfully');
    }

    public function destroy($id)
    {
        $brand = Brand::find($id);

        if ($brand->image) {
            ImageHandler::handleDelete($brand->image);
        }
        
        if ($brand->image_dark) {
            ImageHandler::handleDelete($brand->image_dark);
        }

        $brand->delete();

        return redirect()->back()->with('success', 'Deleted successfully');
    }
}
