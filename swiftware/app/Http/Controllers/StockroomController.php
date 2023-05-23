<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StockroomController extends Controller
{
    public function index(){
        
        $stockrooms = [
            ['stockroom_number' => 'B_001','status' => 'Active','customer' => 'ABC Company'],
            ['stockroom_number' => 'B_002','status' => 'Open','customer' => ''],
            ['stockroom_number' => 'B_003','status' => 'Active','customer' => 'XYZ Company'],
            ['stockroom_number' => 'B_004','status' => 'Open','customer' => ''],
            ['stockroom_number' => 'B_005','status' => 'Under Maintenance','customer' => ''],
            ['stockroom_number' => 'B_006','status' => 'Open','customer' => '']
        ];

            return view('stockrooms', ['stockrooms' => $stockrooms]);
    }

    public function show($stockroom_number){
        return view('perstockroom', ['stockroom_number'=> $stockroom_number]);
    }
}
