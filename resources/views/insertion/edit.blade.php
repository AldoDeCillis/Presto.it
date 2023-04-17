<x-layout>
    <div class="container-fluid p-0 m_background overflow-hidden">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-3">
                <h1 class="a_font main_font fs-3">{{__('ui.editFormh1')}}</h1>
                <p class="t_font">{{__('ui.editFormp1')}}</p>
                <p class="t_font">{{__('ui.editFormp2')}}</p>
            </div>
            <div class="col-1"></div>
            <div class="col-12 col-md-6">
                @livewire('insertion-edit-form', ['insertion'=>$insertion])
            </div>
            <div class="col-md-1"></div>
            <div class="container-fluid p-0 prefooter_waves"></div>
        </div>
    </div>



</x-layout>