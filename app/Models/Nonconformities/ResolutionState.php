<?php

namespace App\Models\Nonconformities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Resolution State Model
 */
class ResolutionState extends Model{
    use HasFactory;

    /**
     * Table resolution_states
     *
     * @var string $table
     */
    protected $table = 'resolution_states';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'state_name',
    ];

    /**
     * Indicates if the model should be timestamped
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * Eloquent relation between ResolutionState and Occurrence
     */
    public function occurrence(){
        return $this->hasOne(Occurrence::class);
    }
}
