<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OperationDoctor extends Model
{
    use HasFactory;
    protected  $guarded = ['id'];
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
    public function operation()
    {
        return $this->belongsTo(Operation::class);
    }
}
