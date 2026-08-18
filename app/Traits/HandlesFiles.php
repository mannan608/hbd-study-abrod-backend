<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

trait HandlesFiles
{
    public function uploadFile(
        UploadedFile $file,
        string $directory,
        ?string $filename = null
    ): string {

        $name = $filename
            ? $filename . '.' . $file->getClientOriginalExtension()
            : Str::ulid() . '.' . $file->getClientOriginalExtension();

        $uploadPath = public_path('uploads/' . $directory);

        if (!File::exists($uploadPath)) {
            File::makeDirectory($uploadPath, 0755, true);
        }

        $file->move($uploadPath, $name);

        return 'uploads/' . $directory . '/' . $name;
    }

    public function deleteFile(?string $path): bool
    {
        if (!$path) {
            return false;
        }

        $fullPath = public_path($path);

        if (File::exists($fullPath)) {
            File::delete($fullPath);
            return true;
        }

        return false;
    }

    public function replaceFile(
        ?UploadedFile $newFile,
        ?string $oldPath,
        string $directory
    ): ?string {

        if (!$newFile) {
            return $oldPath;
        }

        $this->deleteFile($oldPath);

        return $this->uploadFile(
            $newFile,
            $directory
        );
    }

    public function fileUrl(
        ?string $path,
        ?string $fallback = null
    ): ?string {

        return $path
            ? asset($path)
            : $fallback;
    }
}
