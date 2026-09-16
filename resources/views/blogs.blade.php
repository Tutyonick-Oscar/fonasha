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
                            <div class="flex items-center gap-space-xs mb-space-sm">
                                <span class="inline-block w-2 h-2 rounded-full bg-secondary"></span>
                                <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary">Récits
                                    &amp; Publications</span>
                                <span class="text-outline-variant">•</span>
                                <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline">Sud-Kivu,
                                    RDC</span>
                            </div>
                            <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">Actualités
                                &amp; Récits de Terrain</h1>
                            <p class="font-body-lg text-body-lg text-on-surface-variant mt-space-sm leading-relaxed">
                                Chroniques documentées sur la dynamique solidaire des associations villageoises
                                d'épargne et de crédit (AVEC), les filières vivrières et la résilience quotidienne des
                                ménages d'Uvira.
                            </p>
                        </div>
                        <!-- Navigation par filtres légers -->
                        <div class="flex flex-wrap items-center gap-space-xs pt-space-sm lg:pt-0">
                            <button
                                class="px-space-md py-space-xs rounded-xl font-label-md text-label-md bg-surface-container-high text-on-surface transition-colors">Tous
                                les articles</button>
                            <button
                                class="px-space-md py-space-xs rounded-xl font-label-md text-label-md text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-colors">Réseaux
                                AVEC</button>
                            <button
                                class="px-space-md py-space-xs rounded-xl font-label-md text-label-md text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-colors">Agro-vivrier</button>
                            <button
                                class="px-space-md py-space-xs rounded-xl font-label-md text-label-md text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-colors">Rapports</button>
                        </div>
                    </div>
                </div>
            </section>
            <!-- GRAND ARTICLE À LA UNE (ASOCIATION AVEC) -->
            <section class="w-full bg-surface-container-lowest pb-space-xl">
                <div class="max-w-[1200px] mx-auto px-margin-mobile lg:px-margin">
                    <article
                        class="group relative bg-surface-container-low rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300">
                        <div class="grid grid-cols-1 lg:grid-cols-12">
                            <!-- Image narrative de terrain -->
                            <div
                                class="lg:col-span-7 relative min-h-[340px] lg:min-h-[460px] overflow-hidden bg-surface-dim">
                                <img class="w-full h-full object-cover group-hover:scale-[1.01] transition-transform duration-500 ease-out"
                                    data-alt="Photographie éditoriale lumineuse d'une réunion collective d'un réseau AVEC à Uvira au Sud-Kivu. Un groupe de femmes congolaises assises sous une varangue aérée, tenant des registres de comptabilité communautaire et un coffret métallique vert émeraude, souriantes et attentives. Éclairage naturel doux du matin africain, tons organiques de terre battue et tissus pagnes colorés sobres."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuA7BgUJ0Mp3zlN_azB3V9A9Uo4RzolHeHbjlNSYvSUKPN62xTyU0CrwGUlrINKSUz4ix4kGZJqEcGgKGVRDcreyoxNsA3IN7C3idIPhb1NwkLRQvM52zksV0In5Sku5sjGknxOLRJsZAQMbXNvMUfP3N2bPsBppupeWefTxN4gxfOFfCz8gffF0jze-g9KzZGz9U8Bz-_we7T_uBkgZSTrcM-WsjaaT_G_YkKf7CMdLOef3jg6DGMK0wA" />
                                <div class="absolute top-space-md left-space-md">
                                    <span
                                        class="px-space-md py-space-xs rounded-full font-label-sm text-label-sm bg-surface-container-lowest/90 backdrop-blur-md text-on-surface shadow-sm">
                                        À la une • Économie communautaire
                                    </span>
                                </div>
                            </div>
                            <!-- Contenu texte à forte lisibilité -->
                            <div class="lg:col-span-5 p-space-lg lg:p-space-xl flex flex-col justify-between">
                                <div class="space-y-space-md">
                                    <div class="flex items-center gap-space-sm text-on-surface-variant">
                                        <span
                                            class="material-symbols-outlined text-[18px] text-secondary">calendar_today</span>
                                        <time class="font-body-sm text-body-sm text-on-surface-variant"
                                            datetime="2024-04-12">12 Avril 2024</time>
                                        <span class="text-outline-variant">•</span>
                                        <span class="font-body-sm text-body-sm text-on-surface-variant">Lecture : 5
                                            min</span>
                                    </div>
                                    <h2
                                        class="font-headline-md text-headline-md text-on-surface leading-tight tracking-tight group-hover:text-secondary transition-colors">
                                        Comment les 20 réseaux AVEC de la FONASHA renforcent l'autonomie de plus de 500
                                        ménages à Uvira
                                    </h2>
                                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                                        Face aux contraintes bancaires classiques, les Associations Villageoises
                                        d’Épargne et de Crédit (AVEC) permettent aux mères de famille et petits
                                        producteurs de mutualiser leur fonds de roulement. Bilan d'un cycle réussi et
                                        perspectives pour Mulongwe et Kilomoni.
                                    </p>
                                    <!-- Métriques d'impact associées -->
                                    <div class="grid grid-cols-2 gap-space-sm pt-space-xs">
                                        <div class="bg-surface-container-lowest p-space-sm rounded-lg shadow-sm">
                                            <span
                                                class="font-headline-sm text-headline-sm text-on-surface block font-bold">20</span>
                                            <span class="font-label-sm text-label-sm text-outline">Groupes
                                                autonomes</span>
                                        </div>
                                        <div class="bg-surface-container-lowest p-space-sm rounded-lg shadow-sm">
                                            <span
                                                class="font-headline-sm text-headline-sm text-secondary block font-bold">+520</span>
                                            <span class="font-label-sm text-label-sm text-outline">Ménages
                                                intégrés</span>
                                        </div>
                                    </div>
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
            <!-- GRILLE DES 3 ARTICLES RÉCENTS -->
            <section class="w-full bg-surface-container-low/40 py-space-xl">
                <div class="max-w-[1200px] mx-auto px-margin-mobile lg:px-margin">
                    <div class="flex items-center justify-between mb-space-lg">
                        <div>
                            <span
                                class="font-label-sm text-label-sm uppercase tracking-wider text-outline block">Perspectives
                                récentes</span>
                            <h3 class="font-headline-md text-headline-md text-on-surface tracking-tight">Dépêches &amp;
                                actions locales</h3>
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
            <!-- ESPACE TRANSPARENCE & TÉLÉCHARGEMENT DES RAPPORTS (Loi 004/2001) -->
            <section class="w-full bg-surface-container-lowest py-space-xl">
                <div class="max-w-[1200px] mx-auto px-margin-mobile lg:px-margin">
                    <div class="bg-surface-container-low rounded-xl p-space-lg lg:p-space-xl">
                        <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-space-md pb-space-lg">
                            <div class="max-w-xl">
                                <div class="flex items-center gap-space-xs mb-1">
                                    <span class="material-symbols-outlined text-[18px] text-secondary">verified</span>
                                    <span
                                        class="font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant font-semibold">Gouvernance
                                        légale</span>
                                </div>
                                <h3 class="font-headline-md text-headline-md text-on-surface tracking-tight">
                                    Transparence &amp; Rapports Officiels</h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">
                                    Conformément à la <strong>Loi n° 004/2001</strong> régissant les associations sans
                                    but lucratif en RDC, la FONASHA met à disposition du public et des bailleurs ses
                                    états certifiés.
                                </p>
                            </div>
                            <div class="flex items-center gap-space-xs text-outline">
                                <span class="material-symbols-outlined text-[20px]">lock_open</span>
                                <span class="font-label-sm text-label-sm">Audits et bilans en libre consultation</span>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <!-- Document 1 -->
                            <div
                                class="bg-surface-container-lowest p-space-md rounded-xl flex items-center justify-between shadow-sm hover:shadow transition-shadow">
                                <div class="flex items-center gap-space-md min-w-0">
                                    <div
                                        class="w-10 h-10 rounded-lg bg-surface-container flex items-center justify-center shrink-0">
                                        <span
                                            class="material-symbols-outlined text-secondary text-[22px]">description</span>
                                    </div>
                                    <div class="truncate">
                                        <h5 class="font-label-md text-label-md text-on-surface truncate">Rapport Annuel
                                            d'Activités 2023</h5>
                                        <p class="font-body-sm text-body-sm text-outline truncate">Bilan des 20 AVEC,
                                            projets vivriers &amp; bénéficiaires (PDF • 3.2 Mo)</p>
                                    </div>
                                </div>
                                <a class="shrink-0 p-space-xs rounded-lg hover:bg-surface-container text-on-surface hover:text-secondary transition-colors"
                                    download="" href="#" title="Télécharger le rapport">
                                    <span class="material-symbols-outlined text-[20px]">download</span>
                                </a>
                            </div>
                            <!-- Document 2 -->
                            <div
                                class="bg-surface-container-lowest p-space-md rounded-xl flex items-center justify-between shadow-sm hover:shadow transition-shadow">
                                <div class="flex items-center gap-space-md min-w-0">
                                    <div
                                        class="w-10 h-10 rounded-lg bg-surface-container flex items-center justify-center shrink-0">
                                        <span
                                            class="material-symbols-outlined text-secondary text-[22px]">account_balance</span>
                                    </div>
                                    <div class="truncate">
                                        <h5 class="font-label-md text-label-md text-on-surface truncate">États
                                            Financiers &amp; Affectation des Dons</h5>
                                        <p class="font-body-sm text-body-sm text-outline truncate">Exercice clos au 31
                                            décembre 2023 (PDF • 1.8 Mo)</p>
                                    </div>
                                </div>
                                <a class="shrink-0 p-space-xs rounded-lg hover:bg-surface-container text-on-surface hover:text-secondary transition-colors"
                                    download="" href="#" title="Télécharger l'état financier">
                                    <span class="material-symbols-outlined text-[20px]">download</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- INSCRIPTION NEWSLETTER SUR UNE SEULE LIGNE ÉPURÉE -->
            <section class="w-full bg-surface-container-lowest pb-space-xl">
                <div class="max-w-[1200px] mx-auto px-margin-mobile lg:px-margin">
                    <div class="py-space-lg px-space-md md:px-space-xl bg-surface-container-low/60 rounded-xl">
                        <form class="flex flex-col md:flex-row items-center justify-between gap-space-md"
                            onsubmit="event.preventDefault(); alert('Votre adresse a été enregistrée avec succès. Merci de suivre la FONASHA.');">
                            <div class="flex items-center gap-space-sm w-full md:w-auto">
                                <span class="material-symbols-outlined text-secondary text-[24px] shrink-0">mail</span>
                                <div>
                                    <p class="font-label-md text-label-md text-on-surface font-semibold">Lettre de
                                        terrain</p>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Un compte-rendu
                                        succinct par trimestre, sans superflu.</p>
                                </div>
                            </div>
                            <div class="flex items-center w-full md:w-auto max-w-md gap-space-xs">
                                <input
                                    class="w-full h-10 px-space-md rounded-lg bg-surface-container-lowest font-body-sm text-body-sm text-on-surface placeholder:text-outline focus:outline-none focus:ring-1 focus:ring-secondary shadow-sm"
                                    placeholder="votre.email@exemple.cd" required="" type="email" />
                                <button
                                    class="shrink-0 h-10 px-space-lg rounded-lg bg-primary text-on-primary font-label-md text-label-md hover:opacity-90 active:scale-[0.99] transition-all"
                                    type="submit">
                                    S'inscrire
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </main>


@endsection
