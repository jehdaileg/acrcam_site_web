<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/customize_1.css') }}">

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
    <body>

        <!--====== PRELOADER PART ENDS ======-->

        <!--====== HEADER PART START ======-->

        <section class="header_area absolute mb-4 px-4 py-4">
            <div class="navbar-area bg-white">
                <div class="container relative">
                    <div class="row items-center">
                        <div class="w-full">
                            <nav class="flex items-center justify-between py-4 navbar navbar-expand-lg">
                                <a class="navbar-brand mr-5" href=""><img class="w-15 h-15 rounded" src="images_static_custom/ll.jpg" alt="Rounded avatar"/>
                                    <!--<img src="assets_custom/images/logo.svg" alt="Logo">-->

                                </a>
                                <button class="block navbar-toggler focus:outline-none lg:hidden" type="button" data-toggle="collapse" data-target="#navbarOne" aria-controls="navbarOne" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="toggler-icon"></span>
                                    <span class="toggler-icon"></span>
                                    <span class="toggler-icon"></span>
                                </button>

                                <div id="navbarOne">
                                    <ul id="nav" class="items-center content-start mr-auto lg:justify-end navbar-nav lg:flex">
                                        <li class="nav-item ml-5 lg:ml-11 font-bold">
                                            <a class="page-scroll  active" href="#home">Accueil</a>
                                        </li>
                                        <li class="nav-item ml-5 lg:ml-11">
                                            <a class="page-scroll" href="#about">A propos</a>
                                        </li>
                                        <li class="nav-item ml-5 lg:ml-11">
                                            <a class="page-scroll" href="#services">Services</a>
                                        </li>
                                        <li class="nav-item ml-5 lg:ml-11">
                                            <a class="page-scroll" href="#work">Projets</a>
                                        </li>


                                        <li class="nav-item ml-5 lg:ml-11">


                                    <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center group" type="button">Visions <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                                    <!-- Dropdown menu -->
                                    <div id="dropdownHover" class="z-10 absolute hidden group-focus:block bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                                        <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownHoverButton">
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Settings</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Earnings</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Sign out</a>
                                        </li>
                                        </ul>
                                    </div>



                                        </li>





                                        <li class="nav-item ml-5 lg:ml-11">
                                            <a class="page-scroll" href="#pricing">Partenaires</a>
                                        </li>
                                        <li class="nav-item ml-5 lg:ml-11 font-extrabold">
                                            <a class="page-scroll font-extrabold" href="#pricing">Faire un Don</a>
                                        </li>

                                        <li class="nav-item ml-5 lg:ml-11">
                                            <a class="page-scroll" href="#contact">Contact</a>
                                        </li>

                                        <li class="nav-item ml-5 lg:ml-11">
                                            <a class="page-scroll" href="#blog">Connexion</a>
                                        </li>
                                    </ul>
                                </div> <!-- navbar collapse -->
                            </nav> <!-- navbar -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div>

        </section><!-- header navbar -->

        <main>
            @yield('content_principal')
        </main>




        <footer id="footer" class="mb-4 footer_area bg-black relative">
            <div class="shape absolute left-0 top-0 opacity-5 h-full overflow-hidden w-1/3">
                <img src="assets_custom/images/footer-shape-left.png" alt="">
            </div>
            <div class="shape absolute right-0 top-0 opacity-5 h-full overflow-hidden w-1/3">
                <img src="assets_custom/images/footer-shape-right.png" alt="">
            </div>
            <div class="container">
                <div class="footer_widget pt-18 pb-120">
                    <div class="row justify-center">
                        <div class="w-full md:w-1/2 lg:w-3/12">
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
                                        <li><a href="#" class="text-white mt-4 hover:text-theme-color">Nos Projets</a></li>
                                        <li><a href="#" class="text-white mt-4 hover:text-theme-color">Visiter Nos Locaux</a></li>

                                    </ul>
                                </div> <!-- footer link -->
                                <div class="footer_link w-1/2 md:pl-13 mt-13">
                                    <h2 class="footer_title text-xl font-semibold text-white">Annexes</h2>
                                    <ul class="link pt-4">
                                        <li><a href="#" class="text-white mt-4 hover:text-theme-color">Notre équipe</a></li>
                                        <li><a href="#" class="text-white mt-4 hover:text-theme-color">Nous contacter</a></li>

                                    </ul>
                                </div> <!-- footer link -->
                            </div> <!-- footer link wrapper -->
                        </div>
                        <div class="w-full md:w-2/3 lg:w-4/12">
                            <div class="footer_subscribe mt-13 mx-3">
                                <h2 class="footer_title text-xl font-semibold text-white">Newsletter</h2>
                                <div class="subscribe_form text-right mt-9 relative">
                                    <form action="#">
                                        <input type="text" placeholder="Entrer email" class="w-full py-5 px-6 bg-white text-black rounded-full border-none">
                                        <button class="main-btn subscribe-btn">S'abonner</button>
                                    </form>
                                </div>
                            </div> <!-- footer subscribe -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- footer widget -->
                <div class="footer_copyright pt-3 pb-6 border-t-2 border-solid border-white border-opacity-10 sm:flex justify-between">
                    <div class="footer_social pt-4 mx-3 text-center">
                        <ul class="social flex justify-center sm:justify-start">
                            <li class="mr-3"><a href="https://facebook.com/uideckHQ"><i class="lni lni-facebook-filled"></i></a></li>
                            <li class="mr-3"><a href="https://twitter.com/uideckHQ"><i class="lni lni-twitter-filled"></i></a></li>
                            <li class="mr-3"><a href="https://instagram.com/uideckHQ"><i class="lni lni-instagram-original"></i></a></li>
                            <li class="mr-3"><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                        </ul>
                    </div> <!-- footer social -->
                    <div class="footer_copyright_content pt-4 text-center">

                    </div> <!-- footer copyright content -->
                </div> <!-- footer copyright -->
            </div> <!-- container -->
        </footer>

        <!--====== FOOTER PART ENDS ======-->

        <!--====== BACK TOP TOP PART START ======-->

        <a href="#" class="scroll-top"><i class="lni lni-chevron-up"></i></a>



        <!--====== Tiny Slider js ======-->
        <script src="assets_custom/js/tiny-slider.js"></script>

        <!--====== Wow js ======-->
        <script src="assets_custom/js/wow.min.js"></script>

        <!--====== Main js ======-->
        <script src="assets_custom/js/main.js"></script>
    </body>
</html>
