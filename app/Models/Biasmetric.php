<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biasmetric extends Model
{
    protected $fillable=['metric_name',
                'metric_value'
];

public function report()
{
    return $this->belongsTo(Report::class);
}
    use HasFactory;

}
