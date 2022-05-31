<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductAttribute;
use Illuminate\Http\Request;

class ProductAttributeController extends Controller
{
    public function index()
    {
        return view('components.admin.product-attribute.index', [
            'attributes' => ProductAttribute::all(),
        ]);
    }

    public function create()
    {
        return view('components.admin.product-attribute.create' ,[
            'products' => Product::all(),
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'product_id' => 'required',
        ]);

        ProductAttribute::create([
            'name' => $request['name'],
            'description' => $request['description'],
            'attribute_1' => $request['attribute_1'],
            'attribute_2' => $request['attribute_2'],
            'attribute_3' => $request['attribute_3'],
            'product_id' => $request['product_id'],
        ]);

        return redirect(route('product.attribute.index'))->with('success', 'Saved successfully');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('components.admin.product-attribute.edit' ,[
            'attribute' => ProductAttribute::find($id),
            'products' => Product::all(),
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'product_id' => 'required',
        ]);

        $attribute = ProductAttribute::find($id);

        $attribute->update([
            'name' => $request['name'],
            'description' => $request['description'],
            'attribute_1' => $request['attribute_1'],
            'attribute_2' => $request['attribute_2'],
            'attribute_3' => $request['attribute_3'],
            'product_id' => $request['product_id'],
        ]);

        return redirect(route('product.attribute.index'))->with('success', 'Updated successfully');
    }

    public function destroy($id)
    {
        $attribute = ProductAttribute::find($id);

        $attribute->delete();

        return redirect()->back()->with('success', 'Deleted successfully');
    }
}
