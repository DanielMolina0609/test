<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;


class VueJSController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vuejs-form');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'pass' => 'required'
        ]);


        return response()->json(['success'=>'Done!']);
    }
}