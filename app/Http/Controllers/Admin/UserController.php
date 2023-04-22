<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function home()
    {
        $data['title'] = 'Dev';
        return view('home', $data);
    }

    public function index()
    {
        $data['title'] = 'Home';
        return view('admin.dashboard', $data);
    }

    public function register()
    {
        $data['title'] = 'Register';
        return view('admin.auth.register', $data);
    }

    public function register_auth(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required | email',
            'password' => 'required',
            'password_confirm' => 'required|same:password',

        ]);

        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),

        ]);

        $user->save();

        return redirect()->route('admin.dashboard')->with('success', 'Registration success. Please login!');
    }


    public function login()
    {
        $data['title'] = 'Login';
        return view('admin.auth.login', $data);
    }

    public function login_auth(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);
        
        if (Auth::attempt(['name' => $request->name, 'password' => $request->password])) {
                $request->session()->regenerate();
                return redirect()->route('index');
        }

        return back()->withErrors([
            'password' => 'Wrong username or password',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin/login');
    }
}
