<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Firm extends Model
{
    protected $fillable = ["name", "address", "phone", "email", "subscription_plan"];

    // Relationships
    public function user(){
        return $this->hasMany(User::class);
    }

    public function clients(){
        return $this->hasMany(Client::class);
    }

    public function cases(){
        return $this->hasMany(LegalCase::class);
    }
}
