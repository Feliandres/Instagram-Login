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
    @include('partials.nav')  

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