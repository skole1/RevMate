<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function dashboard()
    {
        return view('pages.dashboard');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function listofUsers()
    {
        return view('auth.listofregisteduser');
    }

    public function forgotPassword()
    {
        return view('auth.forgot');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'phone' => 'required',
            'password' => 'required|min:6'
        ]);

        if (auth()->attempt(array('phone' => $request->phone, 'password' => $request->password))) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->back()->with('error', 'Wrong Phone Number or Password');
        }
    }

    public function createuser(Request $request)
    {
        $user = new User;
        $user->psn_no = $request->psn_no;
        $user->surname = $request->surname;
        $user->firstname = $request->firstname;
        $user->category = $request->category;
        $user->phone = $request->phone;
        $user->roles = $request->roles;
        $user->password = bcrypt(0000);
        $user->save();
        return redirect('register')->with('success', 'User Created Successfully');
    }
}

