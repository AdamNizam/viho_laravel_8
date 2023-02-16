<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survivor extends Model
{
    use HasFactory;

    public function survivor()
    {
        return $this->belongsTo(Survivor::class);
    }
}
