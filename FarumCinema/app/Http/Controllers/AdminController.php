<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\DB;
use App\Models\Pastatas;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __invoke(Request $request)
    {

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {


    }
            
          function login(Request $req){
            $data = $req->input('username');
            $pass = $req->input('userpassword');
        $user = User::where('name', $data)->firstOrFail();
       
            if($user){
                
                $isAdmin = $user->is_admin;
         $credentials = ['name'=> $data, 'password'=>$pass];
                if($pass==$user->password){
                    $pastatai=Pastatas::all();
                    $req->session()->put('user', [
                        'name' => $data,
                        'is_admin' => $isAdmin
                    ]);
                    return view('Miestai', [
                        'user' => session('user')
                    ],compact('pastatai'));
                }else{
                    $error="Prisijungimas nepavyko";
                    return view('Login',compact('error'));
                }
            }
     }
     
     function logout(Request $req){
        session()->flush();
        $pastatai=Pastatas::all();
        return view('Miestai',compact('pastatai'));
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
    public function update(Request $request)
    {
        $cinemaId = $request->input('cinemaId');
        if ($request->has('Taip')) {
    
            $selectedId = $request->input('selectedId');
    
      
            DB::table('vietos')
                ->where('id', $selectedId)
                ->update(['uzimta' => 0]);
                return redirect('/filmosale/'.$cinemaId);
        }else{
            return redirect('/filmosale/'.$cinemaId);
        }

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
