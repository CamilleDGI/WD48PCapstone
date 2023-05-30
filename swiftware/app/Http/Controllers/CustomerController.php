<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Models\Customer;

class CustomerController extends Controller
{
    public function index(){
        
        $customers = [
            ['name' => 'ABC COMPANY', 'stockroom' => 'B-001'],
            ['name' => 'XYZ COMPANY', 'stockroom' => 'B-003'],
            ['name' => '123 COMPANY', 'stockroom' => 'B-004']
        ];

        //$customers = Customer::all();

        return view('customer.customers', ['customers' => $customers]);
    }

    public function create(){
        return view('customer.enroll');
    }
}
