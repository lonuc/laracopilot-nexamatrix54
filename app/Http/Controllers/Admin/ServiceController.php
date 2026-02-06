<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        
        $services = Service::orderBy('created_at', 'desc')->paginate(12);
        
        return view('admin.services.index', compact('services'));
    }
    
    public function create()
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        
        return view('admin.services.create');
    }
    
    public function store(Request $request)
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|in:packaging,branding',
            'description' => 'required|string',
            'base_price' => 'required|numeric|min:0',
            'active' => 'boolean'
        ]);
        
        $validated['active'] = $request->has('active');
        
        Service::create($validated);
        
        return redirect()->route('admin.services.index')
            ->with('success', 'Service créé avec succès!');
    }
    
    public function edit($id)
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        
        $service = Service::findOrFail($id);
        
        return view('admin.services.edit', compact('service'));
    }
    
    public function update(Request $request, $id)
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|in:packaging,branding',
            'description' => 'required|string',
            'base_price' => 'required|numeric|min:0',
            'active' => 'boolean'
        ]);
        
        $validated['active'] = $request->has('active');
        
        $service = Service::findOrFail($id);
        $service->update($validated);
        
        return redirect()->route('admin.services.index')
            ->with('success', 'Service mis à jour avec succès!');
    }
    
    public function destroy($id)
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        
        $service = Service::findOrFail($id);
        $service->delete();
        
        return redirect()->route('admin.services.index')
            ->with('success', 'Service supprimé avec succès!');
    }
}