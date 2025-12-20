<?php

namespace App\Models;

use App\Traits\Multitenantable;
use Illuminate\Database\Eloquent\Model;

class Hearing extends Model
{
    use Multitenantable;
    protected $fillable = [
        'case_id',
        'firm_id',
        'hearing_date',
        'judge_name',
        'room_number',
        'notes',
    ];
    // Relationships
    public function legalCase(){
        return $this->belongsTo(LegalCase::class, 'case_id');
    }
}
