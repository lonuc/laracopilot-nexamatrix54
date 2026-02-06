<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\Service;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $carousels = Carousel::where('active', true)
            ->orderBy('order')
            ->get();
        
        $featuredServices = Service::where('active', true)
            ->orderBy('created_at', 'desc')
            ->take(6)
            ->get();
        
        $portfolioItems = Portfolio::orderBy('created_at', 'desc')
            ->take(6)
            ->get();
        
        $testimonials = [
            ['name' => 'Kofi Mensah', 'company' => 'AfriTech Solutions', 'text' => 'BUSIDIG a transformé notre image de marque. Un service impeccable, des designs exceptionnels et un accompagnement professionnel du début à la fin!', 'rating' => 5],
            ['name' => 'Amina Diallo', 'company' => 'BioNature Cosmetics', 'text' => 'Le packaging créé par BUSIDIG a considérablement augmenté nos ventes. Nos produits se démarquent vraiment en rayon maintenant!', 'rating' => 5],
            ['name' => 'Jean-Baptiste Kouassi', 'company' => 'TastyBites Restaurant', 'text' => 'Une équipe à l\'écoute et créative. Ils ont parfaitement compris notre vision et l\'ont transformée en une identité visuelle moderne et attrayante.', 'rating' => 5],
            ['name' => 'Fatou Ndiaye', 'company' => 'EcoFashion Boutique', 'text' => 'Rapides, professionnels et avec des prix très compétitifs. Je recommande vivement leurs services à tous les entrepreneurs!', 'rating' => 5],
            ['name' => 'David Asante', 'company' => 'AgriPro Exports', 'text' => 'Le meilleur investissement que nous ayons fait pour notre entreprise. Le nouveau packaging a doublé notre reconnaissance de marque!', 'rating' => 5],
            ['name' => 'Marie Koffi', 'company' => 'UrbanStyle Fashion', 'text' => 'Des créations uniques et un service client exceptionnel. BUSIDIG comprend vraiment les besoins des entreprises africaines!', 'rating' => 5],
        ];
        
        return view('welcome', compact('carousels', 'featuredServices', 'portfolioItems', 'testimonials'));
    }
}