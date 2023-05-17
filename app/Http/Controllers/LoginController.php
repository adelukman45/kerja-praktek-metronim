<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //

    public function index()
    {
        return view('login.index', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Login failed!');
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }

    public function dashboard()
    {
        $id = auth()->user()->id;
        $user = User::where('id', $id)->first();
        return view('dashboard.index', [
            'user' => $user
        ]);
    }

    public function edit(Request $request, $id)
    {
        $user = User::where('id', $id)->first();
        if (Hash::check($request->password, $user->password)) {
            $rules = [
                'name' => 'max:255',
                'email' => 'max:255',
                'contact' => 'max:255',
                'address' => 'max:255',
            ];

            $validatedData = $request->validate($rules);
            User::where('id', $user->id)
                ->update($validatedData);

            return redirect('dashboard/')->with('success', 'Data has been update!');
        } else {
            return redirect('dashboard/')->with('danger', 'Wrong Password!');
        }
    }

    public function editpassword(Request $request, $id)
    {
        $user = User::where('id', $id)->first();
        if (Hash::check($request->passwordlama, $user->password)) {
            $validatedData = $request->validate([
                'password' => 'required',
            ]);

            $validatedData['password'] = Hash::make($validatedData['password']);

            User::where('id', $user->id)
                ->update($validatedData);

            return redirect('dashboard/')->with('success', 'Password berhasil diubah!');
        } else {
            return redirect('dashboard/')->with('danger', 'Wrong Password!');
        }
    }
}
