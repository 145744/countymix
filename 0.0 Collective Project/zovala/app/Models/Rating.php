<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $table = "ratings";
    protected $primaryKey = "id";
    //which field can be filled in from this application
    protected $fillable = ['name','user_id','value','comment','order_id'];


    public function materials(){
        return $this->hasMany(Material::class);
    }

    public function measurements(){
        return $this->hasMany(Measurement::class);
    }
}
