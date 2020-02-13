<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Webpatser\Uuid\Uuid;

function formatNumber($number)
{
    return number_format($number, 2, '.', '');
}
function makedir($path)
{
    if(!file_exists($path))
    {
        File::makeDirectory($path, $mode = 0777, true, true);
    }
    return true;
}
function fileDel($path)
{
    if(file_exists($path))
    {
        File::delete($path);
    }
    return true;
}
function guid()
{
    $id = Uuid::generate()->string;
    return $id;
}
