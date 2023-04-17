<x-layout>
    <x-header>
        <header class="display-3 mt-5 t_font text-center ">
            {{__('ui.header_index')}}
        </header>
    </x-header>
    
    <div class="container-fluid min-vh-100 m_background">
        <div class=" row justify-content-around ">
            @forelse ($insertions as $insertion)
                <div class="col-12 col-lg-3 my-5 d-flex text-center card_custom justify-content-center ">
                    <a class="text-decoration-none m_font " href="{{ route('insertion.show', compact('insertion')) }}">
                    <p class="card-text">{{ $insertion->category->name }}</p>
                    <h2 class="card-title text-white ">{{ $insertion->name }}</h2>

                    <div class="card card-item ">
                        <img src="{{!$insertion->images()->get()->isEmpty()? $insertion->images()->first()->getUrl(500,500) : url('media/logo.jpg')}}" class="card-img-top" alt="card-img">
                        <div class="card-body-overlay">
                            <div class="col-10  card_custom_body text-center ">
                                <h5 class="card-subtitle  ">{{ $insertion->subtitle }}</h5>
                                <h3 class="card-text text-description "> {{Str::limit($insertion->description,20)}} </h3>
                                <h4 class="card-price">{{ $insertion->price }}€</h4>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>

            @empty 
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-12 text-white text-center mt-5">
                        <h3> {{__('ui.category_h3')}}</h3>
                        <div class="col-12  ps-1  text-center py-5">
                            <a href="{{ route('insertion.create') }}"
                            class="btn btn-outline-dark px-5 button_insertionCreate shadow">{{__('ui.category_button_crea')}}</a>
                        </div>
                        
                        
                    </div>
                    
                </div>
            </div>
           
            
            @endforelse
            
            <div class="container">
                {{ $insertions->links()}}
            </div>
            
        </div>
        <div class="row">
            <div class="container-fluid p-0 overflow-hidden prefooter_waves"></div>
        </div>
        
    </div>
    {{--     <div class="container-fluid min-vh-100 img_background_no_h">
    </div> --}}
</x-layout>

