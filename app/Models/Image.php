<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['path'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public static function getUrlByFilePath($filepath, $w = null, $h = null){
        if{!$w && !$h}{
            return Storage::url($filepath);
        }
        $path = dirname($filepath);
        $filename = basename($filePath);
        $file = "{$path}/crop_{$w}x{$h}_{$filename}";

        return Storage::url($file);
    }

    public function getUrl($w = null, $h = null){
        return Image::getUrlByFilePath($this->path, $w, $h);
    }
}
