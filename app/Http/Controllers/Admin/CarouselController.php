<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarouselController extends Controller
{
    public function index()
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        
        $carousels = Carousel::orderBy('order')->paginate(10);
        return view('admin.carousel.index', compact('carousels'));
    }
    
    public function create()
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        
        return view('admin.carousel.create');
    }
    
    public function store(Request $request)
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:5120',
            'button_text' => 'nullable|string|max:100',
            'button_link' => 'nullable|string|max:255',
            'order' => 'required|integer',
            'active' => 'boolean'
        ]);
        
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('carousel', 'public');
            $validated['image_path'] = $imagePath;
        }
        
        $validated['active'] = $request->has('active');
        
        Carousel::create($validated);
        
        return redirect()->route('admin.carousel.index')->with('success', 'Slide ajouté au carrousel!');
    }
    
    public function edit($id)
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        
        $carousel = Carousel::findOrFail($id);
        return view('admin.carousel.edit', compact('carousel'));
    }
    
    public function update(Request $request, $id)
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        
        $carousel = Carousel::findOrFail($id);
        
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:5120',
            'button_text' => 'nullable|string|max:100',
            'button_link' => 'nullable|string|max:255',
            'order' => 'required|integer',
            'active' => 'boolean'
        ]);
        
        if ($request->hasFile('image')) {
            if ($carousel->image_path) {
                Storage::disk('public')->delete($carousel->image_path);
            }
            $imagePath = $request->file('image')->store('carousel', 'public');
            $validated['image_path'] = $imagePath;
        }
        
        $validated['active'] = $request->has('active');
        
        $carousel->update($validated);
        
        return redirect()->route('admin.carousel.index')->with('success', 'Slide mis à jour!');
    }
    
    public function destroy($id)
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        
        $carousel = Carousel::findOrFail($id);
        
        if ($carousel->image_path) {
            Storage::disk('public')->delete($carousel->image_path);
        }
        
        $carousel->delete();
        
        return redirect()->route('admin.carousel.index')->with('success', 'Slide supprimé!');
    }
}