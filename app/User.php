<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use phpDocumentor\Reflection\Types\Boolean;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'surname',
        'middle_name',
        'phone_number',
        'email',
        'birthday',
        'has_site',
        'site_url',
        'password',
        'user_role_id',
    ];
    // TODO Status field, twitter, linkedin, facebook, googleplus, photo

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function admindata()
    {
        return $this->hasOne(Admin::class, 'user_id', 'id');
    }

    public function isAdmin() : bool
    {
        return (bool) $this->admindata;
    }
}
