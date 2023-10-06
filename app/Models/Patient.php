<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected  $guarded = ['id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function patientRoom()
    {
        return $this->hasMany(PatientRoom::class);
    }
    public function preview()
    {
        return $this->hasMany(Preview::class);
    }
}
