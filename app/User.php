<?php

namespace funkistz;


class User extends BaseModel
{

    protected $table = 'user';
    protected $fillable = [
        'id', 'email', 'first_name', 'last_name', 'password', 'gender', 'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
