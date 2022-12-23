<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Design extends Model
{
    use HasFactory;

    protected $table = "designs";
    protected $primaryKey = "id";
    //which field can be filled in from this application
    protected $fillable = ['name','base_price','gender'];


    public function materials(){
        return $this->hasMany(Material::class);
    }
}
