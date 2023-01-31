<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{route('admin-dashboard')}}" class="app-brand-link">
            <span class="app-brand-logo demo">
                e-Commerce
            </span>
        </a>
    </div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item active">
            <a href="{{route('admin-dashboard')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Pages</span>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Categories">Categories</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{route('admin-dashboard-allcategories')}}" class="menu-link">
                        <div data-i18n="All Categories">All Categories</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{route('admin-dashboard-createcategories')}}" class="menu-link">
                        <div data-i18n="Create Categories">Create Categories</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Sub Categories">Sub Categories</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{route('admin-dashboard-allsubcategories')}}" class="menu-link">
                        <div data-i18n="All Sub Categories">All SubCategories</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{route('admin-dashboard-createsubcategories')}}" class="menu-link">
                        <div data-i18n="Create Sub Categories">Create Sub Categories</div>
                    </a>
                </li>
            </ul>
        </li>


        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                <div data-i18n="Products">Products</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="pages-misc-error.html" class="menu-link">
                        <div data-i18n="All Products">All Products</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="pages-misc-error.html" class="menu-link">
                        <div data-i18n="Create Products">Create Products</div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
