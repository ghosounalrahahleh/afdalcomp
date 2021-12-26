<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function owner(){
        return $this->hasMany(Owner::class);
    }
    
    protected $fillable=['name','image'];

    use HasFactory;
}
