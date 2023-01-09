<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
class PhotoController extends Controller
{
     //showing all photos
     public function all(){
        //call the Photo model
        $allPhotos = Photo::all()->toArray();

        //pass the data to the view file
    }

    //showing one photo
    public function one(){}

    //showing the form to add a photo
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

    //destroy a photo from database
    public function delete(){
        echo 'delete';
    }
}
