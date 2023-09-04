<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use DB;
use App\Models\danhmuc;
class HomeController extends Controller
{
    /**
   * return home page.
   *
   * @return View
   */
    public function index(): View{
        return view('home');
    }
}
