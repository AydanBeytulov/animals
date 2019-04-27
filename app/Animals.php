<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animals extends Model
{

    public function adType()
    {
        return $this->hasOne('App\AdsTypes','id','ad_type');
    }

    public function type()
    {
        return $this->hasOne('App\AnimalsTypes','id','animal_type');
    }

    public function breed()
    {
        return $this->hasOne('App\AnimalsBreeds','id','animal_breed');
    }

    public function user()
    {
        return $this->hasOne('App\User','id','user_id');
    }

    public function images()
    {
        return $this->hasMany('App\AnimalsImages','animal', 'id');
    }
}
