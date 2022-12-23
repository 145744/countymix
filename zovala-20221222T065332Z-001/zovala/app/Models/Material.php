<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $table = "materials";
    protected $primaryKey = "id";
    //which field can be filled in from this application
    protected $fillable = ['name','cost_metre'];


    public function designs(){
        return $this->hasMany(Design::class);
    }
    public function measurements(){
        return $this->hasMany(Measurement::class);
    }
}
