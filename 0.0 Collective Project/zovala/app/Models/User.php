<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table = "users";
    protected $primaryKeey = "id";
    protected $fillable = ['surname','other_names','username','gender','otp','password','phone','email','role_id','town_id'];

    //Juma, customer
    public function role(){
        $this->belongsTo(Role::class);

    }
}
