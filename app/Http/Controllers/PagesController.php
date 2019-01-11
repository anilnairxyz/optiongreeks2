<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){ 
        $title = 'Option Price';
        return view('pages.index')->with('title', $title);
    }

    public function iv(){ 
        $title = 'Implied Volatility';
        return view('pages.iv')->with('title', $title);
    }

    public function payoff(){ 
        $title = 'Payoff';
        return view('pages.payoff')->with('title', $title);
    }

    public function compare(){ 
        $title = 'Compare';
        return view('pages.compare')->with('title', $title);
    }
}
