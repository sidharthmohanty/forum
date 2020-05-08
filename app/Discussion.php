<?php

namespace App;

use App\Model;
use App\User;
use App\Reply;
use App\Channel;

class Discussion extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getRouteKeyName(){
        return 'slug';
    }

    public function replies(){
        return $this->hasMany(Reply::class);
    }

    public function scopefilterByChannel($builder){
        if(request()->query('channel')){
            $channel = Channel::where('slug', request()->query('channel'))->first();
            
            if($channel){
                return $builder->where('channel_id', $channel->id);
            }

            return $builder;
        }

        return $builder;
        
    }
}
