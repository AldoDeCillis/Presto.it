<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SyntaxErrorProject</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    @livewireStyles
</head>

<body>
    <x-navbar />
<div class="min-vh-100">
     {{ $slot }}
</div>
   

    <x-footer/>

    @livewireScripts
    <script src="https://kit.fontawesome.com/a1bce7f071.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/typed.js@2.0.14/dist/typed.umd.js"></script>
</body>

</html>
