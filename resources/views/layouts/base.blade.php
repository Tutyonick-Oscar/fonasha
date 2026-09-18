<!DOCTYPE html>

<html class="scroll-smooth" lang="fr">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link rel="icon" href="{{ asset('images/logo_fonasha.jpeg') }}" type="image/x-icon">
    <title>
        @yield('title', 'FONASHA ASBL — Fondation Maman Na\'Abwe Shabani')
    </title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-primary-container": "#7c839b",
                        "tertiary-container": "#2f1500",
                        "on-tertiary": "#ffffff",
                        "surface-dim": "#cbdbf5",
                        "on-error": "#ffffff",
                        "surface-tint": "#565e74",
                        "error": "#ba1a1a",
                        "on-surface": "#0b1c30",
                        "inverse-surface": "#213145",
                        "on-tertiary-container": "#c76c00",
                        "outline": "#76777d",
                        "on-error-container": "#93000a",
                        "tertiary": "#000000",
                        "on-tertiary-fixed-variant": "#6e3900",
                        "surface-container": "#e5eeff",
                        "surface-container-low": "#eff4ff",
                        "on-primary-fixed-variant": "#3f465c",
                        "on-primary-fixed": "#131b2e",
                        "background": "#f8f9ff",
                        "surface-bright": "#f8f9ff",
                        "surface-container-highest": "#d3e4fe",
                        "surface": "#f8f9ff",
                        "tertiary-fixed": "#ffdcc3",
                        "secondary": "#006398",
                        "secondary-fixed": "#cce5ff",
                        "on-secondary": "#ffffff",
                        "on-secondary-fixed-variant": "#004b73",
                        "secondary-fixed-dim": "#93ccff",
                        "on-secondary-fixed": "#001d31",
                        "surface-variant": "#d3e4fe",
                        "primary-fixed": "#dae2fd",
                        "on-surface-variant": "#45464d",
                        "on-background": "#0b1c30",
                        "primary": "#000000",
                        "tertiary-fixed-dim": "#ffb77d",
                        "surface-container-lowest": "#ffffff",
                        "on-primary": "#ffffff",
                        "outline-variant": "#c6c6cd",
                        "inverse-on-surface": "#eaf1ff",
                        "on-tertiary-fixed": "#2f1500",
                        "error-container": "#ffdad6",
                        "primary-container": "#131b2e",
                        "secondary-container": "#5bb8fe",
                        "surface-container-high": "#dce9ff",
                        "primary-fixed-dim": "#bec6e0",
                        "on-secondary-container": "#00476e",
                        "inverse-primary": "#bec6e0"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "gutter": "1.5rem",
                        "space-xs": "0.25rem",
                        "space-md": "1rem",
                        "space-xl": "2.5rem",
                        "margin-mobile": "1.25rem",
                        "margin": "3rem",
                        "gutter-mobile": "1rem",
                        "space-lg": "1.5rem",
                        "space-sm": "0.5rem"
                    },
                    "fontFamily": {
                        "display-mobile": ["Plus Jakarta Sans"],
                        "body-sm": ["Plus Jakarta Sans"],
                        "label-sm": ["Plus Jakarta Sans"],
                        "headline-sm": ["Plus Jakarta Sans"],
                        "headline-md": ["Plus Jakarta Sans"],
                        "headline-lg-mobile": ["Plus Jakarta Sans"],
                        "body-md": ["Plus Jakarta Sans"],
                        "display": ["Plus Jakarta Sans"],
                        "headline-lg": ["Plus Jakarta Sans"],
                        "body-lg": ["Plus Jakarta Sans"],
                        "label-md": ["Plus Jakarta Sans"]
                    },
                    "fontSize": {
                        "display-mobile": ["36px", {
                            "lineHeight": "44px",
                            "letterSpacing": "-0.025em",
                            "fontWeight": "700"
                        }],
                        "body-sm": ["13px", {
                            "lineHeight": "20px",
                            "letterSpacing": "0em",
                            "fontWeight": "400"
                        }],
                        "label-sm": ["11px", {
                            "lineHeight": "14px",
                            "letterSpacing": "0.04em",
                            "fontWeight": "600"
                        }],
                        "headline-sm": ["20px", {
                            "lineHeight": "28px",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "600"
                        }],
                        "headline-md": ["28px", {
                            "lineHeight": "36px",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "600"
                        }],
                        "headline-lg-mobile": ["28px", {
                            "lineHeight": "36px",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }],
                        "body-md": ["15px", {
                            "lineHeight": "24px",
                            "letterSpacing": "0em",
                            "fontWeight": "400"
                        }],
                        "display": ["56px", {
                            "lineHeight": "64px",
                            "letterSpacing": "-0.03em",
                            "fontWeight": "700"
                        }],
                        "headline-lg": ["40px", {
                            "lineHeight": "48px",
                            "letterSpacing": "-0.025em",
                            "fontWeight": "700"
                        }],
                        "body-lg": ["18px", {
                            "lineHeight": "28px",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "400"
                        }],
                        "label-md": ["13px", {
                            "lineHeight": "16px",
                            "letterSpacing": "0.01em",
                            "fontWeight": "600"
                        }]
                    }
                }
            }
        };
    </script>
</head>

<body
    class="bg-surface-container-lowest font-body-md text-body-md text-on-surface antialiased selection:bg-secondary-fixed selection:text-on-secondary-fixed">
    @include('layouts.nav')

    @yield('content')

    @include('layouts.footer')

    @yield('scripts')

</body>

</html>
