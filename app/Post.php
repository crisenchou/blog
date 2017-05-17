<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Parsedown;

class Post extends Model
{


    public function getContentAttribute($content)
    {
        $Parsedown = new Parsedown();
        return $Parsedown->text($content);
    }
}
