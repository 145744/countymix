<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\County;
class CountyController extends Controller
{
    //showing all counties
    public function all(){
        //call the County model
        $allCounty = County::all()->toArray();

        //pass the data to the view file
    }

    //showing one role
    public function one(){}

    //showing the form to add a county
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

    //destroy a county from database
    public function delete(){
        echo 'delete';
    }
}
