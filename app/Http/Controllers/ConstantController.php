<?php

namespace App\Http\Controllers;

use App\Constant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConstantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $constants = Constant::all()->toArray();
        // return view('constants.index', compact('constants'));
        $constants = Constant::all();
        return view('constants.index', ['constants'=>$constants]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('constants.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $constant = $this->validate(request(), [
          'name' => 'required',
          'value' => 'required|numeric'
        ]);
        
        Constant::create($constant);

        return back()->with('success', 'Constant has been added');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Constant  $constant
     * @return \Illuminate\Http\Response
     */
    public function show($constant)
    {
        $oneconstant = Constant::find($constant);
        return view('constants.show', ['oneconstant'=>$oneconstant]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Constant  $constant
     * @return \Illuminate\Http\Response
     */
    public function edit($constant)
    {
        $constant = Constant::find($constant);
        return view('constants.edit',compact('constant','constant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Constant  $constant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $constant)
    {
        $constant = Constant::find($constant);
        $this->validate(request(), [
          'name' => 'required',
          'value' => 'required|numeric'
        ]);
        $constant->name = $request->get('name');
        $constant->value = $request->get('value');
        $constant->save();
        return redirect('constants')->with('success','Constant has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Constant  $constant
     * @return \Illuminate\Http\Response
     */
    public function destroy($constant)
    {
        $constant = Constant::find($constant);
        $constant->delete();
        return redirect('constants')->with('success','Constant has been  deleted');
    }
}
