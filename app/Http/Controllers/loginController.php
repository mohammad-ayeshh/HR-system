<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    

    public function login(Request $request)
    {
        // validate the inputs
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($validatedData)) {

            $user = Auth::user();
            //ask rakad
            //if($user->isAdmin()){
                if($user->is_admin){
                return redirect()->intended('admin/dashboard');
            }

            return redirect()->intended('dashboard');
        }

        return redirect('login')->with('error', 'Invalid email or password');
    }

    public function index()
    {
        //
    }

  
    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

   
    
    
    public function show($id)
    {
        //
    }

    
    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
