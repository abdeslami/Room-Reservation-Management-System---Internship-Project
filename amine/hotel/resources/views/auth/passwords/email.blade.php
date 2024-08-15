@extends('layouts.app')

@section('content')
<section class="py-16 px-3 bg-center bg-cover bg-no-repeat">
    <div id="CONTACT" class="container max-w-[1200px] mx-auto">
        <h2 class="font-gilda font-normal text-3xl sm:text-[46px] tracking-[.04em] text-center text-white mb-3"> reset  mot de passe </h2>

        <div class="flex items-center justify-center">
            <img src="{{ asset('assets/images/decorated-pattern.svg') }}" alt="">
        </div>

                @if (session('status'))
                    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" class="my-16 max-w-[824px] mx-auto" action="{{ route('password.email') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-white">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="outline-none py-4 px-5 bg-transparent caret-white text-white text-lg tracking-[.04em] font-light font-barlow placeholder:text-white border-white border-solid border-b-[1px] w-full my-3" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex items-center justify-center">
                        <button type="submit" class="bg-white font-barlow px-4 min-w-[158px] min-h-[48px] inline-flex items-center justify-center uppercase text-eerie-black transition duration-300 ease-in-out hover:bg-eerie-black hover:text-white mt-8 tracking-widest">
                            {{ __('Envoyer le lien de réinitialisation du mot de passe') }}
                        </button>
                    </div>
                    
                </form>
            </div>
</section>
@endsection
