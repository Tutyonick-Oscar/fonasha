@extends('layouts.base')
@section('title', 'Fonasha asbl - Nos actualités')
@section('content')

    <main class="w-full pt-20 bg-surface-container-lowest min-h-screen">
        <div class="flex flex-col w-full">
            <!-- SECTION HEADER: Éditorial calme & précis -->
            <section class="w-full bg-surface-container-lowest pt-space-xl pb-space-lg">
                <div class="max-w-[1200px] mx-auto px-margin-mobile lg:px-margin">
                    <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-space-md">
                        <div class="max-w-2xl">
                            {{-- <div class="flex items-center gap-space-xs mb-space-sm">
                                <span class="inline-block w-2 h-2 rounded-full bg-secondary"></span>
                                <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary">Récits
                                    &amp; Publications</span>
                                <span class="text-outline-variant">•</span>
                                <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline">Sud-Kivu,
                                    RDC</span>
                            </div> --}}
                            <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-wide py-space-sm">Actualités
                                &amp; Récits de Terrain</h1>
                            <p class="font-body-lg text-body-lg text-on-surface-variant mt-space-sm leading-relaxed">
                                Chroniques documentées sur la dynamique solidaire des associations villageoises
                                d'épargne et de crédit (AVEC), les filières vivrières et la résilience quotidienne des
                                ménages d'Uvira.
                            </p>
                        </div>
                        
                    </div>
                </div>
            </section>
            <!-- GRAND ARTICLE À LA UNE (ASOCIATION AVEC) -->
            <section class="w-full bg-surface-container-lowest pb-space-xl md:pt-4">
                <div class="max-w-[1200px] mx-auto px-margin-mobile lg:px-margin">
                    <article
                        class="group relative bg-surface-container-low rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300">
                        <div class="grid grid-cols-1 lg:grid-cols-12">
                            <!-- Image narrative de terrain -->
                            <div
                                class="lg:col-span-7 relative min-h-[340px] lg:min-h-[460px] overflow-hidden bg-surface-dim">
                                <img class="w-full h-full object-cover "
                                    data-alt="Photographie éditoriale lumineuse d'une réunion collective d'un réseau AVEC à Uvira au Sud-Kivu. Un groupe de femmes congolaises assises sous une varangue aérée, tenant des registres de comptabilité communautaire et un coffret métallique vert émeraude, souriantes et attentives. Éclairage naturel doux du matin africain, tons organiques de terre battue et tissus pagnes colorés sobres."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuA7BgUJ0Mp3zlN_azB3V9A9Uo4RzolHeHbjlNSYvSUKPN62xTyU0CrwGUlrINKSUz4ix4kGZJqEcGgKGVRDcreyoxNsA3IN7C3idIPhb1NwkLRQvM52zksV0In5Sku5sjGknxOLRJsZAQMbXNvMUfP3N2bPsBppupeWefTxN4gxfOFfCz8gffF0jze-g9KzZGz9U8Bz-_we7T_uBkgZSTrcM-WsjaaT_G_YkKf7CMdLOef3jg6DGMK0wA" />
                                
                            </div>
                            <!-- Contenu texte à forte lisibilité -->
                            <div class="lg:col-span-5 p-space-lg lg:p-space-xl flex flex-col justify-between">
                                <div class="space-y-space-md">
                                    <div class="flex items-center gap-space-sm text-on-surface-variant">
                                        <span
                                            class="material-symbols-outlined text-[18px] text-secondary">calendar_today</span>
                                        <time class="font-body-sm text-body-sm text-on-surface-variant"
                                            datetime="2024-04-12">12 Avril 2024</time>
                                        
                                    </div>
                                    <h2
                                        class="cursor-pointer font-headline-md text-headline-md text-on-surface leading-tight tracking-tight group-hover:text-secondary transition-colors">
                                        Comment les 20 réseaux AVEC de la FONASHA renforcent l'autonomie de plus de 500
                                        ménages à Uvira
                                    </h2>
                                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                                        Face aux contraintes bancaires classiques, les Associations Villageoises
                                        d’Épargne et de Crédit (AVEC) permettent aux mères de famille et petits
                                        producteurs de mutualiser leur fonds de roulement. Bilan d'un cycle réussi et
                                        perspectives pour Mulongwe et Kilomoni.
                                    </p>
                                    
                                </div>
                                <div class="pt-space-lg">
                                    <a class="inline-flex items-center gap-space-xs font-label-md text-label-md text-on-surface group-hover:text-secondary font-semibold transition-colors"
                                        href="#">
                                        <span>Consulter le récit complet</span>
                                        <span
                                            class="material-symbols-outlined text-[18px] transition-transform group-hover:translate-x-1">arrow_forward</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </section>

            <!-- Navigation par filtres légers -->
            <section class="w-full bg-surface-container-lowest pb-space-lg">
                <div class="max-w-[1200px] mx-auto px-margin-mobile lg:px-margin">
                    <div class="flex items-center gap-space-sm overflow-x-auto pb-space-xs">
                        <!-- Lien actif (Tous) -->
                        <a href="#" class="px-space-md py-2 rounded-md font-label-md text-label-md bg-secondary text-on-secondary shadow-sm whitespace-nowrap">Tous</a>
                        <!-- Liens inactifs -->
                        @foreach(['Agro-vivrier', 'Santé & Droits', 'Éducation'] as $category)
                            <a href="#" class="px-space-md py-2 rounded-md font-label-md text-label-md bg-surface-container text-on-surface-variant hover:bg-surface-container-high transition-colors whitespace-nowrap">
                                {{ $category }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </section>

            <!-- GRILLE DES 3 ARTICLES RÉCENTS -->
            <section class="w-full bg-surface-container-low/40 py-space-xl">
                <div class="max-w-[1200px] mx-auto px-margin-mobile lg:px-margin">
                    <div class="flex items-center justify-between mb-space-lg">
                        <div>
                            
                            <h3 class="font-headline-md text-headline-md text-on-surface tracking-tight lower">
                                Articles Récents
                            </h3>
                        </div>
                        <span class="font-body-sm text-body-sm text-on-surface-variant hidden sm:inline-block">3
                            publications validées</span>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-lg">
                        <!-- Article 1: Filière Manioc & Arachides -->
                        <article
                            class="bg-surface-container-lowest rounded-xl p-space-lg flex flex-col justify-between shadow-sm hover:shadow-md transition-all duration-200">
                            <div>
                                <div class="w-full h-44 rounded-lg overflow-hidden mb-space-md bg-surface-dim">
                                    <img class="w-full h-full object-cover"
                                        data-alt="Transformation artisanale du manioc et tri des graines d'arachides par des femmes agricultrices dans un hangar propre et lumineux à Uvira, Sud-Kivu. Paniers en osier tressé traditionnels, sacs de cossettes de manioc prêtes pour la mouture, lumière solaire rasante d'après-midi tropical."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDLZ86reLOYIOfb68mGmYiPvah-QAFTi2FA0m3jyS1eSKh3KbxwNhTaXzmTz5pc25gV-j4RyPmOb7YBBcJ3Mydj5KZSmICBgpoC8DEB3OcIgtiv3WYp5K0U4whGLDrVh5BgmaFcqhiJLO-OqQloPVoEmu-UkagSDbSsUVwFewwhepA6mAtGs2uKHlB7VwvtrNOo-3z2uf9lf5QGU68kMbAhUMvR5WDqI44wcO7aUbrlRxWjH_vwanwe5Q" />
                                </div>
                                <div class="flex items-center gap-space-xs text-on-surface-variant mb-space-xs">
                                    <span
                                        class="px-space-xs py-0.5 rounded font-label-sm text-label-sm bg-surface-container text-on-surface font-medium">Agro-vivrier</span>
                                    <span class="text-outline-variant">•</span>
                                    <time class="font-label-sm text-label-sm text-outline">04 Mars 2024</time>
                                </div>
                                <h4
                                    class="font-headline-sm text-headline-sm text-on-surface tracking-tight mb-space-xs leading-snug">
                                    Transformation agricole : valorisation du manioc et des arachides
                                </h4>
                                <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed line-clamp-3">
                                    Mise en service d'une unité de séchage et broyage partagée pour limiter les pertes
                                    post-récolte et approvisionner directement les marchés urbains d'Uvira à prix
                                    équitable.
                                </p>
                            </div>
                            <div class="pt-space-md">
                                <a class="inline-flex items-center gap-1 font-label-md text-label-md text-secondary hover:text-on-secondary-fixed-variant transition-colors"
                                    href="#">
                                    <span>Lire la suite</span>
                                    <span class="material-symbols-outlined text-[16px]">north_east</span>
                                </a>
                            </div>
                        </article>
                        <!-- Article 2: Sensibilisation Droits & Santé -->
                        <article
                            class="bg-surface-container-lowest rounded-xl p-space-lg flex flex-col justify-between shadow-sm hover:shadow-md transition-all duration-200">
                            <div>
                                <div class="w-full h-44 rounded-lg overflow-hidden mb-space-md bg-surface-dim">
                                    <img class="w-full h-full object-cover"
                                        data-alt="Atelier communautaire participatif réunissant des femmes et des jeunes filles sous un préau communautaire ombragé à Uvira. Une animatrice sociale présente une affiche didactique sur les droits civils et la santé reproductive. Ambiance attentive, bienveillante et solennelle dans le Sud-Kivu."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDpPSURjgbA3mfPHwLBA3y2UsBkM-_dW8xIVuH-NPWxyOkQeC28eT5Kzy0bFnFGt5AWtSEigvrXevO7yNzMqYu7WJfQVZeWyKqfoURFFHIJGXQ0thkzujf_CRVyd7-c8iZT8ysWVil80goSTFBBM5tW0cFMefShHefMjqyM6rNVXm5hMdjFh6IoweMAOR68ECJff4f8TcY0F5sDAAg1Nz_xiLfKpsAtII-enD23SaR_VWb_K0fLflwUWw" />
                                </div>
                                <div class="flex items-center gap-space-xs text-on-surface-variant mb-space-xs">
                                    <span
                                        class="px-space-xs py-0.5 rounded font-label-sm text-label-sm bg-surface-container text-on-surface font-medium">Santé
                                        &amp; Droits</span>
                                    <span class="text-outline-variant">•</span>
                                    <time class="font-label-sm text-label-sm text-outline">21 Février 2024</time>
                                </div>
                                <h4
                                    class="font-headline-sm text-headline-sm text-on-surface tracking-tight mb-space-xs leading-snug">
                                    Sensibilisation : droits des femmes et santé de la reproduction
                                </h4>
                                <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed line-clamp-3">
                                    Des sessions de dialogue de proximité menées dans les quartiers périphériques pour
                                    informer sur l'accès aux soins de santé maternelle, la prévention et l'assistance
                                    juridique.
                                </p>
                            </div>
                            <div class="pt-space-md">
                                <a class="inline-flex items-center gap-1 font-label-md text-label-md text-secondary hover:text-on-secondary-fixed-variant transition-colors"
                                    href="#">
                                    <span>Lire la suite</span>
                                    <span class="material-symbols-outlined text-[16px]">north_east</span>
                                </a>
                            </div>
                        </article>
                        <!-- Article 3: Soutien Scolaire & Kits -->
                        <article
                            class="bg-surface-container-lowest rounded-xl p-space-lg flex flex-col justify-between shadow-sm hover:shadow-md transition-all duration-200">
                            <div>
                                <div class="w-full h-44 rounded-lg overflow-hidden mb-space-md bg-surface-dim">
                                    <img class="w-full h-full object-cover"
                                        data-alt="Remise de kits scolaires neufs à de jeunes élèves orphelins dans une école primaire simple en briques à Uvira. Cahiers, stylos, uniformes neufs disposés soigneusement sur un pupitre en bois clair sous le regard protecteur des enseignants et bénévoles."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAFXuUr6_FldHQj9ORu2oUcgLDBDrNMUARswB9MHUSddEooT_oWic3l7ba2-D5vjbmezWHItR6uJmSY0BsEJowpQBnvVhWxEMc15bl8CfG924K34x-kFCwxkdVCWAh2N4Hyvgqi1UsWhrcoB3UhcbcVXkAjbGcEkb92vPl-PfmCGRob0yeunQpoUtnsM23PNJso_7_05bw4Rbn7oWsFCcKz0cEfsT-LAIWGlMtiYcbiP6uglCEXquT1jQ" />
                                </div>
                                <div class="flex items-center gap-space-xs text-on-surface-variant mb-space-xs">
                                    <span
                                        class="px-space-xs py-0.5 rounded font-label-sm text-label-sm bg-surface-container text-on-surface font-medium">Éducation</span>
                                    <span class="text-outline-variant">•</span>
                                    <time class="font-label-sm text-label-sm text-outline">18 Janvier 2024</time>
                                </div>
                                <h4
                                    class="font-headline-sm text-headline-sm text-on-surface tracking-tight mb-space-xs leading-snug">
                                    Soutien scolaire : accompagnement des orphelins et kits didactiques
                                </h4>
                                <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed line-clamp-3">
                                    Distribution de fournitures et prise en charge des frais académiques pour 115
                                    enfants vulnérables scolarisés dans les écoles partenaires de la plaine de la Ruzizi
                                    et d'Uvira.
                                </p>
                            </div>
                            <div class="pt-space-md">
                                <a class="inline-flex items-center gap-1 font-label-md text-label-md text-secondary hover:text-on-secondary-fixed-variant transition-colors"
                                    href="#">
                                    <span>Lire la suite</span>
                                    <span class="material-symbols-outlined text-[16px]">north_east</span>
                                </a>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
            
            <!-- INSCRIPTION NEWSLETTER SUR UNE SEULE LIGNE ÉPURÉE -->
            {{-- <section class="w-full bg-surface-container-lowest py-space-xl">
                <div class="max-w-[1200px] mx-auto px-margin-mobile lg:px-margin">
                    <div class="py-space-lg px-space-md md:px-space-xl bg-surface-container-low/60 rounded-xl">
                        <div class="flex flex-col md:flex-row items-center justify-between gap-space-md">
                            <div class="flex items-center gap-space-sm w-full md:w-auto">
                                <span class="material-symbols-outlined text-secondary text-[24px] shrink-0">mail</span>
                                <div>
                                    <p class="font-label-md text-label-md text-on-surface font-semibold">
                                        Newsletter FONASHA
                                    </p>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">
                                        Recevez nos actualités et récits de terrain directement dans votre boîte
                                        mail.
                                    </p>
                                </div>
                            </div>
                            <livewire:newsletter-form />
                        </div>
                    </div>
                </div>
            </section> --}}
        </div>
    </main>


@endsection
