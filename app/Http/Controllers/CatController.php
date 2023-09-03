<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Livewire\Livewire;

class CatController extends Controller
{
    public function index(){
        return view('livewire.categories-list');
    } 
}
