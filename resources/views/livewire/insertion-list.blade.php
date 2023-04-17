<div class="table-responsive">
    <table class="table ">
        <thead>
            <tr>
                <th class="a_font" scope="col">#</th>
                <th class="a_font" scope="col">{{ __('ui.profileCategory') }}</th>
                <th class="a_font" scope="col">{{ __('ui.profileName') }}</th>
                <th class="a_font" scope="col">{{ __('ui.profileSubtitle') }}</th>
                <th class="a_font" scope="col">{{ __('ui.profilePrice') }}</th>
                <th class="a_font" scope="col">{{ __('ui.profileDesc') }}</th>
                <th class="a_font" scope="col">Status</th>
                <th class="a_font text-center" scope="col">{{ __('ui.profileEdit') }}</th>
                <th class="a_font text-center" scope="col">{{ __('ui.profileDelete') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($insertions as $insertion)
                {{-- @if ($insertion->is_accepted == true) --}}
                <tr class="text-white">
                    <th scope="row">{{ $insertion->id }}</th>
                    <td>
                        @switch(App::getLocale())
                        @case('en')
                        {{ $insertion->category->en }}
                        @break
                        @case('es')
                        {{ $insertion->category->es }}
                        @break
                        @default
                        {{ $insertion->category->it }}
                        @endswitch
                    </td>
                    <td>
                        <a class="text-white" href="{{ route('insertion.show', compact('insertion')) }}">
                            {{ $insertion->name }}
                        </a>
                    </td>
                    <td>{{ $insertion->subtitle }}</td>
                    <td>€ {{ $insertion->price }}</td>
                    <td>{{ $insertion->description }}</td>
                    <td class="text-start">
                        @if (Auth::user()->is_revisor == true)
                                @if ($insertion->is_accepted === 1)
                                    <p class="text-success text-start">{{ __('ui.profileEditStatus_Accepted')}}!
                                    </p>
                                @elseif($insertion->is_accepted === 0)
                                    <p class="text-danger text-start">{{ __('ui.profileEditStatus_Rejected')}}!
                                    </p>
                                @else
                                    <p class="text-warning text-start">{{ __('ui.profileEditStatus_Waiting')}}
                                    </p>
                                @endif
                        @else
                            @if ($insertion->is_accepted === 1)
                                <p class="text-success text-decoration-none text-start">{{ __('ui.profileEditStatus_Accepted')}}!
                                </p>
                            @elseif($insertion->is_accepted === 0)
                                <p class="text-danger text-decoration-none text-start">{{ __('ui.profileEditStatus_Rejected')}}!
                                </p>
                            @else
                                <p class="text-warning text-decoration-none text-start">{{ __('ui.profileEditStatus_Waiting')}}
                                </p>
                            @endif
                        @endif
                    </td>
                    <td class="text-center"><a href="{{ route('insertion.edit', compact('insertion')) }}"
                            class="btn btn-outline-warning"><i class="bi bi-pencil-square"></i></a></td>
                    <td class="text-center">
                        <button wire:click="destroy({{$insertion}})" class="btn btn-outline-danger">
                            <i class="bi bi-trash3"></i>
                        </button>
                    </td>
                </tr>
                {{-- @endif --}}
            @endforeach
        </tbody>
    </table>
</div>