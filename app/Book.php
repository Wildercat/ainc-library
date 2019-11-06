<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function checkout()
    {
        return $this->hasOne(Checkout::class);
    }
}
