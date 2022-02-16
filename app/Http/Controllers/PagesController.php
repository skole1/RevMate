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
        $users = User::all();
        return view('auth.listofregisteduser',['users'=>$users]);
    }

    public function forgotPassword()
    {
        return view('auth.forgot');
    }

    public function login(Request $request)
    {
        $request->validate([
            'phone' => 'required',
            'password' => 'required'
        ]);

        if(auth()->attempt(['phone' => $request->phone, 'password' => $request->password]))
        {
            return redirect()->route('dashboard');
        }
        else
        {
            return redirect()->back()->with('error','Invalid Credentials');
        }
    }

    public function createuser(Request $request)
    {
        $this->validate($request, [
            'psn_no' => 'required',
            'surname' => 'required',
            'firstname' => 'required',
            'category' => 'required',
            'phone' => 'required|unique:users',
            'roles' => 'required',
            'password' => 'required|confirmed'
        ]);

        User::create([
            'psn_no' => $request->psn_no,
            'surname' => $request->surname,
            'firstname' => $request->firstname,
            'category' => $request->category,
            'phone' => $request->phone,
            'roles' => $request->roles,
            'password' => bcrypt($request->password)
        ]);

        session()->flash('success', 'User Created Successfully');
        return redirect()->route('listofUsers');

        // $user = new User;
        // $user->psn_no = $request->psn_no;
        // $user->surname = $request->surname;
        // $user->firstname = $request->firstname;
        // $user->category = $request->category;
        // $user->phone = $request->phone;
        // $user->roles = $request->roles;
        // $user->password = bcrypt($request->password);
        // $user->save();
        // return redirect('register')->with('success', 'User Created Successfully');
    }

    public function wallet()
    {
        return view('pages.wallet');
    }

    public function report()
    {
        return view('pages.report');
    }

    public function profile()
    {
        return view('pages.profile');
    }

    public function setting()
    {
        return view('pages.setting');
    }

    public function slip()
    {
        return view('pages.slip');
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/login');
    }
}

