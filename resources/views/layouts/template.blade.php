<!DOCTYPE html>
<html lang="en" data-theme="forest">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.50.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="{{asset('storage\favicon.svg')}}" type="image/svg">
    <title>ZeroSecure | @yield('subtitle')</title>
</head>
<body class="bg-[url({{asset('/storage/background.jpg')}})] bg-no-repeat bg-center bg-cover font-mono relative min-h-screen pb-40">
    @include('partials.nav')    
    <main>
        @yield('content')
    </main>
    @include('partials.footer')
</body>
</html>