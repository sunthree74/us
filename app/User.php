<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function userdetail()
    {
        return $this->hasOne(UserDetail::class);
    }

    public function banksoals()
    {
        return $this->hasMany(BankSoal::class);
    }
    
    public function hasilujians()
    {
        return $this->hasMany(HasilUjian::class);
    }

    public function ujians()
    {
        return $this->hasMany(Ujian::class);
    }
}
