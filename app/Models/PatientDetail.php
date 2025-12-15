<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class PatientDetail extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function patient() {
        return $this->belongsTo(Patient::class);
    }
}
