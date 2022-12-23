<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Design;
class DesignController extends Controller
{
     //showing all designs
     public function all(){
        //call the design model
        $allDesigns = Design::all()->toArray();

        //pass the data to the view file
    }

    //showing one design
    public function one(){}

    //showing the form to add a design
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

    //destroy a design from database
    public function delete(){
        echo 'delete';
    }
}
