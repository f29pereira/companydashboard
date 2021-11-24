<?php

namespace App\Models\Users;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * Table users
     *
     * @var string $table
     */
    protected $table = 'users';


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'user_role_id',
        'department_id',
        'company_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Indicates if the model should be timestamped
     *
     * @var bool
     */
    public $timestamps = true;

     /**
     * Eloquent relation between User and Role
     */
    public function userRole(){
        return $this->belongsTo(UserRole::class, 'user_role_id');
    }

    /**
     * Eloquent relation between User and Company
     */
    public function department(){
        return $this->belongsTo(Department::class);
    }

    /**
     * Eloquent relation between User and Company
     */
    public function company(){
        return $this->belongsTo(Company::class);
    }
}
