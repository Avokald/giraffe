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

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function admindata()
    {
        return $this->hasOne(Admin::class, 'user_id', 'id');
    }

    public function isAdmin() : bool
    {
        return $this->userRole->slug === 'admin';
    }

    public function userRole()
    {
        return $this->belongsTo(UserRole::class);
    }

    public function services()
    {
        return $this->belongsToMany(Tariff::class)->withTimestamps();
    }

    public function getMoneyAttribute()
    {
        return $this->attributes['money'] / 10;
    }

    public function setMoneyAttribute($value)
    {
        $this->attributes['money'] = $value * 10;
    }

}
