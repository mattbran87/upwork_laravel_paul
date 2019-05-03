<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paul;

class PaulController extends Controller
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
        return view('paul.create');
    }

    public static function insert_multiple(Request $request) {
        $prefix = $request->get('prefix');
        $suffix = $request->get('suffix');
        $numunit = $request->get('numunit');
        for($i = 0; $i < $numunit; $i++ ){
          $new_suffix = $suffix + $i;
          $new_value = $prefix.strval($new_suffix);
          $item = new Paul([
                'combined' => $new_value
          ]);
          $item->save();
        }
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

	 PaulController::insert_multiple($request);

	return redirect('/paul')->with('success', 'Items have been added');
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
