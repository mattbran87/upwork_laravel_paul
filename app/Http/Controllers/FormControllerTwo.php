<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;

class FormControllerTwo extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'prefix'=>'required',
        'suffix'=> 'required|integer',
        'numunit' => 'required|integer'
      ]);

	$suffix = $request->get('suffix');
	for($i = 0; $i <= $suffix; $i++ ){
	  $share = new Form([
        	'prefix' => $request->get('prefix'),
        	'suffix'=> $i,
        	'numunit'=> $request->get('numunit')
	  ]);
	  $share->save();
	}

      $share = new Form([
        'prefix' => $request->get('prefix'),
        'suffix'=> $request->get('suffix'),
        'numunit'=> $request->get('numunit')
      ]);
      $share->save();
      return redirect('/form/create')->with('success', 'Item Added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
