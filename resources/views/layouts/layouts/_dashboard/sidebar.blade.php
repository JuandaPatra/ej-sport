<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <a href="index.html" class="app-brand-link">
      <span class="app-brand-logo demo">

      </span>
      <span class="app-brand-text demo menu-text fw-bolder ms-2 text-uppercase">T'Bliss</span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item">
      <a href="{{ route('home') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Analytics">Dashboard</div>
      </a>
    </li>

    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Konten</span>
    </li>
    @can('delete-blog-posts')
    <li class="menu-item   {{ set_active(['slider.index','slider.create', 'slider.edit']) }} {{ set_open(['slider.index','slider.create', 'slider.edit']) }} ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon bx bx-carousel"></i>
        <div data-i18n="Layouts">Slider</div>
      </a>
      <ul class="menu-sub ">
        <li class="menu-item {{ set_active('slider.index') }}">
          <a href="{{ route('slider.index') }}" class="menu-link">
            <div data-i18n="Without menu">List</div>
          </a>
        </li>
        <li class="menu-item {{ set_active('slider.create') }}">
          <a href="{{ route('slider.create') }}" class="menu-link">
            <div data-i18n="Without navbar">Create</div>
          </a>
        </li>
      </ul>
    </li>
    @endcan

    <li class="menu-item  ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon bx bx bx-globe"></i>
        <div data-i18n="Layouts">Trip</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item ">
          <a href="{{ route('product.index') }}" class="menu-link">
            <div data-i18n="Without menu">List</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="{{ route('product.create') }}" class="menu-link">
            <div data-i18n="Without navbar">Create</div>
          </a>
        </li>
      </ul>
    </li>

    <li class="menu-item   {{ set_active(['slider.index','slider.create', 'slider.edit']) }} {{ set_open(['slider.index','slider.create', 'slider.edit']) }} ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon bx bx-carousel"></i>
        <div data-i18n="Layouts">Slider</div>
      </a>
      <ul class="menu-sub ">
        <li class="menu-item {{ set_active('slider.index') }}">
          <a href="{{ route('slider.index') }}" class="menu-link">
            <div data-i18n="Without menu">List</div>
          </a>
        </li>
        <li class="menu-item {{ set_active('slider.create') }}">
          <a href="{{ route('slider.create') }}" class="menu-link">
            <div data-i18n="Without navbar">Create</div>
          </a>
        </li>
      </ul>
    </li>


    <li class="menu-item  {{ set_active(['continent.index','continent.create', 'continent.edit']) }} {{ set_open(['continent.index','continent.create', 'continent.edit']) }}">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon bx bxs-compass"></i>
        <div data-i18n="Layouts">Destinasi</div>
      </a>
      <ul class="menu-sub ">
        <li class="menu-item {{ set_active('continent.index') }}">
          <a href="{{ route('continent.index') }}" class="menu-link">
            <div data-i18n="Without menu">List</div>
          </a>
        </li>
        <li class="menu-item {{ set_active('continent.create') }}">
          <a href="{{ route('continent.create') }}" class="menu-link">
            <div data-i18n="Without navbar">Create</div>
          </a>
        </li>
      </ul>
    </li>

    {{--<li class="menu-item  ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon bx bx-globe"></i>
        <div data-i18n="Layouts">Destinasi</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item ">
          <a href="{{ route('country.index') }}" class="menu-link">
    <div data-i18n="Without menu">List</div>
    </a>
    </li>
    <li class="menu-item">
      <a href="{{ route('country.create') }}" class="menu-link">
        <div data-i18n="Without navbar">Create</div>
      </a>
    </li>
  </ul>
  </li> --}}
  {{--<li class="menu-item  ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon bx bx-globe"></i>
        <div data-i18n="Layouts">Negara</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item ">
          <a href="{{ route('country.index') }}" class="menu-link">
  <div data-i18n="Without menu">List</div>
  </a>
  </li>
  <li class="menu-item">
    <a href="{{ route('country.create') }}" class="menu-link">
      <div data-i18n="Without navbar">Create</div>
    </a>
  </li>
  </ul>
  </li>--}}

  {{--<li class="menu-item  ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon bx bxs-business"></i>
        <div data-i18n="Layouts">Kota</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item ">
          <a href="{{ route('product.index') }}" class="menu-link">
  <div data-i18n="Without menu">List</div>
  </a>
  </li>
  <li class="menu-item">
    <a href="{{ route('product.create') }}" class="menu-link">
      <div data-i18n="Without navbar">Create</div>
    </a>
  </li>
  </ul>
  </li> --}}



  <li class="menu-item   {{ set_active(['activities.index','activities.create', 'activities.edit']) }} {{ set_open(['activities.index','activities.create', 'activities.edit']) }}">
    <a href="javascript:void(0);" class="menu-link menu-toggle">
      <i class="menu-icon bx bx-diamond"></i>
      <div data-i18n="Layouts">Hidden Gems/Aktivitas</div>
    </a>
    <ul class="menu-sub">
      <li class="menu-item {{ set_active('activities.index') }}">
        <a href="{{ route('activities.index') }}" class="menu-link">
          <div data-i18n="Without menu">List</div>
        </a>
      </li>
      <li class="menu-item {{ set_active('activities.create') }}">
        <a href="{{ route('activities.create') }}" class="menu-link">
          <div data-i18n="Without navbar">Create</div>
        </a>
      </li>
    </ul>
  </li>


  <li class="menu-item  {{ set_active(['hashtag.index','hashtag.create', 'hashtag.edit']) }} {{ set_open(['hashtag.index','hashtag.create', 'hashtag.edit']) }}">
    <a href="javascript:void(0);" class="menu-link menu-toggle">
      <i class="menu-icon bx bx-hash"></i>
      <div data-i18n="Layouts">Hashtag</div>
    </a>
    <ul class="menu-sub">
      <li class="menu-item {{ set_active('hashtag.index') }}">
        <a href="{{ route('hashtag.index') }}" class="menu-link">
          <div data-i18n="Without menu">List</div>
        </a>
      </li>
      <li class="menu-item {{ set_active('hashtag.create') }}">
        <a href="{{ route('hashtag.create') }}" class="menu-link">
          <div data-i18n="Without navbar">Create</div>
        </a>
      </li>
    </ul>
  </li>

  {{-- <li class="menu-item {{ set_active(['news.index','news.create', 'news.edit']) }} {{ set_open(['news.index','news.create', 'news.edit']) }}">
  <a href="javascript:void(0);" class="menu-link menu-toggle">
    <i class="menu-icon bx bx-news"></i>
    <div data-i18n="Layouts">News</div>
  </a>
  <ul class="menu-sub">
    <li class="menu-item {{ set_active('news.index') }}">
      <a href="{{ route('news.index') }}" class="menu-link">
        <div data-i18n="Without menu">List</div>
      </a>
    </li>
    <li class="menu-item {{ set_active('news.create') }}">
      <a href="{{ route('news.create') }}" class="menu-link">
        <div data-i18n="Without navbar">Create</div>
      </a>
    </li>
  </ul>
  </li> --}}


  <li class="menu-header small text-uppercase">
    <span class="menu-header-text">User</span>
  </li>
  <li class="menu-item  ">
    <a href="javascript:void(0);" class="menu-link menu-toggle">
      <i class="menu-icon bx bx bx-globe"></i>
      <div data-i18n="Layouts">Payment</div>
    </a>
    <ul class="menu-sub">
      <li class="menu-item ">
        <a href="{{ route('payments.index') }}" class="menu-link">
          <div data-i18n="Without menu">List</div>
        </a>
      </li>
      {{--
        <li class="menu-item">
          <a href="{{ route('product.create') }}" class="menu-link">
      <div data-i18n="Without navbar">Create</div>
      </a>
  </li>
  --}}
  </ul>
  </li>

  {{--
    <li class="menu-item ">
      <a href="{{ route('user-admin.index') }} " class="menu-link">
  <i class="menu-icon tf-icons bx bx-group"></i>
  <div data-i18n="Tables">User</div>
  </a>
  </li>
  --}}
  {{--
    <li class="menu-header small text-uppercase"><span class="menu-header-text">Settings</span></li>
    <li class="menu-item  ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-cog"></i>
        <div data-i18n="Layouts">Settings</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item ">
          <a href="" class="menu-link">
            <div data-i18n="Without menu">List</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="" class="menu-link">
            <div data-i18n="Without navbar">Create</div>
          </a>
        </li>
      </ul>
    </li>
  
    <li class="menu-item  ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bxs-category"></i>
        <div data-i18n="Layouts">Categories</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item ">
          <a href="{{ route('categories.index') }}" class="menu-link">
  <div data-i18n="Without menu">List</div>
  </a>
  </li>
  <li class="menu-item">
    <a href="{{ route('categories.create')}}" class="menu-link">
      <div data-i18n="Without navbar">Create</div>
    </a>
  </li>
  </ul>
  </li>

  <li class="menu-item  ">
    <a href="javascript:void(0);" class="menu-link menu-toggle">
      <i class="menu-icon tf-icons bx bxl-tiktok"></i>
      <div data-i18n="Layouts">Sosmed</div>
    </a>
    <ul class="menu-sub">
      <li class="menu-item ">
        <a href="{{ route('sosmed.index') }}" class="menu-link">
          <div data-i18n="Without menu">List</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{ route('sosmed.create') }}" class="menu-link">
          <div data-i18n="Without navbar">Create</div>
        </a>
      </li>
    </ul>
  </li>
  --}}

  <li class="menu-item  ">
    <a href="javascript:void(0);" class="menu-link menu-toggle">
      <i class="menu-icon tf-icons bx bx-group"></i>
      <div data-i18n="Layouts">User</div>
    </a>
    <ul class="menu-sub">
      <li class="menu-item ">
        <a href="{{ route('user-admin.index') }}" class="menu-link">
          <div data-i18n="Without menu">List</div>
        </a>
      </li>

      <li class="menu-item">
        <a href="{{ route('user-admin.create') }}" class="menu-link">
          <div data-i18n="Without navbar">Create</div>
        </a>
      </li>

    </ul>
  </li>

  <li class="menu-item  ">
    <a href="javascript:void(0);" class="menu-link menu-toggle">
      <i class="menu-icon tf-icons bx bx-group"></i>
      <div data-i18n="Layouts">Kebijakan</div>
    </a>
    <ul class="menu-sub">
      <li class="menu-item ">
        <a href="{{ route('policy.index') }}" class="menu-link">
          <div data-i18n="Without menu">Persyaratan Visa</div>
        </a>
      </li>

      <li class="menu-item">
        <a href="{{ route('policy.syarat') }}" class="menu-link">
          <div data-i18n="Without navbar">Syarat & Ketentuan</div>
        </a>
      </li>

    </ul>
  </li>

  <li class="menu-item  ">
    <a href="javascript:void(0);" class="menu-link menu-toggle">
      <i class="menu-icon tf-icons bx bx-group"></i>
      <div data-i18n="Layouts">Testimoni</div>
    </a>
    <ul class="menu-sub">
      <li class="menu-item ">
        <a href="{{ route('testimoni-trip.index') }}" class="menu-link">
          <div data-i18n="Without menu">List</div>
        </a>
      </li>

      <li class="menu-item">
        <a href="{{ route('testimoni-trip.create') }}" class="menu-link">
          <div data-i18n="Without navbar">Create</div>
        </a>
      </li>

    </ul>
  </li>


  <li class="menu-header small text-uppercase"><span class="menu-header-text">Email</span></li>

  {{--
    <li class="menu-item  ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-news"></i>
        <div data-i18n="Layouts">Template</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item ">
          <a href="" class="menu-link">
            <div data-i18n="Without menu">List</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="" class="menu-link">
            <div data-i18n="Without navbar">Create</div>
          </a>
        </li>
      </ul>
    </li>
    --}}
  <li class="menu-item active">
    <a href="{{ route('choose-hidden-gem.index') }}" class="menu-link">
      <i class="menu-icon bx bx-envelope"></i>
      <div data-i18n="Tables">Choose Hidden Gem </div>
    </a>
  </li>
  <li class="menu-item active">
    <a href="{{ route('contact') }}" class="menu-link">
      <i class="menu-icon bx bx-envelope"></i>
      <div data-i18n="Tables">Contact</div>
    </a>
  </li>
  <li class="menu-item">
    <a href="{{ route('contact.email') }}" class="menu-link">
      <i class="menu-icon bx bx-envelope"></i>
      <div data-i18n="Tables">Create Email </div>
    </a>
  </li>
  </ul>
</aside>
<!-- / Menu -->
<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>