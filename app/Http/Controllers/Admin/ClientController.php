<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        
        $clients = Client::withCount('orders')
            ->orderBy('created_at', 'desc')
            ->paginate(15);
        
        return view('admin.clients.index', compact('clients'));
    }
    
    public function create()
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        
        return view('admin.clients.create');
    }
    
    public function store(Request $request)
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        
        $validated = $request->validate([
            'company_name' => 'required|string|max:255',
            'contact_name' => 'required|string|max:255',
            'email' => 'required|email|unique:clients,email',
            'phone' => 'required|string|max:20',
            'address' => 'nullable|string',
            'city' => 'nullable|string|max:100',
            'country' => 'nullable|string|max:100',
            'client_type' => 'required|in:pme,startup,boutique,createur'
        ]);
        
        Client::create($validated);
        
        return redirect()->route('admin.clients.index')
            ->with('success', 'Client créé avec succès!');
    }
    
    public function show($id)
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        
        $client = Client::with('orders.service')->findOrFail($id);
        
        return view('admin.clients.show', compact('client'));
    }
    
    public function edit($id)
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        
        $client = Client::findOrFail($id);
        
        return view('admin.clients.edit', compact('client'));
    }
    
    public function update(Request $request, $id)
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        
        $validated = $request->validate([
            'company_name' => 'required|string|max:255',
            'contact_name' => 'required|string|max:255',
            'email' => 'required|email|unique:clients,email,' . $id,
            'phone' => 'required|string|max:20',
            'address' => 'nullable|string',
            'city' => 'nullable|string|max:100',
            'country' => 'nullable|string|max:100',
            'client_type' => 'required|in:pme,startup,boutique,createur'
        ]);
        
        $client = Client::findOrFail($id);
        $client->update($validated);
        
        return redirect()->route('admin.clients.index')
            ->with('success', 'Client mis à jour avec succès!');
    }
    
    public function destroy($id)
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        
        $client = Client::findOrFail($id);
        $client->delete();
        
        return redirect()->route('admin.clients.index')
            ->with('success', 'Client supprimé avec succès!');
    }
}