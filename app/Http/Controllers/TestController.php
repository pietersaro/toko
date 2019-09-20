<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class TestController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        
        return view('welcome');
    }

}
