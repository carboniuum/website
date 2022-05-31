<?php

namespace App\Classes;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ImageHandler
{
    private static $disk = 'public';
    private static $directory = 'images';

    public static function handleUpload(Request $request, $requestInputName, $modelImage = null) : string
    {
        $image = '';

        if ($request->hasFile($requestInputName)) {
            if ($request->file($requestInputName)->isValid()) {
                $request->validate([
                    $requestInputName => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
                ]);

                $file = $request->file($requestInputName);

                $name = Str::random(10);
                $extension = $file->extension();
                $image = $name . '.' . $extension;

                if ($modelImage != null) {
                    self::deleteIfExists($modelImage);
                }

                Storage::disk(self::$disk)->putFileAs(self::$directory, $file, $image);
            }
        }

        return ($image != '') ? $image : ($modelImage) ?? '';
    }

    public static function handleMultipleUpload(Request $request, $requestInputName, $modelImages = null) : string
    {
        $data = [];

        if ($request->hasFile($requestInputName)) {
            $request->validate([
                $requestInputName . '.*' => 'mimes:jpeg,png,jpg,gif,svg,pdf|max:4096'
            ]);

            foreach($request->file($requestInputName) as $file)
            {
                $name = Str::random(10);
                $extension = $file->extension();
                $image = $name . '.' . $extension;
                $data[] = $image;

                if ($modelImages != null) {
                    $images = explode('|', $modelImages);
                    foreach ($images as $img) {
                        self::deleteIfExists($img);
                    }
                }

                Storage::disk(self::$disk)->putFileAs(self::$directory, $file, $image);
            }
        }

        return (count($data) > 0) ? implode('|', $data) : $modelImages ?? '';
    }

    public static function handleDelete($image) : void
    {
        self::deleteIfExists($image);
    }

    public static function handleMultipleDelete($images) : void
    {
        foreach (explode('|', $images) as $image) {
            self::deleteIfExists($image);
        }
    }

    private static function deleteIfExists($image) : void
    {
        if (Storage::disk(self::$disk)->exists(self::$directory . '/' . $image)) {
            Storage::disk(self::$disk)->delete(self::$directory . '/' . $image);
        }
    }
}
