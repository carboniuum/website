<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Partner;
use App\Models\Product;
use App\Models\Settings;

class HomeController extends Controller
{
    public function home()
    {
        return view('pages.home', [
            'title' => Settings::where('key', 'header_title')->first(),
            'subtitle' => Settings::where('key', 'header_subtitle')->first(),
            'headerImg' => Settings::where('key', 'header_img')->first(),
            'advantageImg' => Settings::where('key', 'advantage_img')->first(),
            'brands' => Brand::take(6)->orderBy('sort')->get(),
            'partners' => Partner::all(),
        ]);
    }

    public function brands()
    {
        return view('pages.brands', [
            'brands' => Brand::orderBy('sort')->get(),
        ]);
    }

    public function brand($id)
    {
        $brand = Brand::find($id);

        return view('pages.brand', [
            'brand' => $brand,
            'products' => $brand->products,
        ]);
    }

    public function product($id)
    {
        $product = Product::find($id);
        return view('pages.product', [
            'brand' => $product->brand,
            'product' => $product,
            'productAttributes' => $product->productAttributes,
        ]);
    }

    public function about()
    {
        return view('pages.about', [
            'content' => Settings::where('key', 'about_text')->first(),
            'aboutImg' => Settings::where('key', 'about_img')->first(),
        ]);
    }
}
