 <footer class="w-full bg-surface-container-low/60 pt-space-xl pb-space-lg">
     <div class="max-w-[1200px] mx-auto px-margin-mobile lg:px-margin">
         <div class="grid grid-cols-1 md:grid-cols-12 gap-space-xl pb-space-xl">
             <div class="md:col-span-5 space-y-space-sm">
                 <div class="flex items-center gap-space-sm"><span
                         class="font-headline-sm text-headline-sm text-on-surface font-bold tracking-tight">FONASHA
                         ASBL</span>
                 </div>
                 <p class="font-body-sm text-body-sm text-on-surface-variant max-w-sm leading-relaxed">Fondation
                     Maman Na'Abwe Shabani. Engagement communautaire, solidarité durable et autonomisation au
                     Sud-Kivu.</p>

                 {{-- Social Media Links --}}
                 <div class="pt-space-xs flex gap-space-sm">
                     <!-- Facebook -->
                     <a href="#"
                         class="w-10 h-10 rounded-full bg-on-surface/10  transition-all duration-200 flex items-center justify-center group"
                          rel="noopener noreferrer">
                         <svg class="w-5 h-5 text-[var(--surface-border)]  transition-colors" fill="currentColor"
                             viewBox="0 0 24 24">
                             <path
                                 d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                         </svg>
                     </a>

                     <!-- X (Twitter) -->
                     <a href="#"
                         class="w-10 h-10 rounded-full bg-on-surface/10  transition-all duration-200 flex items-center justify-center group"
                          rel="noopener noreferrer">
                         <svg class="w-5 h-5 text-[var(--surface-border)]  transition-colors" fill="currentColor"
                             viewBox="0 0 24 24">
                             <path
                                 d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                         </svg>
                     </a>
                      <a href="#"
                         class="w-10 h-10 rounded-full bg-on-surface/10  transition-all duration-200 flex items-center justify-center group"
                          rel="noopener noreferrer">
                         <svg class="w-5 h-5 text-[var(--surface-border)]  transition-colors" fill="currentColor"
                             viewBox="0 0 24 24">
                             <path
                                 d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451c.979 0 1.771-.773 1.771-1.729V1.729C24 .774 23.204 0 22.225 0z" />
                         </svg>
                     </a>
                 </div>
             </div>
             <div class="md:col-span-3 space-y-space-sm">
                 <h4 class="font-label-md text-label-md text-on-surface uppercase tracking-wider">Navigation</h4>
                 <ul class="space-y-space-xs font-body-sm text-body-sm text-on-surface-variant">
                     <li><a class="hover:text-on-surface transition-colors" data-path="accueil"
                             href="{{ route('home') }}">Accueil</a></li>
                     <li><a class="hover:text-on-surface transition-colors" data-path="a-propos"
                             href="{{ route('about') }}">À
                             propos de la Fondation</a></li>
                     <li><a class="hover:text-on-surface transition-colors" data-path="equipe"
                             href="{{ route('team') }}">Équipe
                             dirigeante</a></li>
                     <li><a class="hover:text-on-surface transition-colors" data-path="blog"
                             href="{{ route('blogs') }}">Actualités
                             &amp; Blog</a></li>
                     <li><a class="hover:text-on-surface transition-colors" data-path="contact"
                             href="{{ route('contact') }}">Contact
                             &amp; Accès</a></li>
                 </ul>
             </div>

             <div class="md:col-span-4 space-y-space-sm">
                 <h4 class="font-label-md text-label-md text-on-surface uppercase tracking-wider">Siège &amp;
                     News</h4>
                 <address class="not-italic font-body-sm text-body-sm text-on-surface-variant space-y-1.5">
                     <p class="text-on-surface">Uvira, Province du Sud-Kivu, RDC</p>
                     <p>Avenue du 30 Juin, Mulongwe</p>
                     <p>
                         <strong>Abonnez-vous à notre newsletter</strong>
                     </p>
                     <livewire:newsletter-form />
                 </address>
             </div>
         </div>
         <div
             class="pt-space-lg flex flex-col sm:flex-row items-center justify-between gap-space-md text-center sm:text-left">
             <p class="font-body-sm text-body-sm text-on-surface-variant">© {{ now()->year }} FONASHA ASBL. Tous
                 droits réservés.
             </p>
             <div class="flex items-center gap-space-lg font-body-sm text-body-sm text-on-surface-variant">
                 <p class="hover:text-on-surface transition-colors" data-path="mentions-legales">Protéger</p>
                 <p class="hover:text-on-surface transition-colors" data-path="statuts">Autonomiser </p>
                 <p class="hover:text-on-surface transition-colors" data-path="politique-de-confidentialite">
                     Accompagner
                 </p>
             </div>
         </div>
     </div>
 </footer>
