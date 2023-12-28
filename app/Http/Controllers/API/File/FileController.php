<?php

namespace App\Http\Controllers\API\File;

use App\Enums\StatusCode;
use App\Http\Controllers\Controller;
use App\Http\Requests\FileDeletionRequest;
use App\Http\Requests\FileUploadRequest;
use App\Http\Responser;
use App\Services\FileService;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public $fileService;

    function __construct()
    {
        $this->fileService = FileService::make();
    }
    /**
     * @param Request $request
     * 
     * @return Responser
     */
    function index(Request $request)
    {
        return Responser::send(StatusCode::OK, [], "File fetched successfully");
    }

    /**
     * @param FileUploadRequest $request
     * 
     * @return Responser
     */
    function upload(FileUploadRequest $request)
    {
        $folder = $request->validated('folder');
        $files = $request->file('files');

        $fileUrls = $this->fileService->store($files, $folder ?? 'uploads');

        return Responser::send(StatusCode::OK, $fileUrls, "File uploaded successfully");
    }

    /**
     * @param FileDeletionRequest $request
     * 
     * @return Responser
     */
    function delete(FileDeletionRequest $request)
    {
        $folder = $request->validated('folder');
        $fileIds = $request->validated('fileIds');

        $fileUrls = $this->fileService->delete($fileIds, $folder ?? 'uploads');

        return Responser::send(StatusCode::OK, $fileUrls, "File deleted successfully");
    }
}
