<?php

namespace App\Http\Controllers\Authentication;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index(Request $req){
        return view('pages.authentication.login', []); 
    }
}
