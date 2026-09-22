@extends('layouts.base')
@section('scripts')
    <script src="{{ asset('js/animations.js') }}"></script>
@endsection
@section('title', 'FONASHA ASBL — A propos de nous')
@section('content')

    <main class="w-full pt-20 bg-surface-container-lowest min-h-screen">
        <div class="flex flex-col w-full">
            <section class="reveal-section relative w-full py-16 lg:py-24 bg-surface-container-lowest overflow-hidden">
                <div class="max-w-[1200px] mx-auto px-margin-mobile lg:px-margin">
                    <div class="flex flex-col lg:flex-row items-start lg:items-end justify-between gap-space-lg pb-space-xl">
                        <div class="max-w-2xl space-y-space-sm">

                            <h1
                                class="font-display text-headline-lg lg:text-display text-on-surface font-bold tracking-wide">
                                Notre Histoire, <br class="hidden sm:inline" />Notre Vision.
                            </h1>
                            <p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed pt-2">
                                Née à Uvira en 2017 sous l’impulsion visionnaire de Madame Na’Abwe Shabani, la FONASHA
                                œuvre pour restaurer l'espérance, l'équité sociale et l'indépendance financière des
                                populations vulnérables au cœur du Sud-Kivu.
                            </p>
                        </div>
                        <div class="flex flex-col gap-2 p-6 rounded-xl bg-surface-container-low/60 max-w-xs w-full">
                            <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline">Enregistrement
                                Légal</span>
                            <span class="font-headline-sm text-headline-sm font-semibold text-on-surface">N°
                                26/100/GP/SK</span>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Province du Sud-Kivu,
                                République Démocratique du Congo.</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-12 gap-space-md pt-space-md">
                        <div
                            class="md:col-span-8 overflow-hidden rounded-xl bg-surface-container shadow-sm h-80 sm:h-96 relative">
                            <img class="w-full h-full object-cover" data-alt="fonasha"
                                src="{{ asset('images/femmes_fonasha.jpeg') }}" />
                            <div class="absolute inset-0 bg-gradient-to-t from-primary/60 via-transparent to-transparent">
                            </div>
                            {{-- <div class="absolute bottom-6 left-6 right-6 flex items-center justify-between text-on-primary">
                                <span class="font-label-md text-label-md tracking-wide">Uvira, Sud-Kivu • Territoires
                                    d'intervention</span>
                                <span class="font-label-sm text-label-sm opacity-80">Solidarité active depuis
                                    2017</span>
                            </div> --}}
                        </div>
                        <div class="md:col-span-4 rounded-xl bg-surface-container-low p-8 flex flex-col justify-between">
                            <div class="space-y-3">
                                {{-- <span class="font-label-sm text-label-sm uppercase text-secondary font-semibold">Ancrage
                                    Terrain</span> --}}
                                <h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold">Une action
                                    portée par la proximité</h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                                    De l’initiative informelle d'entraide familiale aux programmes structurés d'épargne
                                    solidaire et de réinsertion, notre démarche demeure guidée par l'écoute directe des
                                    bénéficiaires.
                                </p>
                            </div>
                            <div class="pt-6 flex items-center gap-4">
                                <div
                                    class="w-12 h-12 rounded-xl bg-secondary-fixed flex items-center justify-center text-on-secondary-fixed">
                                    <span class="material-symbols-outlined text-[24px]">groups</span>
                                </div>
                                <div>
                                    <p class="font-headline-sm text-headline-sm font-bold text-on-surface">100%</p>
                                    <p class="font-label-sm text-label-sm text-outline uppercase tracking-wider">
                                        Mobilisation locale</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="reveal-section w-full py-16 lg:py-20 bg-surface-container-low/40">
                <div class="max-w-[1200px] mx-auto px-margin-mobile lg:px-margin">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-lg lg:gap-space-xl">
                        <div
                            class="bg-surface-container-lowest p-8 lg:p-12 rounded-xl shadow-sm space-y-6 flex flex-col justify-between">
                            <div class="space-y-4">
                                <div
                                    class="w-12 h-12 rounded-lg bg-surface-container flex items-center justify-center text-secondary">
                                    <span class="material-symbols-outlined text-[26px]">visibility</span>
                                </div>
                                <div class="space-y-2">
                                    <br>
                                    <h2 class="font-headline-md text-headline-md text-on-surface font-bold">Notre Vision
                                    </h2>
                                </div>
                                <p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">
                                    une société congolaise pacifique et équitable où chaque femme et chaque enfant
                                    vulnérable
                                    jouit pleinement de ses droits, vit dans la dignité, et devient un acteur autonome du
                                    développement
                                    de sa communauté.
                                </p>
                            </div>
                            <div class="pt-4">
                                <div class="h-0.5 w-12 bg-secondary rounded-full"></div>
                            </div>
                        </div>
                        <div
                            class="bg-surface-container-lowest p-8 lg:p-12 rounded-xl shadow-sm space-y-6 flex flex-col justify-between">
                            <div class="space-y-4">
                                <div
                                    class="w-12 h-12 rounded-lg bg-surface-container flex items-center justify-center text-secondary">
                                    <span class="material-symbols-outlined text-[26px]">diversity_1</span>
                                </div>
                                <div class="space-y-2">
                                    <br>
                                    <h2 class="font-headline-md text-headline-md text-on-surface font-bold">Notre
                                        Mission</h2>
                                </div>
                                <p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">
                                    Accompagner, protéger et autonomiser les femmes et les enfants en situation de
                                    vulnérabilité à
                                    travers une prise en charge holistique (psychosociale, juridique et économique), le
                                    renforcement des
                                    capacités des mères, l'accès à l'éducation pour les enfants et le plaidoyer pour la
                                    justice de genre.
                                </p>
                            </div>
                            <div class="pt-4">
                                <div class="h-0.5 w-12 bg-secondary rounded-full"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="reveal-section w-full py-16 lg:py-24 bg-surface-container-lowest">
                <div class="max-w-[1200px] mx-auto px-margin-mobile lg:px-margin">
                    <div class="max-w-2xl mb-16 space-y-3">
                        <span
                            class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-semibold">Trajectoire
                            Institutionnelle</span>
                        <h2 class="font-headline-lg text-headline-lg text-on-surface font-bold">Quatre jalons
                            fondateurs</h2>
                        <p class="font-body-md text-body-md text-on-surface-variant">
                            D'une conviction individuelle à une organisation civile officiellement mandatée par les
                            autorités de la République.
                        </p>
                    </div>
                    <div class="relative max-w-3xl">
                        <div class="absolute left-4 sm:left-6 top-3 bottom-3 w-0.5 bg-surface-container-highest"></div>
                        <div class="space-y-12">
                            <div class="relative pl-12 sm:pl-16">
                                <div
                                    class="absolute left-2 sm:left-4 top-1 -translate-x-1/2 w-4 h-4 rounded-full bg-surface-container-lowest ring-4 ring-secondary-fixed">
                                    <div class="w-2 h-2 rounded-full bg-secondary m-auto mt-1"></div>
                                </div>
                                <div class="space-y-2">
                                    <div class="flex items-center gap-3">
                                        <span
                                            class="font-headline-sm text-headline-sm font-bold text-on-surface">2017</span>
                                        <span
                                            class="px-2.5 py-0.5 rounded-full font-label-sm text-label-sm bg-surface-container text-on-surface-variant">Origine</span>
                                    </div>
                                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-medium">
                                        L’initiative pionnière sur fonds propres</h3>
                                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                                        Madame Na'Abwe Shabani engage ses ressources personnelles pour apporter un
                                        secours d'urgence, des vivres et une écoute aux femmes veuves et aux orphelins
                                        fragilisés dans le territoire d'Uvira.
                                    </p>
                                </div>
                            </div>
                            <div class="relative pl-12 sm:pl-16">
                                <div
                                    class="absolute left-2 sm:left-4 top-1 -translate-x-1/2 w-4 h-4 rounded-full bg-surface-container-lowest ring-4 ring-secondary-fixed">
                                    <div class="w-2 h-2 rounded-full bg-secondary m-auto mt-1"></div>
                                </div>
                                <div class="space-y-2">
                                    <div class="flex items-center gap-3">
                                        <span
                                            class="font-headline-sm text-headline-sm font-bold text-on-surface">2022</span>
                                        <span
                                            class="px-2.5 py-0.5 rounded-full font-label-sm text-label-sm bg-surface-container text-on-surface-variant">Modèle
                                            économique</span>
                                    </div>
                                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-medium">
                                        Structuration des premières AVEC</h3>
                                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                                        Adoption du modèle des Associations Villageoises d’Épargne et de Crédit (AVEC).
                                        Les bénéficiaires sortent de la dépendance à l'assistanat pour bâtir leurs
                                        propres activités génératrices de revenus.
                                    </p>
                                </div>
                            </div>
                            <div class="relative pl-12 sm:pl-16">
                                <div
                                    class="absolute left-2 sm:left-4 top-1 -translate-x-1/2 w-4 h-4 rounded-full bg-surface-container-lowest ring-4 ring-secondary-fixed">
                                    <div class="w-2 h-2 rounded-full bg-secondary m-auto mt-1"></div>
                                </div>
                                <div class="space-y-2">
                                    <div class="flex items-center gap-3">
                                        <span class="font-headline-sm text-headline-sm font-bold text-on-surface">Mai
                                            2023</span>
                                        <span
                                            class="px-2.5 py-0.5 rounded-full font-label-sm text-label-sm bg-surface-container text-on-surface-variant">Gouvernance</span>
                                    </div>
                                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-medium">Assemblée
                                        Générale Constitutive</h3>
                                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                                        Tenue solennelle de l'Assemblée Générale Constitutive à Uvira. Adoption unanime
                                        des Statuts et du Règlement Intérieur, et élection du Conseil d’Administration
                                        sous la présidence de Madame Nyassa Salumu Francine.
                                    </p>
                                </div>
                            </div>
                            <div class="relative pl-12 sm:pl-16">
                                <div
                                    class="absolute left-2 sm:left-4 top-1 -translate-x-1/2 w-4 h-4 rounded-full bg-secondary">
                                    <div class="w-2 h-2 rounded-full bg-on-secondary m-auto mt-1"></div>
                                </div>
                                <div class="space-y-2">
                                    <div class="flex items-center gap-3">
                                        <span
                                            class="font-headline-sm text-headline-sm font-bold text-secondary">2025—2026</span>
                                        <span
                                            class="px-2.5 py-0.5 rounded-full font-label-sm text-label-sm bg-secondary-fixed text-on-secondary-fixed font-semibold">Officialisation</span>
                                    </div>
                                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-medium">
                                        Reconnaissance de l'État et autorisation provinciale</h3>
                                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                                        Obtention de l’Avis Favorable officiel du Ministère du Genre, Famille et Enfant,
                                        suivi de la signature de l’Autorisation d'Opérer n° 26/100/GP/SK délivrée par le
                                        Gouvernorat du Sud-Kivu.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="reveal-section w-full py-16 lg:py-24 bg-surface-container-low/50">
                <div class="max-w-[1200px] mx-auto px-margin-mobile lg:px-margin">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg lg:gap-space-xl items-start">
                        <div class="lg:col-span-5 space-y-4">
                            {{-- <span
                                class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-semibold">Éthique
                                &amp; Pratique</span> --}}
                            <h2 class="font-headline-lg text-headline-lg text-on-surface font-bold">Nos 5 Valeurs
                                Cardinales</h2>
                            <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                                Chaque action, projet de terrain ou partenariat institutionnel s'évalue à l'un de ces
                                principes non négociables, garants de la confiance des communautés.
                            </p>
                            {{-- <div class="pt-4">
                                <div class="p-6 rounded-xl bg-surface-container-lowest shadow-sm space-y-2">
                                    <span
                                        class="font-label-sm text-label-sm text-outline uppercase tracking-wider">Engagement
                                        institutionnel</span>
                                    <p class="font-body-sm text-body-sm text-on-surface">
                                        Conformité stricte aux standards humanitaires internationaux et respect des
                                        directives nationales de protection de l'enfance.
                                    </p>
                                </div>
                            </div> --}}
                        </div>
                        <div class="lg:col-span-7 space-y-3">
                            <div
                                class="bg-surface-container-lowest p-6 rounded-xl shadow-sm flex items-start gap-4 transition-transform hover:-translate-y-0.5">
                                <div
                                    class="w-10 h-10 rounded-lg bg-surface-container flex items-center justify-center text-secondary shrink-0">
                                    <span class="material-symbols-outlined text-[22px]">health_and_safety</span>
                                </div>
                                <div>
                                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold">1.
                                        Dignité &amp; Respect</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">
                                        Placer la valeur humaine et la confidentialité au cœur de chaque action pour
                                        restaurer l'estime de soi des personnes accompagnées.
                                    </p>
                                </div>
                            </div>
                            <div
                                class="bg-surface-container-lowest p-6 rounded-xl shadow-sm flex items-start gap-4 transition-transform hover:-translate-y-0.5">
                                <div
                                    class="w-10 h-10 rounded-lg bg-surface-container flex items-center justify-center text-secondary shrink-0">
                                    <span class="material-symbols-outlined text-[22px]">balance</span>
                                </div>
                                <div>
                                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold">2.
                                        Équité &amp; Justice sociale</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">
                                        Lutter activement contre les discriminations fondées sur le genre et
                                        défendre les droits fondamentaux des femmes et des enfants.
                                    </p>
                                </div>
                            </div>
                            <div
                                class="bg-surface-container-lowest p-6 rounded-xl shadow-sm flex items-start gap-4 transition-transform hover:-translate-y-0.5">
                                <div
                                    class="w-10 h-10 rounded-lg bg-surface-container flex items-center justify-center text-secondary shrink-0">
                                    <span class="material-symbols-outlined text-[22px]">volunteer_activism</span>
                                </div>
                                <div>
                                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold">3.
                                        Solidarité &amp; Empathie</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">
                                        Agir avec compassion et esprit de fraternité aux côtés des communautés
                                        les plus marginalisées.
                                    </p>
                                </div>
                            </div>
                            <div
                                class="bg-surface-container-lowest p-6 rounded-xl shadow-sm flex items-start gap-4 transition-transform hover:-translate-y-0.5">
                                <div
                                    class="w-10 h-10 rounded-lg bg-surface-container flex items-center justify-center text-secondary shrink-0">
                                    <span class="material-symbols-outlined text-[22px]">policy</span>
                                </div>
                                <div>
                                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold">4.
                                        Transparence et Redevabilité</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">
                                        Garantir une gestion intègre des ressources et rendre compte
                                        fidèlement aux bénéficiaires, partenaires et autorités.
                                    </p>
                                </div>
                            </div>
                            <div
                                class="bg-surface-container-lowest p-6 rounded-xl shadow-sm flex items-start gap-4 transition-transform hover:-translate-y-0.5">
                                <div
                                    class="w-10 h-10 rounded-lg bg-surface-container flex items-center justify-center text-secondary shrink-0">
                                    <span class="material-symbols-outlined text-[22px]">chevron_left</span>
                                </div>
                                <div>
                                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold">5.
                                        Protection (« Do No Harm »)</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">
                                        Assurer un environnement sécurisé, sans
                                        exploitation ni abus, pour toutes les femmes et les mineurs pris en charge.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="reveal-section w-full py-16 bg-surface-container-lowest border-t-0">
                <div class="max-w-[1200px] mx-auto px-margin-mobile lg:px-margin">
                    <div
                        class="p-8 lg:p-12 rounded-xl bg-surface-container-low flex flex-col md:flex-row items-center justify-between gap-space-lg">
                        <div class="space-y-2 text-center md:text-left max-w-xl">
                            <h3 class="font-headline-md text-headline-md text-on-surface font-bold">Prendre part à
                                cette dynamique</h3>
                            <p class="font-body-md text-body-md text-on-surface-variant">
                                Que vous soyez partenaire institutionnel, bailleur de fonds ou bénévole solidaire, votre
                                appui amplifie notre impact.
                            </p>
                        </div>
                        <div class="flex flex-wrap items-center justify-center gap-space-md shrink-0">
                            <a class="px-6 py-3 rounded-lg bg-secondary text-on-secondary font-label-md text-label-md hover:bg-on-secondary-fixed-variant transition-all shadow-sm"
                                data-path="soutenir-notre-action" href="{{ route('contact') }}">
                                Soutenir notre action
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

@endsection
