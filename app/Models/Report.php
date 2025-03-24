<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillables = ['generated_date',
        'complience_status',
        'pdf_path'
];

    public function dataset()
    {
        return $this->belongsTo(Dataset::class);

    }
    use HasFactory;
}
