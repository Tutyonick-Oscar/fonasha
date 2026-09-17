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
                 <div class="pt-space-xs"><span
                         class="font-label-sm text-label-sm text-outline uppercase tracking-wider block">Autorisation
                         officielle</span><span class="font-body-sm text-body-sm text-on-surface font-medium">N°
                         26/100/GP/SK</span></div>
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
                     Accompagner durablement
                 </p>
             </div>
         </div>
     </div>
 </footer>
