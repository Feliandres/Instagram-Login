@extends('layouts.app')

@section('subtitle', 'Login')

@section('content')

<!-- Container -->
<div class="flex h-screen justify-center items-center font-mono">
    <div class="flex justify-center px-1 my-12 w-2/3">
        <!-- Row -->
        <div class="w-full xl:w-3/4 lg:w-11/12 flex">
            <!-- Col -->
            <div class="flex-row justify-content-center align-items-center bg-black bg-opacity-70 hidden lg:block p-12 rounded-l-lg">
                <img src="{{asset('/storage/logo-black.svg')}}" alt="ZeroSecure" class="py-10 w-96" />
            </div>
            <!-- Col -->
            <div class="w-full lg:w-7/12 p-5 rounded-lg lg:rounded-l-none bg-opacity-50 bg-gray-700">
                <form class="pt-6 pb-8 mb-4 rounded" method="POST" action="/login">
                    @csrf
                    <div class="mb-4">
                        @if (Session::has('message'))
                        <div class='flex flex-row mb-5 p-3 text-sm text-white bg-red-500 rounded-lg text-center w-full'>
                            <img src="{{asset('/storage/error_login-icon.png')}}" alt="Maritozzo"/>
                            <span class="text-1xl font-bold ml-2">{{ Session::get('message') }} </span>
                        </div>
                        @endif
                        <label class="block mb-2 text-sm font-bold text-gray-100" for="email">
                            Usuario / Email
                        </label>
                        <input
                            class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                            id="email"
                            type="text"
                            placeholder="Carlos o carlos@carlos.com"
                            name="username"
                            required
                        />
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-bold text-gray-100" for="email">
                            Contraseña
                        </label>
                        <input
                            class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                            id="email"
                            type="password"
                            placeholder="******************"
                            name="password"
                            required
                        />
                    </div>
                    <div class="text-right mb-5">
                        <a
                            class="inline-block text-sm text-blue-400 align-baseline hover:text-blue-300 font-bold"
                            href="#"
                        >
                            Olvidaste tu contraseña?
                        </a>
                    </div>
                    <div class="mb-6 text-center">
                        <button
                            class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                            type="submit"
                        >
                            Continuar
                        </button>
                    </div>
                    <hr class="mb-6 border-t" />
                    <div class="mb-6 text-center mx-10">
                        <a
                            class="w-full rounded-full px-4 py-2 font-bold text-white bg-black hover:bg-gray-900 focus:outline-none focus:shadow-outline"
                            href="{{ route('instagram') }}"
                        >
                            <div class="flex justify-center">
                                <img src="{{asset('/storage/instagram.svg')}}" alt="Maritozzo" class="w-7 h-7 mx-3" />
                                <img src="{{asset('/storage/letters-instagram.png')}}" alt="Maritozzo" class="w-24 h-8" />
                            </div>
                        </a>
                    </div>
                    <div class="text-center">
                        <a
                            class="inline-block text-sm text-green-500 align-baseline hover:text-green-100 font-extrabold"
                            href="{{route('register')}}"
                        >
                            No tienes una cuenta? Registrate!
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection