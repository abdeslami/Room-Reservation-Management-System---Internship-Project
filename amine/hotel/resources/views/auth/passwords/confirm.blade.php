@extends('layouts.app')

@section('content')
<section class="py-16 px-3 bg-center bg-cover bg-no-repeat">
    <div id="CONTACT" class="container max-w-[1200px] mx-auto">
        <h2 class="font-gilda font-normal text-3xl sm:text-[46px] tracking-[.04em] text-center text-white mb-3">Veuillez confirmer votre mot de passe avant de continuer.</h2>

        <div class="flex items-center justify-center">
            <img src="{{ asset('assets/images/decorated-pattern.svg') }}" alt="">
        </div>

        <form method="POST" class="my-16 max-w-[824px] mx-auto" action="{{ route('password.confirm') }}">
            @csrf

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">{{ __('Password') }}</label>
                <input id="password" type="password" class="outline-none py-4 px-5 bg-transparent caret-white text-white text-lg tracking-[.04em] font-light font-barlow placeholder:text-white border-white border-solid border-b-[1px] w-full my-3" name="password" required autocomplete="current-password">

                @error('password')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-0">
                <button type="submit" class="bg-blue-500 text-white font-semibold px-4 py-2 rounded hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                    {{ __('Confirm Password') }}
                </button>

                @if (Route::has('password.request'))
                <a class="text-blue-500 hover:text-blue-700 text-sm ml-4" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif
            </div>
        </form>
    </div>
</section>
@endsection
