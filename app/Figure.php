<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Figure extends Model
{
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['type', 'left', 'top', 'width', 'height', 'angle', 'color', 'opacity'];
}
