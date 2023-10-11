<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreviewDetails extends Model
{
    use HasFactory;
    protected  $guarded = ['id'];
    public function preview()
    {
        return $this->belongsTo(Preview::class);
    }
    public function medicine()
    {
        return $this->belongsTo(Medicine::class);
    }
    public function illness()
    {
        return $this->belongsTo(Illness::class);
    }
}
