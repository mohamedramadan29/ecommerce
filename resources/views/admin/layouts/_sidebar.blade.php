  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
      <div class="main-menu-content">
          <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
              <li class="nav-item {{ Route::is('dashboard.welcome') ? 'active' : '' }}"><a
                      href="{{ route('dashboard.welcome') }}"><i class="la la-home"></i><span class="menu-title"
                          data-i18n="nav.dash.main">الرئيسية</span></a>
              </li>
              @can('categories')
                  <li class="nav-item {{ Route::is('dashboard.categories.*') ? 'active' : '' }}"><a href="#"><i
                              class="la la-television"></i><span class="menu-title" data-i18n="nav.role.main"> الاقسام
                          </span><span class="float-right mr-2 badge badge-info badge-pill"> {{ $CategoryCount }} </span> </a>
                      <ul class="menu-content">
                          <li class="{{ Route::is('dashboard.categories.index') ? 'active' : '' }}">
                              <a class="menu-item" href="{{ route('dashboard.categories.index') }}" data-i18n="nav.role.index">
                                  جميع الاقسام  </a>
                          </li>
                          <li class="{{ Route::is('dashboard.categories.create') ? 'active' : '' }}">
                              <a class="menu-item" href="{{ route('dashboard.categories.create') }}"
                                  data-i18n="nav.templates.vert.classic_menu"> <i class="la la-plus"></i> <span
                                      class="menu-title"> اضافة قسم جديد  </a>
                          </li>
                      </ul>
                  </li>
              @endcan
              @can('brands')
                  <li class="nav-item {{ Route::is('dashboard.brands.*') ? 'active' : '' }}"><a href="#"><i
                              class="la la-television"></i><span class="menu-title" data-i18n="nav.role.main"> العلامات التجارية
                          </span> <span class="float-right mr-2 badge badge-info badge-pill"> {{ $BrandCount }} </span></a>
                      <ul class="menu-content">
                          <li class="{{ Route::is('dashboard.brands.index') ? 'active' : '' }}">
                              <a class="menu-item" href="{{ route('dashboard.brands.index') }}" data-i18n="nav.role.index">
                                  جميع العلامات التجارية   </a>
                          </li>

                      </ul>
                  </li>
              @endcan
              @can('coupons')
              <li class="nav-item {{ Route::is('dashboard.coupons.*') ? 'active' : '' }}"><a href="#"><i
                          class="la la-television"></i><span class="menu-title" data-i18n="nav.role.main"> الكوبونات
                      </span> <span class="float-right mr-2 badge badge-info badge-pill"> {{ $CouponCount }} </span></a>
                  <ul class="menu-content">
                    <li class="{{ Route::is('dashboard.coupons.index') ? 'active' : '' }}">
                          <a class="menu-item" href="{{ route('dashboard.coupons.index') }}" data-i18n="nav.role.index">
                              جميع الكوبونات   </a>
                      </li>

                  </ul>
              </li>
          @endcan
              @can('roles')
                  <li class="nav-item {{ Route::is('dashboard.roles.*') ? 'active' : '' }}"><a href="#"><i
                              class="la la-television"></i><span class="menu-title" data-i18n="nav.role.main"> الصلاحيات
                          </span></a>
                      <ul class="menu-content">
                          <li class="{{ Route::is('dashboard.roles.index') ? 'active' : '' }}">
                              <a class="menu-item" href="{{ route('dashboard.roles.index') }}" data-i18n="nav.role.index">
                                  جميع الصلاحيات </a>
                          </li>
                          <li class="{{ Route::is('dashboard.roles.create') ? 'active' : '' }}">
                              <a class="menu-item" href="{{ route('dashboard.roles.create') }}"
                                  data-i18n="nav.templates.vert.classic_menu"> <i class="la la-plus"></i> <span
                                      class="menu-title""> اضافة صلاحية </a>
                          </li>
                      </ul>
                  </li>
              @endcan

              @can('admins')
                  <li class="nav-item{{ Route::is('dashboard.admins.*') ? 'active' : '' }}"><a href="#"><i
                              class="la la-user"></i><span class="menu-title" data-i18n="nav.users.main"> الموظفين
                          </span><span class="float-right mr-2 badge badge-info badge-pill"> {{ $AdminCount }} </span></a>
                      <ul class="menu-content">
                          <li class="{{ Route::is('dashboard.admins.index') ? 'active' : '' }}">
                              <a class="menu-item" href="{{ route('dashboard.admins.index') }}"
                                  data-i18n="nav.users.user_profile"> الموظفين
                              </a>
                          </li>

                          <li class="{{ Route::is('dashboard.admins.create') ? 'active' : '' }}">
                              <a class="menu-item" href="{{ route('dashboard.admins.create') }}"
                                  data-i18n="nav.users.user_cards"> اضافة موظف </a>
                          </li>
                      </ul>
                  </li>
              @endcan
              @can('admins')
              <li class="nav-item{{ Route::is('dashboard.world.*') ? 'active' : '' }}"><a href="#"><i
                          class="la la-user"></i><span class="menu-title" data-i18n="nav.users.main"> الدول والشحن
                      </span></a>
                  <ul class="menu-content">
                      <li class="{{ Route::is('dashboard.world.countries') ? 'active' : '' }}">
                          <a class="menu-item" href="{{ route('dashboard.world.countries') }}"
                              data-i18n="nav.users.user_profile"> ادارة الدول
                          </a>
                      </li>
                  </ul>
              </li>
          @endcan
          </ul>
      </div>
  </div>
