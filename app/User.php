<?php

namespace App;

use Illuminate\Notifications\Notifiable;
//use Illuminate\Contracts\Auth\MustVerifyEmail;        << this gets deleted if I save
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'telephone', 'address', 'salary', 'hairType', 'personType',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function portfolio()
    {
        return $this->hasOne('App\Portfolio');
    }

    // second thing I made for middleware
    public function userRole()
    {
        return $this->role; // returns the value of the role column in the database
    }

    public function userType()
    {
        if ($this->role == 'admin') {
            return 'admin';
        } elseif ($this->role == 'standard') {
            return 'standard';
        } else {
            return 'ghost';
        }
    }

    public function isAdmin()
    {
        if ($this->role == 'admin') {
            return true;
        } else {
            return false;
        }
    }
}
