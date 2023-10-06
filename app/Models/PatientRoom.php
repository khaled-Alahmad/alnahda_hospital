<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientRoom extends Model
{
    use HasFactory;
    protected  $guarded = ['id'];
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
    protected $casts = [
        'from' => 'datetime:H:i A', // تنسيق الوقت
        'to' => 'datetime:H:i A', // تنسيق الوقت
    ];
}
