<?php

namespace App\Models\Companies;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyType extends Model
{
    use HasFactory;

    /**
     * Table companies
     *
     * @var string $table
     */
    protected $table = 'company_types';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'type_name',
        'type_description'
    ];

    /**
     * Indicates if the model should be timestamped
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Eloquent relation between CompanyType and Company
     */
    public function company(){
        return $this->hasOne(Company::class);
    }
}
