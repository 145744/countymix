<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = "users";
    protected $primaryKey = "id";
    //which field can be filled in from this application
    protected $fillable = ['surname','other_names','username','gender','phone','email','password','otp','role_id','town_id'];



    //[Alfred belongsTo the role Admin]
    public function role(){
        return $this->belongsTo(Role::class);
    }
}
