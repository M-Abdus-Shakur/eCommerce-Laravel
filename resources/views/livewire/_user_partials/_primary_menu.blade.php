<div class="primary-menu border-top">
    <div class="container">
        <nav id="navbar_main" class="mobile-offcanvas navbar navbar-expand-lg">
            <div class="offcanvas-header">
                <button class="btn-close float-end"></button>
                <h5 class="py-2">Navigation</h5>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item active"> <a class="nav-link" href="{{ route('user-home') }}">Home </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                        data-bs-toggle="dropdown">
                        Categories
                        <i class='bx bx-chevron-down'></i>
                    </a>
                    <ul class="dropdown-menu">


                        @foreach ($categories as $category)
                            <li><a class="dropdown-item dropdown-toggle dropdown-toggle-nocaret" href="#">
                                    {{ $category->category_name }}
                                    <i class='bx bx-chevron-right float-end'></i>
                                </a>
                                <ul class="submenu dropdown-menu">
                                    @foreach ($category->subcategory as $subcategory)
                                        <li>
                                            <a class="dropdown-item" href="shop-grid-left-sidebar.html">
                                                {{ $subcategory->subcategory_name }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
