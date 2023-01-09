<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCounty;
class SubCountyController extends Controller
{
     //showing all subcounties
     public function all(){
        //call the SubCounty model
        $allSubCounty = SubCounty::all()->toArray();

        //pass the data to the view file
    }

    //showing one subcounty
    public function one(){}

    //showing the form to add a subcounty
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

    //destroy a subcounty from database
    public function delete(){
        echo 'delete';
    }
}
