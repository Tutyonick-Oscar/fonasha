@extends('layouts.base')
@section('title', 'Fonasha asl - Notre équipe')
@section('content')

    <main class="w-full pt-20 bg-surface-container-lowest min-h-screen">
        <div class="flex flex-col w-full">
            <section class="w-full bg-surface-container-lowest pt-space-xl pb-space-lg">
                <div class="max-w-[1200px] mx-auto px-margin-mobile lg:px-margin">
                    <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-lg pb-space-lg">
                        <div class="max-w-2xl">
                            <div
                                class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm uppercase tracking-wider mb-space-sm">
                                <span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                                Capital Humain &amp; Gouvernance
                            </div>
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
                    <div class="flex flex-wrap items-center gap-2 pt-space-md" id="team-filters">
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
                    </div>
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
                                <div
                                    class="absolute top-3 left-3 px-2.5 py-1 rounded bg-surface-container-lowest/90 backdrop-blur-md text-on-surface font-label-sm text-label-sm">
                                    Fondation 2017
                                </div>
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
                                <div class="mt-auto pt-space-md flex items-center gap-2">
                                    <span
                                        class="px-2 py-0.5 rounded bg-surface-container text-on-surface-variant font-label-sm text-label-sm">Plaidoyer</span>
                                    <span
                                        class="px-2 py-0.5 rounded bg-surface-container text-on-surface-variant font-label-sm text-label-sm">Solidarité</span>
                                </div>
                            </div>
                        </article>
                        <article
                            class="team-card group flex flex-col rounded-xl bg-surface-container-lowest transition-all duration-300 hover:shadow-xl hover:-translate-y-1"
                            data-category="ca">
                            <div class="relative w-full aspect-[4/5] overflow-hidden rounded-xl bg-surface-container">
                                <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                    data-alt="Portrait institutionnel moderne et digne d'une femme cadre d'Afrique centrale, vêtue d'une veste sobre élégante, expression posée et intègre, studio lumière feutrée épurée."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBibXAvZ0BV7KSPuTOkwlpomhOJ-zwAMByNYgDCxzgDfeKymr8cXITLz0eiqgs25EFpXE0ggEJYuxhIpLPvplK7Mq5TXWTk4JAltlU4L7jNHqFGDc8gBh6UtrPWuC3p8RADllhY1f84UiM9H9HHmi4dZY-z00Y_Bk896Igg5d2QCpmnmWBTNnfXFkGScrXjFKPc0dwVg7qSz-PwRybT57MXUpGL6vtBRcpkvUW3ZFA7-ep6Ot9aiE8Omg" />
                                <div
                                    class="absolute top-3 left-3 px-2.5 py-1 rounded bg-surface-container-lowest/90 backdrop-blur-md text-on-surface font-label-sm text-label-sm">
                                    Élue AG Mai 2023
                                </div>
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
                                <div class="mt-auto pt-space-md flex items-center gap-2">
                                    <span
                                        class="px-2 py-0.5 rounded bg-surface-container text-on-surface-variant font-label-sm text-label-sm">Gouvernance</span>
                                    <span
                                        class="px-2 py-0.5 rounded bg-surface-container text-on-surface-variant font-label-sm text-label-sm">Supervision</span>
                                </div>
                            </div>
                        </article>
                        <article
                            class="team-card group flex flex-col rounded-xl bg-surface-container-lowest transition-all duration-300 hover:shadow-xl hover:-translate-y-1"
                            data-category="coordination">
                            <div class="relative w-full aspect-[4/5] overflow-hidden rounded-xl bg-surface-container">
                                <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                    data-alt="Portrait épuré d'un homme trentenaire d'Afrique centrale, allure dynamique et professionnelle, chemise unie contemporaine, regard vif et engagé, éclairage de studio architectural moderne."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAJx18UnOYHhKDYl4t5NtFhh8h0bLXZ_I0K4_rfmp-ruH5TO4ySYBbz7frst7h-_f_QM3G9YliPY8uZlEjIYZjrjMU9raCO3xInQjp5u2Iyl6XYib11TBlL_jbc0G129VQp6ZwZurMfKwof-OpGC3VFBLnET3uk2JU90MMnKF4g02oAMMhtcOlVUqTAGemr5O7NHEw9oUilAhkG_E3W1PLJ-7FmCs3NINELbV79FZ54Eutv7xZt7MaH9w" />
                                <div
                                    class="absolute top-3 left-3 px-2.5 py-1 rounded bg-surface-container-lowest/90 backdrop-blur-md text-on-surface font-label-sm text-label-sm">
                                    Direction Exécutive
                                </div>
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
                                <div class="mt-auto pt-space-md flex items-center gap-2">
                                    <span
                                        class="px-2 py-0.5 rounded bg-surface-container text-on-surface-variant font-label-sm text-label-sm">Partenariats</span>
                                    <span
                                        class="px-2 py-0.5 rounded bg-surface-container text-on-surface-variant font-label-sm text-label-sm">Suivi-Éval</span>
                                </div>
                            </div>
                        </article>
                        <article
                            class="team-card group flex flex-col rounded-xl bg-surface-container-lowest transition-all duration-300 hover:shadow-xl hover:-translate-y-1"
                            data-category="operations">
                            <div class="relative w-full aspect-[4/5] overflow-hidden rounded-xl bg-surface-container">
                                <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                    data-alt="Portrait de femme professionnelle experte en microfinance communautaire en Afrique, posture rassurante et professionnelle, arrière-plan sobre et lumineux style minimaliste scandinave."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuA74bE5dvhiBYgajHAAE1DrCuwLttk9W6cJru9bBqxD66mt_YjT0T_rXUJfa2l3X6VtjxQX5nMD8hQd3mpMV_eGpjOS9yq4otwad9HyOow4Ce371jZyKhME2RaSaCHpd2EK6a_GS8TkpujjuXWklcYaqHNcYKIFSU11yoSckA5nH3VVhuzOk0LytZHukqp6JUeGOqCXMvwE8tvxjjPVfHBfrYdViAt49kTyEtpocgkTYiMG2Rhgq863CQ" />
                                <div
                                    class="absolute top-3 left-3 px-2.5 py-1 rounded bg-surface-container-lowest/90 backdrop-blur-md text-on-surface font-label-sm text-label-sm">
                                    20 Caisses AVEC
                                </div>
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
                                <div class="mt-auto pt-space-md flex items-center gap-2">
                                    <span
                                        class="px-2 py-0.5 rounded bg-surface-container text-on-surface-variant font-label-sm text-label-sm">Micro-crédit</span>
                                    <span
                                        class="px-2 py-0.5 rounded bg-surface-container text-on-surface-variant font-label-sm text-label-sm">Épargne</span>
                                </div>
                            </div>
                        </article>
                        <article
                            class="team-card group flex flex-col rounded-xl bg-surface-container-lowest transition-all duration-300 hover:shadow-xl hover:-translate-y-1"
                            data-category="operations">
                            <div class="relative w-full aspect-[4/5] overflow-hidden rounded-xl bg-surface-container">
                                <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                    data-alt="Portrait d'un ingénieur agronome de terrain au Congo, souriant, professionnel, éclairage matinal subtil, tenue de travail propre et moderne, minimalisme photographique."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCi5n0wEGmHA9k0XW6QhzWSwM6_UrjTr91tVIX3zWz2WjK4xThLjS7sKw_ChbKl7_Hy3uHMsvcrXiH9WwPBALzDQm0jktv9dMIATa_p1Qs8bn-nMmCTKdc2M5tEd3Nq_0bhfeeXksRROOhQj4hh-jNrJCR6oSFbi0hihyuGx8ED5qD10oCcpdqGc9NBgC7RPiaIdcLnOkohNJEPi64qMa7TIzpEL_HSxCML0on_pUGfllT0ezunc0Y2Ig" />
                                <div
                                    class="absolute top-3 left-3 px-2.5 py-1 rounded bg-surface-container-lowest/90 backdrop-blur-md text-on-surface font-label-sm text-label-sm">
                                    Agri-Transformation
                                </div>
                            </div>
                            <div class="flex flex-col flex-1 pt-space-md px-1 pb-2">
                                <h2 class="font-headline-sm text-headline-sm text-on-surface font-bold tracking-tight">
                                    Dieudonné KASONGO</h2>
                                <span class="font-label-md text-label-md text-secondary font-semibold mt-1">Resp.
                                    Filières Vivrières</span>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-space-sm leading-relaxed">
                                    Pilote les chaînes de valorisation maïs, manioc, arachides et les ateliers
                                    coopératifs de transformation alimentaire.
                                </p>
                                <div class="mt-auto pt-space-md flex items-center gap-2">
                                    <span
                                        class="px-2 py-0.5 rounded bg-surface-container text-on-surface-variant font-label-sm text-label-sm">Sécurité
                                        Alim.</span>
                                    <span
                                        class="px-2 py-0.5 rounded bg-surface-container text-on-surface-variant font-label-sm text-label-sm">Coopératives</span>
                                </div>
                            </div>
                        </article>
                        <article
                            class="team-card group flex flex-col rounded-xl bg-surface-container-lowest transition-all duration-300 hover:shadow-xl hover:-translate-y-1"
                            data-category="operations">
                            <div class="relative w-full aspect-[4/5] overflow-hidden rounded-xl bg-surface-container">
                                <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                    data-alt="Portrait d'une jeune éducatrice humanitaire dévouée, regard franc et protecteur, fond blanc cassé épuré, style éditorial contemporain."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuClK3dVQ6up7o6paOlZYFmo70wjXmxrzxNtpvbtYpWZ8M0sJgKA1mcdeEx1ZQjkS4l1MSU7j-je2AOXRR6zr4CWZ98AkuJC7F1V8-nC-3W8NPYBDyeLDwixEPgZ4nduuXCkRoKqqPHyVqIwTZ2DOeP-BHoStxSXJRCpD9lpfWYR5rh3cWhIfeAXtlivr91uBCsVze6Ck_GRsgXmDOH5fDPNdlkQPgNSTuWwBWyRtFEtq-3e4sfFPjcnVw" />
                                <div
                                    class="absolute top-3 left-3 px-2.5 py-1 rounded bg-surface-container-lowest/90 backdrop-blur-md text-on-surface font-label-sm text-label-sm">
                                    Protection &amp; Droits
                                </div>
                            </div>
                            <div class="flex flex-col flex-1 pt-space-md px-1 pb-2">
                                <h2 class="font-headline-sm text-headline-sm text-on-surface font-bold tracking-tight">
                                    Aimée KABUO</h2>
                                <span class="font-label-md text-label-md text-secondary font-semibold mt-1">Protection
                                    Enfance &amp; Genre</span>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-space-sm leading-relaxed">
                                    Assure la scolarisation des orphelins, combat les violences basées sur le genre et
                                    anime les ateliers de sensibilisation.
                                </p>
                                <div class="mt-auto pt-space-md flex items-center gap-2">
                                    <span
                                        class="px-2 py-0.5 rounded bg-surface-container text-on-surface-variant font-label-sm text-label-sm">Éducation</span>
                                    <span
                                        class="px-2 py-0.5 rounded bg-surface-container text-on-surface-variant font-label-sm text-label-sm">Genre</span>
                                </div>
                            </div>
                        </article>
                        <article
                            class="team-card group flex flex-col rounded-xl bg-surface-container-lowest transition-all duration-300 hover:shadow-xl hover:-translate-y-1"
                            data-category="operations">
                            <div class="relative w-full aspect-[4/5] overflow-hidden rounded-xl bg-surface-container">
                                <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                    data-alt="Portrait d'un psychologue clinicien africain attentif et calme, expression d'écoute empathique, fond texturé clair et minimaliste, lumière douce équilibrée."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBCvnvPUqiKCa10x0EqKkaTrRaj1Zg5FpOs_x3yRa09MkeWByTSYrPhym1BV6nmPAr1zkIXa2hWe-7PqJXr1clyTHYchUnvYGC7wDhwXuzaoATIlK69Tia4ha0wU3AjnfEZ9S8BJJqXt1OC3ukpkS62A6NCBNFRnbnk-u5ER_Xl9sPhlQEPdwCSqe2mwZDUh5LK4FXePeml4BesPanQ_yzXY4vU6njZwR1GQbz-a1s61E-vvjnJy2VNog" />
                                <div
                                    class="absolute top-3 left-3 px-2.5 py-1 rounded bg-surface-container-lowest/90 backdrop-blur-md text-on-surface font-label-sm text-label-sm">
                                    Cellule Écoute
                                </div>
                            </div>
                            <div class="flex flex-col flex-1 pt-space-md px-1 pb-2">
                                <h2 class="font-headline-sm text-headline-sm text-on-surface font-bold tracking-tight">
                                    Jean-Claude BYAMUNGU</h2>
                                <span class="font-label-md text-label-md text-secondary font-semibold mt-1">Prise en
                                    Charge Psychosociale</span>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-space-sm leading-relaxed">
                                    Coordonne l'assistance psycho-émotionnelle et la réhabilitation morale des personnes
                                    victimes de traumatismes et d'exclusion.
                                </p>
                                <div class="mt-auto pt-space-md flex items-center gap-2">
                                    <span
                                        class="px-2 py-0.5 rounded bg-surface-container text-on-surface-variant font-label-sm text-label-sm">Trauma
                                        Care</span>
                                    <span
                                        class="px-2 py-0.5 rounded bg-surface-container text-on-surface-variant font-label-sm text-label-sm">Santé
                                        Mentale</span>
                                </div>
                            </div>
                        </article>
                        <article
                            class="team-card group flex flex-col rounded-xl bg-surface-container-lowest transition-all duration-300 hover:shadow-xl hover:-translate-y-1"
                            data-category="operations">
                            <div class="relative w-full aspect-[4/5] overflow-hidden rounded-xl bg-surface-container">
                                <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                    data-alt="Portrait dynamique d'une animatrice de quartier à Uvira, chaleureuse et mobilisatrice, souriante, fond lumineux neutre épuré."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuA4ewBISSNlngcLp-hqajKW6gsF4Sv-sHR_tiS_wxJBzuys848beWKrFomTyl3DX56v7D15KXMaoe0fqMcfy6DFfVVhyO4pu8G2j9AlwfcwEu1JrpNn5l2VwPr7gbcWT-LhjV8_uL7q2q3g8HKbNbVbssOhozgs1NqCEmESzdveJPNoQRDij0ePxqYeQkK_PB2JyLbnOkO9GOXy2dssJXqfHdrZQ7V1Lv1fk2f7fUmYFaYOAnAQ2V5RUg" />
                                <div
                                    class="absolute top-3 left-3 px-2.5 py-1 rounded bg-surface-container-lowest/90 backdrop-blur-md text-on-surface font-label-sm text-label-sm">
                                    Médiation Mulongwe
                                </div>
                            </div>
                            <div class="flex flex-col flex-1 pt-space-md px-1 pb-2">
                                <h2 class="font-headline-sm text-headline-sm text-on-surface font-bold tracking-tight">
                                    Sifa M'SHABANI</h2>
                                <span class="font-label-md text-label-md text-secondary font-semibold mt-1">Déléguée
                                    des Animatrices Terrain</span>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-space-sm leading-relaxed">
                                    Fait le lien quotidien entre le siège et les cercles de base dans les avenues de
                                    Mulongwe, Kalundu et Kasenga.
                                </p>
                                <div class="mt-auto pt-space-md flex items-center gap-2">
                                    <span
                                        class="px-2 py-0.5 rounded bg-surface-container text-on-surface-variant font-label-sm text-label-sm">Proximité</span>
                                    <span
                                        class="px-2 py-0.5 rounded bg-surface-container text-on-surface-variant font-label-sm text-label-sm">Action
                                        Directe</span>
                                </div>
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
                                <div
                                    class="inline-flex items-center gap-2 font-label-sm text-label-sm uppercase tracking-wider text-secondary">
                                    <span class="material-symbols-outlined text-[18px]">account_balance</span>
                                    Cadre Statutaire &amp; Éthique
                                </div>
                                <h3 class="font-headline-lg text-headline-lg text-on-surface font-bold tracking-tight">
                                    Une gouvernance collégiale, transparente et documentée.
                                </h3>
                                <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                                    La FONASHA ASBL opère sous le régime juridique de la Loi n° 004/2001 relative aux
                                    associations sans but lucratif en RDC. Notre organisation sépare strictement les
                                    fonctions d'orientation stratégique, assurées par le Conseil d'Administration, et
                                    les responsabilités d'exécution confiées à la coordination.
                                </p>
                                <div class="pt-space-xs flex flex-wrap gap-space-md">
                                    <div class="flex items-center gap-2 text-on-surface font-label-md text-label-md">
                                        <span
                                            class="material-symbols-outlined text-secondary text-[20px]">check_circle</span>
                                        Autorisation N° 26/100/GP/SK
                                    </div>
                                    <div class="flex items-center gap-2 text-on-surface font-label-md text-label-md">
                                        <span
                                            class="material-symbols-outlined text-secondary text-[20px]">check_circle</span>
                                        Comptabilité annuelle auditable
                                    </div>
                                </div>
                            </div>
                            <div class="lg:col-span-6">
                                <div class="grid grid-cols-1 sm:grid-cols-3 gap-space-md">
                                    <div
                                        class="p-space-lg rounded-xl bg-surface-container-low flex flex-col justify-between h-44">
                                        <span class="material-symbols-outlined text-secondary text-[28px]">groups</span>
                                        <div>
                                            <div class="font-headline-lg text-headline-lg text-on-surface font-bold">30
                                            </div>
                                            <div
                                                class="font-label-sm text-label-sm text-on-surface-variant uppercase mt-1">
                                                Membres Fondateurs</div>
                                        </div>
                                    </div>
                                    <div
                                        class="p-space-lg rounded-xl bg-surface-container-low flex flex-col justify-between h-44">
                                        <span class="material-symbols-outlined text-secondary text-[28px]">shield</span>
                                        <div>
                                            <div class="font-headline-lg text-headline-lg text-on-surface font-bold">6
                                            </div>
                                            <div
                                                class="font-label-sm text-label-sm text-on-surface-variant uppercase mt-1">
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
                                            <div
                                                class="font-label-sm text-label-sm text-on-surface-variant uppercase mt-1">
                                                Adhérents Actifs</div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="mt-space-md p-space-md rounded-xl bg-surface-container-highest flex items-center justify-between gap-space-md">
                                    <div class="flex items-center gap-space-sm">
                                        <span class="material-symbols-outlined text-on-surface text-[24px]">policy</span>
                                        <span class="font-body-sm text-body-sm text-on-surface font-medium">Consulter
                                            le procès-verbal de l'Assemblée Générale constitutive</span>
                                    </div>
                                    <a class="inline-flex items-center gap-1 font-label-md text-label-md text-secondary hover:text-on-secondary-fixed-variant transition-colors whitespace-nowrap"
                                        data-path="statuts" href="#">
                                        Voir PDF
                                        <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                                    </a>
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
                            <a class="inline-flex items-center justify-center px-space-xl py-space-md rounded-xl bg-primary text-on-primary font-label-md text-label-md transition-all hover:bg-primary-container"
                                data-path="contact" href="#">
                                Rejoindre la dynamique
                            </a>
                            <a class="inline-flex items-center justify-center px-space-xl py-space-md rounded-xl bg-surface-container-low text-on-surface font-label-md text-label-md transition-all hover:bg-surface-container"
                                data-path="soutenir-notre-action" href="#">
                                Faire un don de soutien
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
