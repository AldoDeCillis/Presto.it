<x-layout>
    @guest
    <div class="container-fluid vh-100 screen_container">
        <div class="row justify-content-end">
            <div class="col-12 col-lg-6 display-1 vh-100 overflow-auto">
                <div class="row">
                    <h2 class="a_font display-1 my-5">{{__('ui.becomeRevisor_NotRegistered')}}</h2>
                    <h4 class="my-3 text-white vantaggi">{{__('ui.becomeRevisor_h4')}}</h4>
                    <h5 class="my-3 text-white ragioni">{{__('ui.becomeRevisor_h5')}}</h5>
                    <h6 class="my-3 a_font fs-2">{{__('ui.becomeRevisor_h6')}}</h6>
                    <p class="my-3 text-white fs-4">{{__('ui.becomeRevisor_p1')}}</p>
                    <h6 class="my-3 a_font fs-2">{{__('ui.becomeRevisor_h62')}}</h6>
                    <p class="my-3 text-white fs-4">{{__('ui.becomeRevisor_p2')}}</p>
                    <h6 class="my-3 a_font fs-2">{{__('ui.becomeRevisor_h63')}}</h6>
                    <p class="my-3 text-white fs-4">{{__('ui.becomeRevisor_p3')}}</p>
                    <h6 class="my-3 a_font fs-2">{{__('ui.becomeRevisor_h64')}}</h6>
                    <p class="my-3 text-white fs-4"> {{__('ui.becomeRevisor_p4')}}</p>
                    <h6 class="my-3 a_font fs-2">{{__('ui.becomeRevisor_h65')}}</h6>
                    <p class="my-3 text-white fs-4"> {{__('ui.becomeRevisor_p5')}} </p>
                    <div class=" text-center">
                        <a class="pb-5" href="{{ route('register') }}"><button class="btn fs-3 button_insertionCreate mt-3 mb-5">{{__('ui.becomeRevisor_button_register')}}</button></a>
                    </div>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
        @else
        <div class="container-fluid min-vh-100 screen_container">
            <div class="row py-5 justify-content-end">
                <div class="col-12 mt-5 col-lg-5">
                    <div class="row">
                        <div class="col-12 text-center my-2 display-6 a_font">{{__('ui.becomeRevisor_EntryTeam')}}</div>
                        <form method="POST" action="{{ route('revisor.become') }}" class="content_container text-white rounded">
                            <h1 class="display-3 text-center t_font">
                                {{__('ui.becomeRevisor_h1_')}}
                            </h1>
                            @csrf
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            @if (session('Message'))
                            <div class="alert alert-success">
                                {{ session('Message') }}
                            </div>
                            @endif
                                <div class="row justify-content-center">
                                    <div class="my-2 col-10 col-md-7 my-2">
                                        <label for="userAddress" class="form-label">{{__('ui.becomeRevisor_address')}}</label>
                                        <input type="text" name="address" class="form-control form-control_becomeRevisor" id="userAddress"
                                        placeholder="{{__('ui.becomeRevisor_address_PL')}}">
                                    </div>
                                    <div class="my-2 col-10 col-md-7 my-2 ">
                                        <label for="userPhone" class="form-label">{{__('ui.becomeRevisor_nphone')}} </label>
                                        <input type="number" name="phone" class="form-control form-control_becomeRevisor" id="userPhone"
                                        placeholder="{{__('ui.becomeRevisor_nphone_PL')}}">
                                    </div>
                                    <div class="my-2 col-10 col-md-7 my-2">
                                        <label for="userDate" class="form-label">{{__('ui.becomeRevisor_userDate')}}</label>
                                        <input type="date" name="date" class="form-control form-control_becomeRevisor" id="userDate"
                                        placeholder="{{__('ui.becomeRevisor_userDate_PL')}}">
                                    </div>
                                    <div class="my-2 col-10 col-md-7 my-2">
                                        <label for="userDescription" class="form-label">{{__('ui.becomeRevisor_userDescr')}}</label>
                                        <textarea type="text" name="description" class="form-control form-control_becomeRevisor" id="userDescription" placeholder="{{__('ui.becomeRevisor_userDescr_PL')}}"></textarea>
                                    </div>
                                    
                                    <div class="col-12 my-5 d-flex justify-content-center">
                                        <a href="{{ route('revisor.become') }}"><button type="submit" class="btn btn-primary button_becomeRevisor ">{{__('ui.becomeRevisor_submitRegister')}}</button></a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
        </div>


            @endguest
            
        </x-layout>
        