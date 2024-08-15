
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" />

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
    
        <link rel="stylesheet" href="dist/main.css">
        <link rel="stylesheet" href="main.css">
        {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    </head>
    <body>
        <header class = "bg-header-image bg-cover bg-center bg-no-repeat min-h-screen flex flex-col overflow-hidden">
            <div class = "header-top bg-eerie-black min-h-[48px] flex items-center font-barlow py-3">
                <a href = "#" class = "font-gilda text-[28px] font-normal text-lion"><img class="w-28" src={{asset("logo.png")}} alt=""></a>
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
            
            
            <div class = "header-main  flex-1 flex">
                <div class="container max-w-[1200px] mx-auto flex flex-col">
                    <nav class = "py-5 md:flex md:justify-between">
                        <div class = "flex justify-between">
                      
                       
                               
                            <form class="font-barlow mt-16 bg-white w-full grid md:grid-cols-6  sm:grid-cols-2 lg:grid-cols-6" method="GET" action="/home">
                                <div class="flex items-center justify-between px-3 py-4 border-[1px] border-solid">
                                    <input type="date" class="placeholder:text-eerie-black placeholder:uppercase text-sm outline-none border-none w-full" placeholder="check in">
                                    <span class="cursor-pointer">
                                        <img src="assets/images/icons/calendar.svg">
                                    </span>
                                </div>
                                <div class="flex items-center justify-between px-3 py-4 border-[1px]">
                                    <input type="date" class="placeholder:text-eerie-black placeholder:uppercase text-sm outline-none border-none w-full" placeholder="check in">
                                    <span class="cursor-pointer">
                                        <img src="assets/images/icons/calendar.svg">
                                    </span>
                                </div>
                                <div class="px-2 py-4 border-[1px]">
                                    <select class="min-w-full uppercase text-eerie-black outline-none" name="adults">
                                        <option disabled selected>adult</option>
                                        <option value="1 adulte">1</option>
                                        <option value="2 adultes">2</option>
                                        <option value="2 adultes">3</option>
                                    </select>
                                </div>
                                <div class="px-2 py-4 border-[1px]">
                                    <select class="min-w-full uppercase text-eerie-black outline-none" name="children">
                                        <option disabled selected>children</option>
                                        <option value="1 enfant">1</option>
                                        <option value="2 enfants">2</option>
                                        <option value="2 enfants">3</option>
                                    </select>
                                </div>
                                <div class="px-2 py-4 border-[1px]">
                                    <select class="min-w-full uppercase text-eerie-black outline-none">
                                        <option selected>1 room</option>
                                        <option>2 room</option>
                                        <option>3 room</option>
                                    </select>
                                </div>
                                <button type="submit" class="bg-lion font-barlow h-full min-h-[52px] flex items-center justify-center uppercase text-white transition duration-300 ease-in-out hover:bg-lion-dark">VÉRIFIE MAINTENANT</button>
                            </form>
                            
                            </div>
                        </main>
            </div>
            @if (Session::has("seccuss"))
                
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Succès !</strong>
                <span class="block sm:inline">Votre réservation a été effectuée avec succès !</span>
              </div>
              
            @endif

        </div>
    </div>
    
    <section class = "grid px-10  mb-10 gap-x-8 gap-y-8  md:grid-cols-3 min-[1100px]:grid-cols-4 sm:grid-cols-2 sm:gap-x-12  lg:grid-cols-4 w-full   ">
        @foreach ($chambres as $chambre)
        <div class="antialiased text-gray-900">
            <div class="bg-white rounded-lg overflow-hidden shadow-2xl">
                <!--E11-->
                <!-- <div class="h-48 bg-cover bg-center" style="background-image:url('https://images.unsplash.com/photo-1570797197190-8e003a00c846?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=968&q=80')"></div>-->
                <img class="h-48 w-full object-cover object-end" src="{{asset($chambre->image_c)}}" alt="Home in Countryside" />
                <div class="p-6">
                    <div class="flex items-baseline">
                        <a href="/reservation/{{$chambre->id}}" class="inline-block bg-teal-200 text-teal-800 py-1 px-4 text-xs rounded-full uppercase font-semibold tracking-wide">Réserve maintenant</a href="/reservation">

                        <div class="ml-2 text-gray-600 text-xs uppercase font-semibold tracking-wide">
                            {{$chambre->type_c}} &bull; {{$chambre->capacity_c}}
                        </div>
                    </div>
                    <h4 class="mt-2 font-semibold text-lg leading-tight truncate">{{$chambre->titre_c}}</h4>
        
                    <div class="mt-1">
                        <span>{{$chambre->prix_c}}</span>
                        <span class="text-gray-600 text-sm">/ Jour</span>
                    </div>
                    <div class="mt-2 flex items-center">
                        <span class="text-teal-600 font-semibold">
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
                        </span>
                        <span class="ml-2 text-gray-600 text-sm">{{$chambre->review_c}} reviews</span>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </section>

            

        </header>

   


      


       


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
                <p class = "text-sm">© DROIT D'AUTEUR 2023 PAR hotel-aziz.COM</p>
            </div>
        </footer>

        <!-- jquery cdn -->
        <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
      
        <script src="script.js"></script>
    </body>
</html>