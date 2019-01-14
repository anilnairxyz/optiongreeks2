<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function render(Request $request) { 
		$iscall = $request->input('optiontype') == 'Call' ? true : false;
		$isput = !$iscall;
        $request->session()->put('iscall', $iscall);
        $request->session()->put('isput', $isput);
        $ulprice = $request->input('ulprice');
        $request->session()->put('ulprice', $ulprice);
        $days = $request->input('days');
        $request->session()->put('days', $days);
        $rfrate = $request->input('rfrate');
        $request->session()->put('rfrate', $rfrate);
        $divrate = $request->input('divrate');
        $request->session()->put('divrate', $divrate);
        $volatility = $request->input('volatility');
        $request->session()->put('volatility', $volatility);
        return redirect()->back();
    }
}
