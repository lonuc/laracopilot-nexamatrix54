@extends('layouts.app')

@section('content')
<div class="bg-gradient-to-r from-busidig-blue to-busidig-light-blue text-white py-16">
    <div class="max-w-4xl mx-auto px-4">
        <h1 class="text-5xl font-extrabold mb-4">Politique de Confidentialité</h1>
        <p class="text-lg">Dernière mise à jour: {{ date('d/m/Y') }}</p>
    </div>
</div>

<div class="max-w-4xl mx-auto px-4 py-12">
    <div class="prose prose-lg max-w-none">
        <section class="mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">1. Introduction</h2>
            <p class="text-gray-700 leading-relaxed mb-4">
                BUSIDIG ("nous", "notre" ou "nos") s'engage à protéger votre vie privée. Cette Politique de Confidentialité explique comment nous collectons, utilisons, divulguons et protégeons vos informations personnelles lorsque vous utilisez notre plateforme web de branding et packaging personnalisé.
            </p>
            <p class="text-gray-700 leading-relaxed">
                En utilisant notre site web, vous acceptez les pratiques décrites dans cette politique. Si vous n'acceptez pas ces conditions, veuillez ne pas utiliser notre plateforme.
            </p>
        </section>

        <section class="mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">2. Informations que nous collectons</h2>
            <h3 class="text-2xl font-bold text-gray-700 mb-3">2.1 Informations personnelles</h3>
            <p class="text-gray-700 leading-relaxed mb-4">Nous pouvons collecter les informations suivantes:</p>
            <ul class="list-disc pl-6 text-gray-700 space-y-2 mb-4">
                <li>Nom et prénom</li>
                <li>Nom de l'entreprise</li>
                <li>Adresse email</li>
                <li>Numéro de téléphone (WhatsApp)</li>
                <li>Adresse postale</li>
                <li>Informations de paiement</li>
            </ul>
            <h3 class="text-2xl font-bold text-gray-700 mb-3">2.2 Fichiers et contenus</h3>
            <p class="text-gray-700 leading-relaxed mb-4">
                Lorsque vous téléversez des fichiers (logos, designs, photos) pour vos commandes, nous conservons ces fichiers de manière sécurisée pour la réalisation de vos projets.
            </p>
        </section>

        <section class="mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">3. Utilisation des informations</h2>
            <p class="text-gray-700 leading-relaxed mb-4">Nous utilisons vos informations pour:</p>
            <ul class="list-disc pl-6 text-gray-700 space-y-2">
                <li>Traiter et gérer vos commandes</li>
                <li>Communiquer avec vous concernant vos projets</li>
                <li>Générer des devis personnalisés</li>
                <li>Envoyer des notifications par email ou WhatsApp</li>
                <li>Améliorer nos services et votre expérience utilisateur</li>
                <li>Vous informer de nos nouveaux services (avec votre consentement)</li>
            </ul>
        </section>

        <section class="mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">4. Protection des données</h2>
            <p class="text-gray-700 leading-relaxed mb-4">
                Nous mettons en œuvre des mesures de sécurité techniques et organisationnelles appropriées pour protéger vos données personnelles contre tout accès non autorisé, modification, divulgation ou destruction.
            </p>
            <p class="text-gray-700 leading-relaxed">
                Vos fichiers et informations sont stockés sur des serveurs sécurisés avec chiffrement SSL/TLS. Seuls les membres autorisés de notre équipe peuvent accéder à vos données pour traiter vos commandes.
            </p>
        </section>

        <section class="mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">5. Partage des informations</h2>
            <p class="text-gray-700 leading-relaxed mb-4">
                Nous ne vendons jamais vos données personnelles. Nous pouvons partager vos informations uniquement avec:
            </p>
            <ul class="list-disc pl-6 text-gray-700 space-y-2">
                <li>Nos partenaires de production (pour réaliser vos commandes)</li>
                <li>Les services de paiement sécurisés</li>
                <li>Les autorités légales si la loi l'exige</li>
            </ul>
        </section>

        <section class="mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">6. Vos droits</h2>
            <p class="text-gray-700 leading-relaxed mb-4">Vous disposez des droits suivants concernant vos données:</p>
            <ul class="list-disc pl-6 text-gray-700 space-y-2">
                <li><strong>Droit d'accès:</strong> Demander une copie de vos données</li>
                <li><strong>Droit de rectification:</strong> Corriger vos informations inexactes</li>
                <li><strong>Droit à l'effacement:</strong> Supprimer vos données personnelles</li>
                <li><strong>Droit d'opposition:</strong> Refuser certains traitements de données</li>
                <li><strong>Droit à la portabilité:</strong> Recevoir vos données dans un format structuré</li>
            </ul>
            <p class="text-gray-700 leading-relaxed mt-4">
                Pour exercer ces droits, contactez-nous à: <a href="mailto:busidigmark@gmail.com" class="text-busidig-orange font-semibold hover:underline">busidigmark@gmail.com</a>
            </p>
        </section>

        <section class="mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">7. Cookies et technologies similaires</h2>
            <p class="text-gray-700 leading-relaxed">
                Nous utilisons des cookies pour améliorer votre expérience de navigation, analyser le trafic du site et personnaliser le contenu. Vous pouvez gérer vos préférences de cookies dans les paramètres de votre navigateur.
            </p>
        </section>

        <section class="mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">8. Modifications de la politique</h2>
            <p class="text-gray-700 leading-relaxed">
                Nous nous réservons le droit de modifier cette Politique de Confidentialité à tout moment. Les modifications seront publiées sur cette page avec une date de mise à jour. Nous vous encourageons à consulter régulièrement cette page.
            </p>
        </section>

        <section class="mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">9. Contact</h2>
            <p class="text-gray-700 leading-relaxed mb-4">
                Pour toute question concernant cette Politique de Confidentialité, contactez-nous:
            </p>
            <div class="bg-gray-50 p-6 rounded-xl">
                <p class="text-gray-700 mb-2"><strong>Email:</strong> <a href="mailto:busidigmark@gmail.com" class="text-busidig-orange hover:underline">busidigmark@gmail.com</a></p>
                <p class="text-gray-700 mb-2"><strong>Téléphone/WhatsApp:</strong> <a href="tel:+22892943617" class="text-busidig-orange hover:underline">+228 92 94 36 17</a></p>
                <p class="text-gray-700"><strong>BUSIDIG</strong> - Branding & Packaging Professionnel</p>
            </div>
        </section>
    </div>
</div>
@endsection
