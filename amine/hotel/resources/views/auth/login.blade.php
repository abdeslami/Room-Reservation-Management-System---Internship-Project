@extends('layouts.app')

@section('content')
<section class = "py-16 px-3  bg-center bg-cover bg-no-repeat">
    <div id="CONTACT" class = "container max-w-[1200px] mx-auto">
        <h2 class="font-gilda font-normal text-3xl sm:text-[46px] tracking-[.04em] text-center text-white mb-3">Formulaire de Connexion d'Hôtel</h2>

        <div class="flex items-center justify-center">
            <img src =  {{asset("assets/images/decorated-pattern.svg")}} alt = "">
        </div>

                <form method="POST" class="my-16 max-w-[824px] mx-auto" action="{{ route('login') }}">
                    @csrf

                    <div class="my-3">
 <input id="email" type="email" placeholder="Email Address" class="outline-none py-4 px-5 bg-transparent caret-white text-white text-lg tracking-[.04em] font-light font-barlow placeholder:text-white border-white border-solid border-b-[1px] w-full my-3" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="my-3">
                        <input id="password" placeholder="Password" type="password" class="outline-none py-4 px-5 bg-transparent caret-white text-white text-lg tracking-[.04em] font-light font-barlow placeholder:text-white border-white border-solid border-b-[1px] w-full my-3" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="my-3">
                        <label class="flex items-center">
                            <input class="form-checkbox py-2 px-2" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <span class="text-white ml-2">{{ __('Remember Me') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-center">
                        
                        <button type="submit" class="bg-white font-barlow px-4 min-w-[158px] min-h-[48px] inline-flex items-center justify-center uppercase text-eerie-black transition duration-300 ease-in-out hover:bg-eerie-black hover:text-white mt-8 tracking-widest">
                            {{ __('Login') }}
                        </button>

                        
                    </div>
                    <div class="flex items-center justify-center">
                    @if (Route::has('password.request'))
                            <a class="text-white mx-auto flex flex-col hover:text-blue-700 " href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </form>
</div>
</section>
@endsection
