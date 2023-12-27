<?php

namespace App\Services;

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
        $fileUrls = collect([]);

        foreach ($files as $file) {
            $fileUrl =  $this->uploadFile($file, $folder);
            $fileUrls->push($fileUrl);
        }

        return $fileUrls->toArray();
    }

    /**
     * @param mixed $file
     * @param string $folder
     * 
     * @return string
     */
    public function uploadFile($file, string $folder)
    {
        $url =  null;

        if (App::environment('local')) {
            $path = $file->store($folder, 'public');
            $url = Storage::disk('public')->url($path);
        } else {
            $path = $file->store($folder, 's3');
            $url = Storage::disk('s3')->url($path);
        }

        return $url;
    }
}
