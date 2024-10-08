@extends('layouts.app')
@section('title', __('Welcome'))
@section('content')
<div class="container-fluid">
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"><h5><span class="text-center fa fa-home"></span> @yield('title')</h5></div>
            <div class="card-body">
              <h5>
            @guest


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Electric-Cool - Servicio Técnico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
            <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.2.4/dist/tailwind.min.css" rel="stylesheet">
            <style>
                /* Custom Tailwind Config for colors */
                :root {
                    --electric-cool-bg: #1a1a1a;
                    --electric-cool-text: #ffffff;
                    --electric-cool-button-bg: #ffa14e;
                    --electric-cool-button-text: #000000;
                }
            </style>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <style>
            .footer-section {
                background-color: #343a40;
                color: #fff;
                padding: 60px 0;
            }
            .footer-section .link a {
                color: #adb5bd;
                text-decoration: none;
            }
            .footer-section .link a:hover {
                color: #fff;
            }
            .footer-section .contact-info p {
                color: #adb5bd;
            }
            .footer-section .contact-info p span {
                display: block;
            }
            .footer-section .contact-info p span.text-primary {
                color: #00a8ff;
            }
            .footer-section .social a {
                color: #adb5bd;
                margin-right: 15px;
                font-size: 18px;
            }
            .footer-section .social a:hover {
                color: #fff;
            }
        </style>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

        <style>
            .custom-container {
                max-width: 900px;
            }
            .custom-header {
                font-size: 2.5rem;
                font-weight: bold;
                margin-bottom: 1.5rem;
            }
            .custom-accordion .card {
                background-color: #343a40;
                color: #fff;
                border: none;
                border-radius: 10px;
                margin-bottom: 1rem;
            }
            .custom-accordion .card-header {
                background-color: #495057;
                border-bottom: none;
                border-radius: 10px;
            }
            .custom-accordion .card-header .btn {
                color: #fff;
                font-weight: bold;
                text-align: left;
                width: 100%;
            }
            .custom-accordion .card-header .btn:hover {
                background-color: #6c757d;
            }
            .custom-accordion .card-body {
                background-color: #343a40;
                border-top: 1px solid #495057;
            }
            .custom-modal .modal-content {
                background-color: #fff;
                border-radius: 10px;
            }
            .custom-modal .modal-header,
            .custom-modal .modal-footer {
                border: none;
            }
            .custom-modal .modal-header .modal-title {
                font-size: 1.5rem;
                font-weight: bold;
            }
        </style>
            <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* General card styles */
        .card {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        /* Carousel styles */
        .carousel-inner img {
            border-radius: 1rem;
        }

        .carousel-caption {
            background: rgba(0, 0, 0, 0.6);
            padding: 1rem;
            border-radius: 0.5rem;
        }

        .carousel-control-prev-icon, .carousel-control-next-icon {
            filter: invert(100%);
        }

        /* Text styles */
        .card-header h5 {
            font-weight: bold;
            color: #333;
        }

        .card-body h5 {
            color: #555;
        }
    </style>

        <script src="https://kit.fontawesome.com/1bf067c1d8.js" crossorigin="anonymous"></script>
    </head>
    <body class="antialiased">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div id="homeCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/5.png" class="d-block w-100" alt="Slide 1">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Valor</h5>
                                    <p></p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="img/12.png" class="d-block w-100" alt="Slide 2">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Lealtad</h5>
                                    <p></p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="img/8.png" class="d-block w-100" alt="Slide 3">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Humildad</h5>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>


                </div>
            </div>
        </div>



        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>




        <div class="container mx-auto p-6 custom-container">
            <img src="{{ asset('logo.png') }}" alt="Logo" width="216" height="216" class="mx-auto my-4 w-32 h-auto">
            <h5 class="text-center custom-header">INICIO</h5>
            <div class="bg-gray-800 text-white rounded-lg shadow-2xl p-6 w-full mx-auto">
                <div id="accordionExample" class="accordion custom-accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    QUIENES SOMOS
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <img src="{{ asset('img/1.png') }}" alt="Quienes Somos" class="w-full mb-4">
                                En Electric-Cool, nos dedicamos a ofrecer soluciones técnicas de alta calidad para el mantenimiento, instalación y reparación de equipos de aire acondicionado, refrigeración, y sistemas eléctricos. Con años de experiencia en el sector, nos enorgullece brindar un servicio excepcional y confiable a nuestros clientes. Nuestra misión es asegurar el óptimo funcionamiento de sus equipos, garantizando así su confort y seguridad.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    SERVICIOS
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <img src="{{ asset('img/2.png') }}" alt="Servicios" class="w-full mb-4">
                                En Electric-Cool, ofrecemos una amplia gama de servicios técnicos especializados:
                                <ul>
                                    <li>Mantenimiento de Aires Acondicionados: Nos encargamos de la limpieza, revisión y ajuste de sus unidades para mantenerlas en perfecto estado de funcionamiento.</li>
                                    <li>Instalación de Equipos de Refrigeración: Realizamos la instalación profesional de sistemas de refrigeración, asegurando su correcta operación desde el primer día.</li>
                                    <li>Reparación de Equipos de Línea Blanca: Atendemos fallas y realizamos reparaciones en electrodomésticos de línea blanca para devolverles su funcionalidad.</li>
                                    <li>Instalaciones Eléctricas en Baja y Media Tensión: Ofrecemos servicios de instalación y mantenimiento de sistemas eléctricos, garantizando la seguridad y eficiencia de sus instalaciones.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    PLANES
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <img src="{{ asset('img/3.png') }}" alt="Planes" class="w-full mb-4">
                                En Electric-Cool, entendemos que cada cliente tiene necesidades únicas. Por ello, hemos desarrollado diversos planes para adaptarnos a sus requerimientos:
                                <ul>
                                    <li>Plan Básico: Incluye inspección y mantenimiento preventivo anual de hasta dos unidades de aire acondicionado o refrigeración.</li>
                                    <li>Plan Avanzado: Incluye servicios de mantenimiento bianual, reparaciones menores sin costo adicional y descuento en piezas y repuestos.</li>
                                    <li>Plan Premium: Ofrece mantenimiento trimestral, prioridad en atención de emergencias, reparaciones sin costo adicional y un descuento exclusivo en nuevas instalaciones y equipos.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    CONTACTO
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                            <div class="card-body">
                                <img src="{{ asset('img/9.png') }}" alt="Contacto" class="w-full mb-4">
                                Para más información o para contratar nuestros servicios, puede contactarnos a través de:
                                <ul>
                                    <li>Teléfono: 7661216696</li>
                                    <li>Correo electrónico: ms.electric.cool@gmail.com</li>
                                    <li>Redes sociales: Facebook - Electric-Cool</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h2 class="mb-0">
                                <a href="https://wa.me/527661030526" class="btn btn-link text-white" aria-expanded="false" aria-controls="collapseFive">
                                    WHATSAPP
                                    <i class="fas fa-chevron-down"></i>
                                </a>
                            </h2>
                        </div>
                    </div>
            <!-- Modal - Project -->

            <div class="modal-header justify-content-center">
                <h5 class="modal-title" id="exampleModalLabel">ELECTRIC COOL</h5>
            </div>
            <div class="modal-body">
                <div class="text-center mb-4">
                    @if(false)
                        <div class="relative w-full h-80 bg-white rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                            <img src="{{ asset('/projects/default-img-project.jpg') }}" alt="Project Image" class="w-full h-full object-center object-cover">
                        </div>
                    @else
                        <iframe class="w-full d-block mx-auto" width="560" height="315" src="https://www.youtube.com/embed/kItELDIKeQw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    @endif
                </div>
                <div class="text-center">
                    <iframe class="d-block mx-auto" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233.63491994713226!2d-97.08556340621004!3d20.458673203555417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85dbb34e4573da55%3A0x62d0b92419c4e8a5!2sElectric%20-%20Cool%20Servicio%20T%C3%A9cnico!5e0!3m2!1ses!2smx!4v1722865259755!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>




                </div>
            </div>
        </div>

        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




        <footer class="section footer-section">
            <div class="container">
              <div class="row mb-4">
                <div class="col-md-3 mb-5">
                  <ul class="list-unstyled link">
                    <li><a >Acerca de</a></li>
                    <li><a >Terminos &amp; Condiciones</a></li>
                    <li><a >Politica de Privacidad</a></li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
                <li class="nav-item">
                    <a href="{{ url('/empleado') }}" class="nav-link"><i class="fas fa-boy"></i> Empleado</a>
                </li>
                  </ul>
                </div>
                <div class="col-md-3 mb-5">
                  <ul class="list-unstyled link">
                    <li><a href="">Inicio</a></li>
                    <li><a >Acerca de</a></li>
                    <li><a >Contacto</a></li>

                  </ul>
                </div>
                <div class="col-md-3 mb-5 pr-md-5 contact-info">
                  <!-- <li>198 West 21th Street, <br> Suite 721 New York NY 10016</li> -->
                  <p><span class="d-block"><span class="ion-ios-location h5 mr-3 text-primary"></span>Dirección:</span> <span> Calle 2 de Abril, <br> Colonia Los Pinos CP: 93557</span></p>
                  <p><span class="d-block"><span class="ion-ios-telephone h5 mr-3 text-primary"></span>Teléfono:</span> <span> 766 121 66 96 <br> 766 121 66 96 </span></p>
                  <p><span class="d-block"><span class="ion-ios-email h5 mr-3 text-primary"></span>Correo Electronico:</span> <span> ms.electric.cool@gmail.com</span></p>
                </div>
              </div>
              <div class="row pt-5">
                <p class="col-md-6 text-left">
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  Copyright ©<script>document.write(new Date().getFullYear());</script>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>

                <p class="col-md-6 text-right social">
                  <a href="https://wa.me/527661030526"><span class="fa fa-whatsapp"></span></a>
                  <a href="https://www.facebook.com/people/Electric_Cool/100090313556139/?mibextid=ZbWKwL"><span class="fa fa-facebook"></span></a>
                  <!--<a href="https://www.instagram.com/casasviamar/"><span class="fa fa-instagram"></span></a>-->
                </p>
              </div>
            </div>
          </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>



			@else
            @endif
				</h5>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
