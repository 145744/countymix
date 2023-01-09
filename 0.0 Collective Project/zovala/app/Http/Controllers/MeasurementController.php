<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Measurement;
class MeasurementController extends Controller
{
     //showing all measurements
     public function all(){
        //call the Measurement model
        $allMeasurements = Measurement::all()->toArray();

        //pass the data to the view file
    }

    //showing one measurement
    public function one(){}

    //showing the form to add a measurement
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

    //destroy a measurement from database
    public function delete(){
        echo 'delete';
    }
}
