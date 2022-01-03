<?php

namespace App\Models\Nonconformities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Users\User;
use App\Models\Companies\Company;

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
        'occurrence_title',
        'occurrence_description',
        'user_id',
        'resolution_state_id',
        'company_id'
    ];

    /**
     * Indicates if the model should be timestamped
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * Eloquent relation between Occurrence and ResolutionState
     */
    public function resolutionState(){
        return $this->belongsTo(resolutionState::class, 'resolution_state_id');
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
