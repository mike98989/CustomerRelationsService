<?php

namespace App\Http\Controllers;

use App\Models\Ratings;
use Illuminate\Http\Request;

class RatingsController extends Controller
{
    public function index(){
        return Ratings::all();
    }

    

    public function show($id){
        return Ratings::find($id);
    }
}
