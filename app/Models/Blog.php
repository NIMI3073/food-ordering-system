<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

protected $guarded =[];

protected $table = 'blog';



    public function getFileAttribute($value){
        return url("/storage/images/$value");
    }
}
