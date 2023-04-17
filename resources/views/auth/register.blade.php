<x-layout>
    <div class="container-fluid vh-100 auth_container text-white">
        <div class="container w-100 h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-12 col-md-6">
                    <form method="POST" action="{{ route('register') }}" class="p-5 auth_form_custom shadow rounded">
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
                        <h2 class="text-center fs-4">{{__('ui.register_h2')}}</h2>
                        <div class="row justify-content-center">

                            <div class="my-2 col-12">

                                <label for="registerName" class="form-label">{{__('ui.register_name')}}</label>
                                <span class="text-muted small">{{__('ui.register_obliged')}}</span>
                                <input type="text" name="name" class="form-control form-control-auth @error('name') is-invalid @enderror"
                                    id="registerName" placeholder="{{__('ui.register_name_PL')}}">
                            </div>
                            <div class="my-2 col-12">

                                <label for="registerEmail" class="form-label">{{__('ui.register_email')}}</label>
                                <span class="text-muted small">{{__('ui.register_obliged')}}</span>
                                <input type="email" name="email" class="form-control form-control-auth @error('email') is-invalid @enderror"
                                    id="registerEmail" aria-describedby="emailHelp" placeholder="{{__('ui.register_email_PL')}}">
                                <div id="emailHelp" class="form-text text-white">{{__('ui.register_noShare')}}
                                </div>
                            </div>
                            <div class="my-2 col-12 col-lg-6">

                                <label for="registerPassword" class="form-label">{{__('ui.register_password')}}</label>
                                <span class="text-muted small">{{__('ui.register_obliged')}}</span>
                                <input type="password" name="password" class="form-control form-control-auth @error('password') is-invalid @enderror"
                                    id="registerPassword" placeholder="{{__('ui.register_password_PL')}}">
                            </div>
                            <div class="my-2 col-12 col-lg-6">

                                <label for="registerPassword_confirmation" class="form-label">{{__('ui.register_password_confirm')}}</label>
                                <span class="text-muted small">{{__('ui.register_obliged')}}</span>
                                <input type="password" name="password_confirmation"
                                    class="form-control form-control-auth @error('password_confirmation') is-invalid @enderror" id="registerPassword_confirmation" placeholder="{{__('ui.register_password_confirm_PL')}}">
                            </div>

                            <div class="col-4 d-flex justify-content-center">
                                <button type="submit" class="btn px-5 mt-3 btn-primary button_auth">{{__('ui.register_button_register')}}</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
