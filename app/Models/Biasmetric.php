<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biasmetric extends Model
{
    protected $fillables=['metric_name',
                'metric_value'
];
    use HasFactory;
}
