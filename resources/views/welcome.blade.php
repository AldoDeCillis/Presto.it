<x-layout>

    <x-header>
        
    </x-header>
    
    <div class="container-fluid welcome_background">
        @if (session('access.denied'))
            <div class="alert alert-danger">
                {{ session('access.denied') }}
            </div>
        @endif
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <div class="container rounded welcome_box_container">
            <div class="row py-3 h-100 align-items-center justify-content-around">
                <div class="d-none d-lg-block col-3">
                    <div class="row w-100 m-0">
                        @foreach ($categories as $category)
                            {{-- <div class="col-12 d-flex flex-column align-items-center"> --}}
                            <div class="btn button_insertionCreate my-1">
                                @switch(App::getLocale())
                                    @case('en')
                                        <a class="dropdown-item"
                                            href="{{ route('categoryShow', compact('category')) }}">{{ $category->en }}
                                        </a>
                                    @break

                                    @case('es')
                                        <a class="dropdown-item"
                                            href="{{ route('categoryShow', compact('category')) }}">{{ $category->es }}
                                        </a>
                                    @break

                                    @default
                                        <a class="dropdown-item"
                                            href="{{ route('categoryShow', compact('category')) }}">{{ $category->it }}
                                        </a>
                                @endswitch
                            </div>
                            {{-- </div> --}}
                        @endforeach
                    </div>
                </div>
                <div class="col-8 col-lg-4 mt-4">
                    <div class="swiper mySwiper3 rounded">
                        <div class="swiper-wrapper ">
                            <div class="swiper-slide">
                                <img src="{{ url('/media/category_elettronica.jpg') }}" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ url('/media/category_casa.jpg') }}" alt="">
                            </div>


                            <div class="swiper-slide">
                                <img src="{{ url('/media/category_musica.jpg') }}" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ url('/media/category_sport.jpg') }}" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ url('/media/category_hobby.jpg') }}" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ url('/media/category_animali.jpg') }}" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ url('/media/category_mobili.jpg') }}" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ url('/media/category_giardinaggio.jpg') }}" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ url('/media/category_videogame.jpg') }}" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ url('/media/category_palestra.jpg') }}" alt="">
                            </div>


                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        
                    </div>
                </div>
                <div class="col-6 text-center text-lg-start col-lg-3  d-flex flex-column">
                    <div class="row justify-content-center">
                        <h4 class="text-white mb-2">{{ __('ui.welcome') }}</h4>
                        <h2 class="t_font">Presto.it</h2>
                        <h6 class="text-white mt-1">{{ __('ui.caption') }}</h6>
                        <a class="btn welcome-button ms-0 mt-5"
                            href="{{ route('insertion.create') }}">{{ __('ui.button_insert_insertion') }}</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container-fluid fixed_welcome_img">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-12 col-md-6 d-flex justify-content-center fs-3">
                <span class="t_font text-center" id='element'></span>
                {{-- <h3 class="t_font text-center">Offerte sulla categoria Libri!</h3>
                <p class="t_font text-center">Fino al 50% di sconto sui nostri articoli</p> --}}
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-center">
                <a href="{{route('categoryShow', ['category'=>9])}}" type="submit" class="btn btn-outline-warning px-5">{{__('ui.autotypeBtn')}}</a>
            </div>
        </div>
    </div>

    <div class="container-fluid img_background">
        <div class="row">
            <div class="col-12">
                <h2 class="display-4 main_font text-center t_font my-5">{{ __('ui.allInsertions') }}:</h2>
            </div>
            <div class="col-12 ps-0 pe-0">
                <div class="swiper mySwiper4 mb-5 orange_row">
                    <div class="swiper-wrapper">
                        @foreach ($insertions as $insertion)
                            <div class="swiper-slide bg-transparent mb-3">
                                <div class="card_custom d-flex justify-content-center ">
                                    <a class="text-decoration-none m_font"
                                        href="{{ route('insertion.show', compact('insertion')) }}">
                                        <p class="card-text text-white">
                                            @switch(App::getLocale())
                                                @case('en')
                                                    {{ $insertion->category->en }}
                                                @break

                                                @case('es')
                                                    {{ $insertion->category->es }}
                                                @break

                                                @default
                                                    {{ $insertion->category->it }}
                                            @endswitch
                                        </p>
                                        <h2 class="card-title text-white">{{ $insertion->name }}</h2>
                                        <div class="card card-item ">
                                            <img src="{{ !$insertion->images()->get()->isEmpty()? $insertion->images()->first()->getUrl(500, 500): url('media/logo.jpg') }}"
                                                class="card-img-top" alt="card-img">
                                            <div class="card-body-overlay">

                                                <div class="col-10  card_custom_body text-center ">

                                                    <h5 class="card-subtitle  ">{{ $insertion->subtitle }}</h5>

                                                    <h3 class="card-text text-description ">
                                                        {{ Str::limit($insertion->description, 100) }} </h3>
                                                    <h4 class="card-price">{{ $insertion->price }}€</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>












</x-layout>
