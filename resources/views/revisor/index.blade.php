<x-layout>
    <x-header>
        <header class="display-5 text-center mt-5   t_font">
            {{ $insertion_to_check ? __('ui.RevisorIndexBlade_header1') : __('ui.RevisorIndexBlade_header2') }}:
        </header>
    </x-header>


    @if ($insertion_to_check)

        <div class="container-fluid overflow-hidden m_background p-0 m-0">
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <div class="row justify-content-center align-items-center">
                <form action="{{ route('revisor.undo_insertion', ['insertion' => $insertion_to_check]) }}"method="POST">
                    @csrf
                    @method('PATCH')
                    <br class="bg-transparent">
                    <button type="submit"class="btn ms-5 my-5 button_insertionCreate"><i
                            class="bi bi-skip-backward-fill"></i> {{ __('ui.RevisorIndexBlade_buttonUndo') }}
                    </button>
                </form>
                <div class="col-12 col-md-6 col-xl-3 text-start">
                    <p class="t_font main_font fs-3">{{ __('ui.RevisorIndexBlade_h5') }} <span
                            class="text-white fs-4">{{ $insertion_to_check->name }}</span></p>
                    <p class="t_font main_font fs-3">{{ __('ui.RevisorIndexBlade_h6') }} <span
                            class="text-white fs-4">{{ $insertion_to_check->subtitle }}</span></p>
                    <p class="t_font main_font fs-3">{{ __('ui.RevisorIndexBlade_p1') }} <span
                            class="text-white fs-4">{{ $insertion_to_check->description }}</span></p>
                    <p class="t_font main_font fs-3">{{ __('ui.RevisorIndexBlade_p2') }} <span class="text-white fs-4">
                            @switch(App::getLocale())
                                @case('en')
                                    {{ $insertion_to_check->category->en }}
                                @break

                                @case('es')
                                    {{ $insertion_to_check->category->es }}
                                @break

                                @default
                                    {{ $insertion_to_check->category->it }}
                            @endswitch
                        </span></p>
                    <p class="t_font main_font fs-3">{{ __('ui.RevisorIndexBlade_p3') }} <span
                            class="text-white fs-4">{{ $insertion_to_check->created_at->format('d/m/y') }}</span></p>
                    <p class="t_font main_font fs-3">{{ __('ui.RevisorIndexBlade_p4') }} <span
                            class="text-white fs-4">{{ $insertion_to_check->user->name ?? __('ui.RevisorIndexBlade_p5') }}</span>
                    </p>
                    <div class="row w-100 justify-content-center">
                        <form class="col-6 d-flex justify-content-center"
                            action="{{ route('revisor.accept_insertion', ['insertion' => $insertion_to_check]) }}"
                            method="POST">@csrf @method('PATCH')
                            <button type="submit" class="btn my-2 button_insertionCreate">
                                {{ __('ui.RevisorIndexBlade_acceptBtn') }}
                            </button>
                        </form>

                        <form class="col-6 d-flex justify-content-center"
                            action="{{ route('revisor.deny_insertion', ['insertion' => $insertion_to_check]) }}"
                            method="POST">@csrf @method('PATCH')
                            <button type="submit" class="btn my-2 button_insertionCreate2">
                                {{ __('ui.RevisorIndexBlade_denyBtn') }}
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-1"></div>
                <div class="col-12 col-md-6 col-xl-3 mb-5">
                    @if (count($insertion_to_check->images))
                        <div class="card border-0 m_background p-2 ">
                            <div thumbsSlider="" class="swiper mySwiper">
                                <div class="swiper-wrapper d-flex">
                                    @foreach ($insertion_to_check->images as $image)
                                        <div class="swiper-slide">
                                            <img src="{{ $image->getUrl(500, 500) }}">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="card-img-top">
                                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                                    class="swiper mySwiper2 my-2">
                                    <div class="swiper-wrapper">
                                        @foreach ($insertion_to_check->images as $image)
                                            <div class="swiper-slide ">
                                                <div class="overflow-hidden m_background">
                                                    <img src="{{ $image->getUrl(500, 500) }}" class="rounded">
                                                </div>
                                                <div class="swiper-button-next"></div>
                                                <div class="swiper-button-prev"></div>
                                                <div class="card-body m_background">
                                                    <h2 class="card-title t_font text-center">Tags</h2>
                                                    @if ($image->labels)
                                                        @foreach ($image->labels as $label)
                                                            <p class="card-text text-white d-inline text-end">
                                                                #{{ $label }}</p>
                                                        @endforeach
                                                    @endif

                                                    <h2 class="card-title t_font">SafeSearch</h2>
                                                    <div class="mt-2 text-white">
                                                        <p class="d-inline">{{ __('ui.RevisorIndexSafeSearch_Adults') }} <span class="{{ $image->adult }}">
                                                                | </span></p>
                                                        <p class="d-inline">{{ __('ui.RevisorIndexSafeSearch_Medicine') }} <span
                                                                class="{{ $image->medical }}"> | </span></p>
                                                        <p class="d-inline">{{ __('ui.RevisorIndexSafeSearch_Satiric') }} <span class="{{ $image->spoof }}">
                                                                | </span></p>
                                                        <p class="d-inline">{{ __('ui.RevisorIndexSafeSearch_Violent') }} <span
                                                                class="{{ $image->violence }}"> | </span></p>
                                                        <p class="d-inline">{{ __('ui.RevisorIndexSafeSearch_Racy') }} <span
                                                                class="{{ $image->racy }}"> </span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
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
                            <div class="swiper-button-next t_font"></div>
                            <div class="swiper-button-prev t_font"></div>
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
                <div class="col-12">


                </div>

            </div>
            <div class="container-fluid p-0  prefooter_waves"></div>
            <div class="row">
            </div>
        </div>
        </div>
    @else
        <div class="container-fluid p-0 overflow-hidden m_background">
            <div class="row text-center justify-content-center">
                <form
                    action="{{ route('revisor.undo_insertion', ['insertion' => $insertion_to_check]) }}"method="POST"
                    class="display-1 my-5">
                    @csrf
                    @method('PATCH')
                    <button type="submit"class="btn button_insertionCreate mt-5 text-center a_font fs-1"><i
                            class="bi bi-skip-backward-fill"></i> {{ __('ui.RevisorIndexBlade_buttonUndo') }}
                    </button>
                </form>
            </div>

            <div class="container-fluid p-0 prefooter_waves"></div>
            <div class="row">
            </div>
    @endif

</x-layout>
