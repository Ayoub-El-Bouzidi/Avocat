<?php

namespace App\Models;

use App\Traits\Multitenantable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Multitenantable;
    protected $fillable = ["firm_id", "name", "color_code"];

    // Relationships
    public function firm(){
        return $this->belongsTo(Firm::class);
    }
    public function clients(){
        return $this->hasMany(Client::class);
    }
}
