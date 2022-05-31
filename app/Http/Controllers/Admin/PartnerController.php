<?php

namespace App\Http\Controllers\Admin;

use App\Classes\ImageHandler;
use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index()
    {
        return view('components.admin.partner.index', [
            'partners' => Partner::all(),
        ]);
    }

    public function create()
    {
        return view('components.admin.partner.create');
    }

    public function store(Request $request)
    {
        Partner::create([
            'name' => $request['name'],
            'image' => ImageHandler::handleUpload($request, 'image'),
        ]);

        return redirect(route('partner.index'))->with('success', 'Saved successfully');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('components.admin.partner.edit' ,[
            'partner' => Partner::find($id),
        ]);
    }

    public function update(Request $request, $id)
    {
        $partner = Partner::find($id);

        $partner->update([
            'name' => $request['name'],
            'image' => ImageHandler::handleUpload($request, 'image', $partner->image),
        ]);

        return redirect(route('partner.index'))->with('success', 'Updated successfully');
    }

    public function destroy($id)
    {
        $partner = Partner::find($id);

        if ($partner->image) {
            ImageHandler::handleDelete($partner->image);
        }

        $partner->delete();

        return redirect()->back()->with('success', 'Deleted successfully');
    }
}
