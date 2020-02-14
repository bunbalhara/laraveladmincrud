
    <button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
        <i class="la la-close"></i>
    </button>
    <div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">

        <!-- BEGIN: Aside Menu -->
        <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
            <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
                <li class="m-menu__item {{ Request::is('admin/dashboard*') ? 'm-menu__item--active' : '' }}" aria-haspopup="true">
                    <a href="{{route('admin.dashboard')}}" class="m-menu__link ">
                        <i class="m-menu__link-icon flaticon-line-graph"></i>
                        <span class="m-menu__link-text">Dashboard</span>
                    </a>
                </li>
                <li class="m-menu__item " aria-haspopup="true">
                    <a href="{{route('admin.article.index')}}" class="m-menu__link ">
                        <i class="m-menu__link-icon fa fa-user"></i>
                        <span class="m-menu__link-text">Articles</span>
                    </a>
                </li>
                <li class="m-menu__item " aria-haspopup="true">
                    <a href="{{route('admin.blogpost.index')}}" class="m-menu__link ">
                        <i class="m-menu__link-icon fa fa-user"></i>
                        <span class="m-menu__link-text">Blog Posts</span>
                    </a>
                </li>
                <li class="m-menu__item {{ Request::is('admin/user*') ? 'm-menu__item--active' : '' }}" aria-haspopup="true">
                    <a href="{{route('admin.category.index')}}" class="m-menu__link ">
                        <i class="m-menu__link-icon fa fa-user"></i>
                        <span class="m-menu__link-text">Categories</span>
                    </a>
                </li>
                <li class="m-menu__item" aria-haspopup="true">
                    <a href="{{route('admin.coupon.index')}}" class="m-menu__link ">
                        <i class="m-menu__link-icon fa fa-user"></i>
                        <span class="m-menu__link-text">Coupons</span>
                    </a>
                </li>
                <li class="m-menu__item" aria-haspopup="true">
                    <a href="{{route('admin.fileupload.index')}}" class="m-menu__link ">
                        <i class="m-menu__link-icon fa fa-user"></i>
                        <span class="m-menu__link-text">File Uploads</span>
                    </a>
                </li>
                <li class="m-menu__item" aria-haspopup="true">
                    <a href="{{route('admin.matalot.index')}}" class="m-menu__link ">
                        <i class="m-menu__link-icon fa fa-user"></i>
                        <span class="m-menu__link-text">Matalot</span>
                    </a>
                </li>
                <li class="m-menu__item" aria-haspopup="true">
                    <a href="{{route('admin.nosim.index')}}" class="m-menu__link ">
                        <i class="m-menu__link-icon fa fa-user"></i>
                        <span class="m-menu__link-text">Nosim</span>
                    </a>
                </li>
                <li class="m-menu__item" aria-haspopup="true">
                    <a href="{{route('admin.nosimGroup.index')}}" class="m-menu__link ">
                        <i class="m-menu__link-icon fa fa-user"></i>
                        <span class="m-menu__link-text">Nosim Groups</span>
                    </a>
                </li>
                <li class="m-menu__item" aria-haspopup="true">
                    <a href="{{route('admin.question.index')}}" class="m-menu__link ">
                        <i class="m-menu__link-icon fa fa-user"></i>
                        <span class="m-menu__link-text">Questions</span>
                    </a>
                </li>
                <li class="m-menu__item" aria-haspopup="true">
                    <a href="{{route('admin.subcategory.index')}}" class="m-menu__link ">
                        <i class="m-menu__link-icon fa fa-user"></i>
                        <span class="m-menu__link-text">Subcategories</span>
                    </a>
                </li>
                <li class="m-menu__item" aria-haspopup="true">
                    <a href="{{route('admin.user.index')}}" class="m-menu__link ">
                        <i class="m-menu__link-icon fa fa-user"></i>
                        <span class="m-menu__link-text">Subscribers</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- END: Aside Menu -->
    </div>
