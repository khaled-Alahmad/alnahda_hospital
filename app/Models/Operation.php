<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    use HasFactory;
    protected  $guarded = ['id'];
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
    public function preview()
    {
        return $this->belongsTo(Preview::class);
    }
    public function operationDoctor()
    {
        return $this->hasMany(OperationDoctor::class);
    }
}
