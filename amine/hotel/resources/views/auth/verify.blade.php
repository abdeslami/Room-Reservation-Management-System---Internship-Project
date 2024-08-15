@extends('layouts.app')

@section('content')
<section class="py-16 px-3 bg-center bg-cover bg-no-repeat">
    <div id="CONTACT" class="container max-w-[1200px] mx-auto">
        <h2 class="font-gilda font-normal text-3xl sm:text-[46px] tracking-[.04em] text-center text-white mb-3">Vérification de votre adresse e-mail</h2>

        <div class="flex items-center justify-center">
            <img src="{{ asset('assets/images/decorated-pattern.svg') }}" alt="">
        </div>

        <div class="w-2/3 mx-auto mt-8">
            <div class="bg-eerie-black opacity-70 shadow-md rounded-lg p-6 text-white">
                <div class="text-lg font-semibold mb-4">{{ __('Verify Your Email Address') }}</div>

                <div class="mb-6">
                    @if (session('resent'))
                        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif
                    <form class="inline-block" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="bg-white font-barlow px-4 min-w-[158px] min-h-[48px] inline-flex items-center justify-center uppercase text-eerie-black transition duration-300 ease-in-out hover:bg-eerie-black hover:text-white mt-8 tracking-widest">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
