<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
class OrderController extends Controller
{
     //showing all orders
     public function all(){
        //call the Order model
        $allOrders = Order::all()->toArray();

        //pass the data to the view file
    }

    //showing one order
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

    //destroy a order from database
    public function delete(){
        echo 'delete';
    }
}
