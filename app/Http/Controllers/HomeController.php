<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laratrust\LaratrustFacade as Laratrust;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Laratrust::hasRole('admin')) return $this->adminDashboard();
        if (Laratrust::hasRole('member')) return $this->memberDashboard();
        if (Laratrust::hasRole('perusahaan')) return $this->perusahaanDashboard();
        return view('home');
    }

    protected function adminDashboard()
    {
        return view('dashboard.admin');
    }

    protected function memberDashboard()
    {
        return view('dashboard.member');
    }

    protected function perusahaanDashboard()
    {
        return view('dashboard.perusahaan');
    }
}
