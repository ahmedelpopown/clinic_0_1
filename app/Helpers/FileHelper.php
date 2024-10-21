<?php

namespace App\Helpers;

 
 class FileHelper{

    public static function git_file_url(?string $path=null){
        return   $path  ? asset($path) : asset('web/download.jpeg');
    }  
}
