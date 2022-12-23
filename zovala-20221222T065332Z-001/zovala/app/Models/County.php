<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    use HasFactory;

    protected $table = "county";
    protected $primaryKey = "id";
    //which field can be filled in from this application
    protected $fillable = ['name'];


    public function Subcounty(){
        return $this->hasMany(SubCounty::class);
    }

    public function getNameAttribute($value)
    {
        return ucwords($value);
    }
}
