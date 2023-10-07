<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected  $guarded = ['id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function doctor_department()
    {
        return $this->belongsTo(DoctorDepartment::class);
    }
    public function preview()
    {
        return $this->hasMany(Preview::class);
    }
    public function operationDoctor()
    {
        return $this->hasMany(OperationDoctor::class);
    }
}
