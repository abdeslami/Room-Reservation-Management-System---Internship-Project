
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Hotel Aziz Oujda </title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="">
        <!-- google fonts -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="dns-prefetch" href="//fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <script src="https://cdn.tailwindcss.com"></script>
    
        <link rel="stylesheet" href="{{asset("dist/main.css")}}">
        <link rel="stylesheet" href={{asset("main.css")}}>
        {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    </head>
    <body>
        <header class = "bg-header-image bg-cover bg-center bg-no-repeat min-h-screen flex flex-col overflow-hidden">
            <div class = "header-top bg-eerie-black min-h-[48px] flex items-center font-barlow py-3">
                <div class="container max-w-[1200px] mx-auto lg:flex lg:justify-between">
                    <div class = "header-top-left flex flex-col items-center sm:flex-row sm:justify-center lg:justify-start">
                        <div class = "flex py-1">
                            <img src = {{asset("assets/images/icons/map-marker.svg")}} class = "w-[10px] mx-2" alt = "">
                            <a href="{{ url('/') }}" class = "text-platinum opacity-60 font-light text-sm">Oujda Hôtel Aziz</a>
                        </div>
                        <div class = "flex py-1 md:ms-5 lg:ms-[72px]">
                            <img src =  {{asset("assets/images/icons/call-calling.svg")}}  class = "w-3 mx-2" alt = "">
                            <span class = "text-platinum opacity-60 font-light text-sm">+212 636-814169</span>
                        </div>
                    </div>
                    
                    <ul class="flex items-center justify-center py-1">
                        @guest
                            @if (Route::has('login'))
                                <li class="mx-2">
                                    <a class="text-platinum opacity-60 font-light text-sm" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                    
                            @if (Route::has('register'))
                                <li class="mx-2">
                                    <a class="text-platinum opacity-60 font-light text-sm" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="mx-2 relative">
                            <a id="navbarDropdown" class="text-white font-light text-sm" href="#" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
                                Bonjour, {{ Auth::user()->nom }}
                            </a>
                        
                            <fieldset id="dropdownMenu" class="hidden absolute right-0 mt-2 w-48 bg-white shadow-lg rounded-md">
                                <legend></legend>
                                <a class="block px-4 py-2 text-gray-700 hover:bg-gray-100" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                    @csrf
                                </form>
                            
                            </fieldset>
                        </li>
                        
                        <script>
                            document.getElementById('navbarDropdown').addEventListener('click', function(event) {
                                
                                var dropdownMenu = document.getElementById('dropdownMenu');
                                dropdownMenu.classList.toggle('hidden');
                            });
                        </script>
                        
                        
                        @endguest
                    </ul>
                    
                </div>
            </div>
            
            
            <div class = "header-main px-3 flex-1 flex">
                <div class="container max-w-[1200px] mx-auto flex flex-col">
                    <nav class = "py-5 md:flex md:justify-between">
                        <div class = "flex justify-between">
                            <a href = "#" class = "font-gilda text-[28px] font-normal text-lion"><img class="w-44" src={{asset("logo.png")}} alt=""></a>
                            <button type = "button" class = "text-white md:hidden" id = "navbar-show-btn">
                                <i class = 'fas fa-bars'></i>
                            </button>
                        </div>
                        <div class = "navbar-box fixed top-0 right-0 w-[280px] h-full bg-white p-5 flex flex-col items-center font-barlow-cond translate-x-full transition duration-300 ease-in-out md:relative md:translate-x-0 md:bg-transparent md:flex-row md:h-auto md:w-auto md:p-0">
                            <button type = "button " class = "absolute top-[18px] right-[18px] z-50 text-2xl hover:rotate-180 transition duration-300 ease-in-out md:hidden" id = "navbar-hide-btn">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                            <ul class = "flex flex-col w-full text-center mt-[60px] md:flex-row md:mt-0">
                                <li class="py-3 border-b-[1px] border-solid md:py-0 md:border-none">
                                    <a href = "#CHAMBRE" class = "text-eerie-black uppercase text-md tracking-[.12em] font-medium hover:text-lion transition duration-300 ease-in-out md:mx-[14px] xl:mx-5 2xl:mx-6 md:text-white">CHAMBRE</a>
                                </li>
                                <li class="py-3 border-b-[1px] border-solid md:py-0 md:border-none">
                                    <a href = "#BLOGUES" class = "text-eerie-black uppercase text-md tracking-[.12em] font-medium hover:text-lion transition duration-300 ease-in-out md:mx-[14px] xl:mx-5 2xl:mx-6 md:text-white">BLOGUES
                                    </a>
                                </li>
                                <li class="py-3 border-b-[1px] border-solid md:py-0 md:border-none">
                                    <a href = "#ÉVÉNEMENTS" class = "text-eerie-black uppercase text-md tracking-[.12em] font-medium hover:text-lion transition duration-300 ease-in-out md:mx-[14px] xl:mx-5 2xl:mx-6 md:text-white">ÉVÉNEMENTS</a>
                                </li>
                                <li class="py-3 border-b-[1px] border-solid md:py-0 md:border-none">
                                    <a href = "#GALERIE" class = "text-eerie-black uppercase text-md tracking-[.12em] font-medium hover:text-lion transition duration-300 ease-in-out md:mx-[14px] xl:mx-5 2xl:mx-6 md:text-white">GALERIE
                                    </a>
                                </li>
                                <li class="py-3 md:py-0">
                                    <a href = "#CONTACT" class = "text-eerie-black uppercase text-md tracking-[.12em] font-medium hover:text-lion transition duration-300 ease-in-out md:mx-[14px] xl:mx-5 2xl:mx-6 md:text-white">CONTACT</a>
                                </li>
                            </ul>

                            <a href = "#SAVOIR" class = "w-full h-[42px] px-7 uppercase flex items-center justify-center bg-lion tracking-widest font-medium text-white mt-4 hover:bg-lion-dark md:mt-0 md:min-w-[140px] ms-6">SAVOIR PLUS</a>
                        </div>
                    </nav>
                    <div class="container max-w-[1200px] mx-auto flex flex-col">
                        <section class = "py-16 px-3  bg-center bg-cover bg-no-repeat">
                            <div id="CONTACT" class = "container max-w-[1200px] mx-auto">
                                <h2 class = "font-gilda font-normal text-3xl sm:text-[46px] tracking-[.04em] text-center text-white mb-3">Formulaire de réservation d'hôtel</h2>
                                <div class="flex items-center justify-center">
                                    <img src =  {{asset("assets/images/decorated-pattern.svg")}} alt = "">
                                </div>
                                <form class="my-16 max-w-[824px] mx-auto" method="POST" action="demande/{{ $id }}">


                                    @method('POST')
                                    @csrf
                                    <div class = "my-3">
                                        <input type = "text" name="nam" class = "outline-none py-4 px-5 bg-transparent caret-white text-white text-lg tracking-[.04em] font-light font-barlow placeholder:text-white border-white border-solid border-b-[1px] w-full" placeholder="{{ Auth::user()->nom }} {{ Auth::user()->prenom }}">
                                    </div>
                
                                    <div class = "grid md:grid-cols-2 md:my-3 md:gap-x-10">
                                        <input type = "text" name="phone"  class = "outline-none py-4 px-5 bg-transparent caret-white text-white text-lg tracking-[.04em] font-light font-barlow placeholder:text-white border-white border-solid border-b-[1px] w-full my-3" placeholder="{{ Auth::user()->phone }}">
                                        
                                        <input type = "text" name="cin"  class = "outline-none py-4 px-5 bg-transparent caret-white text-white text-lg tracking-[.04em] font-light font-barlow placeholder:text-white border-white border-solid border-b-[1px] w-full my-3" placeholder="{{ Auth::user()->cin }}">
                
                                    </div>
                
                                   
                
                                    <div class = "grid md:grid-cols-2 md:my-3 md:gap-x-10">
                                        <input required type = "date" name="date_debut_re"  class = "outline-none py-4 px-5 bg-transparent caret-white text-white text-lg tracking-[.04em] font-light font-barlow placeholder:text-white border-white border-solid border-b-[1px] w-full my-3">
                                        <input required type = "date" name="date_fin_re" class = "outline-none py-4 px-5 bg-transparent caret-white text-white text-lg tracking-[.04em] font-light font-barlow placeholder:text-white border-white border-solid border-b-[1px] w-full my-3">

                                        
                                    </div>
                                    <div class = "my-3">
                
                        
                                        <input required  type = "time"  name="time_re" class = "outline-none py-4 px-5 bg-transparent caret-white text-white text-lg tracking-[.04em] font-light font-barlow placeholder:text-white border-white border-solid border-b-[1px] w-full my-3">
                                    </div>
                                    <div class="my-3">
                                        
                                        <input required type = "text" name="nom_re" class = "outline-none py-4 px-5 bg-transparent caret-white text-white text-lg tracking-[.04em] font-light font-barlow placeholder:text-white border-white border-solid border-b-[1px] w-full my-3" placeholder="Objectif de la réservation">
                                        
                                    </div>
                
                                    <div class="flex items-center justify-center">
                                        <button type="submit" class = "bg-white font-barlow px-4 min-w-[158px] min-h-[48px] inline-flex items-center justify-center uppercase text-eerie-black transition duration-300 ease-in-out hover:bg-eerie-black hover:text-white mt-8 tracking-widest">Réserve maintenant</butto4>
                                    </div>
                                </form>
                            </div>
                        </section>
                       
            </div>
        </header>


    
     

 

        <section class = "py-16 px-3 bg-white">
            <div id="ÉVÉNEMENTS"  class="container max-w-[1200px] mx-auto">
                <h2 class = "font-gilda font-normal text-3xl sm:text-[46px] tracking-[.04em] text-coyote text-center mb-3">Événements</h2>
                <div class="flex items-center justify-center">
                    <img src = {{asset( "assets/images/decorated-pattern-2.svg")}} alt = "">
                </div>

                <div class = 'grid gap-2 md:grid-cols-2 lg:grid-cols-3 mt-10'>
                    <div class = "min-h-[323px] relative">
                        <img src =   {{asset("assets/images/events-1.png")}} class = "w-full h-full object-cover">
                        <div class = 'text-white absolute bottom-2 left-2 right-2 bg-black/50 p-5'>
                            <div class = "w-[70px] h-[70px] bg-lion rounded-full flex items-center justify-center flex-col uppercase font-mont text-sm absolute top-0 right-3 -translate-y-[50%]">
                                <span class = "font-bold tracking-widest text-xl inline-block">03</span>
                                <span class = "tracking-widest inline-block -mt-[3px]">apr</span>
                            </div>
                            <h3 class = "font-gilda text-xl tracking-[.04em] uppercase">NUITS DE DIX ANS</h3>
                            <p class = "font-normal tracking-[.04em] font-barlow text-lg">Fête de la musique du samedi -  <span class = "font-light">19h00 </span></p>
                        </div>
                    </div>

                    <div class = "min-h-[323px] relative">
                        <img src =  {{asset("assets/images/events-2.png")}} class = "w-full h-full object-cover">
                        <div class = 'text-white absolute bottom-2 left-2 right-2 bg-black/50 p-5'>
                            <div class = "w-[70px] h-[70px] bg-lion rounded-full flex items-center justify-center flex-col uppercase font-mont text-sm absolute top-0 right-3 -translate-y-[50%]">
                                <span class = "font-bold tracking-widest text-xl inline-block">06</span>
                                <span class = "tracking-widest inline-block -mt-[3px]">may</span>
                            </div>
                            <h3 class = "font-gilda text-xl tracking-[.04em] uppercase">DÉGUSTATIONS DE VINS</h3>
                            <p class = "font-normal tracking-[.04em] font-barlow text-lg">Dîner spécial vin - <span class = "font-light"> 21h00</span></p>
                        </div>
                    </div>

                    <div class = "min-h-[323px] relative">
                        <img src =   {{asset("assets/images/events-3.png")}} class = "w-full h-full object-cover">
                        <div class = 'text-white absolute bottom-2 left-2 right-2 bg-black/50 p-5'>
                            <div class = "w-[70px] h-[70px] bg-lion rounded-full flex items-center justify-center flex-col uppercase font-mont text-sm absolute top-0 right-3 -translate-y-[50%]">
                                <span class = "font-bold tracking-widest text-xl inline-block">10</span>
                                <span class = "tracking-widest inline-block -mt-[3px]">jun</span>
                            </div>
                            <h3 class = "font-gilda text-xl tracking-[.04em] uppercase">L'AMOUR EST DANS L'AIR</h3>
                            <p  class = "font-normal tracking-[.04em] font-barlow text-lg">Nuits romantiques en couple - <span class = "font-light">18h00</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class = "py-16 px-3 bg-light-gray">
            <div  class = "container max-w-[1200px] mx-auto">
            <div id="GALERIE" class = "container max-w-[1200px] mx-auto">
                <h2 class = "font-gilda font-normal text-3xl text-[46px] tracking-[.04em] text-coyote text-center mb-3">Galerie</h2>
                <div class="flex items-center justify-center">
                    <img src =  {{asset("assets/images/decorated-pattern-2.svg")}} alt = "">
                </div>
                <div class = "grid gap-3 sm:grid-cols-2 md:grid-cols-3 mt-10">
                    <div class = "group min-h-[260px] relative after:absolute after:content-[''] after:left-0 after:top-0 after:w-full after:h-full after:bg-gradient-to-t after:from-black/75 after:to-black/5 after:opacity-0 hover:after:opacity-100 after:transition after:duration-300 after:ease-in-out overflow-hidden">
                        <img src =  {{asset("assets/images/gallery-1.png")}} class = "w-full h-full object-cover" alt = "">
                        <div class = "bg-lion text-white py-2 px-4 flex items-center justify-between absolute bottom-3 left-0 z-10 -translate-x-full group-hover:translate-x-0 transition duration-300 ease-in-out w-4/5">
                            <span class = "font-barlow text-lg font-normal">Chambre à coucher fantaisie</span>
                            <ul class = "flex items-center">
                                <li class = "text-sm"><i class = "fas fa-star"></i></li>
                                <li class = "text-sm ms-1"><i class = "fas fa-star"></i></li>
                                <li class = "text-sm ms-1"><i class = "fas fa-star"></i></li>
                                <li class = "text-sm ms-1"><i class = "fas fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class = "group min-h-[260px] relative after:absolute after:content-[''] after:left-0 after:top-0 after:w-full after:h-full after:bg-gradient-to-t after:from-black/75 after:to-black/5 after:opacity-0 hover:after:opacity-100 after:transition after:duration-300 after:ease-in-out overflow-hidden">
                        <img src =  {{asset("assets/images/gallery-2.png")}} class = "w-full h-full object-cover" alt = "">
                        <div class = "bg-lion text-white py-2 px-4 flex items-center justify-between absolute bottom-3 left-0 z-10 -translate-x-full group-hover:translate-x-0 transition duration-300 ease-in-out w-4/5">
                            <span class = "font-barlow text-lg font-normal">Chambre à coucher fantaisie</span>
                            <ul class = "flex items-center">
                                <li class = "text-sm"><i class = "fas fa-star"></i></li>
                                <li class = "text-sm ms-1"><i class = "fas fa-star"></i></li>
                                <li class = "text-sm ms-1"><i class = "fas fa-star"></i></li>
                                <li class = "text-sm ms-1"><i class = "fas fa-star"></i></li>
                            </ul>
                        </div>
                    </div>

                    <div class = "group min-h-[260px] relative after:absolute after:content-[''] after:left-0 after:top-0 after:w-full after:h-full after:bg-gradient-to-t after:from-black/75 after:to-black/5 after:opacity-0 hover:after:opacity-100 after:transition after:duration-300 after:ease-in-out overflow-hidden">
                        <img src =  {{asset("assets/images/gallery-3.png")}} class = "w-full h-full object-cover" alt = "">
                        <div class = "bg-lion text-white py-2 px-4 flex items-center justify-between absolute bottom-3 left-0 z-10 -translate-x-full group-hover:translate-x-0 transition duration-300 ease-in-out w-4/5">
                            <span class = "font-barlow text-lg font-normal">Chambre à coucher fantaisie</span>
                            <ul class = "flex items-center">
                                <li class = "text-sm"><i class = "fas fa-star"></i></li>
                                <li class = "text-sm ms-1"><i class = "fas fa-star"></i></li>
                                <li class = "text-sm ms-1"><i class = "fas fa-star"></i></li>
                                <li class = "text-sm ms-1"><i class = "fas fa-star"></i></li>
                            </ul>
                        </div>
                    </div>

                    <div class = "group min-h-[260px] relative after:absolute after:content-[''] after:left-0 after:top-0 after:w-full after:h-full after:bg-gradient-to-t after:from-black/75 after:to-black/5 after:opacity-0 hover:after:opacity-100 after:transition after:duration-300 after:ease-in-out overflow-hidden">
                        <img src =  {{asset("assets/images/gallery-4.png")}} class = "w-full h-full object-cover" alt = "">
                        <div class = "bg-lion text-white py-2 px-4 flex items-center justify-between absolute bottom-3 left-0 z-10 -translate-x-full group-hover:translate-x-0 transition duration-300 ease-in-out w-4/5">
                            <span class = "font-barlow text-lg font-normal">Chambre à coucher fantaisie</span>
                            <ul class = "flex items-center">
                                <li class = "text-sm"><i class = "fas fa-star"></i></li>
                                <li class = "text-sm ms-1"><i class = "fas fa-star"></i></li>
                                <li class = "text-sm ms-1"><i class = "fas fa-star"></i></li>
                                <li class = "text-sm ms-1"><i class = "fas fa-star"></i></li>
                            </ul>
                        </div>
                    </div>

                    <div class = "group min-h-[260px] relative after:absolute after:content-[''] after:left-0 after:top-0 after:w-full after:h-full after:bg-gradient-to-t after:from-black/75 after:to-black/5 after:opacity-0 hover:after:opacity-100 after:transition after:duration-300 after:ease-in-out overflow-hidden">
                        <img src =  {{asset("assets/images/gallery-5.png")}} class = "w-full h-full object-cover" alt = "">
                        <div class = "bg-lion text-white py-2 px-4 flex items-center justify-between absolute bottom-3 left-0 z-10 -translate-x-full group-hover:translate-x-0 transition duration-300 ease-in-out w-4/5">
                            <span class = "font-barlow text-lg font-normal">Chambre à coucher fantaisie</span>
                            <ul class = "flex items-center">
                                <li class = "text-sm"><i class = "fas fa-star"></i></li>
                                <li class = "text-sm ms-1"><i class = "fas fa-star"></i></li>
                                <li class = "text-sm ms-1"><i class = "fas fa-star"></i></li>
                                <li class = "text-sm ms-1"><i class = "fas fa-star"></i></li>
                            </ul>
                        </div>
                    </div>

                    <div class = "group min-h-[260px] relative after:absolute after:content-[''] after:left-0 after:top-0 after:w-full after:h-full after:bg-gradient-to-t after:from-black/75 after:to-black/5 after:opacity-0 hover:after:opacity-100 after:transition after:duration-300 after:ease-in-out overflow-hidden">
                        <img src =  {{asset("assets/images/gallery-6.png")}} class = "w-full h-full object-cover" alt = "">
                        <div  class = "bg-lion text-white py-2 px-4 flex items-center justify-between absolute bottom-3 left-0 z-10 -translate-x-full group-hover:translate-x-0 transition duration-300 ease-in-out w-4/5">
                            <span class = "font-barlow text-lg font-normal">Chambre à coucher fantaisie</span>
                            <ul class = "flex items-center">
                                <li class = "text-sm"><i class = "fas fa-star"></i></li>
                                <li class = "text-sm ms-1"><i class = "fas fa-star"></i></li>
                                <li class = "text-sm ms-1"><i class = "fas fa-star"></i></li>
                                <li class = "text-sm ms-1"><i class = "fas fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class = "py-16 px-3 bg-banner-image bg-center bg-cover bg-fixed bg-no-repeat">
            <div class = "container max-w-[1200px] mx-auto">
                <h2 class = "font-gilda font-normal text-3xl sm:text-[46px] tracking-[.04em] text-coyote text-center mb-3">Nos prestations hôtelières</h2>
                <div class="flex items-center justify-center">
                    <img src =  {{asset("assets/images/decorated-pattern-2.svg")}} alt = "">
                </div>

                <div class = "grid gap-3 mt-10 sm:grid-cols-2 md:grid-cols-3">
                    <div class = "flex text-center flex-col justify-center items-center bg-black/30 p-10 hover:bg-black/50 transition duration-300 ease-in-out">
                        <img src =  {{asset("assets/images/icons/plane.svg")}} class = "w-[54px]">
                        <h4 class = "mt-4 mb-2 text-lion font-gilda text-xl tracking-[.04em] font-normal">Ramasser et déposer</h4>
                        <p class = "text-white text-base font-barlow font-light tracking-[.04em]">Nous viendrons vous chercher à l'aéroport pendant que vous serez à l'aise pendant votre trajet, habitant mus nellentesque.</p>
                    </div>

                    <div class = "flex text-center flex-col justify-center items-center bg-black/30 p-10 hover:bg-black/50 transition duration-300 ease-in-out">
                        <img src =  {{asset("assets/images/icons/vehicle.svg")}} class = "w-[54px]">
                        <h4 class = "mt-4 mb-2 text-lion font-gilda text-xl tracking-[.04em] font-normal">Place de parking                        </h4>
                        <p class = "text-white text-base font-barlow font-light tracking-[.04em]">Nous viendrons vous chercher à l'aéroport pendant que vous serez à l'aise pendant votre trajet, habitant mus nellentesque.</p>
                    </div>

                    <div class = "flex text-center flex-col justify-center items-center bg-black/30 p-10 hover:bg-black/50 transition duration-300 ease-in-out">
                        <img src =  {{asset("assets/images/icons/bed.svg")}} class = "w-[54px]">
                        <h4 class = "mt-4 mb-2 text-lion font-gilda text-xl tracking-[.04em] font-normal">Service de chambre</h4>
                        <p class = "text-white text-base font-barlow font-light tracking-[.04em]">Nous viendrons vous chercher à l'aéroport pendant que vous serez à l'aise pendant votre trajet, habitant mus nellentesque.</p>
                    </div>

                    <div class = "flex text-center flex-col justify-center items-center bg-black/30 p-10 hover:bg-black/50 transition duration-300 ease-in-out">
                        <img src =  {{asset("assets/images/icons/pool.svg")}} class = "w-[54px]">
                        <h4 class = "mt-4 mb-2 text-lion font-gilda text-xl tracking-[.04em] font-normal">Piscine</h4>
                        <p class = "text-white text-base font-barlow font-light tracking-[.04em]">Nous viendrons vous chercher à l'aéroport pendant que vous serez à l'aise pendant votre trajet, habitant mus nellentesque.</p>
                    </div>

                    <div class = "flex text-center flex-col justify-center items-center bg-black/30 p-10 hover:bg-black/50 transition duration-300 ease-in-out">
                        <img src =  {{asset("assets/images/icons/wifi.svg")}} class = "w-[54px]">
                        <h4 class = "mt-4 mb-2 text-lion font-gilda text-xl tracking-[.04em] font-normal">Internet fibre</h4>
                        <p class = "text-white text-base font-barlow font-light tracking-[.04em]">Nous viendrons vous chercher à l'aéroport pendant que vous serez à l'aise pendant votre trajet, habitant mus nellentesque.</p>
                    </div>

                    <div class = "flex text-center flex-col justify-center items-center bg-black/30 p-10 hover:bg-black/50 transition duration-300 ease-in-out">
                        <img src =  {{asset("assets/images/icons/food.svg")}} class = "w-[54px]">
                        <h4 class = "mt-4 mb-2 text-lion font-gilda text-xl tracking-[.04em] font-normal">Petit-déjeuner</h4>
                        <p class = "text-white text-base font-barlow font-light tracking-[.04em]">Nous viendrons vous chercher à l'aéroport pendant que vous serez à l'aise pendant votre trajet, habitant mus nellentesque.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class = "py-16 px-3 bg-nero">
            <div id="BLOGUES" class = "container max-w-[1200px] mx-auto">
                <h2 class = "font-gilda font-normal text-3xl sm:text-[46px] tracking-[.04em] text-center text-white mb-3">Blogues et actualités</h2>
                <div class="flex items-center justify-center">
                    <img src = {{asset( "assets/images/decorated-pattern.svg")}} alt = "">
                </div>

                <div class = "grid mt-10 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-8 lg:gap-10">
                    <a href = "#" class = "transition duration-300 ease-in-out hover:-translate-y-5">
                        <div class = "min-h-[400px]">
                            <img src =  {{asset("assets/images/blogs-1.png")}} class = "w-full h-full object-cover" alt = "">
                        </div>
                        <div class = "bg-white text-coyote text-center text-lg sm:text-xl font-gilda font-medium tracking-widest uppercase py-6 px-4">
                            RÉNOVATION D'UN RESTAURANT HISTORIQUE</div>
                    </a>

                    <a href = "#" class = "transition duration-300 ease-in-out hover:-translate-y-5">
                        <div class = "min-h-[400px]">
                            <img src =  {{asset("assets/images/blogs-2.png")}} class = "w-full h-full object-cover" alt = "">
                        </div>
                        <div class = "bg-white text-coyote text-center text-lg sm:text-xl font-gilda font-medium tracking-widest uppercase py-6 px-4"> RÉNOVATION D'UN RESTAURANT HISTORIQUE</div>
                    </a>

                    <a href = "#" class = "transition duration-300 ease-in-out hover:-translate-y-5">
                        <div class = "min-h-[400px]">
                            <img src =  {{asset("assets/images/blogs-3.png")}} class = "w-full h-full object-cover" alt = "">
                        </div>
                        <div  class = "bg-white text-coyote text-center text-lg sm:text-xl font-gilda font-medium tracking-widest uppercase py-6 px-4"> RÉNOVATION D'UN RESTAURANT HISTORIQUE</div>
                    </a>
                </div>
            </div>
        </section>

        <section>
            <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3" class="w-full">
                <div class="w-full" id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div><script>(function () {
                var setting = {"query":"Oujda, Maroc","width":"100%","height":600,"satellite":false,"zoom":12,"placeId":"ChIJ79YGQZhkeA0RUEZMJDNr2AE","cid":"0x1d86b33244c4650","coords":[34.681962,-1.900155],"lang":"fr","queryString":"Oujda, Maroc","centerCoord":[34.681962,-1.900155],"id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"1090391"};
                var d = document;
                var s = d.createElement('script');
                s.src = 'https://1map.com/js/script-for-user.js?embed_id=1090391';
                s.async = true;
                s.onload = function (e) {
                  window.OneMap.initMap(setting)
                };
                var to = d.getElementsByTagName('script')[0];
                to.parentNode.insertBefore(s, to);
              })();</script><a href="https://1map.com/fr/map-embed">1 Map</a></div>
        </section>

        <footer>
            <div class="bg-nero py-16 px-3">
                <div class = "grid max-w-[1200px] mx-auto gap-8 text-center md:grid-cols-2 md:text-start lg:grid-cols-footer">
                    <div class = "md:me-2 lg:me-3">
                        <a href = "{{url('/')}}" class = "text-lion font-gilda font-normal text-2xl tracking-[.04em]"><img class="w-44" src={{asset("logo.png")}} alt=""></a>
                        <p class = "text-white font-light font-barlow text-base mt-3 max-w-[480px] mx-auto md:ms-0">Bienvenue dans le meilleur hôtel Aziz de luxe cinq étoiles de la ville Oujda</p>
                    </div>

                    <div>
                        <h4 class = "inline-block font-gilda tracking-[.04em] text-lg text-white capitalize relative after:absolute after:content-[''] after:left-0 after:-bottom-0 after:h-[1px] after:w-full after:bg-coyote pb-1 mb-4">Lien Rapide</h4>
                        <ul>
                            <li class = "my-2">
                                <a href = "#" class = "capitalize font-barlow font-light text-base text-white hover:text-white/50 transition duration-300 ease-in-out">Nos Services</a>
                            </li>
                            <li class = "my-2">
                                <a href = "#" class = "capitalize font-barlow font-light text-base text-white hover:text-white/50 transition duration-300 ease-in-out">Livre</a>
                            </li>
                            <li class = "my-2">
                                <a href = "#" class = "capitalize font-barlow font-light text-base text-white hover:text-white/50 transition duration-300 ease-in-out">À Propos De L'hôtel</a>
                            </li>
                            <li class = "my-2">
                                <a href = "#" class = "capitalize font-barlow font-light text-base text-white hover:text-white/50 transition duration-300 ease-in-out">Blogs</a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h4 class = "inline-block font-gilda tracking-[.04em] text-lg text-white capitalize relative after:absolute after:content-[''] after:left-0 after:-bottom-0 after:h-[1px] after:w-full after:bg-coyote pb-1 mb-4">Explorer</h4>
                        <ul>
                            <li class = "my-2">
                                <a href = "#" class = "capitalize font-barlow font-light text-base text-white hover:text-white/50 transition duration-300 ease-in-out">Chambres Et Suites</a>
                            </li>
                            <li class = "my-2">
                                <a href = "#" class = "capitalize font-barlow font-light text-base text-white hover:text-white/50 transition duration-300 ease-in-out">Spa Et Bien-Être</a>
                            </li>
                            <li class = "my-2">
                                <a href = "#" class = "capitalize font-barlow font-light text-base text-white hover:text-white/50 transition duration-300 ease-in-out">Offres Spéciales</a>
                            </li>
                            <li class = "my-2">
                                <a href = "#" class = "capitalize font-barlow font-light text-base text-white hover:text-white/50 transition duration-300 ease-in-out">Restaurant</a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h4 class = "inline-block font-gilda tracking-[.04em] text-lg text-white capitalize relative after:absolute after:content-[''] after:left-0 after:-bottom-0 after:h-[1px] after:w-full after:bg-coyote pb-1 mb-4">Contact</h4>
                        <ul>
                            <li class = "my-2 grid grid-cols-[40px_auto] justify-center md:justify-start">
                                <span class = "text-white">
                                    <i class = "fas fa-map-marker-alt"></i>
                                </span>
                                <span class = "text-white/50 font-light">6000 Oudja,  Maroc</span>
                            </li>
                            <li class = "my-2 grid grid-cols-[40px_auto] justify-center md:justify-start ">
                                <span class = "text-white">
                                    <i class = "fas fa-phone"></i>
                                </span>
                                <span id="SAVOIR" class = "text-white/50 font-light">+212 636-814169</span>
                            </li>
                            <li class = "my-2 grid grid-cols-[40px_auto] justify-center md:justify-start">
                                <span class = "text-white">         
                                    <i class = "fas fa-envelope"></i>
                                </span>
                                <span class = "text-white/50 font-light">hotel.aziz@mail.com</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class = "py-4 text-white font-normal font-barlow uppercase text-center tracking-widest bg-nero-dark">
                <p class = "text-sm">© DROIT D'AUTEUR 2023 PAR GEEKTHEMES.COM</p>
            </div>
        </footer>

        <!-- jquery cdn -->
        <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
      
        <script src="{{asset('script.js')}}"></script>
    </body>
</html>