<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showRegistration(){
        return view('register');
    }

    public function showLogin(){
        return view('login');
    }

    public function dashboard(){
        return view('backOffice.index');
    }

    public function showScrape(){
        return view('backOffice.scrapeOption');
    }

    public function showPromo(){
        return view('backOffice.listPromo');
    }

    public function showAkun(){
        return view('backOffice.listAkun');
    }

    public function verif(){
        return view('mail.verify');
    }
}
