<?php

namespace App\Models;

use App\Traits\Multitenantable;
use Illuminate\Database\Eloquent\Model;

class Finance extends Model
{
    use Multitenantable;
    protected $fillable = [
        'firm_id',
        'client_id',
        'case_id',
        'total_amount',
        'paid_amount',
        'status',
    ];

    // Relationships
    public function firm(){
        return $this->belongsTo(Firm::class);
    }
    public function client(){
        return $this->belongsTo(Client::class);
    }
    public function legalCase(){
        return $this->belongsTo(LegalCase::class, 'case_id');
    }
}
