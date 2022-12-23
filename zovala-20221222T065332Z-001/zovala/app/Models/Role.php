<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;//@TODO Read on Traits

class Role extends Model
{
    use HasFactory;

    protected $table = "roles";
    protected $primaryKey = "id";
    //which field can be filled in from this application
    protected $fillable = ['name'];

    //relationship [an admin hasMany users]
    public function users(){
        return $this->hasMany(User::class);
    }
}
