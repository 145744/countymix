<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $table = "photos";
    protected $primaryKey = "id";
    //which field can be filled in from this application
    protected $fillable = ['name','design_id','user_id'];


    public function users(){
        return $this->belongsTo(User::class);
    }
}
