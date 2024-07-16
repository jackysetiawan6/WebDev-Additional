<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        App::setLocale(session()->get('language', 'en'));
        return view('home');
    }

    public function changeLanguage($language)
    {
        session()->put('language', $language);
        App::setLocale($language);
        return view('home');
    }

    public function register(Request $request)
    {
        if (!$request->has('name') || $request->input('name') == '') {
            return back()->withErrors(['name' => 'name_required']);
        }
        if (!preg_match('/^[a-zA-Z ]+$/', $request->input('name'))) {
            return back()->withErrors(['name' => 'name_only_letters']);
        }
        if (strlen($request->input('name')) > 255) {
            return back()->withErrors(['name' => 'name_max_length']);
        }
        if (!$request->has('email') || $request->input('email') == '') {
            return back()->withErrors(['email' => 'email_required']);
        }
        if (!filter_var($request->input('email'), FILTER_VALIDATE_EMAIL)) {
            return back()->withErrors(['email' => 'email_invalid']);
        }
        if (strlen($request->input('email')) > 255) {
            return back()->withErrors(['email' => 'email_max_length']);
        }
        if (!$request->has('password') || $request->input('password') == '') {
            return back()->withErrors(['password' => 'password_required']);
        }
        if (strlen($request->input('password')) < 8) {
            return back()->withErrors(['password' => 'password_min_length']);
        }
        if (!$request->has('password_confirmation') || $request->input('password_confirmation') == '') {
            return back()->withErrors(['password_confirmation' => 'password_confirmation_required']);
        }
        if ($request->input('password') != $request->input('password_confirmation')) {
            return back()->withErrors(['password_confirmation' => 'password_confirmation_mismatch']);
        }
        return redirect()->route('home');
    }
}
