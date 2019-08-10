<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\SoftDeletes;
use Caffeinated\Shinobi\Traits\ShinobiTrait;
use App\Traits\UuidModel;

class User extends Model implements AuthenticatableContract,
    CanResetPasswordContract
{
    use Authenticatable, CanResetPassword, SoftDeletes, ShinobiTrait, UuidModel;

    public $incrementing = false;

    protected $primaryKey = 'uuid';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected
        $fillable = [
        'name', 'email', 'password','username'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected
        $hidden = [
        'password', 'remember_token',
    ];

    public
    static $rules = [
        'name' => 'required',
        'email' => 'required',
        'password' => '',
    ];
}
