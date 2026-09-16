 <header
     class="fixed top-0 left-0 w-full z-50 bg-surface-container-lowest/90 backdrop-blur-xl shadow-[0_1px_8px_rgba(0,0,0,0.04)]">
     <div class="h-20 max-w-[1200px] mx-auto px-margin-mobile lg:px-margin flex items-center justify-between">
         <div class="flex items-center gap-space-md">
             <img alt="Logo" class="h-8 w-auto object-contain"
                 src="https://lh3.googleusercontent.com/aida/AEtjO1W0yFl15xvN6DCLkcvjWbAoFBb_54MZDiuq0PNUiXnmYnuasK69gEghLczJqhlmUCYGrckuqsG1GgFvY45i5pDgrEtTaz1jh2I5fNsGE3KhNeaiDBSp3Rlhl29M98N9eI_KySib7rJleGPwUvNfpcQecMqz5FFgxwNTjM7QFHPOSRqkk9sw2zyekyRJUDmhn-O6RkCGe4mMNfmP1c24gfmT8B5k1kISoBu3wgGj30ucUAmV0b0FA8cvnMs" /><a
                 class="flex flex-col" data-path="accueil" href="#"><span
                     class="font-headline-sm text-headline-sm text-on-surface tracking-tight leading-none">FONASHA</span><span
                     class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider mt-0.5">Maman
                     Na'Abwe Shabani</span></a>
         </div>
         <nav class="hidden md:flex items-center gap-space-xs p-1 rounded-xl bg-surface-container-low/50">
            @php
                $activeClasses = "px-space-md py-space-sm transition-colors bg-surface-container text-on-surface font-semibold rounded-xl";
                $inactiveClasses = "px-space-md py-space-sm font-label-md text-label-md text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-colors rounded-xl";
            @endphp
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? $activeClasses : $inactiveClasses }}" @if(request()->routeIs('home')) aria-current="page" @endif>Accueil</a>
            <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? $activeClasses : $inactiveClasses }}" @if(request()->routeIs('about')) aria-current="page" @endif>À propos</a>
            <a href="{{ route('team') }}" class="{{ request()->routeIs('team') ? $activeClasses : $inactiveClasses }}" @if(request()->routeIs('team')) aria-current="page" @endif>Équipe</a>
            <a href="{{ route('blogs') }}" class="{{ request()->routeIs('blogs') ? $activeClasses : $inactiveClasses }}" @if(request()->routeIs('blogs')) aria-current="page" @endif>Blog</a>
            <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? $activeClasses : $inactiveClasses }}" @if(request()->routeIs('contact')) aria-current="page" @endif>Contact</a>
        </nav>
         <div class="flex items-center gap-space-md"><a
                 class="hidden sm:inline-flex items-center justify-center px-space-lg py-space-sm rounded-xl font-label-md text-label-md bg-secondary text-on-secondary hover:bg-on-secondary-fixed-variant transition-all"
                 data-path="soutenir-notre-action" href="#">Soutenir notre action</a>
             {{-- <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center"><span
                     class="material-symbols-outlined text-on-primary text-[18px]">person</span></div> --}}
         </div>
     </div>
 </header>
