<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Department Model
 */
class Department extends Model{
    use HasFactory;

    /**
     * Table roles
     *
     * @var string $table
     */
    protected $table = 'departments';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable =[
        'department_name'
    ];

    /**
     * Indicates if the model should be timestamped
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Eloquent relation between User and Department
     */
    public function user(){
        return $this->hasOne(User::class);
    }
}
