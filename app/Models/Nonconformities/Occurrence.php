<?php

namespace App\Models\Nonconformities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Users\User;
use App\Models\Companies\Company;

/**
 * Occurrence Model
 */
class Occurrence extends Model{
    use HasFactory;

    /**
     * Table occurrences
     *
     * @var string $table
     */
    protected $table = 'occurrences';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'oc_title',
        'oc_description',
        'user_id',
        'resolution_state_id',
        'company_id',
    ];

    /**
     * Indicates if the model should be timestamped
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Eloquent relation between Occurrence and ResolutionState
     */
    public function resolutionState(){
        return $this->belongsTo(ResolutionState::class, 'resolution_state_id');
    }

    /**
     * Eloquent relation between Occurrence and User
     */
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Eloquent relation between Occurrence and Company
     */
    public function company(){
        return $this->belongsTo(Company::class, 'company_id');
    }
}
