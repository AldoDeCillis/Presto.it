<x-layout>
    <x-header />
    <div class="container-fluid p-0 m_background overflow-hidden">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-3 p-4">
                <h1 class="a_font main_font fs-3">{{__('ui.createFormH1')}}</h1>
                <p class="t_font">{{__('ui.createFormp1')}}</p>
                <p class="t_font">{{__('ui.createFormp2')}}</p>
            </div>
            <div class="col-1"></div>
            <div class="col-12 col-md-6">
                @livewire('insertion-create-form')
            </div>
            <div class="col-md-1"></div>
            <div class="container-fluid p-0 prefooter_waves"></div>
        </div>
    </div>
    




</x-layout>