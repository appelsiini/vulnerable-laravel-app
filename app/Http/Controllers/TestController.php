<?php

namespace App\Http\Controllers;

use Illuminate\Filesystem\Filesystem;

class TestController extends Controller
{
    public function test(Filesystem $fileSystem)
    {
        $file       = 'phar:///var/www/html/public/uploads/monni-exploit.jpeg';
        $fileExists = $fileSystem->size($file);

        return $fileExists ? 1 : 0;
    }
}
