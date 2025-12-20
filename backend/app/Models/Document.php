<?php

namespace App\Models;

use App\Traits\Multitenantable;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use Multitenantable;
    protected $fillable = [
        'case_id',
        'firm_id',
        'file_type',
        'file_path'
    ];

    // Relationships
    public function legalCase(){
        return $this->belongsTo(LegalCase::class, 'case_id');
    }
}
