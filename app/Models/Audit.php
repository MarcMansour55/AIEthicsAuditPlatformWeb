<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
    protected $fillable = ['analysis_date',
            'status',
            'notes'
];

    use HasFactory;

}
