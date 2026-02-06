<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        $services = [
            [
                'name' => 'Boîtes en carton personnalisées',
                'category' => 'packaging',
                'description' => 'Boîtes en carton sur mesure avec impression personnalisée, idéales pour produits cosmétiques, alimentaires ou cadeaux. Options écologiques disponibles.',
                'base_price' => 2.50,
                'active' => true
            ],
            [
                'name' => 'Sacs kraft personnalisés',
                'category' => 'packaging',
                'description' => 'Sacs en papier kraft écologique avec poignées renforcées. Impression logo et personnalisation complète. Parfait pour boutiques et événements.',
                'base_price' => 0.80,
                'active' => true
            ],
            [
                'name' => 'Étiquettes autocollantes',
                'category' => 'packaging',
                'description' => 'Étiquettes adhésives de qualité professionnelle pour produits, emballages ou événements. Formats variés, impression couleur haute définition.',
                'base_price' => 0.15,
                'active' => true
            ],
            [
                'name' => 'Rubans et finitions premium',
                'category' => 'packaging',
                'description' => 'Rubans satinés, dorés ou personnalisés pour sublimer vos emballages. Options de gaufrage et impression métallique disponibles.',
                'base_price' => 1.20,
                'active' => true
            ],
            [
                'name' => 'Création de logo professionnel',
                'category' => 'branding',
                'description' => 'Conception de logo unique et mémorable pour votre entreprise. 3 propositions initiales, révisions illimitées, fichiers vectoriels fournis.',
                'base_price' => 450.00,
                'active' => true
            ],
            [
                'name' => 'Cartes de visite premium',
                'category' => 'branding',
                'description' => 'Cartes de visite haut de gamme avec finitions spéciales: vernis sélectif, dorure, papier texturé. Design professionnel inclus.',
                'base_price' => 85.00,
                'active' => true
            ],
            [
                'name' => 'Charte graphique complète',
                'category' => 'branding',
                'description' => 'Guide de style complet pour votre marque: logo, couleurs, typographies, applications. Document PDF et fichiers sources fournis.',
                'base_price' => 1200.00,
                'active' => true
            ],
            [
                'name' => 'Papier à en-tête et documents',
                'category' => 'branding',
                'description' => 'Papier à en-tête, enveloppes et tampons personnalisés aux couleurs de votre entreprise. Renforce votre identité professionnelle.',
                'base_price' => 120.00,
                'active' => true
            ],
            [
                'name' => 'Packaging alimentaire écologique',
                'category' => 'packaging',
                'description' => 'Emballages biodégradables et compostables pour restaurants et traiteurs. Conformes normes alimentaires, personnalisables.',
                'base_price' => 1.80,
                'active' => true
            ],
            [
                'name' => 'Kit identité visuelle startup',
                'category' => 'branding',
                'description' => 'Pack complet pour startups: logo, carte de visite, signature email, templates réseaux sociaux. Livraison rapide sous 7 jours.',
                'base_price' => 750.00,
                'active' => true
            ],
            [
                'name' => 'Impression sur textile',
                'category' => 'packaging',
                'description' => 'Sérigraphie et broderie sur textiles: t-shirts, tote bags, tabliers. Idéal pour merchandising et événements.',
                'base_price' => 8.50,
                'active' => true
            ],
            [
                'name' => 'Design de packaging luxe',
                'category' => 'branding',
                'description' => 'Conception de packaging haut de gamme pour produits premium. Inclut prototypes, choix matériaux et suivi production.',
                'base_price' => 2500.00,
                'active' => true
            ],
            [
                'name' => 'Coffrets cadeaux personnalisés',
                'category' => 'packaging',
                'description' => 'Coffrets élégants avec options de personnalisation complète. Parfait pour cadeaux d\'entreprise et collections spéciales.',
                'base_price' => 5.50,
                'active' => true
            ],
            [
                'name' => 'Étiquettes vêtements tissées',
                'category' => 'packaging',
                'description' => 'Étiquettes tissées de qualité pour vêtements et accessoires. Logo brodé, résistant aux lavages multiples.',
                'base_price' => 0.35,
                'active' => true
            ],
            [
                'name' => 'Branding réseaux sociaux',
                'category' => 'branding',
                'description' => 'Templates professionnels pour Facebook, Instagram, LinkedIn. Posts, stories, bannières cohérentes avec votre identité.',
                'base_price' => 350.00,
                'active' => true
            ],
            [
                'name' => 'Pochettes et enveloppes custom',
                'category' => 'packaging',
                'description' => 'Pochettes et enveloppes personnalisées pour envois professionnels. Plusieurs formats et finitions disponibles.',
                'base_price' => 0.45,
                'active' => true
            ],
            [
                'name' => 'Signalétique entreprise',
                'category' => 'branding',
                'description' => 'Panneaux, enseignes et signalétique intérieure/extérieure. Installation possible selon localisation.',
                'base_price' => 650.00,
                'active' => true
            ],
            [
                'name' => 'Catalogue et brochure',
                'category' => 'branding',
                'description' => 'Design et impression de catalogues produits ou brochures commerciales. Mise en page professionnelle incluse.',
                'base_price' => 450.00,
                'active' => true
            ],
            [
                'name' => 'Emballages luxe bijouterie',
                'category' => 'packaging',
                'description' => 'Écrins et pochettes premium pour bijouterie. Finitions velours, satin, avec options de gaufrage.',
                'base_price' => 3.80,
                'active' => true
            ],
            [
                'name' => 'Refonte identité visuelle',
                'category' => 'branding',
                'description' => 'Modernisation complète de votre identité de marque. Analyse existant, nouvelles propositions, transition guidée.',
                'base_price' => 1800.00,
                'active' => true
            ]
        ];
        
        foreach ($services as $service) {
            Service::create($service);
        }
    }
}