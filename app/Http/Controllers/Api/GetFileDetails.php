<?php

namespace App\Http\Controllers\Api;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Filesystem\Filesystem;
use App\Http\Requests\FileDetailsRequest;

class GetFileDetails extends Controller
{
    /** @var Filesystem $filesystem */
    protected $filesystem;

    public function __construct(Filesystem $filesystem)
    {
        $this->filesystem = $filesystem;
    }

    public function __invoke(FileDetailsRequest $request)
    {
        chdir('uploads');
        $fileName = $request->get('fileName');

        return response()->json([
            'status' => 'Success',
            'data'   => [
                'name'          => $fileName,
                'size'          => $this->filesystem->size($fileName),
                'last_modified' => Carbon::createFromTimestamp($this->filesystem->lastModified($fileName)),
            ],
        ]);
    }
}
