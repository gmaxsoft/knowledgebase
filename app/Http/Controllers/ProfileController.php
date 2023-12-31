<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('profile.index');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'confirm_password' => 'required_with:password|same:password',
            'avatar' => 'image',
        ]);
  
        $input = $request->all();
          
        if ($request->hasFile('avatar')) {
            $avatarName = time().'.'.$request->avatar->getClientOriginalExtension();
            $request->avatar->move(public_path('avatars'), $avatarName);
  
            $input['avatar'] = $avatarName;
        
        } else {
            unset($input['avatar']);
        }
  
        if ($request->filled('password')) {
            $input['password'] = Hash::make($input['password']);
        } else {
            unset($input['password']);
        }
  
        auth()->user()->update($input);
    
        return back()->with('success', 'Profile updated successfully.');
    }
}