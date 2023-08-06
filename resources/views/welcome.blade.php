<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Laravel</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/customize_1.css') }}">

        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

           <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets_custom/images/favicon.png" type="image/png">

    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="assets_custom/css/animate.css">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="assets_custom/css/tiny-slider.css">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="assets_custom/fonts/lineicons/font-css/LineIcons.css">

    <!--====== Tailwind CSS ======-->
    <link rel="stylesheet" href="assets_custom/css/tailwindcss.css">


    </head>
    <body class="h-screen">

    <!-- CUSTOM HEADER NAV MENU-->

        <div class="preloader">
            <div class="loader">
                <div class="ytp-spinner">
                    <div class="ytp-spinner-container">
                        <div class="ytp-spinner-rotator">
                            <div class="ytp-spinner-left">
                                <div class="ytp-spinner-circle"></div>
                            </div>
                            <div class="ytp-spinner-right">
                                <div class="ytp-spinner-circle"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--====== PRELOADER PART ENDS ======-->


        <section class="header_area">

<div class="navbar-area bg-white nav-Links md:p-1 sm:p-1 ">

    <div class="container relative">
        <div class="row items-center">
            <div class="w-full">
                <nav class="flex items-center justify-between py-4 navbar navbar-expand-lg">
                    <a class="navbar-brand mr-5" href=""><img class="w-15 h-15 rounded" src="images_static_custom/ll.jpg" alt="Rounded avatar"/>
                        <!--<img src="assets_custom/images/logo.svg" alt="Logo">-->

                    </a>
                    <button onclick="onToggleMenu(this)"  name="menu"   class="hidden duration-500  block navbar-toggler focus:outline-none lg:hidden" type="button" data-toggle="collapse" data-target="#navbarOne" aria-controls="navbarOne" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                    </button>

                    <div id="navbarOne">
                        <span class="text-3xl cursor-pointer mx-2 md:hidden block">
                        <ion-icon name="menu" onclick="Menu(this)"></ion-icon>

                        </span>
                        <ul id="nav" class="md:flex md:items-center md:z-auto md:static absolute bg-white w-full
                         left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px]
                         transition-all ease-in duration-500 ">

                            <li class="nav-item ml-5 lg:ml-11 font-bold">
                                <a class="page-scroll  active md:my-0" href="#home">Accueil</a>
                            </li>
                            <li class="nav-item ml-5 lg:ml-11 md:my-0">
                                <a class="page-scroll" href="#about">A propos</a>
                            </li>
                            <li class="nav-item ml-5 lg:ml-11 md:my-0">
                                <a class="page-scroll" href="#services">Services</a>
                            </li>
                            <li class="nav-item ml-5 lg:ml-11 md:my-0">
                                <a class="page-scroll" href="#work">Projets</a>
                            </li>

                            <li class="nav-item ml-5 lg:ml-11 md:my-0">
                                <a class="page-scroll" href="#activite">Activités</a>
                            </li>


                            <li class="nav-item ml-5 lg:ml-11 md:my-0">
                                <a class="" href="/visions">Visions</a>
                            </li>

                            <li class="nav-item ml-5 lg:ml-11 md:my-0">
                                <a class="page-scroll" href="#pricing">Partenaires</a>
                            </li>
                            <li class="nav-item ml-5 lg:ml-11 font-extrabold md:my-0">
                                <a class="" href="/faireUnDon">Faire un Don</a>
                            </li>

                            <li class="nav-item ml-5 lg:ml-11 md:my-0">
                                <a class="page-scroll" href="#contact">Contact</a>
                            </li>
                        </ul>
                    </div> <!-- navbar collapse -->
                </nav> <!-- navbar -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</div> <!-- header navbar -->

</section>





            <div id="home" class="header_hero bg-gray relative z-10 overflow-hidden lg:flex items-center">


                <div class="hero_shape shape_1">
                    <img src="assets_custom/images/shape/shape-1.svg" alt="shape">
                </div><!-- hero shape -->
                <div class="hero_shape shape_2">
                    <img src="assets_custom/images/shape/shape-2.svg" alt="shape">
                </div><!-- hero shape -->
                <div class="hero_shape shape_3">
                    <img src="assets_custom/images/shape/shape-3.svg" alt="shape">
                </div><!-- hero shape -->
                <div class="hero_shape shape_4">
                    <img src="assets_custom/images/shape/shape-4.svg" alt="shape">
                </div><!-- hero shape -->
                <div class="hero_shape shape_6">
                    <img src="assets_custom/images/shape/shape-1.svg" alt="shape">
                </div><!-- hero shape -->
                <div class="hero_shape shape_7">
                    <img src="assets_custom/images/shape/shape-4.svg" alt="shape">
                </div><!-- hero shape -->
                <div class="hero_shape shape_8">
                    <img src="assets_custom/images/shape/shape-3.svg" alt="shape">
                </div><!-- hero shape -->
                <div class="hero_shape shape_9">
                    <img src="assets_custom/images/shape/shape-2.svg" alt="shape">
                </div><!-- hero shape -->
                <div class="hero_shape shape_10">
                    <img src="assets_custom/images/shape/shape-4.svg" alt="shape">
                </div><!-- hero shape -->
                <div class="hero_shape shape_11">
                    <img src="assets_custom/images/shape/shape-1.svg" alt="shape">
                </div><!-- hero shape -->
                <div class="hero_shape shape_12">
                    <img src="assets_custom/images/shape/shape-2.svg" alt="shape">
                </div><!-- hero shape -->


                <div class="container">

                    @if($message = Session::get('success_contact'))

                    <div
  class="font-regular relative block w-full max-w-screen-md rounded-lg bg-green-500 px-4 py-4 text-base text-white"
  data-dismissible="alert"
>
  <div class="absolute top-2 left-2">
    <svg
      xmlns="http://www.w3.org/2000/svg"
      viewBox="0 0 24 24"
      fill="currentColor"
      aria-hidden="true"
      class="mt-px h-6 w-6"
    >
      <path
        fill-rule="evenodd"
        d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
        clip-rule="evenodd"
      ></path>
    </svg>
  </div>
  <div class="ml-8 mr-12">
    <h5 class="block font-sans text-xl font-semibold leading-snug tracking-normal text-white antialiased">
      Félicitations !
    </h5>
    <p class="mt-2 block font-sans text-base font-normal leading-relaxed text-white antialiased">
     {{ $message }}
    </p>
  </div>
  <div
    data-dismissible-target="alert"
    data-ripple-dark="true"
    class="absolute top-3 right-3 w-max rounded-lg transition-all hover:bg-white hover:bg-opacity-20"
  >
    <div role="button" class="w-max rounded-lg p-1">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        class="h-6 w-6"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor"
        stroke-width="2"
      >
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          d="M6 18L18 6M6 6l12 12"
        ></path>
      </svg>
    </div>
  </div>
