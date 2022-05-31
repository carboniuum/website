<?php

namespace App\Http\Controllers\Admin;

use App\Classes\ImageHandler;
use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        return view('components.admin.settings.index', [
            'settings' => Settings::orderBy('key', 'desc')->get(),
        ]);
    }

    public function create()
    {
        return view('components.admin.settings.create');
    }

    public function store(Request $request)
    {
        Settings::create([
            'key' => $request['key'],
            'value' => $request['value'],
            'icon' => ImageHandler::handleUpload($request, 'icon'),
        ]);

        return redirect(route('settings.index'))->with('success', 'Saved successfully');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('components.admin.settings.edit' ,[
            'settings' => Settings::find($id),
        ]);
    }

    public function update(Request $request, $id)
    {
        $settings = Settings::find($id);

        $settings->update([
            'value' => $request['value'],
            'icon' => ImageHandler::handleUpload($request, 'icon', $settings->icon),
        ]);

        return redirect(route('settings.index'))->with('success', 'Updated successfully');
    }

    public function destroy($id)
    {
        $settings = Settings::find($id);

        if ($settings->icon) {
            ImageHandler::handleDelete($settings->icon);
        }

        $settings->delete();

        return redirect()->back()->with('success', 'Deleted successfully');
    }
}
