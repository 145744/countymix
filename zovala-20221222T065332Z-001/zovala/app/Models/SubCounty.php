<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Database\Eloquent\Casts\Attribute;
class SubCounty extends Model
{
    use HasFactory;

    protected $table = "subcounty";
    protected $primaryKey = "id";
    //which field can be filled in from this application
    protected $fillable = ['name','county_id'];

    public function County(){
        return $this->belongsTo(County::class);
    }

    public function towns(){
        return $this->hasMany(Town::class);
    }

    
    public function getNameAttribute($value)
    {
        return ucwords($value);
    }

}
