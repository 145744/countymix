<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = "orders";
    protected $primaryKey = "id";
    //which field can be filled in from this application
    protected $fillable = ['customer','quantity','price','received','completed','amount_paid','tailor','prefered_date','occasion','details'];


    public function materials(){
        return $this->hasMany(Material::class);
    }
}
