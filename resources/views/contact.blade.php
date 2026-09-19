@extends('layouts.base')

@section('title', 'Fonasha asbl - Nous contacter')

@section('content')
    <main class="w-full pt-20 bg-surface-container-lowest min-h-screen">
        <div class="flex flex-col w-full">
            <section class="w-full py-space-xl lg:py-16">
                <div class="max-w-[1200px] mx-auto px-margin-mobile lg:px-margin">
                    <div class="max-w-2xl mb-space-xl">
                        {{-- <div
                            class="inline-flex items-center gap-2 px-space-sm py-1 rounded-full bg-surface-container text-on-surface-variant mb-space-sm">
                            <span class="w-2 h-2 rounded-full bg-secondary"></span>
                            <span class="font-label-sm text-label-sm uppercase tracking-wider">Ligne d'échange
                                direct</span>
                        </div> --}}
                        <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-wide text-balance">
                            Contactez la Fonasha
                        </h1>
                        <p class="font-body-lg text-body-lg text-on-surface-variant mt-space-sm leading-relaxed">
                            Bailleurs institutionnels, partenaires opérationnels ou membres de la communauté locale :
                            nos équipes restent à votre disposition pour dialoguer, coordonner nos synergies et répondre
                            à vos questions.
                        </p>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg lg:gap-space-xl items-start">
                        <div class="lg:col-span-5 space-y-space-md">
                            <div class="bg-surface-container-low rounded-xl p-space-lg">
                                <div class="flex items-center gap-space-sm mb-space-sm">
                                    <span class="material-symbols-outlined text-secondary text-[22px]">location_on</span>
                                    <h2 class="font-headline-sm text-headline-sm text-on-surface">Siège opérationnel
                                    </h2>
                                </div>
                                <p class="font-body-md text-body-md text-on-surface font-medium leading-snug">
                                    Avenue du 30 Juin / Mulongwe
                                </p>
                                <p class="font-body-md text-body-md text-on-surface-variant">
                                    Ville d'Uvira, Province du Sud-Kivu, République Démocratique du Congo
                                </p>
                                <div
                                    class="mt-space-md pt-space-sm flex items-center gap-space-xs text-on-surface-variant font-label-sm text-label-sm">
                                    {{-- <span class="material-symbols-outlined text-[18px]">verified</span> --}}
                                    {{-- <span>Agrément officiel RDC : Réf. n° 26/100/GP/SK</span> --}}
                                </div>
                            </div>
                            {{-- <div class="bg-surface-container-low rounded-xl p-space-lg">
                                <div class="flex items-center gap-space-sm mb-space-sm">
                                    <span class="material-symbols-outlined text-secondary text-[22px]">call</span>
                                    <h2 class="font-headline-sm text-headline-sm text-on-surface">Téléphones direct
                                        &amp; WhatsApp</h2>
                                </div>
                                <div class="space-y-space-xs">
                                    <a class="flex items-center justify-between p-space-sm rounded-lg bg-surface-container-lowest hover:bg-surface-container transition-colors group"
                                        href="tel:+243895838826">
                                        <span
                                            class="font-body-md text-body-md text-on-surface font-semibold tracking-tight">+243
                                            895 838 826</span>
                                        <span
                                            class="font-label-sm text-label-sm px-2 py-0.5 rounded-full bg-surface-container text-on-surface-variant group-hover:bg-surface-container-highest">Principal
                                            &amp; WhatsApp</span>
                                    </a>
                                    <a class="flex items-center justify-between p-space-sm rounded-lg bg-surface-container-lowest hover:bg-surface-container transition-colors group"
                                        href="tel:+243975863374">
                                        <span
                                            class="font-body-md text-body-md text-on-surface font-semibold tracking-tight">+243
                                            975 863 374</span>
                                        <span
                                            class="font-label-sm text-label-sm px-2 py-0.5 rounded-full bg-surface-container text-on-surface-variant group-hover:bg-surface-container-highest">WhatsApp
                                            Direct</span>
                                    </a>
                                </div>
                            </div> --}}
                            {{-- <div class="bg-surface-container-low rounded-xl p-space-lg">
                                <div class="flex items-center gap-space-sm mb-space-sm">
                                    <span
                                        class="material-symbols-outlined text-secondary text-[22px]">alternate_email</span>
                                    <h2 class="font-headline-sm text-headline-sm text-on-surface">Courriels officiels
                                    </h2>
                                </div>
                                <div class="space-y-space-xs font-body-md text-body-md">
                                    <a class="block p-space-sm rounded-lg bg-surface-container-lowest hover:bg-surface-container transition-colors text-on-surface"
                                        href="mailto:fonashanaabwe@gmail.com">
                                        <span class="font-medium">fonashanaabwe@gmail.com</span>
                                        <span
                                            class="block font-label-sm text-label-sm text-on-surface-variant mt-0.5">Secrétariat
                                            général &amp; partenariats</span>
                                    </a>
                                    <a class="block p-space-sm rounded-lg bg-surface-container-lowest hover:bg-surface-container transition-colors text-on-surface"
                                        href="mailto:adrienbarienda@gmail.com">
                                        <span class="font-medium">adrienbarienda@gmail.com</span>
                                        <span
                                            class="block font-label-sm text-label-sm text-on-surface-variant mt-0.5">Coordination
                                            exécutive</span>
                                    </a>
                                </div>
                            </div> --}}
                            <div class="bg-surface-container-high rounded-xl p-space-lg">
                                <div class="flex items-center gap-space-sm mb-space-xs">
                                    <span class="material-symbols-outlined text-on-surface text-[20px]">schedule</span>
                                    <h3 class="font-headline-sm text-headline-sm text-on-surface">Accueil &amp;
                                        Permanence d'écoute</h3>
                                </div>
                                <p class="font-body-md text-body-md text-on-surface-variant">
                                    Mulongwe : Du Lundi au Vendredi, de 8h00 à 16h30 sans interruption. Accueil
                                    communautaire et orientation des bénéficiaires.
                                </p>
                            </div>
                        </div>
                        <div class="lg:col-span-7">
                            <div class="bg-surface-container-lowest rounded-xl p-space-lg lg:p-space-xl border-[1px]">
                                <h2 class="font-headline-md text-headline-md text-on-surface tracking-tight mb-space-xs">
                                    Envoyez un message
                                </h2>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-lg">
                                    Remplissez les champs ci-dessous. Un responsable de la fondation vous recontactera
                                    sous 48 heures.
                                </p>
                                <form class="space-y-space-md" id="contact-form" method="POST" action="{{ route('contact.store') }}">
                                    @csrf
                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
                                        <div class="space-y-1">
                                            <label class="font-label-md text-label-md text-on-surface block"
                                                for="full-name">
                                                Nom complet <span class="text-error">*</span>
                                            </label>
                                            <input name="fullname"
                                                class="w-full px-space-md py-space-sm rounded-lg text-body-md font-body-md text-on-surface placeholder:text-outline border-[1px] focus:border-none outline-none focus:bg-surface-container transition-all"
                                                id="full-name" placeholder="Ex. Sarah Mukamba" required=""
                                                type="text" />
                                            @error('fullname')
                                                <small class="text-[crimson]">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                        <div class="space-y-1">
                                            <label class="font-label-md text-label-md text-on-surface block" for="email">
                                                Adresse e-mail <span class="text-error">*</span>
                                            </label>
                                            <input name="email"
                                                class="w-full px-space-md py-space-sm rounded-lg text-body-md font-body-md text-on-surface placeholder:text-outline border-[1px] focus:border-none outline-none focus:bg-surface-container transition-al"
                                                id="email" placeholder="nom@organisation.org" required=""
                                                type="email" />
                                            @error('email')
                                                <small class="text-[crimson]">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
                                        <div class="space-y-1">
                                            <label class="font-label-md text-label-md text-on-surface block" for="phone">
                                                Téléphone (optionnel)
                                            </label>
                                            <input name="phone"
                                                class="w-full px-space-md py-space-sm rounded-lg text-body-md font-body-md text-on-surface placeholder:text-outline border-[1px] focus:border-none outline-none focus:bg-surface-container transition-al"
                                                id="phone" placeholder="+243 ..." type="tel" />
                                            @error('phone')
                                                <small class="text-[crimson]">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                        <div class="space-y-1">
                                            <label class="font-label-md text-label-md text-on-surface block" for="subject">
                                                Objet de votre échange <span class="text-error">*</span>
                                            </label>
                                            <select name="object"
                                                class="w-full px-space-md py-space-sm rounded-lg text-body-md font-body-md text-on-surface placeholder:text-outline border-[1px] focus:border-none outline-none focus:bg-surface-container transition-al cursor-pointer"
                                                id="subject" required="">
                                                <option disabled="" selected="" value="">Sélectionnez une
                                                    option</option>
                                                <option value="partenariat">Proposition de partenariat / Bailleurs
                                                </option>
                                                <option value="soutien">Appui communautaire &amp; projets terrain
                                                </option>
                                                <option value="don">Renseignements don &amp; mécénat</option>
                                                <option value="beneficiaire">Demande d'accompagnement local</option>
                                                <option value="autre">Autre demande générale</option>
                                            </select>
                                            @error('object')
                                                <small class="text-[crimson]">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="space-y-1">
                                        <label class="font-label-md text-label-md text-on-surface block" for="message">
                                            Message <span class="text-error">*</span>
                                        </label>
                                        <textarea name="message"
                                            class="w-full px-space-md py-space-sm border-[1px] rounded-lg text-body-md font-body-md text-on-surface placeholder:text-outline outline-none focus:bg-surface-container transition-all resize-y"
                                            id="message" placeholder="Présentez votre requête, le contexte de votre structure ou vos questions spécifiques..."
                                            required="" rows="5"></textarea>
                                        @error('message')
                                            <small class="text-[crimson]">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div
                                        class="pt-space-xs flex flex-col sm:flex-row items-center justify-between gap-space-md">
                                        {{-- <p class="font-body-sm text-body-sm text-on-surface-variant order-2 sm:order-1">
                                            Données traitées en toute confidentialité par le secrétariat de l'ASBL.
                                        </p> --}}
                                        <button
                                            class="w-full sm:w-auto px-space-xl py-space-sm rounded-lg bg-primary text-on-primary font-label-md text-label-md hover:opacity-90 active:scale-[0.99] transition-all flex items-center justify-center gap-space-xs order-1 sm:order-2 cursor-pointer"
                                            type="submit">
                                            <span>Transmettre le message</span>
                                            <span class="material-symbols-outlined text-[18px]">send</span>
                                        </button>
                                    </div>
                                    @if (session()->has('success'))
                                    <div class="hidden p-space-md rounded-lg bg-surface-container text-secondary flex items-start gap-space-sm"
                                        id="success-message">
                                        <span class="material-symbols-outlined text-[20px]">check_circle</span>
                                        <span class="font-body-md text-body-md text-on-surface">Votre message a été
                                            transmis avec succès. Le secrétariat vous répondra sous peu.</span>
                                    </div>
                                    @endif
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>


@endsection
