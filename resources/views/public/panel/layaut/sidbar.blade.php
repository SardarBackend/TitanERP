<!-- <head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

</head> -->

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">پنل مدیریت</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <div>
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="/storage/{{request()->user()->image}}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">{{request()->user()->name}}</a>
          </div>
        </div>
@php
use Nwidart\Modules\Facades\Module;
$module= Module::find('Discount');
@endphp
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            {{-- <li class="nav-item has-treeview ">
              <a href="#" class="nav-link @if (Request::path()=='admin_PRODUCT' || Request::path()=='admin_PRODUCT/create' || Request::path()=='admin_blog' || Request::path()=='admin_blog/create' | Request::path()=='admin_category' || Request::path()=='admin_category/create' ||  Request::path()=='admin_comment' || Request::path()=='admin_blogCategory' || Request::path()=='admin_blogCategory/create' || Request::path()=='admin' || Request::path()=='user/create' )active @endif ">
                <!-- <i class="nav-icon fa fa-dashboard"></i> -->
                <i class="nav-icon fa fa-tachometer-alt"></i>

                <p>
                داشبورد
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('admin_PRODUCT.index')}}" class="nav-link @if (Request::path()=='admin_PRODUCT' || Request::path()=='admin_PRODUCT/create' ) active @endif ">
                    <i class="fa fa-box"></i>
                    <p>محصولات</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('admin_blog.index')}}" class="nav-link @if (Request::path()=='admin_blog' || Request::path()=='admin_blog/create' ) active @endif">
                    <i class="fa fa-file-text"></i>
                    <p>مقالات</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('admin_comment.index')}}" class="nav-link @if (Request::path()=='admin_comment'  ) active @endif">
                    <i class="fa fa-comments"></i>
                    <p>کامنت ها </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('admin_category.index')}}" class="nav-link @if (Request::path()=='admin_category' || Request::path()=='admin_category/create' ) active @endif">
                    <i class="fa fa-folder"></i>
                    <p>دسته بندی محصولات</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('admin_blogCategory.index')}}" class="nav-link @if (Request::path()=='admin_blogCategory' || Request::path()=='admin_blogCategory/create' ) active @endif">
                    <i class="fa fa-list"></i>
                    <p>دسته بندی مقالات</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('admin')}}" class="nav-link @if (Request::path()=='admin' || Request::path()=='user/create' ) active @endif
                  ">
                    <i class="fa fa-users"></i>
                    <p>کاربران</p>
                  </a>
                </li>
              </ul>
            </li> --}}

            <li class="nav-item has-treeview ">
                <a href="#" class="nav-link @if (Request::path()=='Charts' || Request::path()=='Users' || Request::path()=='Low-stock-products' )active @endif">
                <i class="nav-icon fa fa-tachometer-alt"></i>
                  <p>
                    داشبورد
                    <i class="right fa fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('Charts-admin')}}" class="nav-link @if (Request::path()=='Charts' ) active @endif ">
                    <i class="fa fa-chart-area nav-icon"></i>                      <p>نمودار ها</p>
                    </a>
                  </li>
                  <li class="nav-item has-treeview">
                      <a href="#" class="nav-link @if (Request::path()=='Users' || Request::path()=='Low-stock-products' ) active @endif ">
                      <i class="fa fa-wrench nav-icon"></i> <!-- ابزارها -->                        <p>
                          ویجت ها
                          <i class="fa fa-angle-left right"></i>
                        </p>
                      </a>
                      <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                          <a href="{{route('Users')}}" class="nav-link @if (Request::path()=='Users' ) active @endif">
                          <i class="fa fa-address-book nav-icon"></i>                            <p> لیست کاربران </p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="{{route('Low_stock_products')}}" class="nav-link @if (Request::path()=='Low-stock-products' ) active @endif">
                          <i class="fa fa-box-open nav-icon"></i>
                            <p>محصولات موجودی کم</p>
                          </a>
                        </li>

                        @if (request()->user()->can('مدیریت مقام ها'))
                        <li class="nav-item">
                        <a href="{{route('Roles.index')}}" class="nav-link @if (Request::path()=='ACL/Roles' || Request::path()=='ACL/Roles/create' ) active @endif ">
                            <!-- <i class="fa fa-user-shield"></i> -->
                            <i class="fa fa-id-badge"></i>

                                <p>مقام ها </p>
                            </a>
                        </li>
                        @endif
                        @if (request()->user()->can('تنظیم کمیسیون'))
                        <li class="nav-item">
                            <a href="{{route('Commission')}}" class="nav-link @if (Request::path()=='admin_comment'  ) active @endif">
                            <i class="fa fa-file-invoice"></i> <!-- آیکون صورتحساب -->
                            <p> تنظیم کمیسیون </p>
                            </a>
                        </li>
                        @endif
                      </ul>
                    </li>

                </ul>
              </li>


             <li class="nav-item has-treeview ">
              <a href="#" class="nav-link @if (Request::path()=='admin_PRODUCT' || Request::path()=='admin_PRODUCT/create' || Request::path()=='admin_category' || Request::path()=='admin_category/create')active @endif ">
              <i class="fa fa-warehouse"></i> <!-- انبار -->

                <p>
                مدیریت محصولات
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('admin_PRODUCT.index')}}" class="nav-link @if (Request::path()=='admin_PRODUCT' || Request::path()=='admin_PRODUCT/create' ) active @endif ">
                    <i class="fa fa-box"></i>
                    <p>محصولات</p>
                  </a>
                </li>
                @if (request()->user()->can('مدیریت دسته بندی محصولات'))
                <li class="nav-item">
                  <a href="{{route('admin_category.index')}}" class="nav-link @if (Request::path()=='admin_category' || Request::path()=='admin_category/create' ) active @endif">
                    <i class="fa fa-folder"></i>
                    <p>دسته بندی محصولات</p>
                  </a>
                </li>
                @endif
              </ul>
            </li>





            <li class="nav-item has-treeview ">
              <a href="#" class="nav-link @if ( Request::path()=='admin_blog' || Request::path()=='admin_blog/create'  || Request::path()=='admin_blogCategory' || Request::path()=='admin_blogCategory/create'  )active @endif ">
              <i class="fa fa-newspaper"></i>
                <p>
                مدیریت محتوا
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                @if (request()->user()->can('ایجاد و ویرایش مقاله'))
                <li class="nav-item">
                    <a href="{{route('admin_blog.index')}}" class="nav-link @if (Request::path()=='admin_blog' || Request::path()=='admin_blog/create' ) active @endif">
                        <i class="fa fa-file-text"></i>
                        <p>مقالات</p>
                    </a>
                </li>
                @endif
                @if (request()->user()->can('مدیریت دسته بندی مقالات'))
                <li class="nav-item">
                  <a href="{{route('admin_blogCategory.index')}}" class="nav-link @if (Request::path()=='admin_blogCategory' || Request::path()=='admin_blogCategory/create' ) active @endif">
                    <i class="fa fa-list"></i>
                    <p>دسته بندی مقالات</p>
                  </a>
                </li>
                @endif
              </ul>
            </li>





            <li class="nav-item has-treeview ">
                <a href="#" class="nav-link @if ( Request::path()=='admin_comment' ||  Request::path()=='massage'  )active @endif ">
                  <!-- <i class="nav-icon fa fa-dashboard"></i> -->
                  <i class="fa fa-comments"></i> <!-- گفتگو -->

                  <p>
                  نظرات و پیغام ها
                    <i class="right fa fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('massage')}}" class="nav-link @if (Request::path()=='massage' ) active @endif ">
                      <i class="fa fa-file-text"></i>
                      <p>پیغام ها</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('admin_comment.index')}}" class="nav-link @if (Request::path()=='admin_comment'  ) active @endif">
