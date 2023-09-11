<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <a href="index.html" class="app-brand-link">
      <span class="app-brand-logo demo">

      </span>
      <span class="app-brand-text demo menu-text fw-bolder ms-2 text-uppercase">EJS-CMS</span>
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


    <li class="menu-item  ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon bx bx bx-globe"></i>
        <div data-i18n="Layouts">Rider Vote</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item ">
          <a href="{{route('riders.index')}}" class="menu-link">
            <div data-i18n="Without menu">List</div>
          </a>
        </li>

      </ul>
    </li>


    <li class="menu-item  ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon bx bx bx-globe"></i>
        <div data-i18n="Layouts">Comment</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item ">
          <a href="{{route('comment.index')}}" class="menu-link">
            <div data-i18n="Without menu">List</div>
          </a>
        </li>

      </ul>
    </li>















    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">User</span>
    </li>
    <li class="menu-item  ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon bx bx bx-globe"></i>
        <div data-i18n="Layouts">User</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item ">
          <a href="{{route('users.index')}}" class="menu-link">
            <div data-i18n="Without menu">List</div>
          </a>
        </li>

      </ul>
    </li>










  </ul>
</aside>
<!-- / Menu -->
<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>