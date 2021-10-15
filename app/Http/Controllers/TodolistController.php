<?php

namespace App\Http\Controllers;

use App\Models\todolist;
use Illuminate\Http\Request;

class TodolistController extends Controller
{
   public function showAllData(){
    return view('fetchedData')->with('TodoArr',todolist::all());
   }
}
