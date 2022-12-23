<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;
class RatingController extends Controller
{
     //showing all ratings
     public function all(){
        //call the Rating model
        $allRatings = Rating::all()->toArray();

        //pass the data to the view file
    }

    //showing one rating
    public function one(){}

    //showing the form to add a rating
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

    //destroy a rating from database
    public function delete(){
        echo 'delete';
    }
}
