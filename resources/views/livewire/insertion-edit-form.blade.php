<div>
    <form wire:submit.prevent="update" enctype="multipart/form-data" class="text-white bg-transparent border rounded revisor_card_border p-2">

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
        @if (session('insertionUpdated'))
            <div class="alert alert-success">
                {{ session('insertionUpdated') }}
            </div>
        @endif
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="my-2 col-12 col-md-11">
                    <label for="InsertionName" class="form-label">{{ __('ui.InsertionEditFormLiveWire_Title') }}</label>
                    <input type="text" wire:model="name"
                        class="form-control form-control_insertionCreate @error('name') is-invalid @enderror"
                        id="InsertionName" placeholder=" {{ __('ui.InsertionEditFormLiveWire_Title_PL') }}">
                </div>
                <div class="my-2 col-12 col-md-11">
                    <label for="InsertionSubtitle" class="form-label">{{ __('ui.InsertionEditFormLiveWire_Subtitle') }}</label>
                    <input type="text" wire:model="subtitle"
                        class="form-control form-control_insertionCreate @error('subtitle') is-invalid @enderror"
                        id="InsertionSubtitle" placeholder=" {{ __('ui.InsertionEditFormLiveWire_Title') }}">
                </div>
    
                <div class="my-2 col-12 col-md-11">
                    <label for="InsertionPrice" class="form-label">{{ __('ui.InsertionEditFormLiveWire_Price') }}</label>
                    <input type="number" wire:model="price"
                        class="form-control form-control_insertionCreate @error('price') is-invalid @enderror"
                        id="InsertionPrice" placeholder="{{ __('ui.InsertionEditFormLiveWire_Price_PL') }}">
                </div>
                <div class="my-2 col-12 col-md-11">
                    <label for="InsertionDescription" class="form-label">{{ __('ui.InsertionEditFormLiveWire_Description') }}</label>
                    <textarea type="text" wire:model="description"
                        class="form-control form-control_insertionCreate @error('description') is-invalid @enderror"
                        id="InsertionDescription" placeholder="Descrizione qui"></textarea>
                </div>
            </div>

            <div class="my-2 col-12 col-md-6">
                <label for="InsertionCategory" class="form-label">{{ __('ui.InsertionEditFormLiveWire_Categories') }}</label>
                <select wire:model="category_id" class="form.control" id="InsertionCategory">
                    <option value=""></option>
                    @foreach ($categories as $category)
                    @switch(App::getLocale())
                    @case('en')
                        <option value="{{ $category->id }}">{{$category->en}}</option>
                    @break
                    @case('es')
                        <option value="{{ $category->id }}">{{$category->es}}</option>
                    @break
                    @case('it')
                        <option value="{{ $category->id }}">{{$category->it}}</option>    
                    @endswitch
                    @endforeach
                </select>
            </div>
            <div class="col-4 my-5 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary button_insertionCreate">{{ __('ui.InsertionEditFormLiveWire_Update_Button') }}</button>
            </div>
        </div>
        </div>
    
    </form>
</div>