<i class="fa fa-paper-plane"></i> <!-- ارسال پیام -->
                    <p>کامنت ها </p>
                    </a>
                  </li>
                </ul>
              </li>


              <li class="nav-item has-treeview ">
                <a href="#" class="nav-link @if ( Request::path()=='admin/Logo' || Request::path()=='admin/Banner' || Request::path()=='admin/editor'  )active @endif ">
                <i class="fa fa-cog"></i> <!-- تنظیمات -->
                  <p>
                     تنظیمات سایت
                    <i class="right fa fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('logo' ) }}" class="nav-link @if (Request::path()=='admin/Logo' ) active @endif "">
                    <i class="fab fa-apple"></i> <!-- آیکون سیب اپل -->                      <p>تغییر لوگو</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('Banner.index')}}" class="nav-link @if (Request::path()=='admin/Banner'  ) active @endif">
                    <i class="fa fa-image"></i> <!-- تصویر بنر -->
                    <p> تغییر بنر </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('editor')}}" class="nav-link @if (Request::path()=='admin/editor'  ) active @endif">
                    <i class="fa fa-info-circle"></i> <!-- آیکون اطلاعات -->                      <p>  درباره ما </p>
                    </a>
                  </li>
                </ul>
              </li>



            <li class="nav-item has-treeview ">
              <a href="#" class="nav-link @if ( Request::path()=='EmailCampaign' || Request::path()=='MassageCampaign'   )active @endif ">
              <i class="fa fa-newspaper"></i>
                <p>
                کمپین های تبلیغاتی 
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                @if (request()->user()->can('ایجاد و ویرایش مقاله'))
                <li class="nav-item">
                    <a href="{{route('EmailCampaign')}}" class="nav-link @if (Request::path()=='EmailCampaign'  ) active @endif">
                        <i class="fa fa-file-text"></i>
                        <p>ایمیل</p>
                    </a>
                </li>
                @endif
                @if (request()->user()->can('مدیریت دسته بندی مقالات'))
                <li class="nav-item">
                  <a href="{{route('MassageCampaign')}}" class="nav-link @if (Request::path()=='MassageCampaign'  ) active @endif">
                    <i class="fa fa-list"></i>
                    <p>پیامک</p>
                  </a>
                </li>
                @endif
              </ul>
            </li>










        <li class="nav-item">
          <a href="{{route('admin_Orders.index')}}" class="nav-link @if (Request::path()=='admin_Orders' ) active @endif ">
            <i class="fa fa-shopping-cart"></i>
            <p>
             سفارشات
            </p>
          </a>
        </li>

        {{-- <li class="nav-item">
          <a href="{{route('massage')}}" class="nav-link @if (Request::path()=='admin/massage' ) active @endif ">
            <i class="fa fa-comment"></i>
            <p>
              پیغام ها
            </p>
          </a>
        </li> --}}
        <!-- </li> -->
        @if (request()->user()->can('مدیریت کد های تخفیف'))
        @if ($module->isEnabled())

        <li class="nav-item">
            <a href="{{route('discount.index')}}" class="nav-link @if (Request::path()=='discount' || Request::path()=='discount/create' ) active @endif ">
                <!-- <i class="fa fa-comment"></i> -->
                <i class="fa fa-tags"></i>
                <p>
                    کد های تخفیف
            </p>
          </a>
        </li>
        @else
        <li class="nav-item">
            <a href="{{ route(name: 'discount.able') }}" class="nav-link">
                <i class="fa fa-tags"></i>
                <p>
                    فعال سازی ماژول کد تخفیف
                </p>
            </a>
        </li>

        @endif
        @endif










          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
    </div>
    <!-- /.sidebar -->
  </aside>
