<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'payment';
    
    // protected $with = ['menu'];


      
    
    // public function payment() : HasMany
    // {
    //     return $this->hasMany(Payment::class, '','');
    // }

}
