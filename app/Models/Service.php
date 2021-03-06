<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function owner(){
        return $this->belongsTo(Owner::class);
    }
    use HasFactory;
}
