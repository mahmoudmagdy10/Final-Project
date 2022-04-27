<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;


class Customer extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $table = 'customers';

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'address',
        'country',
        'remember_token',

    ];

    protected $hidden = [
        'password',
        'created_at',
        'updated_at',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function  scopeSelection($query)
    {

        return $query->select('id', 'email', 'name', 'phone', 'address','country','remember_token');
    }

    // Rest omitted for brevity

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}