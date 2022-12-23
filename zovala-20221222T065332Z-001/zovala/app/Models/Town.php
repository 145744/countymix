<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    use HasFactory;

    protected $table = "towns";
    protected $primaryKey = "id";
    //which field can be filled in from this application
    protected $fillable = ['name','lat_long','sc_id'];


    public function subcounty(){
        return $this->belongsTo(SubCounty::class,'sc_id','id');
    }

    public function getNameAttribute($value)
    {
        return ucwords($value);
    }
}
