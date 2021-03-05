<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
   public function user()
   {
        return $this->belongsto('App/User', 'foreign_key');
    }
}
