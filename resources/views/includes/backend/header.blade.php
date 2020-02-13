<header id="m_header" class="m-grid__item    m-header " m-minimize-offset="200" m-minimize-mobile-offset="200">
	<div class="m-container m-container--fluid m-container--full-height">
		<div class="m-stack m-stack--ver m-stack--desktop">
			<!-- BEGIN: Brand -->
			<div class="m-stack__item m-brand  m-brand--skin-dark ">
				<div class="m-stack m-stack--ver m-stack--general">
					<div class="m-stack__item m-stack__item--middle m-brand__logo">
						<a href="{{route('home')}}" class="m-brand__logo-wrapper" style="font-size:20px;color:#FFF">
{{--							<img alt="" src="{{asset('assets/images/static/logo/logo_default_dark.png')}}" />--}}
                            Website
						</a>
					</div>
					<div class="m-stack__item m-stack__item--middle m-brand__tools">

						<!-- BEGIN: Left Aside Minimize Toggle -->
						<a href="javascript:void(0);" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block  ">
							<span></span>
						</a>

						<!-- END -->

						<!-- BEGIN: Responsive Aside Left Menu Toggler -->
						<a href="javascript:void(0);" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
							<span></span>
						</a>

						<!-- END -->

						<!-- BEGIN: Topbar Toggler -->
						<a id="m_aside_header_topbar_mobile_toggle" href="javascript:void(0);" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
							<i class="flaticon-more"></i>
						</a>

						<!-- BEGIN: Topbar Toggler -->
					</div>
				</div>
			</div>
			<!-- END: Brand -->
			<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">

				<!-- BEGIN: Horizontal Menu -->
				<button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark " id="m_aside_header_menu_mobile_close_btn">
					<i class="la la-close"></i>
				</button>
				<!-- END: Horizontal Menu -->
				<div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark "></div>
				<!-- BEGIN: Topbar -->
				<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general m-stack--fluid">
					<div class="m-stack__item m-topbar__nav-wrapper">
						<ul class="m-topbar__nav m-nav m-nav--inline">
							<li class="m-nav__item m-dropdown m-dropdown--large m-dropdown--arrow m-dropdown--align-center m-dropdown--mobile-full-width m-dropdown--skin-light	m-list-search m-list-search--skin-light" m-dropdown-toggle="click" id="m_quicksearch" m-quicksearch-mode="dropdown"
							 m-dropdown-persistent="1">
								<a href="javascript:void(0);" class="m-nav__link m-dropdown__toggle">
									<span class="m-nav__link-icon">
										<i class="flaticon-search-1"></i>
									</span>
								</a>
								<div class="m-dropdown__wrapper">
									<span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
									<div class="m-dropdown__inner ">
										<div class="m-dropdown__header">
											<form class="m-list-search__form">
												<div class="m-list-search__form-wrapper">
													<span class="m-list-search__form-input-wrapper">
														<input id="m_quicksearch_input" autocomplete="off" type="text" name="q" class="m-list-search__form-input" value="" placeholder="Search...">
													</span>
													<span class="m-list-search__form-icon-close" id="m_quicksearch_close">
														<i class="la la-remove"></i>
													</span>
												</div>
											</form>
										</div>
										<div class="m-dropdown__body">
											<div class="m-dropdown__scrollable m-scrollable" data-scrollable="true" data-height="300" data-mobile-height="200">
												<div class="m-dropdown__content">
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="m-nav__item m-topbar__notifications m-topbar__notifications--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-center 	m-dropdown--mobile-full-width" m-dropdown-toggle="click" m-dropdown-persistent="1">
								<a href="javascript:void(0);" class="m-nav__link m-dropdown__toggle" id="m_topbar_notification_icon">
									<span class="m-nav__link-icon">
										<i class="flaticon-alarm"></i>
									</span>
                                    <span class="m-nav__link-badge">
                                        <i class="fa fa-comment-alt custom-color position-relative noti-icon">
                                            <span class="noti-font">5</span>
                                        </i>
                                    </span>
								</a>
								<div class="m-dropdown__wrapper">
									<span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
									<div class="m-dropdown__inner">
										<div class="m-dropdown__header m--align-center" style="background: url('/assets/images/static/profile_back.jpg'); background-size: cover;">
											<span class="m-dropdown__header-title">9 New</span>
											<span class="m-dropdown__header-subtitle">User Notifications</span>
										</div>
										<div class="m-dropdown__body">
											<div class="m-dropdown__content">
                                                <div class="m-scrollable" >
                                                    <div class="m-list-timeline m-list-timeline--skin-light">
                                                        <div class="m-list-timeline__items">
                                                                <div class="" data-scrollable="true" data-max-height="200px">
                                                                    <div class="m-list-timeline__item" v-for="unread in unreads">
                                                                        <span class="m-list-timeline__badge -m-list-timeline__badge--state-success"></span>
                                                                        <span class="m-list-timeline__text">
                                                                            <a href="" class="text-black-50">
                                                                                Customer Purchased New Project
                                                                            </a>
                                                                        </span>
                                                                        <span class="m-list-timeline__time">3 mins ago</span>
                                                                    </div>
                                                                </div>
                                                                <div class="m-list-timeline__item">
																	<span class="m-list-timeline__text">
																		<a href="javascript:void(0);" class="text-center d-block">
																			No Notification
																		</a>
																	</span>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
								<a href="javascript:void(0);" class="m-nav__link m-dropdown__toggle">
									<span class="m-topbar__userpic">
										<img src="{{asset('assets/images/profile/default.jpg')}}" class="m--img-rounded m--marginless" alt="" />
									</span>
									<span class="m-topbar__username m--hide">Nick</span>
								</a>
								<div class="m-dropdown__wrapper">
									<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
									<div class="m-dropdown__inner">
										<div class="m-dropdown__header m--align-center" style="background: url('/assets/images/static/profile_back.jpg'); background-size: cover;">
											<div class="m-card-user m-card-user--skin-dark">
												<div class="m-card-user__pic">
													<img src="{{asset('assets/images/profile/default.jpg')}}" class="m--img-rounded m--marginless" alt="" />
												</div>
												<div class="m-card-user__details">
													<span class="m-card-user__name m--font-weight-500">{{auth()->user()->username}}</span>
													<a href="javascript:void(0);" class="m-card-user__email m--font-weight-300 m-link">{{auth()->user()->email}}</a>
												</div>
											</div>
										</div>
										<div class="m-dropdown__body">
											<div class="m-dropdown__content">
												<ul class="m-nav m-nav--skin-light">
													<li class="m-nav__section m--hide">
														<span class="m-nav__section-text">Section</span>
													</li>
                                                    <li class="m-nav__item">
                                                        <a href="#" class="btn m-btn--square mr-3 btn-outline-success btn-sm">
                                                            <span class="m-nav__link-text">My Profile</span>
                                                        </a>
                                                        <a href="javascript:void(0);" class="btn m-btn--square  btn-outline-danger btn-sm float-right" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                            <span class="m-nav__link-text">Log Out</span>
                                                        </a>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                    </li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</li>
                            <li id="m_quick_sidebar_toggle" class="m-nav__item">
                                <a href="javascript:void(0);" class="m-nav__link m-dropdown__toggle">
									<span class="m-nav__link-icon tutorial_icon">
										<i class="flaticon-grid-menu"></i>
									</span>
                                </a>
                            </li>
						</ul>
					</div>
				</div>

				<!-- END: Topbar -->
			</div>
		</div>
	</div>
</header>
