<?php

namespace App\Http\Controllers;

use App\Check;
use Illuminate\Http\Request;

class CheckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $checks = Check::all();

        return view('checks.checks', compact('checks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $action = 'CheckController@store';
        $method = 'POST';
       
        return view('checks.check-form')->with(['action' => $action, 'method' => $method]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $check = new Check();
        $check->user_id = $request->user_id;
        $check->schedule_id = $request->schedule_id;
        $check->checked_at = $request->checked_at;
        $check->status_id = $request->status_id;
        $check->scanner_id = $request->scanner_id;

        if($check->status_id == 1)
        {
            $check->regulated = 1;
        }
        else
        {
            $check->regulated = 0;
        }

        $check->save();
        
        return view('checks.check-create-confirmation')->with('check', $check);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Check  $check
     * @return \Illuminate\Http\Response
     */
    public function show(Check $check)
    {
        return view('checks.check')->with('check', $check);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Check  $check
     * @return \Illuminate\Http\Response
     */
    public function edit(Check $check)
    {
        $action = ['CheckController@update', $check];
        $method = 'PUT';
       
        return view('checks.check-form')->with(['action' => $action, 'method' => $method, 'check' => $check]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Check  $check
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Check $check)
    {
        $check->user_id = $request->user_id;
        $check->schedule_id = $request->schedule_id;
        $check->checked_at = $request->checked_at;
        $check->status_id = $request->status_id;
        $check->scanner_id = $request->scanner_id;

        if($check->status_id == 1)
        {
            $check->regulated = 1;
        }
        else
        {
            $check->regulated = 0;
        }

        $check->save();

        return view('checks.check-update-confirmation')->with('check', $check);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Check  $check
     * @return \Illuminate\Http\Response
     */
    public function destroy(Check $check)
    {
        $check->delete();

        return view('checks.check-delete-confirmation')->with('check', $check);
    }
}
