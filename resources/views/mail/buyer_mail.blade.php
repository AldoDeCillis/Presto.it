<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{__('ui.contactSellerDoc')}}</title>
</head>
<body>
    <h1 class="main_font fs-4 t_font">{{__('ui.contactSellerHello')}}{{$insertion->user->name}}</h1>
    <br>
    <p class="my-5 fs-5">{{__('ui.contactSellerUser')}} {{Auth::user()->name}} {{__('ui.contactSellerInfoRequest')}}</p>
    <h2>{{$insertion->name}}</h2>
    <p>{{__('ui.contactSellerContactBack')}}{{Auth::user()->email}}</p>
    <br>
    <q>{{__('ui.contactSellerTeam')}}</q>
</body>
</html>