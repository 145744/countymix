<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Measurement extends Model
{
    use HasFactory;

    protected $table = "measurements";
    protected $primaryKey = "id";
    //which field can be filled in from this application
    protected $fillable = ['collar','chest','sleeved','waist','hips','inseam','outseam','user_id'];


    public function materials(){
        return $this->hasMany(Material::class);
    }
}
