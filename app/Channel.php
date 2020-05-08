<?php

namespace App;
use App\Discussion;

class Channel extends Model
{
    public function discussions(){
        return $this->hasMany(Discussion::class);
    }
}
