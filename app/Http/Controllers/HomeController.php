<?php

namespace App\Http\Controllers;


use App\User;
use App\Model\Gig;
use App\Model\Invoice;
use App\Model\Service;
use App\Model\ApplyGig;
use Illuminate\Http\Request;

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
    public function index()
    {

        return view('pages.home');
    }
}
