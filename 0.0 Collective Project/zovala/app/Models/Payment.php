<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = "payments";
    protected $primaryKey = "id";
    //which field can be filled in from this application
    protected $fillable = ['name','user_id','amount','method','pdate','order_id'];


    public function materials(){
        return $this->hasMany(Material::class);
    }
}
