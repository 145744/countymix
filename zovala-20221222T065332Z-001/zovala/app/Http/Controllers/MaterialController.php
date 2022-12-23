<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;
class MaterialController extends Controller
{
     //showing all materials
     public function all(){
        //call the Material model
        $allMaterials = Material::all()->toArray();

        //pass the data to the view file
    }

    //showing one role
    public function one(){}

    //showing the form to add a material
    public function add(){
        echo 'add method';
    }

    //process data
    public function save(){}

    //show edit form
    public function edit(){
        echo 'edit method';
    }

    //process edits
    public function saveChanges(){
        echo 'save changes';
    }

    //destroy a material from database
    public function delete(){
        echo 'delete';
    }
}