</div>
    @endif


                    <div class="row">
                        <div class="w-full lg:w-1/2">
                            <div class="header_hero_content pt-150 lg:pt-0">
                                <h2 class="hero_title text-2xl sm:text-4xl md:text-5xl lg:text-4xl xl:text-5xl font-extrabold">Bienvenue sur le site officiel de GFC/ACRCAM <span class="text-theme-color"> !!!</span></h2>
                                <p class="mt-8 lg:mr-8"> <span class="font-bold">Association pour la Construction,
                                    Réhabilitation, Conservation et
                                    Assainissement par la Main d’œuvre en
                                    faveur des démunis,</span> est une association sans but lucratif,
                                    apolitique et non confessionnelle. Elle regroupe
                                    des ingénieurs et maçons qualifiés qui œuvrent
                                    dans le domaine de la construction, la
                                    réhabilitation, l’aménagement et
                                    l’assainissement principalement en bâtiment
                                    ainsi que l’environnement dans le milieu urbain, périurbain et rural.
                                    Fondée il y a 17 années, notre structure est un acteur majeur dans le domaine de la construction.
                                    Notre gamme de services est vaste et diversifiée, reflétant notre engagement à répondre à tous les besoins de nos clients.
                                </p>


                                <div class="hero_btn mt-10">
                                    <a class="main-btn page-scroll" href="#contact">Expérimenter.</a>
                                </div>

                            </div> <!-- header hero content -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
                <div class="header_shape hidden lg:block"></div>

                <div class="header_image flex items-center">
                    <div class="image 4xl:pl-30">
                        <img src="images_static_custom/construct.png" alt="Header Image">
                    </div>
                </div> <!-- header image -->
            </div> <!-- header hero -->
        </section>

        <!--====== HEADER PART ENDS ======-->

        <!--====== SERVICES PART START ======-->

        <section class="services_area pt-120" id="about">
            <div class="container">
                <div class="row justify-center">
                    <div class="w-full lg:w-1/2">
                        <div class="section_title text-center pb-6">
                            <h5 class="sub_title">A propos de nous !</h5>
                            <h4 class="main_title">Nos objectifs</h4>
                        </div> <!-- section title -->
                    </div>
                </div> <!-- row -->
                <div class="row justify-center">
                    <div class="w-full sm:w-10/12 md:w-6/12 lg:w-4/12">
                        <div class="single_services text-center mt-8 mx-3">
                            <div class="services_icon">
                                <i class="lni lni-write"></i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                                    <path class="services_shape" id="Polygon_12" data-name="Polygon 12" d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z" />
                                </svg>
                            </div>
                            <div class="services_content mt-5">
                                <h3 class="services_title text-black font-semibold text-xl md:text-3xl">Conditions d'habitation exceptionnelles.</h3>
                                <p class="mt-4">Notre but principal est de doter à la
                                    population de Bukavu et de ses environs les meilleures conditions d'habitation répondant aux normes urbanistiques et environnementales par ses oeuvres de construction et d'assainissement. </p>
                            </div>
                        </div> <!-- single services -->
                    </div>
                    <div class="w-full sm:w-10/12 md:w-6/12 lg:w-4/12">
                        <div class="single_services text-center mt-8 mx-3">
                            <div class="services_icon">
                                <i class="lni lni-bulb"></i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                                    <path class="services_shape" id="Polygon_12" data-name="Polygon 12" d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z" />
                                </svg>
                            </div>
                            <div class="services_content mt-5">
                                <h3 class="services_title text-black font-semibold text-xl md:text-3xl">Promouvoir l'architecture moderne.</h3>
                                <p class="mt-4">Vulgariser et promouvoir l'architecture moderne en partenariat avec les experts locaux et inernationaux pour offrir des services convenables aux prix abordables. </p>
                            </div>
                        </div> <!-- single services -->
                    </div>
                    <div class="w-full sm:w-10/12 md:w-6/12 lg:w-4/12">
                        <div class="single_services text-center mt-8 mx-3">
                            <div class="services_icon">
                                <i class="lni lni-checkmark-circle"></i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                                    <path class="services_shape" id="Polygon_12" data-name="Polygon 12" d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z" />
                                </svg>
                            </div>
                            <div class="services_content mt-5">
                                <h3 class="services_title text-black font-semibold text-xl md:text-3xl">Centre d'expertise et de documentation en architecture moderne.</h3>
                                <p class="mt-4">Organiser le centre d’expertise et de documentation en architecture moderne, en informatique accélérée, ceci en collaboration avec les partenaires d’ACRCAM afin d’offrir des services de qualités en maçonnerie, charpenterie, ferraillerie, carrelage,… par un autofinancement afin de participer à la création d’emplois aux démunis et aux jeunes désœuvrés . </p>
                            </div>
                        </div> <!-- single services -->
                    </div>

                    <div class="w-full sm:w-10/12 md:w-6/12 lg:w-4/12">
                        <div class="single_services text-center mt-8 mx-3">
                            <div class="services_icon">
                                <i class="lni lni-checkmark-circle"></i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                                    <path class="services_shape" id="Polygon_12" data-name="Polygon 12" d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z" />
                                </svg>
                            </div>
                            <div class="services_content mt-5">
                                <h3 class="services_title text-black font-semibold text-xl md:text-3xl">Réhabilitation des travaux de génie civil.</h3>
                                <p class="mt-4">Réhabiliter les travaux de génie civil et l’entretien des routes de desserte agricole pour désenclaver les milieux ruraux dans leur production agricole. </p>
                            </div>
                        </div> <!-- single services -->
                    </div>

                    <div class="w-full sm:w-10/12 md:w-6/12 lg:w-4/12">
                        <div class="single_services text-center mt-8 mx-3">
                            <div class="services_icon">
                                <i class="lni lni-checkmark-circle"></i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                                    <path class="services_shape" id="Polygon_12" data-name="Polygon 12" d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z" />
                                </svg>
                            </div>
                            <div class="services_content mt-5">
                                <h3 class="services_title text-black font-semibold text-xl md:text-3xl">Participation à la gestion durable de l'environnement.</h3>
                                <p class="mt-4">Organiser des cadres d’échanges et de capacitation avec les dirigeants locaux sur les questions de la gestion durable de l’environnement, des infrastructures et de l’assainissement. </p>
                            </div>
                        </div> <!-- single services -->
                    </div>

                    <div class="w-full sm:w-10/12 md:w-6/12 lg:w-4/12">
                        <div class="single_services text-center mt-8 mx-3">
                            <div class="services_icon">
                                <i class="lni lni-checkmark-circle"></i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                                    <path class="services_shape" id="Polygon_12" data-name="Polygon 12" d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z" />
                                </svg>
                            </div>
                            <div class="services_content mt-5">
                                <h3 class="services_title text-black font-semibold text-xl md:text-3xl">Lutte contre les constructions anarchiques.</h3>
                                <p class="mt-4">Lutter contre les constructions anarchiques qui provoquent souvent
                                    des incendies et effondrement à Bukavu comme ailleurs au Sud-Kivu.
                                     </p>
                            </div>
                        </div> <!-- single services -->
                    </div>

                </div> <!-- row -->
            </div> <!-- container -->
        </section>

        <!--====== SERVICES PART ENDS ======-->

        <!--====== ABOUT PART START ======-->

        <section id="why" class="about_area pt-120 relative">
            <div class="about_image flex items-end justify-end">
                <div class="image lg:pr-13">
                    <img src="assets_custom/images/about.svg" alt="about">
                </div>
            </div> <!-- about image -->
            <div class="container">
                <div class="row justify-end">
                    <div class="w-full lg:w-1/2">
                        <div class="about_content mx-4 pt-11 lg:pt-15 lg:pb-15">
                            <div class="section_title pb-9">
                                <h5 class="sub_title">Pourquoi choisir ACRCAM ?</h5>
                                <h4 class="main_title">Votre satisfaction est notre réussite !</h4>
                            </div> <!-- section title -->
                            <p>Notre approche centrée sur le client signifie que nous sommes en mesure de fournir des solutions de construction qui répondent parfaitement aux besoins de nos clients. Nous sommes fiers de notre capacité à créer des solutions complètes qui dépassent les besoins fonctionnels et offrent une expérience globale satisfaisante. Chez Acrcam, nous sommes déterminés à offrir à nos clients un service exceptionnel et à établir des relations durables avec eux... </p>
                            <ul class="about_list pt-3">
                                <li class="flex mt-5">
                                    <div class="about_check">
                                        <i class="lni lni-checkmark-circle"></i>
                                    </div>
                                    <div class="about_list_content pl-5 pr-2">
                                        <p>Nous sommes déterminés à offrir à nos clients une expérience positive à chaque étape du processus de construction</p>
                                    </div>
                                </li>
                                <li class="flex mt-5">
                                    <div class="about_check">
                                        <i class="lni lni-checkmark-circle"></i>
                                    </div>
                                    <div class="about_list_content pl-5 pr-2">
                                        <p>Nous commençons par écouter attentivement les besoins de nos clients et créons des solutions sur mesure pour répondre à leurs demandes spécifiques</p>
                                    </div>
                                </li>
                                <li class="flex mt-5">
                                    <div class="about_check">
                                        <i class="lni lni-checkmark-circle"></i>
                                    </div>
                                    <div class="about_list_content pl-5 pr-2">
                                        <p> Nous utilisons des techniques de recherche de marché pour comprendre la nature des relations avec nos clients et déterminer s'il s'agit de solutions générales ou personnalisées</p>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- about content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </section>

        <!--====== ABOUT PART ENDS ======-->

        <!--====== SERVICES PART START ======-->

        <section id="services" class="services_area pt-120 pb-120">
            <div class="container">
                <div class="row justify-center">
                    <div class="w-full lg:w-1/2">
                        <div class="section_title text-center pb-6">
                            <h5 class="sub_title">Ce que nous faisons</h5>
                            <h4 class="main_title">Nos Services</h4>
                        </div> <!-- section title -->
                    </div>
                </div> <!-- row -->
                <div class="row justify-center">
                    <div class="w-full sm:w-10/12 md:w-6/12 lg:w-4/12">
                        <div class="single_services text-center mt-8 mx-3">
                            <div class="services_icon">
                                <i class="lni lni-layout"></i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                                    <path class="services_shape" id="Polygon_12" data-name="Polygon 12" d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z" />
                                </svg>
                            </div>
                            <div class="services_content mt-5 xl:mt-10">
                                <h3 class="services_title text-black font-semibold text-xl md:text-2xl lg:text-xl xl:text-3xl">Conception des plans et maquettes</h3>
                                <p class="mt-4">Avec une expérience de 18 ans dans le domaine de Construction, notre équipe vous fournis les conceptions modernes des maisons d’habitation et de toute sorte d’immeubles</p>
                            </div>
                        </div> <!-- single services -->
                    </div>

                    <div class="w-full sm:w-10/12 md:w-6/12 lg:w-4/12">
                        <div class="single_services text-center mt-8 mx-3">
                            <div class="services_icon">
                                <i class="lni lni-bullhorn"></i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                                    <path class="services_shape" id="Polygon_12" data-name="Polygon 12" d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z" />
                                </svg>
                            </div>
                            <div class="services_content mt-5 xl:mt-10">
                                <h3 class="services_title text-black font-semibold text-xl md:text-2xl lg:text-xl xl:text-3xl">Exécution des plans</h3>
                                <p class="mt-4">ACRCAM possède une équipe des techniciens hautement qualifiés notamment les maçons, les ferrailleurs, les coffreurs et charpentiers, les carreleurs, bétonnier, plombiers,électriciens, peintres, jardiniers. Nous mobilisons toutes ces équipes pour l'éxecution de nos plans et maquettes. </p>
                            </div>
                        </div> <!-- single services -->
                    </div>

                    <div class="w-full sm:w-10/12 md:w-6/12 lg:w-4/12">
                        <div class="single_services text-center mt-8 mx-3">
                            <div class="services_icon">
                                <i class="lni lni-mobile"></i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                                    <path class="services_shape" id="Polygon_12" data-name="Polygon 12" d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z" />
                                </svg>
                            </div>
                            <div class="services_content mt-5 xl:mt-10">
                                <h3 class="services_title text-black font-semibold text-xl md:text-2xl lg:text-xl xl:text-3xl">Facilitation des achats et ventes des parcelles et vehicules</h3>
                                <p class="mt-4">Nous facilitons également la vente et achat des
                                    parcelles ou maisons tout en améliorant les conditions de vente en garantissant la sécurité des acheteurs et vendeurs ainsi que celle des commissionnaires-courtiers.
                                    Nous leur offrons en définitif un centre agrée par l’Institution Compétente au niveau provincial et national.
                                     </p>
                            </div>
                        </div> <!-- single services -->
                    </div>

                    <div class="w-full sm:w-10/12 md:w-6/12 lg:w-4/12">
                        <div class="single_services text-center mt-8 mx-3">
                            <div class="services_icon">
                                <i class="lni lni-seo"></i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                                    <path class="services_shape" id="Polygon_12" data-name="Polygon 12" d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z" />
                                </svg>
                            </div>
                            <div class="services_content mt-5 xl:mt-10">
                                <h3 class="services_title text-black font-semibold text-xl md:text-2xl lg:text-xl xl:text-3xl">Assainissement.</h3>
                                <p class="mt-4">Dans les milieux urbains, surtout dans la ville de Bukavu, ACRCAM promeut le droit à un environnement sain et la protection des écosystèmes, en luttant contre la pollution de l’environnement. Il est alors mis sur pied un Département de l’assainissement ayant comme mission principale la gestion rationnelle et durable de l’environnement.</p>
                            </div>
                        </div> <!-- single services -->
                    </div>

                    <div class="w-full sm:w-10/12 md:w-6/12 lg:w-4/12">
                        <div class="single_services text-center mt-8 mx-3">
                            <div class="services_icon">
                                <i class="lni lni-layers"></i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                                    <path class="services_shape" id="Polygon_12" data-name="Polygon 12" d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z" />
                                </svg>
                            </div>
                            <div class="services_content mt-5 xl:mt-10">
                                <h3 class="services_title text-black font-semibold text-xl md:text-2xl lg:text-xl xl:text-3xl">Encadrement des personnes de 3ème age.</h3>
                                <p class="mt-4">En vue de la matérialisation de l’objectif poursuivi en ce qui est de l’encadrement et la défense des droits des personnes démunies et vulnérables, en l’occurrence la personne

                                    de troisième âge (vieilles et vieux, veuves et veufs et tout autre démuni), ACRCAM asbl a ouvert un Département des PTA pour cette fin.

                                    Ce Département a pour mission de s’imprégner, au jour le jour, des difficultés auxquelles les PTA de la Province du Sud-Kivu sont confrontées et proposer des solutions adéquates avec les Bureaux d’Etudes et des Programmes.
                                    </p>
                            </div>
                        </div> <!-- single services -->
                    </div>

                    <div class="w-full sm:w-10/12 md:w-6/12 lg:w-4/12">
                        <div class="single_services text-center mt-8 mx-3">
                            <div class="services_icon">
                                <i class="lni lni-briefcase"></i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                                    <path class="services_shape" id="Polygon_12" data-name="Polygon 12" d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z" />
                                </svg>
                            </div>
                            <div class="services_content mt-5 xl:mt-10">
                                <h3 class="services_title text-black font-semibold text-xl md:text-2xl lg:text-xl xl:text-3xl">Formation dans différents domaines.</h3>
                                <p class="mt-4">ACRCAM organise des formations axées sur les langues (la langue chinoise(pour tous les opérateurs économiques dont les activités ont un lien avec la chine et autres personnes dans le besoin de l'apprentissage et l'utilisation de la langue choinoise), l'anglais américain), la technologie de bâtiment (formation accélérée et recyclage en logiciels de construction et sanctionnée par un brevet de formation), le bâtiment et construction moderne, l'élevage des bêtes de race améliorée. </p>
                            </div>
                        </div> <!-- single services -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </section>

        <!--====== SERVICES PART ENDS ======-->

        <!--====== WORK PART START ======-->

        <section id="work" class="work_area bg-gray pt-120 pb-120">
            <div class="container">
                <div class="row justify-center">
                    <div class="w-ull lg:w-1/2">
                        <div class="section_title text-center pb-6">
                            <h5 class="sub_title">Nos Projets</h5>
                            <h4 class="main_title">Quelques projets récents de Acrcam</h4>
                        </div> <!-- section title -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div class="container-fluid">
                <div class="work_wrapper relative mb-2">
                    <div class="row work_active">


                        @foreach( $images_projets as $image)

                        <div class="w-full lg:w-3/12">
                            <div class="single_item mx-auto">
                                <div class="single_work mx-3">
                                    <div class="work_image">
                                        <img src="{{ asset($image->image_projet) }}" alt="work" class="w-full">
                                    </div>
                                    <div class="work_content">
                                        <a href="#" class="arrow"><i class="lni lni-chevron-right"></i></a>
                                        <h4 class="work_title text-xl md:text-2xl"><a href="#">{{ $image->projet->name }}</a></h4>
                                        <p class="mt-2">{{ $image->projet->type_projet->nameTypeProjet }}</p>
                                    </div>
                                </div>
                            </div> <!-- single work -->
                        </div>

                        @endforeach



                    </div> <!-- row -->

                </div>

                <div class="pricing_menu mt-8 pb-8">
                    <ul class="flex justify-center">
                        <li class="nav-item">
                            <a class="active bg-gray text-body-color py-3 px-8 rounded-tl-full rounded-bl-full" data-tab-target="" href="/voirtouslesprojets">Voir tous les projets</a>
                        </li>

                    </ul>
                </div>
            </div> <!-- container -->
        </section>


        <!-- Activites part -->

        <section id="activite" class="activite_area bg-gray pt-120 pb-120">
            <div class="container">
                <div class="row justify-center">
                    <div class="w-ull lg:w-1/2">
                        <div class="section_title text-center pb-6">
                            <h5 class="sub_title">Nos Activités</h5>
                            <h4 class="main_title">Quelques activités récentes de Acrcam</h4>
                        </div> <!-- section title -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div class="container-fluid">
                <div class="work_wrapper relative mb-2">
                    <div class="row activite_active">


                        @foreach( $images_activites as $image)

                        <div class="w-full lg:w-3/12">
                            <div class="single_item mx-auto">
                                <div class="single_work mx-3">
                                    <div class="work_image">
                                        <img src="{{ asset($image->image_activite) }}" alt="work" class="w-full">
                                    </div>
                                    <div class="work_content">
                                        <a href="#" class="arrow"><i class="lni lni-chevron-right"></i></a>
                                        <h4 class="work_title text-xl md:text-2xl"><a href="#">{{ $image->activite->nom_activite }}</a></h4>
                                        <p class="mt-2">{{ $image->activite->date_activite }}</p>
                                    </div>
                                </div>
                            </div> <!-- single work -->
                        </div>

                        @endforeach



                    </div> <!-- row -->

                </div>

                <div class="pricing_menu mt-8 pb-8">
                    <ul class="flex justify-center">
                        <li class="nav-item">
                            <a class="active bg-gray text-body-color py-3 px-8 rounded-tl-full rounded-bl-full" data-tab-target="" href="/voirtouteslesactivites">Voir toutes les activités</a>
                        </li>

                    </ul>
                </div>
            </div> <!-- container -->
        </section>

        <!-- end of activity part-->

        <!--====== WORK PART ENDS ======-->

        <!--====== PRICING PLAN PART START ======-->

        <section id="pricing" class="pricing_area pt-120 pb-120">
            <div class="container">
                <div class="row justify-center">
                    <div class="w-full lg:w-1/2">
                        <div class="section_title text-center pb-6">
                            <h5 class="sub_title">Nos Partenaires</h5>
                            <h4 class="main_title">Ils nous font confiance:</h4>
                        </div> <!-- section title -->
                    </div>
                </div> <!-- row -->
                <div class="row">
                    <div class="w-full">


                        <div class="pricing_content mt-6_area">
                            <div class="tab-content">
                                <div class="active tab-pane" id="monthlyPlan" data-tab-content>
                                    <div class="row justify-center">

                                        @foreach($partenaires as $partenaire)


                                        <div class="w-full sm:w-9/12 md:w-7/12 lg:w-4/12">
                                            <div class="single_pricing text-center mt-8 mx-3">
                                                <div class="pricing_title relative inline-block">
                                                    <img class="w-25 h-24 rounded-full" src="{{ asset($partenaire->image_logo) }}" alt="Rounded avatar"/>
                                                        <path class="services_shape" id="Polygon_15" data-name="Polygon 15" d="M51.2,2.329a11,11,0,0,1,9.6,0L96.15,19.478a11,11,0,0,1,5.927,7.466l8.76,38.665a11,11,0,0,1-2.1,9.258l-24.508,30.96A11,11,0,0,1,75.6,110H36.4a11,11,0,0,1-8.625-4.173L3.266,74.867a11,11,0,0,1-2.1-9.258l8.76-38.665a11,11,0,0,1,5.927-7.466Z" fill="#f94f4f"/>
                                                    </svg>
                                                </div>
                                                <div class="pricing_content mt-6">
                                                    <span class="pricing_price font-bold text-black text-4xl">{{ $partenaire->name }}</span>
                                                    <p class="mt-4 leading-9">{{ $partenaire->commentaires }}.</p>

                                                </div>
                                            </div>  <!-- single pricing -->
                                        </div>

                                        @endforeach





                                    </div> <!-- row -->
                                </div>
                                <div class="tab-pane" id="yearlyPlan" data-tab-content>
                                    <div class="row justify-center">
                                        <div class="w-full sm:w-9/12 md:w-7/12 lg:w-4/12">
                                            <div class="single_pricing text-center mt-8 mx-3">
                                                <div class="pricing_title relative inline-block">
                                                    <h4 class="title group-hover:text-white">Basic</h4>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="112" height="110" viewBox="0 0 112 110">
                                                        <path class="services_shape" id="Polygon_15" data-name="Polygon 15" d="M51.2,2.329a11,11,0,0,1,9.6,0L96.15,19.478a11,11,0,0,1,5.927,7.466l8.76,38.665a11,11,0,0,1-2.1,9.258l-24.508,30.96A11,11,0,0,1,75.6,110H36.4a11,11,0,0,1-8.625-4.173L3.266,74.867a11,11,0,0,1-2.1-9.258l8.76-38.665a11,11,0,0,1,5.927-7.466Z" fill="#f94f4f"/>
                                                    </svg>
                                                </div>
                                                <div class="pricing_content mt-6">
                                                    <span class="pricing_price font-bold text-black text-4xl">$99.00</span>
                                                    <p class="mt-4 leading-9">Lorem ipsum dolor sit am consetetur sadi aliquyam erat sed diam voluptua vero eos  accusam et justo duo dolores </p>
                                                    <a href="" class="main-btn pricing_btn">Choose Plan</a>
                                                </div>
                                            </div>  <!-- single pricing -->
                                        </div>

                                        <div class="w-full sm:w-9/12 md:w-7/12 lg:w-4/12">
                                            <div class="single_pricing text-center mt-8 mx-3 active">
                                                <div class="pricing_title relative inline-block">
                                                    <h4 class="title group-hover:text-white">Standard</h4>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="112" height="110" viewBox="0 0 112 110">
                                                        <path class="services_shape" id="Polygon_15" data-name="Polygon 15" d="M51.2,2.329a11,11,0,0,1,9.6,0L96.15,19.478a11,11,0,0,1,5.927,7.466l8.76,38.665a11,11,0,0,1-2.1,9.258l-24.508,30.96A11,11,0,0,1,75.6,110H36.4a11,11,0,0,1-8.625-4.173L3.266,74.867a11,11,0,0,1-2.1-9.258l8.76-38.665a11,11,0,0,1,5.927-7.466Z" fill="#f94f4f"/>
                                                    </svg>
                                                </div>
                                                <div class="pricing_content mt-6">
                                                    <span class="pricing_price font-bold text-black text-4xl">$199.00</span>
                                                    <p class="mt-4 leading-9">Lorem ipsum dolor sit am consetetur sadi aliquyam erat sed diam voluptua vero eos  accusam et justo duo dolores </p>
                                                    <a href="" class="main-btn pricing_btn">Choose Plan</a>
                                                </div>
                                            </div>  <!-- single pricing -->
                                        </div>

                                        <div class="w-full sm:w-9/12 md:w-7/12 lg:w-4/12">
                                            <div class="single_pricing text-center mt-8 mx-3">
                                                <div class="pricing_title relative inline-block">
                                                    <h4 class="title group-hover:text-white">Premium</h4>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="112" height="110" viewBox="0 0 112 110">
                                                        <path class="services_shape" id="Polygon_15" data-name="Polygon 15" d="M51.2,2.329a11,11,0,0,1,9.6,0L96.15,19.478a11,11,0,0,1,5.927,7.466l8.76,38.665a11,11,0,0,1-2.1,9.258l-24.508,30.96A11,11,0,0,1,75.6,110H36.4a11,11,0,0,1-8.625-4.173L3.266,74.867a11,11,0,0,1-2.1-9.258l8.76-38.665a11,11,0,0,1,5.927-7.466Z" fill="#f94f4f"/>
                                                    </svg>
                                                </div>
                                                <div class="pricing_content mt-6">
                                                    <span class="pricing_price font-bold text-black text-4xl">$499.00</span>
                                                    <p class="mt-4 leading-9">Lorem ipsum dolor sit am consetetur sadi aliquyam erat sed diam voluptua vero eos  accusam et justo duo dolores </p>
                                                    <a href="" class="main-btn pricing_btn">Choose Plan</a>
                                                </div>
                                            </div>  <!-- single pricing -->
                                        </div>
                                    </div> <!-- row -->
                                </div>
                            </div>
                        </div> <!-- pricing menu -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </section>

        <!--====== PRICING PLAN PART ENDS ======-->

        <!--====== TEAM PART START ======-->

        <section id="team" class="team_area bg-gray pt-120 pb-120">
            <div class="container">
                <div class="row justify-center">
                    <div class="w-full lg:w-1/2">
                        <div class="section_title text-center pb-6">
                            <h5 class="sub_title">Notre Equipe</h5>
                            <h4 class="main_title">Rencontrer les membres de l'entreprise</h4>
                        </div> <!-- section title -->
                    </div>
                </div> <!-- row -->
                <div class="team-wrapper relative">
                    <div class="row team_active">
                        <div class="w-full lg:w-4/12">
                            <div class="single_team_item mx-auto">
                                <div class="single_team mx-3">
                                    <div class="team_image relative">
                                        <img src="team_acrcam/ntamugale_keffa_ceo.jpg" alt="team" class="w-full">
                                        <ul class="social absolute top-4 right-8">
                                            <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>

                                        </ul>
                                    </div>
                                    <div class="team_content py-5 px-8 relative">
                                        <h4 class="team_name text-xl md:text-2xl"><a href="#" class="text-black group-hover:text-white">Ntamulage Keffa</a></h4>
                                        <p class="mt-2 transition-all duration-300 group-hover:text-white">Coordonateur, Gérant et CEO</p>
                                    </div>
                                </div> <!-- single team -->
                            </div>
                        </div>
                        <div class="w-full lg:w-4/12">
                            <div class="single_team_item mx-auto">
                                <div class="single_team mx-3">
                                    <div class="team_image relative">
                                        <img src="team_acrcam/ndosi_jonathan.jpg" alt="team" class="w-full">
                                        <ul class="social absolute top-4 right-8">
                                            <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>

                                        </ul>
                                    </div>
                                    <div class="team_content py-5 px-8 relative">
                                        <h4 class="team_name text-xl md:text-2xl"><a href="#" class="text-black group-hover:text-white">Ndosi Jonathan</a></h4>
                                        <p class="mt-2 transition-all duration-300 group-hover:text-white">Chargé de l'admnistration et finance</p>
                                    </div>
                                </div> <!-- single team -->
                            </div>
                        </div>
                        <div class="w-full lg:w-4/12">
                            <div class="single_team_item mx-auto">
                                <div class="single_team mx-3">
                                    <div class="team_image relative">
                                        <img src="team_acrcam/mapendo_dorcas.jpg" alt="team" class="w-full">
                                        <ul class="social absolute top-4 right-8">
                                            <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>

                                        </ul>
                                    </div>
                                    <div class="team_content py-5 px-8 relative">
                                        <h4 class="team_name text-xl md:text-2xl"><a href="#" class="text-black group-hover:text-white">Dorcas Mapendo</a></h4>
                                        <p class="mt-2 transition-all duration-300 group-hover:text-white">Coordonatrice adjointe</p>
                                    </div>
                                </div> <!-- single team -->
                            </div>
                        </div>
                        <div class="w-full lg:w-4/12">
                            <div class="single_team_item mx-auto">
                                <div class="single_team mx-3">
                                    <div class="team_image relative">
                                        <img src="team_acrcam/raphael.jpg" alt="team" class="w-full">
                                        <ul class="social absolute top-4 right-8">
                                            <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>

                                        </ul>
                                    </div>
                                    <div class="team_content py-5 px-8 relative">
                                        <h4 class="team_name text-xl md:text-2xl"><a href="#" class="text-black group-hover:text-white">Raphael</a></h4>
                                        <p class="mt-2 transition-all duration-300 group-hover:text-white">Président du conseil d'administration</p>
                                    </div>
                                </div> <!-- single team -->
                            </div>
                        </div>

                        <div class="w-full lg:w-4/12">
                            <div class="single_team_item mx-auto">
                                <div class="single_team mx-3">
                                    <div class="team_image relative">
                                        <img src="team_acrcam/antonia.jpg" alt="team" class="w-full">
                                        <ul class="social absolute top-4 right-8">
                                            <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>

                                        </ul>
                                    </div>
                                    <div class="team_content py-5 px-8 relative">
                                        <h4 class="team_name text-xl md:text-2xl"><a href="#" class="text-black group-hover:text-white">Antonia</a></h4>
                                        <p class="mt-2 transition-all duration-300 group-hover:text-white">Caissière</p>
                                    </div>
                                </div> <!-- single team -->
                            </div>
                        </div>

                          <div class="w-full lg:w-4/12">
                            <div class="single_team_item mx-auto">
                                <div class="single_team mx-3">
                                    <div class="team_image relative">
                                        <img src="team_acrcam/answer.jpg" alt="team" class="w-full">
                                        <ul class="social absolute top-4 right-8">
                                            <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>

                                        </ul>
                                    </div>
                                    <div class="team_content py-5 px-8 relative">
                                        <h4 class="team_name text-xl md:text-2xl"><a href="#" class="text-black group-hover:text-white">Answer</a></h4>
                                        <p class="mt-2 transition-all duration-300 group-hover:text-white">Secretaire</p>
                                    </div>
                                </div> <!-- single team -->
                            </div>
                        </div>

                          <div class="w-full lg:w-4/12">
                            <div class="single_team_item mx-auto">
                                <div class="single_team mx-3">
                                    <div class="team_image relative">
                                        <img src="team_acrcam/me_alexandre.jpg" alt="team" class="w-full">
                                        <ul class="social absolute top-4 right-8">
                                            <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>

                                        </ul>
                                    </div>
                                    <div class="team_content py-5 px-8 relative">
                                        <h4 class="team_name text-xl md:text-2xl"><a href="#" class="text-black group-hover:text-white">Maître Alexandre</a></h4>
                                        <p class="mt-2 transition-all duration-300 group-hover:text-white">Conseiller en matière juridique et administrative </p>
                                    </div>
                                </div> <!-- single team -->
                            </div>
                        </div>


                        <div class="w-full lg:w-4/12">
                            <div class="single_team_item mx-auto">
                                <div class="single_team mx-3">
                                    <div class="team_image relative">
                                        <img src="team_acrcam/gloire.jpg" alt="team" class="w-full">
                                        <ul class="social absolute top-4 right-8">
                                            <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>

                                        </ul>
                                    </div>
                                    <div class="team_content py-5 px-8 relative">
                                        <h4 class="team_name text-xl md:text-2xl"><a href="#" class="text-black group-hover:text-white">Gloire</a></h4>
                                        <p class="mt-2 transition-all duration-300 group-hover:text-white">Chargé de la logistique </p>
                                    </div>
                                </div> <!-- single team -->
                            </div>
                        </div>

                        <div class="w-full lg:w-4/12">
                            <div class="single_team_item mx-auto">
                                <div class="single_team mx-3">
                                    <div class="team_image relative">
                                        <img src="team_acrcam/blaise_muta.jpg" alt="team" class="w-full">
                                        <ul class="social absolute top-4 right-8">
                                            <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>

                                        </ul>
                                    </div>
                                    <div class="team_content py-5 px-8 relative">
                                        <h4 class="team_name text-xl md:text-2xl"><a href="#" class="text-black group-hover:text-white">Blaise Mutala</a></h4>
                                        <p class="mt-2 transition-all duration-300 group-hover:text-white">Chef  du bureau d'étude </p>
                                    </div>
                                </div> <!-- single team -->
                            </div>
                        </div>

                        <div class="w-full lg:w-4/12">
                            <div class="single_team_item mx-auto">
                                <div class="single_team mx-3">
                                    <div class="team_image relative">
                                        <img src="team_acrcam/elias_kab.jpg" alt="team" class="w-full">
                                        <ul class="social absolute top-4 right-8">
                                            <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>

                                        </ul>
                                    </div>
                                    <div class="team_content py-5 px-8 relative">
                                        <h4 class="team_name text-xl md:text-2xl"><a href="#" class="text-black group-hover:text-white">Elias Kabongo</a></h4>
                                        <p class="mt-2 transition-all duration-300 group-hover:text-white">Chef adjoint du bureau d'étude </p>
                                    </div>
                                </div> <!-- single team -->
                            </div>
                        </div>

                        <div class="w-full lg:w-4/12">
                            <div class="single_team_item mx-auto">
                                <div class="single_team mx-3">
                                    <div class="team_image relative">
                                        <img src="team_acrcam/fidele_bir.jpg" alt="team" class="w-full">
                                        <ul class="social absolute top-4 right-8">
                                            <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>

                                        </ul>
                                    </div>
                                    <div class="team_content py-5 px-8 relative">
                                        <h4 class="team_name text-xl md:text-2xl"><a href="#" class="text-black group-hover:text-white">Fidèle Biringanine</a></h4>
                                        <p class="mt-2 transition-all duration-300 group-hover:text-white">Chef de charrois automobile</p>
                                    </div>
                                </div> <!-- single team -->
                            </div>
                        </div>

                        <div class="w-full lg:w-4/12">
                            <div class="single_team_item mx-auto">
                                <div class="single_team mx-3">
                                    <div class="team_image relative">
                                        <img src="team_acrcam/gisele.jpg" alt="team" class="w-full">
                                        <ul class="social absolute top-4 right-8">
                                            <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>

                                        </ul>
                                    </div>
                                    <div class="team_content py-5 px-8 relative">
                                        <h4 class="team_name text-xl md:text-2xl"><a href="#" class="text-black group-hover:text-white">Gisèle</a></h4>
                                        <p class="mt-2 transition-all duration-300 group-hover:text-white">Receptionniste</p>
                                    </div>
                                </div> <!-- single team -->
                            </div>
                        </div>


                        <div class="w-full lg:w-4/12">
                            <div class="single_team_item mx-auto">
                                <div class="single_team mx-3">
                                    <div class="team_image relative">
                                        <img src="team_acrcam/jonathan_21.jpg" alt="team" class="w-full">
                                        <ul class="social absolute top-4 right-8">
                                            <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>

                                        </ul>
                                    </div>
                                    <div class="team_content py-5 px-8 relative">
                                        <h4 class="team_name text-xl md:text-2xl"><a href="#" class="text-black group-hover:text-white">Patrick Baguma</a></h4>
                                        <p class="mt-2 transition-all duration-300 group-hover:text-white">Magasinier</p>
                                    </div>
                                </div> <!-- single team -->
                            </div>
                        </div>



                    </div> <!-- row -->
                </div>
            </div> <!-- container -->
        </section>

        <!--====== TEAM PART ENDS ======-->



        <!--====== CONTACT PART START ======-->

        <section id="contact" class="contact_area relative pt-18 pb-120">
            <div class="contact_image flex items-center justify-end">
                <div class="image lg:pr-13">
                    <img src="assets_custom/images/contact.svg" alt="about">
                </div>
            </div> <!-- about image -->

            <div class="container">
                <div class="row justify-end">
                    <div class="w-full lg:w-1/2">
                        <div class="contact_wrapper mt-11">
                            <div class="section_title pb-4">
                                <h5 class="sub_title">Contact</h5>
                                <h4 class="main_title">Nous contacter.</h4>
                                <p>Merci de bien vouloir nous contacter pour béneficier de nos différents services et faire partie de la communauté...</p>
                            </div> <!-- section title -->

                            <div class="contact_form">
                                <form id="contact-form" action="{{  route('storecontact')}}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="w-full md:w-1/2">
                                            <div class="mx-3">
                                                <div class="single_form mt-8">
                                                    <input name="name" id="name" type="text" placeholder="Nom" class="w-full rounded-md py-4 px-6 border border-solid border-body-color">
                                                </div> <!-- single form -->
                                            </div>
                                        </div>
                                        <div class="w-full md:w-1/2">
                                            <div class="mx-3">
                                                <div class="single_form mt-8">
                                                    <input name="email" id="email" type="email" placeholder="Email" class="w-full rounded-md py-4 px-6 border border-solid border-body-color">
                                                </div> <!-- single form -->
                                            </div>
                                        </div>

                                        <div class="w-full md:w-1/2">
                                            <div class="mx-3">
                                                <div class="single_form mt-8">
                                                    <input name="phone" id="email" type="phone" placeholder="Votre numéro de téléphone" class="w-full rounded-md py-4 px-6 border border-solid border-body-color">
                                                </div> <!-- single form -->
                                            </div>
                                        </div>

                                        <div class="w-full">
                                            <div class="mx-3">
                                                <div class="single_form mt-8">
                                                    <textarea name="message" id="message" placeholder="Message" rows="5" class="w-full rounded-md py-4 px-6 border border-solid border-body-color resize-none"></textarea>
                                                </div> <!-- single form -->
                                            </div>
                                        </div>
                                        <p class="form-message mx-3"></p>
                                        <div class="w-full">
                                            <div class="mx-3">
                                                <div class="single_form mt-8">
                                                    <button type="submit" class="main-btn contact-btn">Envoyer</button>
                                                </div> <!-- single form -->
                                            </div>
                                        </div>
                                    </div> <!-- row -->
                                </form>
                            </div> <!-- contact form -->
                        </div> <!-- contact wrapper -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </section>

        <!--====== CONTACT PART ENDS ======-->

        <!--====== FOOTER PART START ======-->

        <footer id="footer" class="footer_area bg-black relative z-10">
            <div class="shape absolute left-0 top-0 opacity-5 h-full overflow-hidden w-1/3">
                <img src="assets_custom/images/footer-shape-left.png" alt="">
            </div>
            <div class="shape absolute right-0 top-0 opacity-5 h-full overflow-hidden w-1/3">
                <img src="assets_custom/images/footer-shape-right.png" alt="">
            </div>
            <div class="container">
                <div class="footer_widget pt-18 pb-120">
                    <div class="row justify-center">
                        <div class="w-full md:w-1/2 lg:w-3/12 mr-2">
                            <div class="footer_about mt-13 mx-3">
                                <div class="footer_logo">
                                    <a class="navbar-brand" href=""><img class="w-15 h-15 rounded" src="images_static_custom/ll.jpg" alt="Rounded avatar"/>
                                </div>
                                <div class="footer_content mt-8">
                                    <p class="text-white">ACRCAM transforme vos plus grandes imaginations en réalité ! Merci de nous faire confiance...🎊</p>
                                </div>
                            </div> <!-- footer about -->
                        </div>
                        <div class="w-full md:w-1/2 lg:w-5/12">
                            <div class="footer_link_wrapper flex flex-wrap mx-3">
                                <div class="footer_link w-1/2 md:pl-13 mt-13">
                                    <h2 class="footer_title text-xl font-semibold text-white">Liens Rapides</h2>
                                    <ul class="link pt-4">
                                        <li><a href="/voirtouslesprojets" class="text-white mt-4 hover:text-theme-color">Nos Projets</a></li>
                                        <li><a href="/voirnoslocaux" class="text-white mt-4 hover:text-theme-color">Visiter Nos Locaux</a></li>

                                    </ul>
                                </div> <!-- footer link -->
                                <div class="footer_link w-1/2 md:pl-13 mt-13">
                                    <h2 class="footer_title text-xl font-semibold text-white">Avec ACRCAM:</h2>
                                    <ul class="link pt-4">
                                        <li><span  class="text-white mt-4 hover:text-theme-color">Vos imaginations deviennent réalité.</span></li>
                                        <li><span  class="text-white mt-4 hover:text-theme-color">Le monde devient meilleur.</span></li>

                                    </ul>
                                </div> <!-- footer link -->
                            </div> <!-- footer link wrapper -->
                        </div>

                    </div> <!-- row -->
                </div> <!-- footer widget -->
                <div class="footer_copyright pt-3 pb-6 border-t-2 border-solid border-white border-opacity-10 sm:flex justify-between">
                    <div class="footer_social pt-4 mx-3 text-center">

                    </div> <!-- footer social -->
                    <div class="footer_copyright_content pt-4 text-center">

                    </div> <!-- footer copyright content -->
                </div> <!-- footer copyright -->
            </div> <!-- container -->
        </footer>

        <!--====== FOOTER PART ENDS ======-->

        <!--====== BACK TOP TOP PART START ======-->

        <a href="#" class="scroll-top"><i class="lni lni-chevron-up"></i></a>

        <!--====== BACK TOP TOP PART ENDS ======-->

        <!--====== PART START ======-->

    <!--
        <section class="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-">

                    </div>
                </div>
            </div>
        </section>
    -->

        <!--====== PART ENDS ======-->

    <script>
         function Menu(e){
      let list = document.querySelector('ul');
      e.name === 'menu' ? (e.name = "close",list.classList.add('top-[80px]') , list.classList.add('opacity-100')) :( e.name = "menu" ,list.classList.remove('top-[80px]'),list.classList.remove('opacity-100'))
    }
    </script>

        <!--====== Tiny Slider js ======-->
        <script src="assets_custom/js/tiny-slider.js"></script>

        <!--====== Wow js ======-->
        <script src="assets_custom/js/wow.min.js"></script>

        <!--====== Main js ======-->
        <script src="assets_custom/js/main.js"></script>

        <script src="https://cdn.tailwindcss.com"></script>

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>





    </body>
</html>
