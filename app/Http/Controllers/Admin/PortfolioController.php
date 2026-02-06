<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index()
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        
        $portfolios = Portfolio::orderBy('created_at', 'desc')->paginate(12);
        
        return view('admin.portfolio.index', compact('portfolios'));
    }
    
    public function create()
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        
        return view('admin.portfolio.create');
    }
    
    public function store(Request $request)
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'client_name' => 'required|string|max:255',
            'category' => 'required|in:packaging,branding,both',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:5120',
            'featured' => 'boolean'
        ]);
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $imagePath = $image->storeAs('portfolio', $imageName, 'public');
            
            $validated['image_path'] = $imagePath;
            $validated['image_name'] = $imageName;
        }
        
        $validated['featured'] = $request->has('featured');
        
        Portfolio::create($validated);
        
        return redirect()->route('admin.portfolio.index')
            ->with('success', 'Réalisation ajoutée avec succès!');
    }
    
    public function edit($id)
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        
        $portfolio = Portfolio::findOrFail($id);
        
        return view('admin.portfolio.edit', compact('portfolio'));
    }
    
    public function update(Request $request, $id)
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'client_name' => 'required|string|max:255',
            'category' => 'required|in:packaging,branding,both',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
            'featured' => 'boolean'
        ]);
        
        $portfolio = Portfolio::findOrFail($id);
        
        if ($request->hasFile('image')) {
            // Delete old image
            if ($portfolio->image_path) {
                Storage::disk('public')->delete($portfolio->image_path);
            }
            
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $imagePath = $image->storeAs('portfolio', $imageName, 'public');
            
            $validated['image_path'] = $imagePath;
            $validated['image_name'] = $imageName;
        }
        
        $validated['featured'] = $request->has('featured');
        
        $portfolio->update($validated);
        
        return redirect()->route('admin.portfolio.index')
            ->with('success', 'Réalisation mise à jour avec succès!');
    }
    
    public function destroy($id)
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        
        $portfolio = Portfolio::findOrFail($id);
        
        // Delete image file
        if ($portfolio->image_path) {
            Storage::disk('public')->delete($portfolio->image_path);
        }
        
        $portfolio->delete();
        
        return redirect()->route('admin.portfolio.index')
            ->with('success', 'Réalisation supprimée avec succès!');
    }
}