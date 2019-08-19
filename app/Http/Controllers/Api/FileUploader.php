<?php

namespace App\Http\Controllers\Api;

use Exception;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\FileUploadRequest;

class FileUploader extends Controller
{
    public function __invoke(FileUploadRequest $request)
    {
        try {
            $uploadedFile = $request->file('file');
            Storage::disk('uploads')->putFileAs(
                '/',
                $uploadedFile,
                $uploadedFile->getClientOriginalName()
            );
        } catch (Exception $e) {
            return response()->json([
                'status' => 'Error',
            ]);
        }

        return response()->json([
            'status' => 'Success',
        ]);
    }
}
