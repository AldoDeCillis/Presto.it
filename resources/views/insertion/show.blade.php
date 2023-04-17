<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 col-md-12">

                <header class="display-1 text-center">
                    {{ $insertion->category->name }}
                </header>

            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center ">
            <div class="col-12 col-md-5">
                @if (count($insertion->images))
                    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                        class="swiper mySwiper2 my-2">
                        <div class="swiper-wrapper">
                            @foreach ($insertion->images as $image)
                                <div class="swiper-slide">
                                    <img src="{{ $image->getUrl(500, 500) }}">
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    <div thumbsSlider="" class="swiper mySwiper">
                        <div class="swiper-wrapper d-flex">
                            @foreach ($insertion->images as $image)
                                <div class="swiper-slide">
                                    <img src="{{ $image->getUrl(500, 500) }}">
                                </div>
                            @endforeach
                        </div>
                    </div>
                @else
                    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                        class="swiper mySwiper2 my-2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{ url('media/logo.jpg') }}">
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    <div thumbsSlider="" class="swiper mySwiper">
                        <div class="swiper-wrapper d-flex">
                            <div class="swiper-slide">
                                <img src="{{ url('media/logo.jpg') }}">
                            </div>
                        </div>
                    </div>
                @endif


            </div>
            <div class="col-12 col-md-1"></div>
            <div class="col-12 col-md-4 d-flex ps-3 py-5 py-md-0 flex-column justify-content-around" height="18rem">
                @if(session('mailSent'))
                <div class="alert alert-success">
                    {{session('mailSent')}}
                </div>
                @endif
                <h1 class="pt-4 mb-0">{{ $insertion->name }}</h1>

                <h3 class="pt-4 mb-2">{{ $insertion->subtitle }}</h3>
                <h5 class="mb-1">{{ __('ui.showBy') }}{{ $insertion->user->name }} </h5>
                <h6 class="mt-0">{{ __('ui.showWhen') }}{{ $insertion->created_at }}</h6>

                <p class="">{{ $insertion->description }}</p>

                <h4 class="display-6">{{ __('ui.showCash') }}{{ $insertion->price }}</h4>
                <div class="col-12 d-flex text-center align-items-center">
                    <form method="POST" action="{{ route('insertion.contactSeller', compact('insertion')) }}">@csrf
                        <button type="submit" class="btn btn-outline-dark  px-5 shadow  button_show me-5">{{ __('ui.showBuy') }}</button>
                    </form>

                    <a href="{{ route('insertion.index') }}"
                        class="btn btn-outline-dark   px-5 shadow button_back">{{ __('ui.showBack') }}
                    </a>
                </div>



            </div>







            <!-- Swiper -->





        </div>

</x-layout>
