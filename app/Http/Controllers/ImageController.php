<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public static function getImageExtension(){

        return ["svg","jpeg", "jpg", "png"];
    }
    public static function deleteFile($url ){
        Storage::delete('public/images/'.$url);
    }

    public static function addFile($file ){
        $fname =time().'.'.$file->getClientOriginalName();
        $extension =$file->getClientOriginalExtension();
        $check =in_array($extension,self::getImageExtension());
        if ($check) {
            $filename = $file->storeAs('public/images', $fname);
            return $filename;
        }
        else{
            return "Failed";
        }
    }
}

