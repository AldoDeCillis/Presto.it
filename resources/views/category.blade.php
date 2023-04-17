<x-layout>
    <x-header>
        <header class="fs-1 t_font text-center mb-0">
            {{__('ui.category_title_header')}} <span class="display-3 main_font a_font">
                @switch(App::getLocale())
                @case('en')
                {{ $category->en }}
                @break
                @case('es')
                {{ $category->es }}
                @break
                @default
                {{ $category->it }}
                @endswitch
            </span>
        </header>
    </x-header>

        <div class="container-fluid overflow-hidden m_background p-0 m-0">
            <div class="row w-100 m-0 justify-content-around">
                
                @forelse ($category->insertions->where('is_accepted', true) as $insertion)
                <div class="col-12 col-lg-3 col-l-3 mt-5 my-0 mb-0 d-flex mb-5 text-center card_custom justify-content-center ">
                    <a class="text-decoration-none m_font " href="{{ route('insertion.show', compact('insertion')) }}">
                        <div class=" d-flex flex-column justify-content-around align-items-center">
                            <h2 class="card-title text-white ">{{ $insertion->name }}</h2>
                            
                            <div class="card card-item">
                                
                                <img src="{{!$insertion->images()->get()->isEmpty()? $insertion->images()->first()->getUrl(500,500) : url('media/logo.jpg')}}" class="card-img-top" alt="card-img">
                                <div class="card-body-overlay">
                                    
                                    <div class="col-10  card_custom_body text-center ">
                                        
                                        <h5 class="card-subtitle  ">{{ $insertion->subtitle }}</h5>
                                        
                                        <h3 class="card-text description">{{Str::limit($insertion->description,100)}}</h3>
                                        
                                        <h4 class="card-title">{{ $insertion->price }}€</h4>
                                        
                                        {{-- ci siamo --}}
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @empty
            </div>
            <div class=" text-center mt-5 mb-5">
                <h1>{{ $category->name }}</h1>
            </div>
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-12 text-white text-center">
                        <h3> {{__('ui.category_h3')}}</h3>
                        <div class="col-12  ps-1  text-center py-5">
                            <a href="{{ route('insertion.create') }}"
                            class="btn btn-outline-dark px-5 button_insertionCreate shadow">{{__('ui.category_button_crea')}}</a>
                        </div>
                        
                        
                    </div>
                    
                </div>
            </div>
            @endforelse
            <div class="container-fluid p-0 overflow-hidden prefooter_waves"></div>
            <div class="row">
            </div>
        </div>


</x-layout>
