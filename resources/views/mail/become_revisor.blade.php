<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presto.it</title>
</head>
<body>

    <div>
        <h1>{{ __('ui.InsertionEditFormLiveWire_title') }}</h1>
        <h2>{{ __('ui.InsertionEditFormLiveWire_h2') }}</h2>
        <p>{{ __('ui.InsertionEditFormLiveWire_p1') }}{{$user->name}}</p>
        <p>{{ __('ui.InsertionEditFormLiveWire_p2') }}{{$user->email}}</p>
        {{-- <p>{{ __('ui.InsertionEditFormLiveWire_p3') }}{{$user->phone}}</p> --}}
        <p>{{ __('ui.InsertionEditFormLiveWire_p4') }}</p>
        <a href="{{route('revisor.make', compact('user'))}}" class="btn">{{ __('ui.InsertionEditFormLiveWire_a') }}</a>
    </div>

</body>
</html>