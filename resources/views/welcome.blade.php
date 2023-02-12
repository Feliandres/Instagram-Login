<!DOCTYPE html>
<html lang="en" data-theme="forest">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('storage\favicon.svg')}}" type="image/svg">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.46.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>ZeroSecure | Inicio</title>
</head>
<body class="font-mono">
    <style>
        #menu-toggle:checked + #menu {
            display: block;
        }
    </style>
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
                        <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-emerald-900 font-bold" href="{{route('register')}}">Informes</a></li>
                    <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-emerald-900 font-bold" href="{{route('register')}}">Registrate</a></li>
                    <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-emerald-900 font-bold lg:mb-0 mb-2" href="{{route('login')}}">Inicia Sesión</a></li>
                    </ul>
                </nav>
            </div>
        </header>
    </div>

    <h1 class="text-6xl text-center pt-12 text-orange-600 font-bold">Reporte de vulnerabilidades</h1>

    <!-- CARRUSEL -->
    <div class="carousel rounded-box rounded-t-lg w-auto mx-10 pt-8">
        <div id="item1" class="carousel-item w-full">
          <img src="{{asset('/storage/first.jpg')}}" class="w-full h-96 px-12 mx-60" />
        </div> 
        <div id="item2" class="carousel-item w-full">
          <img src="{{asset('/storage/second.jpg')}}" class="w-full h-96 px-12 mx-60" />
        </div> 
        <div id="item3" class="carousel-item w-full">
          <img src="{{asset('/storage/third.png')}}" class="w-full h-96 px-12 mx-60" />
        </div> 
        <div id="item4" class="carousel-item w-full">
          <img src="{{asset('/storage/fourth.jpg')}}" class="w-full h-96 px-12 mx-60" />
        </div>
    </div>

    <div class="flex justify-center w-full py-2 gap-2">
        <a href="#item1" class="btn btn-xs bg-accent border-accent">1</a> 
        <a href="#item2" class="btn btn-xs bg-accent border-accent">2</a> 
        <a href="#item3" class="btn btn-xs bg-accent border-accent">3</a> 
        <a href="#item4" class="btn btn-xs bg-accent border-accent">4</a>
    </div>


    <div class="flex justify-center pt-12">
        <div class="card w-96 bg-blue-700 shadow-xl flex mx-5">
            <figure><img src="{{asset('storage\linux.png')}}" alt="Shoes" class="pt-8" /></figure>
            <div class="card-body">
                <h2 class="card-title font-bold text-white text-3xl"> TRUCOS EN LINUX </h2>
                <p><span class="text-white">- Comandos más usados y Bash</span></p>
                <p><span class="text-white">- Herramientas Básicas para Pentesting</span></p>
            </div>
        </div>

        <div class="card w-96 bg-green-500 shadow-xl flex mx-5">
            <figure><img src="{{asset('storage\cve.png')}}" alt="Shoes" class="pt-8" /></figure>
            <div class="card-body">
                <h2 class="card-title font-bold text-white text-3xl">CVE's</h2>
                <p class="text-white">Reporte de vulnerabilidades más actuales</p>
            </div>
        </div>

        <div class=" card w-96 bg-gray-200 shadow-xl flex mx-5">
            <figure><img src="{{asset('storage\vuln.png')}}" alt="Shoes" class="pt-8"/></figure>
            <div class="card-body">
                <h2 class="card-title font-bold text-gray-400 text-3xl">
                    BUG BOUNTY
                    <div class="badge badge-secondary">Próximamente</div>
                </h2>
                <p class="text-gray-600">Te recompensamos por tu trabajo!</p>
            </div>
        </div>
    </div>
</body>
</html>