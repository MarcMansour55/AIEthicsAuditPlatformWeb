<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dataset extends Model
{
    protected $fillable = ['file_type',
            'file_name',
            's3_path',
            'upload_at',
            'file_size'
];

    use HasFactory;
}
