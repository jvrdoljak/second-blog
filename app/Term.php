<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    public function types()
    {
        return $this->belongsTo('App\Type', 'term_type');
    }
}
