<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $featuredServices = Service::where('active', true)
            ->orderBy('created_at', 'desc')
            ->take(6)
            ->get();
        
        $featuredPortfolio = Portfolio::where('featured', true)
            ->orderBy('created_at', 'desc')
            ->take(6)
            ->get();
        
        $testimonials = [
            [
                'name' => 'Marie Kouadio',
                'company' => 'Boutique Élégance',
                'rating' => 5,
                'text' => 'BUSIDIG a transformé l\'image de ma boutique! Les packagings sont magnifiques et nos clients adorent. Service professionnel et livraison rapide. Je recommande vivement!'
            ],
            [
                'name' => 'Jean-Baptiste Mensah',
                'company' => 'Startup TechHub',
                'rating' => 5,
                'text' => 'Excellent travail sur notre branding complet! Logo, cartes de visite, tout était parfait. L\'équipe a compris notre vision et l\'a dépassée. Un grand merci!'
            ],
            [
                'name' => 'Aïcha Diallo',
                'company' => 'Bio & Nature',
                'rating' => 5,
                'text' => 'Nous cherchions des solutions écologiques pour nos emballages. BUSIDIG nous a proposé des options durables et esthétiques. Exactement ce qu\'il nous fallait!'
            ],
            [
                'name' => 'Patrick Ouattara',
                'company' => 'Restaurant Le Délice',
                'rating' => 5,
                'text' => 'Nos nouveaux menus et packagings pour la livraison sont superbes! Les clients complimentent toujours la présentation. Service client irréprochable!'
            ],
            [
                'name' => 'Fatou Bamba',
                'company' => 'Cosmétiques Afya',
                'rating' => 5,
                'text' => 'BUSIDIG a créé un packaging haut de gamme pour notre ligne de cosmétiques. Les boîtes sont élégantes et reflètent parfaitement notre marque premium. Bravo!'
            ],
            [
                'name' => 'Kofi Assem',
                'company' => 'Café des Arts',
                'rating' => 5,
                'text' => 'Processus simple et rapide! En quelques jours, nous avions nos nouveaux gobelets personnalisés et sacs en papier. Qualité au rendez-vous, prix compétitifs!'
            ]
        ];
        
        return view('welcome', compact('featuredServices', 'featuredPortfolio', 'testimonials'));
    }
}