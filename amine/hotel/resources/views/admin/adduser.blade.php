@extends('admin.layout')
@section('content')
@if (Session::has("seccuss"))
                
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Succès !</strong>
                <span class="block sm:inline">Votre Chambre  a été Ajouter avec succès !</span>
              </div>
              
            @endif

<link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<script src="https://cdn.tailwindcss.com"></script>

<link rel="stylesheet" href="dist/main.css">
<link rel="stylesheet" href="main.css">
  
    <section class = "py-16 px-3 bg-black  bg-center bg-cover bg-no-repeat">
        <div id="CONTACT" class = "container max-w-[1200px] mx-auto">
            <h2 class="font-gilda font-normal text-3xl sm:text-[46px] tracking-[.04em] text-center text-white mb-3">Ajouter  Utilisateur</h2>
    
            <div class="flex items-center justify-center">
                <img src =  {{asset("assets/images/decorated-pattern.svg")}} alt = "">
            </div>
    
                    <form method="POST" class="my-16 max-w-[824px] mx-auto" action="{{ route('storeuser') }}">
                        @csrf
    
                        <div class="grid md:grid-cols-2 md:my-3 md:gap-x-10">
                            <input id="nom" type="text" placeholder="Nom *" class="outline-none py-4 px-5 bg-transparent caret-white text-white text-lg tracking-[.04em] font-light font-barlow placeholder:text-white border-white border-solid border-b-[1px] w-full my-3" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>
    
                            @error('nom')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                            <input id="prenom" type="text" placeholder="Prenom *" class="outline-none py-4 px-5 bg-transparent caret-white text-white text-lg tracking-[.04em] font-light font-barlow placeholder:text-white border-white border-solid border-b-[1px] w-full my-3" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>
    
                            @error('prenom')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="grid md:grid-cols-2 md:my-3 md:gap-x-10">
                            <input id="cin" type="text" placeholder="CIN *" class="outline-none py-4 px-5 bg-transparent caret-white text-white text-lg tracking-[.04em] font-light font-barlow placeholder:text-white border-white border-solid border-b-[1px] w-full my-3" name="cin" value="{{ old('cin') }}" required autocomplete="cin" autofocus>
    
                            @error('cin')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                            <input id="phone" type="text" placeholder="Phone *" class="outline-none py-4 px-5 bg-transparent caret-white text-white text-lg tracking-[.04em] font-light font-barlow placeholder:text-white border-white border-solid border-b-[1px] w-full my-3" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
    
                            @error('phone')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
    
                     
                        <div class="my-3">
                            <input id="email" type="email" placeholder="Email Addresse *" class="outline-none py-4 px-5 bg-transparent caret-white text-white text-lg tracking-[.04em] font-light font-barlow placeholder:text-white border-white border-solid border-b-[1px] w-full my-3" name="email" value="{{ old('email') }}" required autocomplete="email">
    
                            @error('email')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                            
                            <select id="role"   class="outline-none py-4 px-5 bg-transparent caret-white text-white text-lg tracking-[.04em] font-light font-barlow placeholder:text-white border-white border-solid border-b-[1px] w-full my-3" name="role" value="{{ old('role') }}" required autocomplete="role">
                                <option >Selection Role</option>
                                <option value="admin">admin</option>
                                <option value="client">client</option>
                            </select>
    
                            @error('role')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
    
                        <div class="my-3">
                            <input id="password" placeholder="Password *" type="password" class="outline-none py-4 px-5 bg-transparent caret-white text-white text-lg tracking-[.04em] font-light font-barlow placeholder:text-white border-white border-solid border-b-[1px] w-full my-3" name="password" required autocomplete="new-password">
    
                            @error('password')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
    
                        <div class="my-3">
                            <input id="password-confirm" placeholder="Confirm Password *" type="password" class="outline-none py-4 px-5 bg-transparent caret-white text-white text-lg tracking-[.04em] font-light font-barlow placeholder:text-white border-white border-solid border-b-[1px] w-full my-3" name="password_confirmation" required autocomplete="new-password">
                        </div>
    
                        <div class="flex items-center justify-center">
                            <button type="submit" class="bg-white font-barlow px-4 min-w-[158px] min-h-[48px] inline-flex items-center justify-center uppercase text-eerie-black transition duration-300 ease-in-out hover:bg-eerie-black hover:text-white mt-8 tracking-widest">
                               Ajouter Utilisateur
                            </button>
                        </div>
                    </form>
             
    </div>
    </section>
    
@endsection

