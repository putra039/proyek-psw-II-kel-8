<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserEditController extends Controller
{
    public function index(){
        return view('pages.web.user.main');
    }
}
