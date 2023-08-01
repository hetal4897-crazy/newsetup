<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Storage;
use Response;
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function fileuploadFileImage(Request $request, $uploadFolderName, $inputFileName){

        $image     = $request->file($inputFileName);
        $filename = $image->getClientOriginalName();
        $extension = $image->getClientOriginalExtension() ?: 'png';               
        $picture = rand().time() . '.' . $extension;
        $destinationPath = Storage_path("app/public/").$uploadFolderName;
        $request->file($inputFileName)->move($destinationPath, $picture);
        return $picture;
    }
}
