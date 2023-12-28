<?php

namespace App\Services;

use App\Models\File;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;

class FileService
{
    /**
     * @return FileService
     */
    public static function make(): FileService
    {
        return new static();
    }

    /**
     * @param array $files
     * @param string $folder
     * 
     * @return array
     */
    public function store(array $files, string $folder): array
    {
        $uploadFiles = collect([]);

        foreach ($files as $file) {
            $uploadFile =  $this->uploadFile($file, $folder);
            $uploadFiles->push($uploadFile);
        }

        return $uploadFiles->toArray();
    }


    /**
     * @param array $files
     * @param string $folder
     * 
     * @return array
     */
    public function delete(array $fileIds, string $folder): array
    {
        $deletedFiles = collect([]);

        foreach ($fileIds as $fileId) {
            $deletedFile =  $this->deleteFile($fileId, $folder);

            if($deletedFile){
                $file = File::find($fileId);
                $file->delete();
            }
            $deletedFiles->push($deletedFile);
        }

        return $deletedFiles->toArray();
    }

    public function deleteFile($fileId, string $folder){
        $file = File::find($fileId);

        if($file){
            return Storage::disk('s3')->delete($file->path);
        }
    }

    /**
     * @param mixed $file
     * @param string $folder
     * 
     * @return string
     */
    public function uploadFile($file, string $folder)
    {
        $uploadFile =  null;

        if (!App::environment('local')) {
            $path = $file->store($folder, 'public');
            $uploadFile = $this->saveUploadFile('public', $path, $folder);
        } else {
            $path = $file->store($folder, 's3');
            $uploadFile = $this->saveUploadFile('s3', $path, $folder);
        }

        return $uploadFile;
    }

    /**
     * @param string $disk
     * @param string $path
     * @param string $folder
     * 
     * @return File
     */
    private function saveUploadFile(string $disk, string $path, string $folder): File
    {
        $extension = pathinfo($path, PATHINFO_EXTENSION);
        $filename = pathinfo($path, PATHINFO_FILENAME);
        $mimeType = Storage::mimeType($path);
        $sizeInBytes = Storage::disk($disk)->size($path);
        $sizeInHumanReadable = $this->formatBytes($sizeInBytes);

        return File::create([
            'user_id' => auth()->user()->id ?? null,
            'folder'  => $folder,
            'disk'      => $disk,
            'path'      => $path,
            'filename' => $filename,
            'extension' => $extension,
            'mime' => $mimeType,
            'size' => $sizeInBytes,
            'size_in_human_readable' => $sizeInHumanReadable,
        ]);
    }

    /**
     * @param mixed $bytes
     * @param int $precision
     * 
     * @return mixed
     */
    private function formatBytes($bytes, $precision = 2)
    {
        $units = ['B', 'KB', 'MB', 'GB', 'TB'];

        $bytes = max($bytes, 0);
        $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
        $pow = min($pow, count($units) - 1);

        return round($bytes, $precision) . '' . $units[$pow];
    }
}
