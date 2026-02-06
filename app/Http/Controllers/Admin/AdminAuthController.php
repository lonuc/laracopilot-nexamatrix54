<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    public function showLogin()
    {
        if (session('admin_logged_in')) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = [
            'admin@busidig.com' => 'admin123',
            'manager@busidig.com' => 'manager123',
            'supervisor@busidig.com' => 'supervisor123'
        ];
        
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        if (isset($credentials[$request->email]) && 
            $credentials[$request->email] === $request->password) {
            session([
                'admin_logged_in' => true,
                'admin_user' => explode('@', $request->email)[0],
                'admin_email' => $request->email
            ]);
            return redirect()->route('admin.dashboard');
        }
        
        return back()->withErrors(['email' => 'Identifiants invalides'])->withInput();
    }

    public function logout()
    {
        session()->forget(['admin_logged_in', 'admin_user', 'admin_email']);
        return redirect()->route('admin.login');
    }
}