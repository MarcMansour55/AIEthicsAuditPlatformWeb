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

    public function Dataset()
    {
        return $this->belongsTo(Dataset::class);
    }
    public function Biasmetrics()
    {
        return $this->hasMany(Biasmetric::class);
    }
    use HasFactory;

}
