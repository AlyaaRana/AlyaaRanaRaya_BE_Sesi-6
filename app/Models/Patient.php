<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Patient extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function patientDetail() {
        return $this->hasOne(PatientDetail::class);
    }

    public function medicalRecords() {
        return $this->hasMany(MedicalRecord::class);
    }
}
