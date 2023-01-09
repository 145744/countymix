<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
class PaymentController extends Controller
{
     //showing all payments
     public function all(){
        //call the Payment model
        $allPayments = Payment::all()->toArray();

        //pass the data to the view file
    }

    //showing one Payment
    public function one(){}

    //showing the form to add a Payment
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

    //destroy a Payment from database
    public function delete(){
        echo 'delete';
    }
}
