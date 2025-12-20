<?php

namespace App\Models;

use App\Traits\Multitenantable;
use Illuminate\Database\Eloquent\Model;

class LegalCase extends Model
{
    use Multitenantable;
    protected $fillable = [
        'firm_id',
        'client_id',
        'case_number',
        'title',
        'description',
        'court_name',
        'lawyer_id',
        'status'
    ];

    // Relationships
    public function firm(){
        return $this->belongsTo(Firm::class);
    }
    public function client(){
        return $this->belongsTo(Client::class);
    }
    public function hearings(){
        return $this->hasMany(Hearing::class);
    }
    public function documents(){
        return $this->hasMany(Document::class);
    }
    public function finances(){
        return $this->hasMany(Finance::class);
    }
}
