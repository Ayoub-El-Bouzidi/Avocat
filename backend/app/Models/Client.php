<?php

namespace App\Models;

use App\Traits\Multitenantable;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use Multitenantable;
    protected $fillable = [
        'firm_id',
        'category_id',
        'full_name',
        'email',
        'phone',
        'addressE',
        'national_id',
    ];

    // Relationships
    public function firm(){
        return $this->belongsTo(Firm::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function cases(){
        return $this->hasMany(LegalCase::class);
    }
}
