<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Share

class ShareController extends Controller
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
        return view('shares.create');
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

	$prefix = $request->get('prefix');
	$suffix = $request->get('suffix');
	$numunit = $request->get('numunit');
	for($i = 0; $i <= $numunit; $i++ ){
	  $current_num = $numunit + $i;	
          $share = new Share([
                'prefix' => $prefix,
                'suffix'=> $i,
		'numunit'=> $current_num,
		'combined'=> $prefix . $current_num
          ]);
          $share->save();
	}

	$share = new Share([
                'prefix' => $prefix,
                'suffix'=> $i,
                'numunit'=> $numunit,
                'combined'=> ""
          ]);
          $share->save();


      return redirect('/shares/create')->with('success', 'Item Added');
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
