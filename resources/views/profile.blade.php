<x-layout>

    <x-header>
        <h1 class="text-center t_font main_font mt-4 display-4">{{ __('ui.ProfileList_title') }}</h1>
    </x-header>
    <div class="container-fluid p-0 overflow-hidden m_background">
        <div class="container py-5">
            <div class="row align-items-center justify-content-around justify-content-lg-center">
                <div class="col-12 col-lg-6 d-flex position-relative ">
                    <div class="profile_avatar_container border position-relative">
                        <img class="img-fluid img_avatar_container" src="{{Storage::url(Auth::user()->avatar)}}" alt="" id="avatarImg">
                        <i class="bi bi-pencil position-absolute pencilAvatar text-muted " id="pencilAvatar"></i>
                    </div>
                    <form class="text-white" id="profileSubmitBtn" method="POST" enctype="multipart/form-data" action="{{route('profile.changeAvatar', ['user'=>Auth::user()])}}">
                        @csrf
                        @method('PUT')
                        <input class="form-control position-absolute d-none" type="file" name="avatar" id="avatarBtn">
                        <button class="btn button_insertionCreate mt-2 d-none"  type="submit">{{__('ui.profileAvatar')}}</button>
                    </form>
    
                </div>
                {{-- <div class="col-5 col-lg-3">
                </div> --}}
            </div>
            <div class="row">
                <div class="col-12">
                    <h2 class=" t_font main_font">{{__('ui.profileDashboard')}}</h2>
                </div>
                <div class="col-12">
                    @livewire('insertion-list', ['insertions' => $insertions])
                </div>
            </div>
        </div>
        <div class="container-fluid p-0 prefooter_waves"></div>

    </div>

    <div class="row">

    </div>




</x-layout>
