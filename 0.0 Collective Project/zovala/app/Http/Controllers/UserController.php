<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
     //showing all users
     public function all(){
        //call the User model
        $allUsers = User::all()->toArray();

        //pass the data to the view file
    }

    //showing one user
    public function one(){}

    //showing the form to add a user
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

    //destroy a user from database
    public function delete(){
        echo 'delete';
    }
}
