<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
/*     public function __construct()
    {
        $this->middleware(['verified']);
    }
 */
    public function index()
    {
        return view('auth.user-profile');
    }
}
