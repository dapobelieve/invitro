<?php

namespace App\Http\Traits;
use Cloudder;

trait Upload
{
    public function upload($file, $folder, $width, $height, $quality='auto')
    {
        $result  =  Cloudder::upload($file,null, $options = array(
            'folder'   => $folder,
            'timeout'  =>  600,
            'height'   => $height,
            'width'    => $width,
            'quality'  => $quality,
        ));

        return Cloudder::getResult();
    }

    public function deletePicture($imagePubId)
    {
        Cloudder::delete($imagePubId);
    }
}