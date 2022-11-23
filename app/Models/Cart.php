<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Cart extends Model
{
    use HasFactory;
    protected $guarded =[];
    
    protected $with = ['menu'];


    
    public function menu(): HasOne{
        return $this->hasOne(menu::class, 'id', 'menu_id');
    }
    
}
