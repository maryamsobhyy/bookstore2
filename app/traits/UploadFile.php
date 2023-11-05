<?php

namespace App\Traits;

trait UploadFile
{
    static function uploadFile($input, $path)
    {
        $ext = request()->file($input)->getClientOriginalExtension();
        $name = time() . rand(10000, 2000) . ".$ext";
        request()->file($input)->move(public_path($path), $name);
        return $name;
    }
}
