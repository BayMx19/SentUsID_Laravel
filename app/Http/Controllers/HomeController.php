<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(request $request)
    {
        if(Auth::attempt(['email'=>request('email'), 'password'=>request('password')])) {
            if (Auth::user()->user_role=='Admin') {
                return redirect('mitra.dashboard');
            }
            else if (Auth::user()->user_role=='User') {
                return redirect('user.dashboard');
            }
            else if (Auth::user()->user_role=='SuperAdmin') {
                return redirect('superadmin.dashboard');
            }
        }
    }
}
