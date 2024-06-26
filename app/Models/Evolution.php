<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evolution extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['evolution_name','photo'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
