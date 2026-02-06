<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Carousel;

class CarouselSeeder extends Seeder
{
    public function run()
    {
        $carousels = [
            [
                'title' => 'Solutions de Branding Premium',
                'description' => 'Créez une identité visuelle unique qui démarque votre entreprise',
                'button_text' => 'Découvrir',
                'button_link' => '/services',
                'order' => 1,
                'active' => true
            ],
            [
                'title' => 'Packaging Personnalisé',
                'description' => 'Des emballages qui racontent l\'histoire de votre marque',
                'button_text' => 'Commander',
                'button_link' => '/services',
                'order' => 2,
                'active' => true
            ],
            [
                'title' => 'Qualité & Innovation',
                'description' => 'Plus de 500 clients satisfaits nous font confiance',
                'button_text' => 'Contactez-nous',
                'button_link' => '/contact',
                'order' => 3,
                'active' => true
            ],
        ];
        
        foreach ($carousels as $carousel) {
            Carousel::create($carousel);
        }
    }
}