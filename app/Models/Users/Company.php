<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    /**
     * Table companies
     *
     * @var string $table
     */
    protected $table = 'companies';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'company_name',
        'company_description',
        'sector',
        'company_phone',
        'headquarters',
        'website',
        'company_types_id'
    ];

    /**
     * Indicates if the model should be timestamped
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Eloquent relation between User and Company
     *
     */
    public function user(){
        return $this->hasOne(User::class);
    }

    /**
     * Eloquent relation between CompanyType and Company
     */
    public function companyTypes(){
        return $this->belongsTo(CompanyType::class, 'company_types_id');
    }
}
