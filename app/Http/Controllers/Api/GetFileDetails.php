<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\FileDetailsRequest;
use Carbon\Carbon;

class GetFileDetails extends Controller
{
    public function __invoke(FileDetailsRequest $request)
    {
        chdir('uploads');
        $fileName = $request->get('fileName');

        return response()->json([
            'status' => 'Success',
            'data'   => [
                'name'       => $fileName,
                'size'       => filesize($fileName),
                'created_at' => Carbon::createFromTimestamp(filectime($fileName)),
            ],
        ]);
    }
}
