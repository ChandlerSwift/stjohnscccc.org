<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class ChangePasswordController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showChangeForm()
    {
        return view('auth.changepassword');
    }

    public function change(Request $request)
    {
        if (!Hash::check($request->input('current_password'), Auth::user()->password))
            abort(400, "Your password does not match."); // TODO
        $this->validate($request, [
            'password' => 'required|confirmed|min:6',
        ]); // TODO: Show validation, token?
        Auth::user()->password = Hash::make($request->password);
        Auth::user()->save();
        return redirect('/admin');
    }
}
