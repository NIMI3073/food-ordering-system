<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;


    protected $guarded= [];

    protected $table ='menu';

    // protected $with = ['cart'];


    
    public function getFileAttribute($value){
        return url("/storage/images/$value");
    }
}
