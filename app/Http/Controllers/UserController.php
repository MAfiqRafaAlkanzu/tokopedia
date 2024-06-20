<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('desktop.auth.login', [
            'title' => 'Login',
        ]);
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'email' =>'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($data)) {
            return redirect()->route('dashboard.index')->with('success', 'You have successfully logged in!');
        } else {
            $request->session()->flash('error', 'Email or Password is Incorrect ');
            return redirect()->route('login.index');
        }
    }

    public function create()
    {
        return view('desktop.auth.register', [
            'title' => 'Register',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' =>'required|string|unique:users',
            'password' =>'required|string|min:8|confirmed',
        ]);

        $user = User::create($data);

        if (Auth::attempt($data) && $user) {
            return redirect()->route('dashboard.index')->with('success', 'You have successfully registered!');
        } else {
            return redirect()->route('register.index');
        }

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
