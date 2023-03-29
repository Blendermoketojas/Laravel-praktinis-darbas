<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pastatas;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PastatasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pastatai=Pastatas::all();
     return view('Miestai',compact('pastatai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      
    }
    function cityAddfunc(Request $req){
        $pastatai=Pastatas::all();
        if ($req->has('addCity')) {
        $city = $req->input('pav');
        $foto = $req->input('fotoLink');
        DB::table('pastatas')->insert([
            'miestas' => $city,
            'foto_link' => $foto,
        ]);
        return view('Miestai',compact('pastatai'));
    }else{
        if($req->has("cancel")){
        return view('Miestai',compact('pastatai'));
        }
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
        //
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
