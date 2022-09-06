<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $guarded =[];

    protected $table = 'order';


    
    public function orders() : HasMany
    {
        return $this->hasMany(Order::class, 'email','id');
    }

}
