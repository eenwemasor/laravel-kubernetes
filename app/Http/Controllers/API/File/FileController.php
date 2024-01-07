<?php

namespace App\Http\Controllers\API\File;

use App\Enums\StatusCode;
use App\Http\Controllers\Controller;
use App\Http\Requests\FileDeletionRequest;
use App\Http\Requests\FileUploadRequest;
use App\Http\Responser;
use App\Services\FileService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
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

        $deletedFiles = $this->fileService->delete($fileIds, $folder ?? 'uploads');

        return Responser::send(StatusCode::OK, $deletedFiles, "File deleted successfully");
    }

    /**
     * @param Request $request
     * 
     * @return mixed
     */
    public function download(Request $request) {
        $filepath = $request->get('file-path');

        if(!$filepath){
            abort(404, 'File not found');
        }
        
        $file = public_path('assets/'.$filepath);
        // dd($file);
    
        if (file_exists($file)) {
            preg_match('/([^\/]+)$/', $filepath, $matches);
            return Response::download($file, $matches[1]);
        } else {
            abort(404, 'File not found');
        }
    }
}
