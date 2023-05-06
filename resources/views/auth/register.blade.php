<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{asset('css/register.css')}}" >
</head>
<body>
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <h1 style="font-family: 'Trebuchet MS'; font-size: 42px; color: #F19B01">Create Account</h1>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors"/>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" style="font-family: 'Trebuchet MS'" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" style="font-family: 'Trebuchet MS'" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>
            <div class="mt-4">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <label class="radio-container">
                                <img src="assets/icons/client.png" alt="Option 1">
                                <p style="text-align: center;font-family: 'Trebuchet MS'">Client</p>
                                <input type="radio" name="role" value="Client" onclick="changeColor(this)">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col">
                            <label class="radio-containe2">
                                <img src="assets/icons/travail-autonome.png" alt="Option 2">
                                <p style="text-align: center; font-family: 'Trebuchet MS'">Freelancer</p>
                                <input type="radio" name="role" value="Freelancer" onclick="changeColor(this)">
                                <span class="checkmark"></span>
                            </label>
                            <div>
                            </div>
                        </div>
                    </div>
                    <!-- Password -->
                    <div class="mt-4">
                        <x-label for="password" :value="__('Password')" style="font-family: 'Trebuchet MS'"/>

                        <x-input id="password" class="block mt-1 w-full"
                                 type="password"
                                 name="password"
                                 required autocomplete="new-password" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-label for="password_confirmation" :value="__('Confirm Password')" style="font-family: 'Trebuchet MS'" />

                        <x-input id="password_confirmation" class="block mt-1 w-full"
                                 type="password"
                                 name="password_confirmation" required />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}" style="font-family: 'Trebuchet MS'">
                            {{ __('Already registered?') }}
                        </a>

                        <x-button class="ml-4" style="background-color: #F9B877;border-color: #F9B877; font-family: 'Trebuchet MS'">
                            {{ __('Register') }}
                        </x-button>
                    </div>
                </div>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
<script>
    function changeColor(radio) {

        const container1 = document.querySelectorAll('.radio-container');
        const container2 = document.querySelectorAll('.radio-containe2');
        if (radio.value=="Client"){
            container1.forEach(container => {
                container.style.backgroundColor = "#9DC2FF";
            });
            container2.forEach(container => {
                container.style.backgroundColor = "#E1ECFE";
            });
        }
        if (radio.value=="Freelancer"){
            container2.forEach(container => {
                container.style.backgroundColor = "#9DC2FF";
            });
            container1.forEach(container => {
                container.style.backgroundColor = "#E1ECFE";
            });
        }
    }
</script>
</body>
</html>
