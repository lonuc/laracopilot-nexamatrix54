@extends('layouts.app')

@section('content')
<div class="bg-gradient-to-r from-busidig-blue to-busidig-light-blue text-white py-16">
    <div class="max-w-4xl mx-auto px-4">
        <h1 class="text-5xl font-extrabold mb-4">Conditions d'Utilisation</h1>
        <p class="text-lg">Dernière mise à jour: {{ date('d/m/Y') }}</p>
    </div>
</div>

<div class="max-w-4xl mx-auto px-4 py-12">
    <div class="prose prose-lg max-w-none">
        <section class="mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">1. Acceptation des conditions</h2>
            <p class="text-gray-700 leading-relaxed">
                En accédant et en utilisant la plateforme BUSIDIG, vous acceptez d'être lié par ces Conditions d'Utilisation. Si vous n'acceptez pas ces conditions, veuillez ne pas utiliser notre plateforme.
            </p>
        </section>

        <section class="mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">2. Description des services</h2>
            <p class="text-gray-700 leading-relaxed mb-4">
                BUSIDIG est une plateforme web professionnelle qui offre:
            </p>
            <ul class="list-disc pl-6 text-gray-700 space-y-2">
                <li>Services de packaging personnalisé (boîtes, sacs, étiquettes, finitions)</li>
                <li>Services de branding (logos, cartes de visite, chartes graphiques)</li>
                <li>Commande en ligne avec téléversement de fichiers</li>
                <li>Génération de devis automatisés</li>
                <li>Suivi de projets via espace client</li>
                <li>Solutions écologiques et durables</li>
            </ul>
        </section>

        <section class="mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">3. Compte utilisateur</h2>
            <h3 class="text-2xl font-bold text-gray-700 mb-3">3.1 Création de compte</h3>
            <p class="text-gray-700 leading-relaxed mb-4">
                Pour passer commande, vous devez fournir des informations exactes et à jour. Vous êtes responsable de la confidentialité de vos identifiants.
            </p>
            <h3 class="text-2xl font-bold text-gray-700 mb-3">3.2 Responsabilité du compte</h3>
            <p class="text-gray-700 leading-relaxed">
                Vous êtes responsable de toutes les activités effectuées sous votre compte. Informez-nous immédiatement de toute utilisation non autorisée.
            </p>
        </section>

        <section class="mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">4. Commandes et paiements</h2>
            <h3 class="text-2xl font-bold text-gray-700 mb-3">4.1 Processus de commande</h3>
            <p class="text-gray-700 leading-relaxed mb-4">
                Les commandes passées sur notre plateforme constituent une offre d'achat. Nous nous réservons le droit d'accepter ou de refuser toute commande.
            </p>
            <h3 class="text-2xl font-bold text-gray-700 mb-3">4.2 Prix et paiement</h3>
            <p class="text-gray-700 leading-relaxed mb-4">
                Tous les prix sont indiqués en euros (€) et incluent les taxes applicables. Le paiement doit être effectué au moment de la commande ou selon les modalités convenues.
            </p>
            <h3 class="text-2xl font-bold text-gray-700 mb-3">4.3 Devis</h3>
            <p class="text-gray-700 leading-relaxed">
                Les devis générés sont valables 30 jours. Les prix peuvent varier selon les spécifications du projet.
            </p>
        </section>

        <section class="mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">5. Droits de propriété intellectuelle</h2>
            <h3 class="text-2xl font-bold text-gray-700 mb-3">5.1 Vos contenus</h3>
            <p class="text-gray-700 leading-relaxed mb-4">
                Vous conservez tous les droits sur les fichiers et contenus que vous téléversez. En les soumettant, vous nous accordez une licence pour les utiliser afin de réaliser vos commandes.
            </p>
            <h3 class="text-2xl font-bold text-gray-700 mb-3">5.2 Nos créations</h3>
            <p class="text-gray-700 leading-relaxed">
                Une fois votre commande payée intégralement, vous recevez tous les droits sur les designs créés pour votre projet. Nous conservons le droit d'utiliser ces créations dans notre portfolio (sauf demande contraire).
            </p>
        </section>

        <section class="mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">6. Délais de livraison</h2>
            <p class="text-gray-700 leading-relaxed mb-4">
                Les délais de livraison indiqués sont estimatifs et dépendent de la complexité du projet. Nous nous engageons à respecter les délais convenus, mais ne pouvons être tenus responsables des retards dus à des circonstances indépendantes de notre volonté.
            </p>
        </section>

        <section class="mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">7. Révisions et modifications</h2>
            <p class="text-gray-700 leading-relaxed mb-4">
                Chaque projet inclut un nombre défini de révisions (précisé dans le devis). Les révisions supplémentaires peuvent entraîner des frais additionnels.
            </p>
        </section>

        <section class="mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">8. Annulation et remboursement</h2>
            <h3 class="text-2xl font-bold text-gray-700 mb-3">8.1 Annulation par le client</h3>
            <p class="text-gray-700 leading-relaxed mb-4">
                Vous pouvez annuler votre commande avant le début de la production. Les frais d'annulation dépendent de l'avancement du projet.
            </p>
            <h3 class="text-2xl font-bold text-gray-700 mb-3">8.2 Politique de remboursement</h3>
            <p class="text-gray-700 leading-relaxed">
                Les remboursements sont évalués au cas par cas. Les produits personnalisés ne sont généralement pas remboursables une fois la production lancée.
            </p>
        </section>

        <section class="mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">9. Limitation de responsabilité</h2>
            <p class="text-gray-700 leading-relaxed">
                BUSIDIG ne peut être tenu responsable des dommages indirects, incidents ou consécutifs résultant de l'utilisation de notre plateforme ou de nos services.
            </p>
        </section>

        <section class="mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">10. Modifications des conditions</h2>
            <p class="text-gray-700 leading-relaxed">
                Nous nous réservons le droit de modifier ces Conditions d'Utilisation à tout moment. Les modifications prennent effet dès leur publication sur cette page.
            </p>
        </section>

        <section class="mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">11. Droit applicable</h2>
            <p class="text-gray-700 leading-relaxed">
                Ces conditions sont régies par les lois en vigueur. Tout litige sera soumis aux tribunaux compétents.
            </p>
        </section>

        <section class="mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">12. Contact</h2>
            <p class="text-gray-700 leading-relaxed mb-4">
                Pour toute question concernant ces Conditions d'Utilisation:
            </p>
            <div class="bg-gray-50 p-6 rounded-xl">
                <p class="text-gray-700 mb-2"><strong>Email:</strong> <a href="mailto:busidigmark@gmail.com" class="text-busidig-orange hover:underline">busidigmark@gmail.com</a></p>
                <p class="text-gray-700 mb-2"><strong>Téléphone/WhatsApp:</strong> <a href="tel:+22892943617" class="text-busidig-orange hover:underline">+228 92 94 36 17</a></p>
                <p class="text-gray-700"><strong>BUSIDIG</strong> - Votre partenaire branding & packaging</p>
            </div>
        </section>
    </div>
</div>
@endsection
