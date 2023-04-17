<x-layout>

    <div class="container-fluid vh-100 auth_container text-white">
        <div class="container w-100 h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-12 col-md-5">
                    <form method="POST" action="{{route('password.request')}}" class="p-5 auth_form_custom shadow rounded">
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
                        <div class="row justify-content-center">
                            <div class=" col-12 my-2">
                                <label for="registerEmail" class="form-label">{{__('ui.forgot_password_address')}}</label>
                                <input type="email" name="email" class="form-control form-control-auth @error('email') is-invalid @enderror" id="registerEmail" aria-describedby="emailHelp">
                            </div>

                            {{-- <div class=" col-12 ms-4 my-3 form-check ">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">{{__('ui.forgot_check_me_out')}}</label>
                            </div> --}}
                            <div class="col-12 col-md-6 d-flex justify-content-center">
                                <button type="submit" class="btn px-5 btn-primary button_auth">{{__('ui.forgott_SendRequest')}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-layout>