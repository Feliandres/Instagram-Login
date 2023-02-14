<div class="antialiased">
        <header class="lg:px-16 px-6 bg-white flex flex-wrap items-center lg:py-0 py-2 bg-emerald-500">
            <div class="flex-1 flex items-center">
                <img src="{{asset('/storage/logo.png')}}" class="py-3">
                <h2 class="text-4xl font-extrabold mx-7">ZeroSecure</h2>
            </div>

            <label for="menu-toggle" class="pointer-cursor lg:hidden block"><svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><title>menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path></svg></label>
            <input class="hidden" type="checkbox" id="menu-toggle" />

            <div class="hidden lg:flex lg:items-center lg:w-auto w-full bg-emerald-500" id="menu">
            <nav>
                <ul class="lg:flex items-center justify-between text-base text-gray-700 pt-4 lg:pt-0">
                    @guest
                        <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-emerald-900 font-bold" href="{{route('register')}}">Informes</a></li>
                        <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-emerald-900 font-bold" href="{{route('register')}}">Registrate</a></li>
                        <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-emerald-900 font-bold lg:mb-0 mb-2" href="{{route('login')}}">Inicia Sesión</a></li>
                    @endguest
                    @auth
                        <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-emerald-900 font-bold" href="{{route('report')}}">Informes</a></li>
                        <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-emerald-900 font-bold" href="{{route('welcome')}}">Home</a></li>
                        <li><a class="lg:p-4 py-3 px-0 bg-red-400 block border-b-2 border-transparent hover:border-red-800 font-bold lg:mb-0 mb-2" href="{{route('logout')}}">Salir</a></li>
                    @endauth
                </ul>
            </nav> 
            </div>
        </header>
    </div>