<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sales;
use App\Models\Vietos;
use Illuminate\Support\Facades\DB;
use App\Models\Pastatas;
use App\Models\User;

class VietosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    
        $vietos=Vietos::all();
        return view('FilmoSale',compact('vietos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function show($id, Request $request)
{
    $sale=Sales::find($id);
    $vietos=$sale->vietos;
    $is_admin=session()->get('user')['is_admin'];
    $cinemaId = $sale->id; // assuming the Sale model has an 'id' property
    return view('FilmoSale',compact('vietos','is_admin', 'cinemaId'));
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
    public function reserveSeat(Request $request, $cinemaId)
    {
        // Check if the reserveButton has been pressed
        if ($request->has('reserveButton')) {
            // Get the selected seat ID
            $selectedId = $request->input('selectedId');
    
            // Update the reserved column of the corresponding row in the seats table
            DB::table('vietos')
                ->where('id', $selectedId)
                ->update(['uzimta' => 1]);
        
        }
         return redirect('/filmosale/'.$cinemaId);
    }
}
