<?php


namespace App\Utils;


use Illuminate\Support\Facades\File;

class HelperFunctions
{
    public static function saveFile($oldFile = null, $newFile, $filePath)
    {
        try {
            $public_path = public_path($filePath);
            File::isDirectory($public_path) or File::makeDirectory($public_path, 0777, true, true);
            if ($oldFile) {
                @unlink($oldFile);
            }
            $filename = time() . rand(10000, 99999) . '.' . $newFile->getClientOriginalExtension();
            $newFile->move($public_path, $filename);
            return $filePath . $filename;
        } catch (\Exception $exception) {
            return null;
        }
    }

    public static function productImagePath($user = null)
    {
        
        $path  = 'uploads/product_images/';
        return $path;
    }
}
