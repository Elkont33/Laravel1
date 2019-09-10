<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
     public function page(){

    	return $this -> belongsTo(Page::class);
    }
}
