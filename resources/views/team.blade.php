@extends('layouts.base')
@section('title', 'Fonasha asl - Notre équipe')
@section('content')

    <main class="w-full pt-20 bg-surface-container-lowest min-h-screen">
        <div class="flex flex-col w-full">
            <section class="w-full bg-surface-container-lowest pt-space-xl pb-space-lg">
                <div class="max-w-[1200px] mx-auto px-margin-mobile lg:px-margin">
                    <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-lg pb-space-lg">
                        <div class="max-w-2xl">
                            {{-- <div
                                class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm uppercase tracking-wider mb-space-sm">
                                <span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                                Capital Humain &amp; Gouvernance
                            </div> --}}
                            <h1 class="font-display text-display text-on-surface font-bold tracking-tight">
                                Notre Équipe
                            </h1>
                            <p class="font-body-lg text-body-lg text-on-surface-variant mt-space-sm leading-relaxed">
                                Des femmes et des hommes dévoués à la résilience collective, alliant rigueur de gestion
                                et présence inconditionnelle auprès des communautés vulnérables à Uvira et au Sud-Kivu.
                            </p>
                        </div>
                        <div class="flex items-center gap-space-md p-space-md rounded-xl bg-surface-container-low">
                            <div class="flex flex-col">
                                <span class="font-headline-sm text-headline-sm text-on-surface font-bold">100%</span>
                                <span class="font-label-sm text-label-sm text-on-surface-variant">Ancrage local</span>
                            </div>
                            <div
                                class="w-8 h-8 rounded-full bg-surface-container flex items-center justify-center text-secondary">
                                <span class="material-symbols-outlined text-[20px]">verified_user</span>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="flex flex-wrap items-center gap-2 pt-space-md" id="team-filters">
                        <button
                            class="team-filter-btn active-filter px-space-md py-2 rounded-xl font-label-md text-label-md transition-all bg-primary text-on-primary shadow-sm"
                            data-filter="all">
                            Tous les membres
                        </button>
                        <button
                            class="team-filter-btn px-space-md py-2 rounded-xl font-label-md text-label-md transition-all bg-surface-container-low text-on-surface-variant hover:bg-surface-container hover:text-on-surface"
                            data-filter="ca">
                            Conseil d'Administration
                        </button>
                        <button
                            class="team-filter-btn px-space-md py-2 rounded-xl font-label-md text-label-md transition-all bg-surface-container-low text-on-surface-variant hover:bg-surface-container hover:text-on-surface"
                            data-filter="coordination">
                            Coordination &amp; Partenariats
                        </button>
                        <button
                            class="team-filter-btn px-space-md py-2 rounded-xl font-label-md text-label-md transition-all bg-surface-container-low text-on-surface-variant hover:bg-surface-container hover:text-on-surface"
                            data-filter="operations">
                            Pôles Opérationnels &amp; Terrain
                        </button>
                    </div> --}}
                </div>
            </section>
            <section class="w-full bg-surface-container-lowest pb-space-xl">
                <div class="max-w-[1200px] mx-auto px-margin-mobile lg:px-margin">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-space-lg" id="team-grid">
                        <article
                            class="team-card group flex flex-col rounded-xl bg-surface-container-lowest transition-all duration-300 hover:shadow-xl hover:-translate-y-1"
                            data-category="ca">
                            <div class="relative w-full aspect-[4/5] overflow-hidden rounded-xl bg-surface-container">
                                <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                    data-alt="Portrait professionnel épuré en studio de Madame Na'Abwe Shabani, femme congolaise inspirante, regard bienveillant et résolu, éclairage doux naturel, fond neutre gris ardoise, style photojournalisme contemporain."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCR1EiVHGcZQc6UWnxIP5BkRepWuGAYRdU2AdzF_K6TJYmgz-Xr3bURoHud671qa-9BwaUBEH-XV8rFgRCl4DFeDhfdRkeNnXqskgsbdY5RdGEdKLGq75TKo-fE539cMsn7H0F5uSNUI9AhXjUFFKGXEX7eJGCPi1U2p7IW2EgY4Fv58t_H5oaCsl_BrnqMNbt0jcpOYBxMnYuUs6577-VCM6A9Hyx3MbxCtgiDC4uuNsSsmXNkgVScZw" />

                            </div>
                            <div class="flex flex-col flex-1 pt-space-md px-1 pb-2">
                                <h2 class="font-headline-sm text-headline-sm text-on-surface font-bold tracking-tight">
                                    Mme NA'ABWE SHABANI</h2>
                                <span class="font-label-md text-label-md text-secondary font-semibold mt-1">Fondatrice
                                    &amp; Visionnaire</span>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-space-sm leading-relaxed">
                                    Militante communautaire infatigable, initiatrice des premiers cercles d'entraide
                                    féminine d'Uvira dès 2017.
                                </p>

                            </div>
                        </article>
                        <article
                            class="team-card group flex flex-col rounded-xl bg-surface-container-lowest transition-all duration-300 hover:shadow-xl hover:-translate-y-1"
                            data-category="ca">
                            <div class="relative w-full aspect-[4/5] overflow-hidden rounded-xl bg-surface-container">
                                <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                    data-alt="Portrait institutionnel moderne et digne d'une femme cadre d'Afrique centrale, vêtue d'une veste sobre élégante, expression posée et intègre, studio lumière feutrée épurée."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBibXAvZ0BV7KSPuTOkwlpomhOJ-zwAMByNYgDCxzgDfeKymr8cXITLz0eiqgs25EFpXE0ggEJYuxhIpLPvplK7Mq5TXWTk4JAltlU4L7jNHqFGDc8gBh6UtrPWuC3p8RADllhY1f84UiM9H9HHmi4dZY-z00Y_Bk896Igg5d2QCpmnmWBTNnfXFkGScrXjFKPc0dwVg7qSz-PwRybT57MXUpGL6vtBRcpkvUW3ZFA7-ep6Ot9aiE8Omg" />

                            </div>
                            <div class="flex flex-col flex-1 pt-space-md px-1 pb-2">
                                <h2 class="font-headline-sm text-headline-sm text-on-surface font-bold tracking-tight">
                                    Mme NYASSA SALUMU Francine</h2>
                                <span class="font-label-md text-label-md text-secondary font-semibold mt-1">Présidente
                                    du Conseil d'Administration</span>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-space-sm leading-relaxed">
                                    Garantit la rectitude morale, le respect scrupuleux des statuts et la conformité
                                    légale de l'ASBL auprès des autorités du Sud-Kivu.
                                </p>

                            </div>
                        </article>
                        <article
                            class="team-card group flex flex-col rounded-xl bg-surface-container-lowest transition-all duration-300 hover:shadow-xl hover:-translate-y-1"
                            data-category="coordination">
                            <div class="relative w-full aspect-[4/5] overflow-hidden rounded-xl bg-surface-container">
                                <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                    data-alt="Portrait épuré d'un homme trentenaire d'Afrique centrale, allure dynamique et professionnelle, chemise unie contemporaine, regard vif et engagé, éclairage de studio architectural moderne."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAJx18UnOYHhKDYl4t5NtFhh8h0bLXZ_I0K4_rfmp-ruH5TO4ySYBbz7frst7h-_f_QM3G9YliPY8uZlEjIYZjrjMU9raCO3xInQjp5u2Iyl6XYib11TBlL_jbc0G129VQp6ZwZurMfKwof-OpGC3VFBLnET3uk2JU90MMnKF4g02oAMMhtcOlVUqTAGemr5O7NHEw9oUilAhkG_E3W1PLJ-7FmCs3NINELbV79FZ54Eutv7xZt7MaH9w" />

                            </div>
                            <div class="flex flex-col flex-1 pt-space-md px-1 pb-2">
                                <h2 class="font-headline-sm text-headline-sm text-on-surface font-bold tracking-tight">
                                    Adrien BARIENDA</h2>
                                <span class="font-label-md text-label-md text-secondary font-semibold mt-1">Coordinateur
                                    Général des Projets</span>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-space-sm leading-relaxed">
                                    Orchestre la stratégie opérationnelle, le dialogue institutionnel avec les
                                    partenaires internationaux et le suivi d'impact.
                                </p>

                            </div>
                        </article>
                        <article
                            class="team-card group flex flex-col rounded-xl bg-surface-container-lowest transition-all duration-300 hover:shadow-xl hover:-translate-y-1"
                            data-category="operations">
                            <div class="relative w-full aspect-[4/5] overflow-hidden rounded-xl bg-surface-container">
                                <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                    data-alt="Portrait de femme professionnelle experte en microfinance communautaire en Afrique, posture rassurante et professionnelle, arrière-plan sobre et lumineux style minimaliste scandinave."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuA74bE5dvhiBYgajHAAE1DrCuwLttk9W6cJru9bBqxD66mt_YjT0T_rXUJfa2l3X6VtjxQX5nMD8hQd3mpMV_eGpjOS9yq4otwad9HyOow4Ce371jZyKhME2RaSaCHpd2EK6a_GS8TkpujjuXWklcYaqHNcYKIFSU11yoSckA5nH3VVhuzOk0LytZHukqp6JUeGOqCXMvwE8tvxjjPVfHBfrYdViAt49kTyEtpocgkTYiMG2Rhgq863CQ" />

                            </div>
                            <div class="flex flex-col flex-1 pt-space-md px-1 pb-2">
                                <h2 class="font-headline-sm text-headline-sm text-on-surface font-bold tracking-tight">
                                    Espérance MWAMINI</h2>
                                <span class="font-label-md text-label-md text-secondary font-semibold mt-1">Resp.
                                    Autonomisation &amp; AVEC</span>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-space-sm leading-relaxed">
                                    Encadre les Associations Villageoises d'Épargne et de Crédit pour consolider la
                                    souveraineté financière des foyers.
                                </p>

                            </div>
                        </article>

                    </div>
                </div>
            </section>
            <section class="w-full bg-surface-container-low py-space-xl">
                <div class="max-w-[1200px] mx-auto px-margin-mobile lg:px-margin">
                    <div class="bg-surface-container-lowest rounded-xl p-space-lg lg:p-space-xl shadow-sm">
                        <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-xl items-center">
                            <div class="lg:col-span-6 space-y-space-md">

                                <h3 class="font-headline-lg text-headline-lg text-on-surface font-bold tracking-tight">
                                    Une gouvernance collégiale, transparente et documentée.
                                </h3>
                                <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                                    La FONASHA ASBL opère sous le régime juridique de la Loi n° 004/2001 relative aux
                                    associations sans but lucratif en RDC. Notre organisation sépare strictement les
                                    fonctions d'orientation stratégique, assurées par le Conseil d'Administration, et
                                    les responsabilités d'exécution confiées à la coordination.
                                </p>

                            </div>
                            <div class="lg:col-span-6">
                                <div class="grid grid-cols-1 sm:grid-cols-3 gap-space-md">
                                    <div
                                        class="p-space-lg rounded-xl bg-surface-container-low flex flex-col justify-between h-44">
                                        <span class="material-symbols-outlined text-secondary text-[28px]">groups</span>
                                        <div>
                                            <div class="font-headline-lg text-headline-lg text-on-surface font-bold">30
                                            </div>
                                            <div class="font-label-sm text-label-sm text-on-surface-variant uppercase mt-1">
                                                Membres adhérant</div>
                                        </div>
                                    </div>
                                    <div
                                        class="p-space-lg rounded-xl bg-surface-container-low flex flex-col justify-between h-44">
                                        <span class="material-symbols-outlined text-secondary text-[28px]">shield</span>
                                        <div>
                                            <div class="font-headline-lg text-headline-lg text-on-surface font-bold">6
                                            </div>
                                            <div class="font-label-sm text-label-sm text-on-surface-variant uppercase mt-1">
                                                Membres du CA</div>
                                        </div>
                                    </div>
                                    <div
                                        class="p-space-lg rounded-xl bg-surface-container-low flex flex-col justify-between h-44">
                                        <span
                                            class="material-symbols-outlined text-secondary text-[28px]">diversity_1</span>
                                        <div>
                                            <div class="font-headline-lg text-headline-lg text-on-surface font-bold">
                                                200+</div>
                                            <div class="font-label-sm text-label-sm text-on-surface-variant uppercase mt-1">
                                                Membres Actifs</div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="mt-space-md p-space-md rounded-xl bg-surface-container-highest flex items-center justify-between gap-space-md">
                                    <div class="flex items-center gap-space-sm">
                                        <span class="font-body-sm text-body-sm text-on-surface font-medium">
                                            De simple initiative locale, FONASHA-ASBL, s'est imposée comme un acteur clé de
                                            la province du
                                            sud- Kivu.
                                        </span>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="w-full bg-surface-container-lowest py-space-xl">
                <div class="max-w-[1200px] mx-auto px-margin-mobile lg:px-margin text-center">
                    <div class="max-w-xl mx-auto space-y-space-md">
                        <h3 class="font-headline-md text-headline-md text-on-surface font-bold">
                            Envie d'agir à nos côtés sur le terrain ?
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant">
                            Nous accueillons des bénévoles de compétences, des stagiaires et des partenaires engagés
                            pour soutenir nos programmes à Uvira.
                        </p>
                        <div class="pt-space-xs flex flex-wrap items-center justify-center gap-space-md">
                            {{-- <a class="inline-flex items-center justify-center px-space-xl py-space-md rounded-xl bg-primary text-on-primary font-label-md text-label-md transition-all hover:bg-primary-container"
                                data-path="contact" href="{{ route('contact') }}">
                                Rejoindre la dynamique
                            </a> --}}
                            <a class="inline-flex items-center justify-center px-space-xl py-space-md rounded-xl bg-surface-container-low text-on-surface font-label-md text-label-md transition-all hover:bg-surface-container"
                                data-path="soutenir-notre-action" href="{{ route('contact') }}">
                                Rejoindre la dynamique
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <script>
                (function() {
                    const filterButtons = document.querySelectorAll('.team-filter-btn');
                    const cards = document.querySelectorAll('.team-card');

                    filterButtons.forEach(btn => {
                        btn.addEventListener('click', () => {
                            filterButtons.forEach(b => {
                                b.classList.remove('active-filter', 'bg-primary', 'text-on-primary',
                                    'shadow-sm');
                                b.classList.add('bg-surface-container-low', 'text-on-surface-variant');
                            });

                            btn.classList.add('active-filter', 'bg-primary', 'text-on-primary', 'shadow-sm');
                            btn.classList.remove('bg-surface-container-low', 'text-on-surface-variant');

                            const filter = btn.getAttribute('data-filter');

                            cards.forEach(card => {
                                const category = card.getAttribute('data-category');
                                if (filter === 'all' || category === filter) {
                                    card.style.display = 'flex';
                                } else {
                                    card.style.display = 'none';
                                }
                            });
                        });
                    });
                })();
            </script>
        </div>
    </main>
@endsection
