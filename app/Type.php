<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'types';

    public function terms()
    {
        return $this->hasMany('App\Term', 'term_type');
    }
}
