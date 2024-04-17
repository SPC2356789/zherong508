<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirstPicture extends Model
{
    use HasFactory;
    protected $fillable = [
        'image_path',
        'original_image_names',
        'status',
        // Add other fillable attributes here if any
    ];
    protected $dates = ['deleted_at']; // 必須加這行才有軟刪除
}
