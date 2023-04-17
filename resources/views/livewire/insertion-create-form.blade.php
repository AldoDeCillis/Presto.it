<form wire:submit.prevent="store" enctype="multipart/form-data"
    class="text-white bg-transparent border rounded revisor_card_border p-2">
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
    @if (session('insertionCreated'))
        <div class="alert alert-success">
            {{ session('insertionCreated') }}
        </div>
    @endif
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="my-2 col-12 col-md-11">
                <label for="InsertionName" class="form-label">{{ __('ui.InsertionCreateFormLiveWire_Titolo') }}</label>
                <input type="text" wire:model="name"
                    class="form-control form-control_insertionCreate @error('name') is-invalid @enderror"
                    id="InsertionName" placeholder="{{ __('ui.InsertionCreateFormLiveWire_Titolo_PL') }}">
            </div>
            <div class="my-2 col-12 col-md-11">
                <label for="InsertionSubtitle"
                    class="form-label">{{ __('ui.InsertionCreateFormLiveWire_Sottotitolo') }}</label>
                <input type="text" wire:model="subtitle"
                    class="form-control form-control_insertionCreate @error('subtitle') is-invalid @enderror"
                    id="InsertionSubtitle" placeholder="{{ __('ui.InsertionCreateFormLiveWire_SottoTitolo_PL') }}">
            </div>

            <div class="my-2 col-12 col-md-11">
                <label for="InsertionPrice" class="form-label">{{ __('ui.InsertionCreateFormLiveWire_Price') }}</label>
                <input type="number" wire:model="price"
                    class="form-control form-control_insertionCreate @error('price') is-invalid @enderror"
                    id="InsertionPrice" placeholder="{{ __('ui.InsertionCreateFormLiveWire_Price_PL') }}">
            </div>
            <div class="my-2 col-12 col-md-11">
                <label for="InsertionDescription"
                    class="form-label">{{ __('ui.InsertionCreateFormLiveWire_Description') }}</label>
                <textarea type="text" wire:model="description"
                    class="form-control form-control_insertionCreate @error('description') is-invalid @enderror"
                    id="InsertionDescription" placeholder="{{ __('ui.InsertionCreateFormLiveWire_Description_PL') }}"></textarea>
            </div>
            <div class="my-2 col-6">
                <label for="InsertionCategory"
                    class="form-label">{{ __('ui.InsertionCreateFormLiveWire_Categories') }}</label>
                <select wire:model="category" class="form.control @error('category') is-invalid @enderror"
                    id="InsertionCategory">
                    <option value="" hidden></option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">
                            @switch(App::getLocale())
                                @case('en')
                                    {{ $category->en }}
                                @break

                                @case('es')
                                    {{ $category->es }}
                                @break

                                @default
                                    {{ $category->it }}
                            @endswitch
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="my-2 col-6">
                <div class="form-check">
                    <input class="form-check-input" value="1" wire:model="is_new" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        {{__('ui.InsertionCreateFormLivewire_New')}}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" value="0" wire:model="is_new" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        {{__('ui.InsertionCreateFormLivewire_SecondHand')}}
                    </label>
                </div>
            </div>
            <div class="my-2 col-12 col-lg-6">
                <input type="file" name="images" wire:model="temporary_images" multiple
                    class="form-control @error('temporary_images.*') is-invalid @enderror" placeholder="vuoto">
                @error('temporary_images.*')
                    <span class="small text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="my-2 col-6">
                @if (!empty($images))
                    <div class="row justify-content-center">
                        @foreach ($images as $key => $image)
                            <div class="col-4 d-flex flex-column justify-content-center">
                                <div class="creation_image_preview"
                                    style="background-image: url({{ $image->temporaryUrl() }});">
                                </div>
                                <button type="button" wire:click="removeImages({{ $key }})" class="btn text-center p-0">
                                    <i class="bi bi-x-circle text-danger fs-3"></i>
                                </button>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>

        <div class="col-4 w-100 my-5 d-flex justify-content-center">
            <button type="submit"
                class="btn button_insertionCreate">{{ __('ui.InsertionCreateFormLiveWire_InsertInsertion') }}</button>
        </div>
    </div>
    </div>

</form>
