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
                            <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-wide py-space-sm">
                                Actualités
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
                    @if ($activeNews)
                        <article
                            class="group relative bg-surface-container-low rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300">
                            <div class="grid grid-cols-1 lg:grid-cols-12">
                                <!-- Image narrative de terrain -->
                                <div
                                    class="lg:col-span-7 relative min-h-[340px] lg:min-h-[460px] overflow-hidden bg-surface-dim">
                                    <img class="w-full h-full object-cover " data-alt="article fonasha"
                                        src="/storage/{{ $activeNews->avatar }}" />

                                </div>
                                <!-- Contenu texte à forte lisibilité -->
                                <div class="lg:col-span-5 p-space-lg lg:p-space-xl flex flex-col justify-between">
                                    <div class="space-y-space-md">
                                        <div class="flex items-center gap-space-sm text-on-surface-variant">
                                            <span
                                                class="material-symbols-outlined text-[18px] text-secondary">calendar_today</span>
                                            <time class="font-body-sm text-body-sm text-on-surface-variant"
                                                datetime="2024-04-12">
                                                @if ($activeNews->type == 'blog')
                                                    {{ $activeNews->created_at->format('d M Y') }}
                                                @else
                                                    {{ $activeNews->running_date ? $activeNews->running_date->format('d M Y') : $activeNews->created_at->format('d M Y') }}
                                                @endif
                                            </time>

                                        </div>
                                        <h2
                                            class="cursor-pointer font-headline-md text-headline-md text-on-surface leading-tight tracking-tight group-hover:text-secondary transition-colors">
                                            <a href="{{ route('blog.details',['slug'=>$activeNews->slug]) }}">
                                                {{ $activeNews->title }}
                                            </a>
                                        </h2>
                                        <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                                            {{ str(html_entity_decode(strip_tags(str($activeNews->description)->markdown()), ENT_QUOTES, 'UTF-8'))->limit(
                                                265,
                                            ) }}
                                        </p>

                                    </div>
                                    <div class="pt-space-lg">
                                        <a class="inline-flex items-center gap-space-xs font-label-md text-label-md text-on-surface group-hover:text-secondary font-semibold transition-colors"
                                            href="{{ route('blog.details',['slug'=>$activeNews->slug]) }}">
                                            <span>Consulter le récit complet</span>
                                            <span
                                                class="material-symbols-outlined text-[18px] transition-transform group-hover:translate-x-1">arrow_forward</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    @else
                        <div class="p-space-lg bg-surface-container-low rounded-xl text-center">
                            <p class="font-body-md text-body-md text-on-surface-variant">Aucun article à la une pour le moment.</p>
                        </div>
                    @endif
                </div>
            </section>

            <!-- Navigation par filtres légers -->
            <section class="w-full bg-surface-container-lowest pb-space-lg">
                <div class="max-w-[1200px] mx-auto px-margin-mobile lg:px-margin">
                    <div class="flex items-center gap-space-sm overflow-x-auto pb-space-xs">
                        <!-- Lien actif (Tous) -->
                        <a href="{{ route('blogs') }}"
                            class="px-space-md py-2 rounded-md font-label-md text-label-md {{ request('category') === null ? 'bg-secondary text-on-secondary' : 'bg-surface-container text-on-surface-variant hover:bg-surface-container-high' }} shadow-sm whitespace-nowrap">Tous</a>
                        <!-- Liens inactifs -->
                        @foreach ($categories as $category)
                            <a href="{{ route('blogs', ['category' => $category->name]) }}"
                                class="px-space-md py-2 rounded-md font-label-md text-label-md {{ request('category') === $category->name ? 'bg-secondary text-on-secondary' : 'bg-surface-container text-on-surface-variant hover:bg-surface-container-high' }} transition-colors whitespace-nowrap">
                                {{ $category->name }}
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
                        <span class="font-body-sm text-body-sm text-on-surface-variant hidden sm:inline-block">{{ count($blogs) }}
                            publications validées</span>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-lg">
                        @forelse ($blogs as $blog)
                            <article
                                class="bg-surface-container-lowest rounded-xl p-space-lg flex flex-col justify-between shadow-sm hover:shadow-md transition-all duration-200">
                                <div>
                                    <div class="w-full h-44 rounded-lg overflow-hidden mb-space-md bg-surface-dim">
                                        <img class="w-full h-full object-cover" data-alt="blog-fonasha"
                                            src="/storage/{{ $blog->avatar }}" />
                                    </div>
                                    <div class="flex items-center gap-space-xs text-on-surface-variant mb-space-xs">
                                        <span
                                            class="px-space-xs py-0.5 rounded font-label-sm text-label-sm bg-surface-container text-on-surface font-medium">
                                            {{ $blog->category->name }} </span>
                                        <span class="text-outline-variant">•</span>
                                        <time class="font-label-sm text-label-sm text-outline">
                                            @if ($blog->type == 'blog')
                                                {{ $blog->created_at->format('d M Y') }}
                                            @else
                                                {{ $blog->running_date ? $blog->running_date->format('d M Y') : $blog->created_at->format('d M Y') }}
                                            @endif
                                        </time>
                                    </div>
                                    <h4
                                        class="font-headline-sm text-headline-sm text-on-surface tracking-tight mb-space-xs leading-snug">
                                        {{ $blog->title }}
                                    </h4>
                                    <p
                                        class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed line-clamp-3">
                                        {{ str(html_entity_decode(strip_tags(str($blog->description)->markdown()), ENT_QUOTES, 'UTF-8'))->limit(170) }}
                                    </p>
                                </div>
                                <div class="pt-space-md">
                                    <a class="inline-flex items-center gap-1 font-label-md text-label-md text-secondary hover:text-on-secondary-fixed-variant transition-colors"
                                        href="{{ route('blog.details',['slug'=>$blog->slug]) }}">
                                        <span>Lire la suite</span>
                                        <span class="material-symbols-outlined text-[16px]">north_east</span>
                                    </a>
                                </div>
                            </article>
                        @empty
                            <div class="col-span-1 md:col-span-3 p-space-lg bg-surface-container-low rounded-xl text-center">
                                <p class="font-body-md text-body-md text-on-surface-variant">Aucun article récent à afficher pour le moment.</p>
                            </div>
                        @endforelse
                    </div>
                    <div class="mt-8">
                        {{ $blogs->appends(['category' => request('category')])->links() }}
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
