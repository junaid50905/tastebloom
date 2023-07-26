<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirects()
    {
        $usertype = Auth::user()->usertype;

        if ($usertype === '1') {
            return redirect()->to('/admin');
        }else{
            return redirect()->to('/');
        }
    }
}
