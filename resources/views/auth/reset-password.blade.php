<x-layout>

    <div class="container-fluid vh-100 auth_container text-white">
        <div class="container w-100 h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-12 col-md-5">
                    <form method="POST" action="{{route('password.update')}}" class="p-5    auth_form_custom shadow rounded">
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
                        <input type="hidden" name="token" value="{{$request->route('token')}}">
                        <div class="row justify-content-center">
                            <div class=" col-12 my-2">
                                <label for="registerEmail" class="form-label">{{__('ui.reset_password_address')}}</label>
                                <input type="email" name="email" class="form-control form-control-auth @error('email') is-invalid @enderror" id="registerEmail" aria-describedby="emailHelp" value="{{$request->email}}">
                            </div>
                            <div class=" col-12 my-2">
                                <label for="password" class="form-label">{{__('ui.reset_password_newPassword')}}</label>
                                <input type="password" name="password" class="form-control form-control-auth @error('password') is-invalid @enderror" id="password" >
                            </div>
                            <div class=" col-12 my-2">
                                <label for="password_confirmation" class="form-label">{{__('ui.reset_password_ConfirmNewPassword')}}</label>
                                <input type="password" name="password_confirmation" class="form-control form-control-auth @error('password') is-invalid @enderror" id="password_confirmation" >
                            </div>
                            <div class="col-12 col-md-6 d-flex justify-content-center">
                                <button type="submit" value="update" class="btn px-5 btn-primary button_auth">{{__('ui.reset_password_Button_Accedi')}}</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-layout>