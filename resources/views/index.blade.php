@extends('layouts.base')
@section('content')
    <main class="w-full pt-20 bg-surface-container-lowest min-h-screen">
        <div class="flex flex-col w-full">
            <!-- Hero Section Bleed & Clean Atmosphere -->
            <section
                class="relative w-full -mt-20 pt-32 pb-20 lg:pt-40 lg:pb-28 overflow-hidden bg-surface-container-lowest">
                <div
                    class="absolute top-0 right-1/4 w-96 h-96 bg-secondary-fixed/40 rounded-full blur-3xl pointer-events-none -z-10">
                </div>
                <div
                    class="absolute bottom-10 left-10 w-72 h-72 bg-surface-container/60 rounded-full blur-2xl pointer-events-none -z-10">
                </div>
                <div class="max-w-[1200px] mx-auto px-margin-mobile lg:px-margin">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-xl items-center">
                        <!-- Hero Textual Content -->
                        <div class="lg:col-span-7 flex flex-col space-y-space-lg">

                            <h1
                                class="font-display text-headline-lg lg:text-display text-on-surface tracking-tight max-w-2xl lg:-mt-20">
                                Agir pour l'autonomie des femmes et l'avenir des enfants au Sud-Kivu.
                            </h1>
                            <p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl leading-relaxed">
                                Un accompagnement holistique axé sur l’épargne solidaire (AVEC), l'autonomie agricole et
                                la protection des enfants vulnérables à Uvira.
                            </p>
                            <div class="flex flex-wrap items-center gap-space-md pt-space-xs">
                                <a class="inline-flex items-center justify-center px-space-xl py-3.5 rounded-xl font-label-md text-label-md bg-on-surface text-surface-container-lowest shadow-sm hover:opacity-90 transition-all"
                                    href="{{ route('about') }}">
                                    A propos de nous
                                </a>
                                <a class="inline-flex items-center justify-center px-space-lg py-3.5 rounded-xl font-label-md text-label-md bg-surface-container-low text-on-surface hover:bg-surface-container transition-all"
                                    data-path="contact" href="{{ route('contact') }}">
                                    Nous contacter
                                </a>
                            </div>
                            <!-- Official certification badge -->
                            {{-- <div class="pt-space-sm flex items-center gap-space-md text-on-surface-variant">
                                <div class="flex items-center gap-space-xs font-label-sm text-label-sm">
                                    <span class="material-symbols-outlined text-secondary text-[18px]">verified</span>
                                    <span>Agrément N° 26/100/GP/SK</span>
                                </div>
                                <span class="text-outline-variant">•</span>
                                <span class="font-label-sm text-label-sm text-on-surface-variant">Non lucratif &amp;
                                    Indépendant</span>
                            </div> --}}
                        </div>
                        <!-- Hero Visual / Contextual Imagery -->
                        <div class="lg:col-span-5 relative">
                            <div class="relative mx-auto max-w-md lg:max-w-none">
                                <div
                                    class="rounded-xl overflow-hidden shadow-md bg-surface-container-low aspect-[4/5] relative">
                                    <img class="w-full h-full object-cover"
                                        data-alt="hero photo"
                                        src="{{ asset('images/table_ronde_fonasha.jpeg') }}" />
                                    <div
                                        class="absolute inset-0 bg-gradient-to-t from-primary-container/70 via-transparent to-transparent">
                                    </div>
                                    {{-- <div class="absolute bottom-0 left-0 right-0 p-space-lg text-on-primary">
                                        <span
                                            class="font-label-sm text-label-sm text-secondary-fixed uppercase tracking-wider block">Impact
                                            sur le terrain</span>
                                        <p class="font-headline-sm text-headline-sm font-semibold mt-1">Uvira &amp;
                                            Bassin du Lac Tanganyika</p>
                                        <p class="font-body-sm text-body-sm text-on-primary/80 mt-0.5">Renforcement de
                                            la résilience socio-économique des ménages.</p>
                                    </div> --}}
                                </div>
                                <!-- Floating metric pill -->
                                <div
                                    class="absolute -bottom-6 -left-6 bg-surface-container-lowest p-space-md rounded-xl shadow-lg hidden sm:flex items-center gap-space-md max-w-xs">
                                    <div
                                        class="w-10 h-10 rounded-full bg-secondary-fixed flex items-center justify-center text-on-secondary-fixed">
                                        <span class="material-symbols-outlined text-[22px]">groups</span>
                                    </div>
                                    <div class="flex flex-col">
                                        <span
                                            class="font-headline-sm text-headline-sm text-on-surface leading-tight font-bold">20
                                            Réseaux</span>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">Groupes d'AVEC
                                            autonomes</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Key Metrics Strip -->
            <section class="w-full bg-surface-container-low/50 py-space-xl">
                <div class="max-w-[1200px] mx-auto px-margin-mobile lg:px-margin">
                    <div class="grid grid-cols-2 lg:grid-cols-4 gap-space-lg lg:gap-space-xl">
                        <div class="flex flex-col space-y-1">
                            <span
                                class="font-display text-headline-lg lg:text-display text-on-surface tracking-tight font-bold">+200</span>
                            <div class="h-0.5 w-8 bg-secondary rounded-full my-1"></div>
                            <span class="font-label-md text-label-md text-on-surface font-semibold">Membres
                                effectifs</span>
                            <span class="font-body-sm text-body-sm text-on-surface-variant">Femmes &amp; familles
                                engagées</span>
                        </div>
                        <div class="flex flex-col space-y-1">
                            <span
                                class="font-display text-headline-lg lg:text-display text-secondary tracking-tight font-bold">20</span>
                            <div class="h-0.5 w-8 bg-secondary rounded-full my-1"></div>
                            <span class="font-label-md text-label-md text-on-surface font-semibold">Réseaux AVEC
                                actifs</span>
                            <span class="font-body-sm text-body-sm text-on-surface-variant">Microcrédits solidaires
                                autogérés</span>
                        </div>
                        <div class="flex flex-col space-y-1">
                            <span
                                class="font-display text-headline-lg lg:text-display text-on-surface tracking-tight font-bold">9+</span>
                            <div class="h-0.5 w-8 bg-secondary rounded-full my-1"></div>
                            <span class="font-label-md text-label-md text-on-surface font-semibold">Années d'action
                                continue</span>
                            <span class="font-body-sm text-body-sm text-on-surface-variant">Ancrage communautaire
                                durable</span>
                        </div>
                        <div class="flex flex-col space-y-1">
                            <span
                                class="font-display text-headline-lg lg:text-display text-secondary tracking-tight font-bold">100%</span>
                            <div class="h-0.5 w-8 bg-secondary rounded-full my-1"></div>
                            <span class="font-label-md text-label-md text-on-surface font-semibold">Impact local</span>
                            <span class="font-body-sm text-body-sm text-on-surface-variant">Affecté directement à
                                Uvira</span>
                        </div>
                    </div>
                </div>
            </section>
            <!-- 3 Essential Pillars -->
            <section class="w-full py-24 bg-surface-container-lowest" id="piliers">
                <div class="max-w-[1200px] mx-auto px-margin-mobile lg:px-margin flex flex-col space-y-space-xl">
                    <!-- Section Header -->
                    <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-md">
                        <div class="space-y-space-xs max-w-xl">
                            {{-- <span
                                class="font-label-md text-label-md text-secondary uppercase tracking-wider font-semibold">Piliers
                                d'intervention</span> --}}
                            <h2
                                class="font-headline-lg text-headline-md lg:text-headline-lg text-on-surface tracking-tight">
                                Une approche concrète, pérenne et structurée.
                            </h2>
                        </div>
                        <p class="font-body-md text-body-md text-on-surface-variant max-w-md">
                            Chaque initiative est pensée pour briser le cycle de la précarité par l’éducation, le
                            travail communautaire et la souveraineté économique.
                        </p>
                    </div>
                    <!-- Pillars Cards -->
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-space-lg">
                        <!-- Pillar 1 -->
                        <div
                            class="group bg-surface-container-lowest p-space-xl rounded-xl shadow-sm hover:shadow-md transition-all flex flex-col justify-between">
                            <div class="space-y-space-md">
                                <div
                                    class="w-12 h-12 rounded-xl bg-surface-container-low flex items-center justify-center text-secondary group-hover:bg-secondary group-hover:text-on-secondary transition-colors">
                                    <span class="material-symbols-outlined text-[26px]">savings</span>
                                </div>
                                <div class="space-y-space-xs">
                                    <span class="font-label-sm text-label-sm text-outline uppercase tracking-wider">Axe
                                        01</span>
                                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">Épargne
                                        &amp; Crédit Solidaire</h3>
                                </div>
                                <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                                    Lancement de premières associations villageoises d'épargne et de crédit (AVEC)
                                    regroupant des
                                    femmes par groupe et 
                                    l'octroi de micro- crédits d'urgence pour la relance des petits commerces de produits
                                    vivriers.
                                </p>
                            </div>
                            <div class="pt-space-lg mt-space-md">
                                {{-- <div
                                    class="flex items-center justify-between text-on-surface-variant font-label-sm text-label-sm">
                                    <span>Dispositif AVEC</span>
                                    <span class="font-semibold text-secondary">Autonomie active</span>
                                </div> --}}
                                <div class="w-full h-1 bg-surface-container-low rounded-full mt-2 overflow-hidden">
                                    <div class="h-full bg-secondary w-4/5 rounded-full"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Pillar 2 -->
                        <div
                            class="group bg-surface-container-lowest p-space-xl rounded-xl shadow-sm hover:shadow-md transition-all flex flex-col justify-between">
                            <div class="space-y-space-md">
                                <div
                                    class="w-12 h-12 rounded-xl bg-surface-container-low flex items-center justify-center text-secondary group-hover:bg-secondary group-hover:text-on-secondary transition-colors">
                                    <span class="material-symbols-outlined text-[26px]">agriculture</span>
                                </div>
                                <div class="space-y-space-xs">
                                    <span class="font-label-sm text-label-sm text-outline uppercase tracking-wider">Axe
                                        02</span>
                                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">Filières
                                        Vivrières &amp; Transformation</h3>
                                </div>
                                <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                                    Valorisation de la transformation agricole (maïs, arachides, patates douces, manioc
                                    et commercialisation d'épices, galettes, beignets, crêpes, etc.) pour le renforcement du
                                    pouvoir d'achat
                                    des femmes rurales.
                                </p>
                            </div>
                            <div class="pt-space-lg mt-space-md">
                                {{-- <div
                                    class="flex items-center justify-between text-on-surface-variant font-label-sm text-label-sm">
                                    <span>Circuits courts</span>
                                    <span class="font-semibold text-secondary">Sécurité alimentaire</span>
                                </div> --}}
                                <div class="w-full h-1 bg-surface-container-low rounded-full mt-2 overflow-hidden">
                                    <div class="h-full bg-secondary w-2/3 rounded-full"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Pillar 3 -->
                        <div
                            class="group bg-surface-container-lowest p-space-xl rounded-xl shadow-sm hover:shadow-md transition-all flex flex-col justify-between">
                            <div class="space-y-space-md">
                                <div
                                    class="w-12 h-12 rounded-xl bg-surface-container-low flex items-center justify-center text-secondary group-hover:bg-secondary group-hover:text-on-secondary transition-colors">
                                    <span class="material-symbols-outlined text-[26px]">child_care</span>
                                </div>
                                <div class="space-y-space-xs">
                                    <span class="font-label-sm text-label-sm text-outline uppercase tracking-wider">Axe
                                        03</span>
                                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">Protection
                                        &amp; Enfance</h3>
                                </div>
                                <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                                    Prise en charge scolaire d'orphelins et d'enfants démunis, cellule d'écoute
                                    psychosociale pour les survivantes, et actions résolues contre les mariages précoces
                                    dans les zones rurales.
                                </p>
                            </div>
                            <div class="pt-space-lg mt-space-md">
                                {{-- <div
                                    class="flex items-center justify-between text-on-surface-variant font-label-sm text-label-sm">
                                    <span>Scolarisation &amp; Droits</span>
                                    <span class="font-semibold text-secondary">Protection vitale</span>
                                </div> --}}
                                <div class="w-full h-1 bg-surface-container-low rounded-full mt-2 overflow-hidden">
                                    <div class="h-full bg-secondary w-full rounded-full"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Editorial Testimonial -->
            <section class="w-full py-20 bg-surface-container-low/40">
                <div class="max-w-[1000px] mx-auto px-margin-mobile lg:px-margin">
                    <div
                        class="bg-surface-container-lowest rounded-xl p-space-xl lg:p-12 shadow-sm flex flex-col md:flex-row items-center gap-space-xl">
                        <div
                            class="w-32 h-32 md:w-44 md:h-44 rounded-xl overflow-hidden shrink-0 bg-surface-container-high">
                            <img class="w-full h-full object-cover"
                                data-alt="A portrait of a warm Congolese mother beneficiary named Maman Faida in Uvira, modest clothing, calm serene expression, bright natural light, professional humanitarian photography, authentic setting with greenery in soft blur"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDRGC5gf5JXxK4LcYclXur4I8UxAlOLjHzeheyeilfzy0I6g-k6827virgvCwVr6IWPIpNOEa1L2k3BBz0gZX2kmrRF-YVzztsFWzUzVRhvAYWdZzM4UTXJ0VLo02BsYWcmmS6fPpdNRcLtzI9x9Pk_yfWPbpJmpDsZ2GMXv0mejX273wkLsqgsiNkuC0aGwszwcMNHT9j41asXET2K4ggMQjVcBSuk9wgyAXGp3G2_M9CtIAsyDHv_nw" />
                        </div>
                        <div class="flex flex-col space-y-space-md text-center md:text-left">
                            <span
                                class="material-symbols-outlined text-secondary text-[36px] mx-auto md:mx-0">format_quote</span>
                            <blockquote
                                class="font-headline-sm text-headline-sm text-on-surface font-normal leading-relaxed">
                                « Grâce au réseau AVEC de la FONASHA, j'ai pu démarrer mon propre commerce de
                                transformation d'arachides. Aujourd'hui, mes quatre enfants vont régulièrement à l'école
                                et nos décisions au foyer se prennent ensemble. »
                            </blockquote>
                            <div class="flex flex-col md:flex-row md:items-center gap-1 md:gap-space-sm pt-space-xs">
                                <span class="font-label-md text-label-md text-on-surface font-bold">Maman Faida
                                    K.</span>
                                <span class="hidden md:inline text-outline-variant">•</span>
                                <span class="font-body-sm text-body-sm text-on-surface-variant">Membre du Réseau AVEC
                                    Mulongwe, Uvira</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Clean Bottom Call to Action -->
            <section class="w-full py-24 bg-surface-container-lowest">
                <div class="max-w-[1200px] mx-auto px-margin-mobile lg:px-margin">
                    <div
                        class="relative rounded-xl bg-primary-container text-on-primary p-space-xl lg:p-16 overflow-hidden">
                        <div
                            class="absolute -right-16 -top-16 w-80 h-80 bg-secondary/20 rounded-full blur-3xl pointer-events-none">
                        </div>
                        <div class="max-w-2xl space-y-space-md relative z-10">
                            {{-- <span
                                class="font-label-sm text-label-sm text-secondary-fixed uppercase tracking-wider font-semibold">Solidarité
                                active &amp; Transparence</span> --}}
                            <h2
                                class="font-headline-lg text-headline-md lg:text-headline-lg text-on-primary font-bold tracking-tight">
                                Rejoignez notre engagement pour les communautés du Sud-Kivu.
                            </h2>
                            <p class="font-body-lg text-body-lg text-on-primary-container leading-relaxed">
                                Que vous soyez partenaire institutionnel, donateur individuel ou volontaire, votre
                                soutien direct amplifie notre autonomisation sur le terrain à Uvira.
                            </p>
                            <div class="flex flex-wrap items-center gap-space-md pt-space-sm">
                                <a class="inline-flex items-center justify-center px-space-xl py-3.5 rounded-xl font-label-md text-label-md bg-secondary text-on-secondary hover:bg-secondary/90 transition-all shadow-sm"
                                    data-path="soutenir-notre-action" href="{{ route('contact') }}">
                                    Soutenir notre action
                                </a>
                                {{-- <a class="inline-flex items-center justify-center px-space-lg py-3.5 rounded-xl font-label-md text-label-md bg-surface-container-lowest/10 text-on-primary hover:bg-surface-container-lowest/20 transition-all"
                                    data-path="contact" href="#">
                                    Échanger avec notre équipe
                                </a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
