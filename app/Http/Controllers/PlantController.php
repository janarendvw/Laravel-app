<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plant;
class PlantController extends Controller
{
    function index(){
        $plants = Plant::all();
        return view('plants', ['plants' => $plants]);
    }
}
