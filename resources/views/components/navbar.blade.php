<nav class="navbar m_background navbar-dark text-white nav_opacity sticky-top navbar-expand-lg p-0 m-0">
    <div class="container-fluid">
        <a class="navbar-brand " href="{{ route('homepage') }}">
            <img src="{{ url('media/logo.png') }}" width="50px" class="p-0" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link navbar-shortcut"
                        href="{{ route('insertion.index') }}">{{ __('ui.navbar_insertionIndex') }}</a>
                </li>

                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle navbar-shortcut" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ __('ui.navbar_categories') }}
                    </a>
                    <ul class="dropdown-menu CategoriesStyle position-absolute">
                        @foreach ($categories as $category)
                            @switch(App::getLocale())
                                @case('en')
                                    <a class="dropdown-item"
                                        href="{{ route('categoryShow', compact('category')) }}">{{ $category->en }}
                                        <span class="translate-middle size_counter_category text-muted">
                                            ({{ App\Models\Insertion::where('category_id', $category->id)->where('is_accepted', true)->count() }})
                                            <span class="visually-hidden">Numero inserzioni presenti</span>
                                        </span>
                                    </a>
                                @break

                                @case('es')
                                    <a class="dropdown-item"
                                        href="{{ route('categoryShow', compact('category')) }}">{{ $category->es }}
                                        <span class="translate-middle size_counter_category text-muted">
                                            ({{ App\Models\Insertion::where('category_id', $category->id)->where('is_accepted', true)->count() }})
                                            <span class="visually-hidden">Numero inserzioni presenti</span>
                                        </span>
                                    </a>
                                @break

                                @default
                                    <a class="dropdown-item"
                                        href="{{ route('categoryShow', compact('category')) }}">{{ $category->it }}
                                        <span class="translate-middle size_counter_category text-muted">
                                            ({{ App\Models\Insertion::where('category_id', $category->id)->where('is_accepted', true)->count() }})
                                            <span class="visually-hidden">Numero inserzioni presenti</span>
                                        </span>
                                    </a>
                                    <li>

                                        </a>
                                @endswitch
                            </li>
                        @endforeach
                    </ul>

                </div>
                <li class="nav-item navbar-shortcut">
                    <a class="nav-link " href="{{ route('becomeRevisorPage') }}">{{ __('ui.becomeRevisor') }}</a>
                </li>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle navbar-shortcut " href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ __('ui.lang') }}
                    </a>
                    <ul class="dropdown-menu NavLingue position-absolute">
                        <div class="div">
                            <ul class="d-flex list-unstyled justify-content-around ">
                                <li class="nav-item ">
                                    <x-_locale lang="it" nation="it"></x-_locale>
                                </li>
                                <li class="nav-item ">
                                    <x-_locale lang="en" nation="en"></x-_locale>
                                </li>
                                <li class="nav-item ">
                                    <x-_locale lang="es"></x-_locale>
                                </li>
                            </ul>
                        </div>
                    </ul>

                </div>
            </ul>

            @guest
                <div class="nav-item dropdown me-5 pe-5">
                    <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <div class="avatar_container me-3">
                        <i class="bi bi-person-circle fs-1"></i>
                      </div>

                      {{ __('ui.userHello') }}
                </a>
                    <ul class="dropdown-menu CategoriesStyle">
                        <li><a class="dropdown-item navbar-shortcut " href="{{ route('register') }}">{{ __('ui.userRegister') }}</a></li>
                        <li><a class="dropdown-item navbar-shortcut"
                                href="{{ route('login') }}">{{ __('ui.userLogin') }}</a></li>
                    </ul>
                </div>
            @else
                <div class="nav-item dropdown mx-5  pe-5">
                    <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <div class="avatar_container me-3">
                            <img class="img-fluid" src="{{Storage::url(Auth::user()->avatar)}}" alt="">
                          </div>

                          {{ __('ui.userAuthLogin') }} {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu CategoriesStyle ">
                        @if (Auth::user()->is_revisor)
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                {{ App\Models\Insertion::toBeRevisionedCount() }}
                                <span class="visually-hidden">Messaggi non letti</span>
                            </span>
                            <li><a class="dropdown-item dropdown_custom_text"
                                    href="{{ route('revisor.index') }}">{{ __('ui.userRevisorArea') }}</a></li>
                        @endif
                        <li><a class="dropdown-item dropdown_custom_text fs-bold" href="{{ route('profile') }}">{{ __('ui.userProfile') }}</a></li>
                        <li><a class="dropdown-item dropdown_custom_text"
                                href="{{ route('insertion.create') }}">{{ __('ui.userNewInsertion') }}</a></li>
                        <li><a href="" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();"
                                class="dropdown-item dropdown_custom_text">{{ __('ui.userLogout') }}</a></li>
                    </ul>
                    <form id="form-logout" method="POST" action="{{ route('logout') }}" class="d-none">
                        @csrf
                    </form>

                </div>
            @endguest
        </div>
    </div>
</nav>
