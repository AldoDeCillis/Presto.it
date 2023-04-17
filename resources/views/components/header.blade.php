<div class="container-fluid container_custom_header_img">
    <div class="row h-100 align-items-start pt-4 justify-content-center a_font">
        <header class=" col-12 col-md-6">
            <div class="rounded-pill position-relative">
                <form action="{{ route('insertion.search') }}" method="GET" class="d-flex">
                    <input name="searched" type="search" class="form_control rounded-pill w-100 m_background text-white border-warning"
                    placeholder="{{ __('ui.searchBar') }}" id="headerSearchBar">
                    <button type="submit" class="btn btn-outline-warning search_btn_position rounded-pill px-5">
                        <i class="bi bi-search"></i> {{__('ui.header')}}</button>
                </form>
            </div>
            
        </header>
        {{ $slot }}
    </div>
</div>
