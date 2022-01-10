<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    protected $table = 'pokemons';

    public function types ()
    {
        return $this->belongsToMany(Type::class);
    }
}
