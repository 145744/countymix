<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Town;
class TownController extends Controller
{
     //showing all towns
     public function all(){
        //call the Town model
        $allTowns = Town::all()->toArray();

        //pass the data to the view file
    }

    //showing one town
    public function one(){}

    //showing the form to add a town
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

    //destroy a town from database
    public function delete(){
        echo 'delete';
    }
}
