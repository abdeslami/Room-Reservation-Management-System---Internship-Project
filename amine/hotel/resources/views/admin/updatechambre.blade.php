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
<div class="container max-w-[1200px] mx-auto flex flex-col">
    <section class = "py-16 px-3 bg-slate-600  bg-center bg-cover bg-no-repeat">
        <div id="CONTACT" class = "container max-w-[1200px] mx-auto">
            <h2 class = "font-gilda font-normal text-3xl sm:text-[46px] tracking-[.04em] text-center text-white mb-3">Formulaire de réservation d'hôtel</h2>
            <div class="flex items-center justify-center">
                <img src =  {{asset("assets/images/decorated-pattern.svg")}} alt = "">
            </div>
            <form class="my-16 max-w-[824px] mx-auto" method="POST" enctype="multipart/form-data" action="/updatechambre1/{{$id}}">


                @method('PATCH')
                @csrf
                <div class = "my-3">
                    <input value="{{$chambre->titre_c}}" type = "text" name="titre_c" class = "outline-none py-4 px-5 bg-transparent caret-white text-white text-lg tracking-[.04em] font-light font-barlow value:text-white border-white border-solid border-b-[1px] w-full" >
                </div>

                <div class = "grid md:grid-cols-2 md:my-3 md:gap-x-10">
                    <select type = "text" value="{{$chambre->type_c}}" name="type_c"  class = "outline-none py-4 px-5 bg-transparent caret-white text-white text-lg tracking-[.04em] font-light font-barlow  border-white border-solid border-b-[1px] w-full my-3" >
                        <option > Select type Chambre</option>
                        <option value="suite">suite</option>
                        <option value="double">double</option>
                        <option value="single"></option>
                        </select>
                    
                        <select type = "text" value="{{$chambre->capacity_c}}" name="capacity_c"  class = "outline-none py-4 px-5 bg-transparent caret-white text-white text-lg tracking-[.04em] font-light font-barlow  border-white border-solid border-b-[1px] w-full my-3" >
                            <option > Select Capacity Chambre</option>
                            <option value="adultes + 1 enfant">adultes + 1 enfant</option>
                            <option value="adultes + 2 enfants">adultes + 2 enfants</option>
                            <option value="adultes">adultes</option>
                            <option value="adulte">adulte</option>
                            
                            </select>
                        
                </div>

               

                <div class = "grid md:grid-cols-2 md:my-3 md:gap-x-10">
                    <select type = "text" name="review_c" value="{{$chambre->review_c}}"   class = "outline-none py-4 px-5 bg-transparent caret-white text-white text-lg tracking-[.04em] font-light font-barlow  border-white border-solid border-b-[1px] w-full my-3" >
                        <option > Select Review Chambre</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        
                        </select> <input value="{{$chambre->prix_c}}"  required type = "number" name="prix_c" class = "outline-none py-4 px-5 bg-transparent caret-white text-white text-lg tracking-[.04em] font-light font-barlow border-white border-solid border-b-[1px] w-full my-3">

                    
                </div>
                <div class = "grid md:grid-cols-2 md:my-3 md:gap-x-10">
                    <select type = "text" name="etat_c" value="{{$chambre->review_c}}"   class = "outline-none py-4 px-5 bg-transparent caret-white text-white text-lg tracking-[.04em] font-light font-barlow  border-white border-solid border-b-[1px] w-full my-3" >
                        <option > Select Etat Chambre</option>
                        <option value="libre">libre</option>
                        <option value="active">active</option>
                        </select>
    
                    <input required  type = "file"   value="{{$chambre->image_c}}" name="image_c" class = "outline-none py-4 px-5 bg-transparent caret-white text-white text-lg tracking-[.04em] font-light font-barlow value:text-white border-white border-solid border-b-[1px] w-full my-3">
                </div>
                

                <div class="flex items-center justify-center">
                    <button type="submit" class = "bg-white font-barlow px-4 min-w-[158px] min-h-[48px] inline-flex items-center justify-center uppercase text-eerie-black transition duration-300 ease-in-out hover:bg-eerie-black hover:text-white mt-8 tracking-widest">Update Chambre</butto4>
                </div>
            </form>
        </div>
    </section>
   
</div>
@endsection

