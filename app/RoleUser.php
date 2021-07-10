<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public $table = 'role_user';
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $fillable = [
        'user_id','role_id'
    ];
}
