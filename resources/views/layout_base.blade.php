<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://cdn.tailwindcss.com"></script>

  <!-- component -->
<body class="bg-blue-200">


    <div class="container relative">
        <div class="row items-center">
            <div class="w-full">
                <nav class="relative px-4 py-4 flex justify-between items-center bg-white">
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
                                <a class="page-scroll  active md:my-0" href="/">Accueil</a>
                            </li>

                            <li class="nav-item ml-5 lg:ml-11 font-extrabold md:my-0">
                                <a class="" href="/faireUnDon">Je fais un don</a>
                            </li>


                            <li class="nav-item ml-5 lg:ml-11 md:my-0">
                                <a class="" href="/">Retour à la page d'accueil</a>
                            </li>
                        </ul>
                    </div> <!-- navbar collapse -->
                </nav> <!-- navbar -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->




    <section>
        <div class="main">
            <main>
                @yield('principal_section')
            </main>
        </div>
    </section>
</body>



       <script>
         function Menu(e){
      let list = document.querySelector('ul');
      e.name === 'menu' ? (e.name = "close",list.classList.add('top-[80px]') , list.classList.add('opacity-100')) :( e.name = "menu" ,list.classList.remove('top-[80px]'),list.classList.remove('opacity-100'))
    }
    </script>



<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>



</body>


