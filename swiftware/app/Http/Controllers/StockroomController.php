<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stockroom;

class StockroomController extends Controller
{
    public function index(){
        
        $stockrooms = Stockroom::all();

        return view('stockroom.stockrooms', ['stockrooms' => $stockrooms]);
    }

    public function show($id){

        $stockroom = Stockroom::findOrFail($id);

        return view('stockroom.perstockroom', ['stockroom'=> $stockroom]);
    }

    public function create(){
        return view('stockroom.create');
    }

}
