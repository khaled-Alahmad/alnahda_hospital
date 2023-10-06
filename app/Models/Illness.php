<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Illness extends Model
{
    use HasFactory;
    protected  $guarded = ['id'];
    public function preview()
    {
        return $this->hasMany(Preview::class);
    }
}
