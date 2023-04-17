<x-layout>
    <div class="container-fluid vh-100 auth_container text-white">
        <div class="container w-100 h-100">
            <div class="row h-100 justify-content-center align-items-center">
                {{-- <div class="logo_container"></div> --}}
                <div class="col-12 col-md-5">
                    <form method="POST" action="{{route('login')}}" class="p-5 auth_form_custom shadow rounded">
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
                        <h1 class="text-center fs-3 a_font">Presto.it</h1>
                        <h2 class="text-center fs-4">{{__('ui.login_header')}}</h2>
                        <div class="row justify-content-center">
                            <div class=" col-12 my-2">
                                <label for="registerEmail" class="form-label">{{__('ui.login_address')}}</label>
                                <input type="email" name="email" class="form-control form-control-auth @error('email') is-invalid @enderror" id="registerEmail" aria-describedby="emailHelp">
                            </div>
                            <div class=" col-12 my-2">
                                <label for="registerPassword" class="form-label">{{__('ui.login_password')}}</label>
                                <input type="password" name="password" class="form-control form-control-auth @error('password') is-invalid @enderror" id="registerPassword">
                            </div>
                            <div class=" col-12 ms-4 my-3 form-check ">
                                {{-- <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label> --}}
                                <a href="{{route('password.request')}}" class="text-decoration-none text-white">{{__('ui.login_password_lost_helper')}}</a>
                            </div>
                            <div class="col-12 col-md-6 d-flex justify-content-center">
                                <button type="submit" class="btn px-5 btn-primary button_auth">{{__('ui.login_login')}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>