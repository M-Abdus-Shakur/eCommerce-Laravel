<div class="header-wrapper">
    <div class="top-menu border-bottom">
        <div class="container">
            @include('livewire._user_partials._top_nav_bar')
        </div>
    </div>
    <div class="header-content pb-3 pb-md-0">
        <div class="container">
            <div class="row align-items-center">
                @include('livewire._user_partials._search_bar')
                @include('livewire._user_partials._cart_wish_fav')
            </div>
            <!--end row-->
        </div>
    </div>
        {{-- category , subcategory --}}
    @include('livewire._user_partials._primary_menu')
</div>
