@extends('layouts.base')
@section('content')
    <main class="w-full pt-20 bg-surface-container-lowest min-h-screen">
        <div class="flex flex-col w-full">
            <div class="w-full bg-surface-container-low/40">
                <div class="max-w-[820px] mx-auto px-margin-mobile sm:px-gutter lg:px-0 pt-space-lg pb-space-md">
                    <nav class="flex items-center gap-space-xs text-on-surface-variant font-label-md text-label-md">
                        <a class="inline-flex items-center gap-1.5 hover:text-secondary transition-colors group"
                            data-path="blog" href="{{ route('blogs') }}">
                            <span
                                class="material-symbols-outlined text-[16px] transition-transform group-hover:-translate-x-0.5">arrow_back</span>
                            <span>Retour aux actualités &amp; récits</span>
                        </a>
                    </nav>
                </div>
            </div>
            <article class="w-full">
                <header class="w-full pt-space-lg sm:pt-space-xl pb-space-lg">
                    <div
                        class="max-w-[820px] mx-auto px-margin-mobile sm:px-gutter lg:px-0 space-y-space-md sm:space-y-space-lg">
                        <div class="flex flex-wrap items-center gap-space-sm">
                            <span
                                class="inline-flex items-center gap-1.5 px-space-md py-1 rounded-full font-label-sm text-label-sm text-secondary font-semibold uppercase tracking-wider">
                                {{ $blog->type }} / {{ $blog->category->name }}
                            </span>
                            <span
                                class="inline-flex items-center gap-1 font-label-sm text-label-sm text-on-surface-variant">
                                @if ($blog->location)
                                    <span class="material-symbols-outlined text-[14px]">location_on</span>
                                    {{ $blog->location }}
                                @endif

                            </span>
                        </div>
                        <h1
                            class="font-headline-lg text-headline-lg sm:text-[44px] sm:leading-[52px] text-on-surface font-bold tracking-tight">
                            {{ $blog->title }}
                        </h1>
                        {{-- <p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed font-normal">
                            Plongée au cœur des quartiers de Mulongwe et Kilomoni, où la confiance mutuelle et les
                            caisses d'épargne communautaires redonnent dignité, indépendance financière et perspectives
                            d'avenir aux mères de famille.
                        </p> --}}
                        <div class="pt-space-sm pb-space-xs flex flex-wrap items-center justify-between gap-space-md">
                            <div class="flex items-center gap-space-md">
                                <div
                                    class="w-12 h-12 rounded-full bg-surface-container-highest flex items-center justify-center text-on-surface font-bold font-headline-sm text-[16px]">
                                    {{ str($blog->user->name)->substr(0, 2)->upper() }}
                                </div>
                                <div>
                                    <div class="flex items-center gap-2">
                                        <span class="font-label-md text-label-md text-on-surface font-bold">
                                            {{ $blog->user->name }}
                                        </span>

                                    </div>

                                </div>
                            </div>
                            <div class="flex items-center gap-space-md text-on-surface-variant font-label-md text-label-md">
                                <span class="inline-flex items-center gap-1.5">
                                    <span class="material-symbols-outlined text-[16px]">calendar_today</span>
                                    @if ($blog->type == 'blog')
                                        {{ $blog->created_at->format('d M Y') }}
                                    @else
                                        {{ $blog->running_date ? $blog->running_date->format('d M Y') : $blog->created_at->format('d M Y') }}
                                    @endif
                                </span>
                                {{-- <span class="text-outline-variant">•</span>
                                <span class="inline-flex items-center gap-1.5">
                                    <span class="material-symbols-outlined text-[16px]">schedule</span>
                                    5 min de lecture
                                </span> --}}
                            </div>
                        </div>
                    </div>
                </header>
                <div class="max-w-[980px] mx-auto px-margin-mobile sm:px-gutter lg:px-0 pb-space-xl">
                    <figure class="relative rounded-2xl overflow-hidden bg-surface-container shadow-md">
                        <img class="w-full h-[320px] sm:h-[460px] object-cover" data-alt="blog avatar"
                            src="/storage/{{ $blog->avatar }}" />

                    </figure>
                </div>
                <div
                    class="max-w-[980px] mx-auto  sm:px-gutter lg:px-0 space-y-space-xl pb-space-xl text-on-surface font-body-lg text-body-lg leading-relaxed">
                    <div class="space-y-space-md">
                        <div class="text-on-surface-variant font-body-md text-body-md leading-relaxed flex flex-col gap-4">
                            {!! str($blog->description)->markdown()->sanitizeHtml() !!}
                        </div>
                    </div>
                    <div class="pt-space-lg">
                        <div
                            class="flex flex-col sm:flex-row sm:items-center justify-between gap-space-md p-space-md rounded-xl bg-surface-container-low/70">
                            <div class="flex items-center gap-space-xs text-on-surface-variant font-label-md text-label-md">
                                <span class="material-symbols-outlined text-[18px]">share</span>
                                <span class="text-on-surface font-semibold">Partager ce récit :</span>
                            </div>
                            <div class="flex items-center gap-2" id="share-buttons">
                                <button
                                    class="px-space-md py-1.5 rounded-lg bg-surface-container-lowest hover:bg-surface-container text-on-surface font-label-sm text-label-sm transition-colors flex items-center gap-1.5 shadow-sm"
                                    onclick="window.open('https://api.whatsapp.com/send?text=' + encodeURIComponent(document.title + ' ' + window.location.href), '_blank')"
                                    title="Partager sur WhatsApp">
                                    <span>WhatsApp</span>
                                </button>
                                <button
                                    class="px-space-md py-1.5 rounded-lg bg-surface-container-lowest hover:bg-surface-container text-on-surface font-label-sm text-label-sm transition-colors flex items-center gap-1.5 shadow-sm"
                                    onclick="window.open('https://www.linkedin.com/sharing/share-offsite/?url=' + encodeURIComponent(window.location.href), '_blank')"
                                    title="Partager sur LinkedIn">
                                    <span>LinkedIn</span>
                                </button>
                                <button
                                    class="px-space-md py-1.5 rounded-lg bg-surface-container-lowest hover:bg-surface-container text-on-surface font-label-sm text-label-sm transition-colors flex items-center gap-1.5 shadow-sm"
                                    onclick="window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent(document.title) + '&amp;url=' + encodeURIComponent(window.location.href), '_blank')"
                                    title="Partager sur X">
                                    <span>X</span>
                                </button>
                                <button
                                    class="px-space-md py-1.5 rounded-lg bg-surface-container-lowest hover:bg-surface-container text-on-surface font-label-sm text-label-sm transition-colors flex items-center gap-1.5 shadow-sm"
                                    onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(window.location.href), '_blank')"
                                    title="Partager sur Facebook">
                                    <span>Facebook</span>
                                </button>
                                <button
                                    class="px-space-md py-1.5 rounded-lg bg-surface-container-lowest hover:bg-surface-container text-on-surface font-label-sm text-label-sm transition-colors flex items-center gap-1.5 shadow-sm"
                                    id="copy-btn"
                                    onclick="navigator.clipboard.writeText(window.location.href); const btn = document.getElementById('copy-btn-text'); btn.textContent = 'Copié !'; setTimeout(() =&gt; btn.textContent = 'Copier le lien', 2000);"
                                    title="Copier le lien de l'article">
                                    <span class="material-symbols-outlined text-[14px]">link</span>
                                    <span id="copy-btn-text">Copier le lien</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="w-full py-space-xl">
                    <div class="max-w-[980px] mx-auto px-margin-mobile sm:px-gutter lg:px-0 space-y-space-lg">
                        <div class="flex items-center justify-between">
                            <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">Articles récents
                            </h3>
                            <a class="font-label-md text-label-md text-secondary hover:underline flex items-center gap-1"
                                data-path="blog" href="{{ route('blogs') }}">
                                Voir tous les articles
                                <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                            </a>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
                            @forelse ($recentBlogs as $item)
                                <a class="group p-space-md rounded-2xl bg-surface-container-low hover:bg-surface-container transition-all flex flex-col justify-between space-y-space-md shadow-sm"
                                    href="{{ route('blog.details', ['slug' => $item->slug]) }}">
                                    <div class="space-y-space-xs">
                                        <span
                                            class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">
                                            {{ $item->type }} / {{ $item->category->name }}
                                        </span>
                                        <h4
                                            class="font-headline-sm text-[18px] text-on-surface font-semibold group-hover:text-secondary transition-colors line-clamp-2">
                                            {{ $item->title }}
                                        </h4>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2">
                                            {{ str(html_entity_decode(strip_tags(str($item->description)->markdown()), ENT_QUOTES, 'UTF-8'))->limit(151) }}
                                        </p>
                                        </p>
                                    </div>
                                    <div
                                        class="flex items-center gap-space-xs text-on-surface-variant font-label-sm text-label-sm pt-space-xs">
                                        <span>
                                            @if ($item->type == 'blog')
                                                {{ $item->created_at->format('d M Y') }}
                                            @else
                                                {{ $item->running_date ? $item->running_date->format('d M Y') : $item->created_at->format('d M Y') }}
                                            @endif
                                        </span>

                                    </div>
                                </a>
                            @empty
                            @endforelse

                        </div>
                    </div>
                </section>
            </article>
        </div>
    </main>
@endsection
@section('title', $blog->title)
