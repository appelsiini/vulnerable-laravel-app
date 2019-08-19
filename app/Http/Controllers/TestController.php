<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Filesystem\Filesystem;

class TestController extends Controller
{
    public function test(Request $request, Filesystem $fileSystem)
    {
        try {
            file_get_contents('phar://uploads/monni-exploit.jpeg');
        } catch (Exception $exception) {
            //
        }

        return 1;
    }
}
