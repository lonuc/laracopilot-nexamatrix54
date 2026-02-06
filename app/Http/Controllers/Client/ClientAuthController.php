<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClientAuthController extends Controller
{
    public function showLogin()
    {
        if (session('client_logged_in')) {
            return redirect()->route('client.dashboard');
        }
        return view('client.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        $client = Client::where('email', $request->email)->first();
        
        if ($client && Hash::check($request->password, $client->password)) {
            session([
                'client_logged_in' => true,
                'client_id' => $client->id,
                'client_name' => $client->contact_name,
                'client_email' => $client->email,
                'client_company' => $client->company_name
            ]);
            return redirect()->route('client.dashboard');
        }
        
        return back()->withErrors(['email' => 'Identifiants invalides'])->withInput();
    }
    
    public function showRegister()
    {
        if (session('client_logged_in')) {
            return redirect()->route('client.dashboard');
        }
        return view('client.register');
    }
    
    public function register(Request $request)
    {
        $validated = $request->validate([
            'company_name' => 'required|string|max:255',
            'contact_name' => 'required|string|max:255',
            'email' => 'required|email|unique:clients,email',
            'phone' => 'required|string|max:20',
            'password' => 'required|min:6|confirmed',
            'address' => 'nullable|string',
            'city' => 'nullable|string|max:100',
            'country' => 'nullable|string|max:100',
            'client_type' => 'required|in:pme,startup,boutique,createur'
        ]);
        
        $validated['password'] = Hash::make($validated['password']);
        
        $client = Client::create($validated);
        
        session([
            'client_logged_in' => true,
            'client_id' => $client->id,
            'client_name' => $client->contact_name,
            'client_email' => $client->email,
            'client_company' => $client->company_name
        ]);
        
        return redirect()->route('client.dashboard')
            ->with('success', 'Compte créé avec succès! Bienvenue sur BUSIDIG.');
    }

    public function logout()
    {
        session()->forget(['client_logged_in', 'client_id', 'client_name', 'client_email', 'client_company']);
        return redirect()->route('client.login');
    }
}