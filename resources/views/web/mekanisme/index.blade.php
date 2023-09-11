@extends('web.index')

@section('container')


<header>
    <nav class="fixed  z-30 w-100 top-0 left-0 bg-[#9294A3] px-4 sm:px-4 py-4 xl:px-[70px] lg:pt-[25px] h-[70px] lg:h-[100px] navbar-top">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
            <a href="/" class="flex items-center">
                <img src="{{ asset('images/logo.png') }}" class="absolute top-[8px] left-[10px] lg:left-[60px] mr-3  h-[105px] lg:h-[150px]  logo-ejs" alt="Extrajoss Logo">
            </a>

            <li class="lg:hidden flex items-center ml-[30%]">
                <a href="" class="text-[#FF0000] leading-[20px] block pr-4 pl-3 font-head md:text-[18px] lg:text-[22px]" aria-current="page"><img src="{{ asset('images/logoejaudax.png') }}" class="h-[30px]" alt=""></a>
            </li>


            <a id="menu-hamburger" class="lg:hidden" data-drawer-target="drawer-example" data-drawer-show="drawer-example" aria-controls="drawer-example">
                <div class="space-y-2">
                    <span class="block w-8 h-0.5 bg-gray-600"></span>
                    <span class="block w-8 h-0.5 bg-gray-600"></span>
                    <span class="block w-5 h-0.5 bg-gray-600"></span>
                </div>
            </a>




            <div class=" w-full md:block md:w-auto pb-8 hidden lg:block" id="navbar-default">
                <ul class="flex flex-col px- md:flex-row md:space-x-2 lg:space-x-4 md:mt-0 ">
                    <li class="flex items-center">
                        <a href="/" class="text-black font-extrabold leading-[20px] block pr-4 pl-3 font-foobar md:text-[18px] lg:text-[16px]  navbar-button" aria-current="page">BERANDA</a>
                    </li>
                    <li class="flex items-center">
                        <a href="/mekanisme" class="text-black font-extrabold leading-[20px] block pr-4 pl-3 font-foobar md:text-[18px] lg:text-[16px] ml-[30%] mr-[75px] navbar-button" aria-current="page">MEKANISME</a>
                    </li>

                    @auth
                    <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="text-whit bg-transparent  font-medium rounded-lg text-sm px-1 py-1 text-center hidden lg:inline-flex items-center ml-[5%]  " type="button"><img class="w-7 h-7 rounded-full" src="https://ui-avatars.com/api/?name={{Auth::user()->name}}" alt="Rounded avatar">
                        <span class="p-1">Hi kak, {{Auth::user()->name}}</span></button>
                    <!-- Dropdown menu -->
                    <div id="dropdownHover" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">



                            <li class="px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <span class="inline-block mb-[-5px]"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out mr-1 align-middle">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12"></line>
                                        </svg></span> Keluar
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>

                    @endauth

                    @guest
                    <li class="relative">
                        <div class="kotak4 h-[36px] w-[250px]">
                        </div>
                        <div class="absolute top-[25px] left-[40px]">
                            @guest
                            <a class="text-white leading-[20px]  pr-4 pl-3 font-foobar md:text-[18px] lg:text-[16px] cursor-pointer modal-login-button button-reg" aria-current="page">Masuk</a>
                            <span class="list-none font-foobar text-white text-[16px] mx-2">|</span>
                            <a class="text-white leading-[20px] inline  pr-4 pl-3 font-foobar md:text-[18px] lg:text-[16px] cursor-pointer modal-register-button button-reg" aria-current="page">Daftar</a>
                            @endguest



                        </div>
                    </li>

                    @endguest

                    <li class="flex items-center">
                        <a href="https://extrajoss.co.id/pemenang" class="text-[#FF0000] leading-[20px] block pr-4 pl-3 font-head md:text-[18px] lg:text-[22px]" aria-current="page"><img src="{{ asset('images/logoejaudax.png') }}" class="h-[50px]" alt=""></a>
                    </li>


                </ul>
            </div>
        </div>
    </nav>
</header>



@include('web.components.presentational.login')

@include('web.components.presentational.register')
@include('web.components.presentational.drawer')

<section style="background-image: url(/images/bg-footer.png); background-repeat: no-repeat;
  background-size: cover;" class="hidden lg:block h-[100vh] pt-3">
    <div class="container-xl">

        <div class="flex justify-center font-foobar text-[40px] mt-[150px] mb-[44px] font-extrabold">
            <h1>MEKANISME VOTING</h1>
        </div>
        <div class="py-3 px-[80px] text-[18px] text-black">
            <ul class="list-decimal px-4">
                <li class="mb-3">Vote adalah bentuk dukungan terhadap program masing-masing Spartan</li>
                <li class="mb-3">Jumlah Vote adalah Jumlah produk SKU yang terjual</li>
                <li class="mb-3">Jumlah vote di update secara manual dengan metode jumlah produk yang terlihat di update per jam (9.00, 14.00, 20.00)</li>
                <li class="mb-3">1 Akun bisa melakukan Vote berkali-kali (tidak di kunci) karena yang di hitung adalah jumlah produk yang terjual</li>
            </ul>
        </div>
    </div>
</section>


<section style="background-image: url(/images/bg-mekanisme-mobile.jpg); background-repeat: no-repeat;
  background-size: cover;" class=" h-[1280px] pt-3 block lg:hidden">
    <div class="container-xl">

        <div class="flex justify-center font-foobar text-[25px] lg:text-[40px] mt-[150px] mb-[44px] font-extrabold">
            <h1>MEKANISME VOTING</h1>
        </div>
        <div class="py-3 px-[50px] text-[18px] text-black">
            <ul class="list-decimal px-4">
                <li class="mb-3">Vote adalah bentuk dukungan terhadap program masing-masing Spartan</li>
                <li class="mb-3">Jumlah Vote adalah Jumlah produk SKU yang terjual</li>
                <li class="mb-3">Jumlah vote di update secara manual dengan metode jumlah produk yang terlihat di update per jam (9.00, 14.00, 20.00)</li>
                <li class="mb-3">1 Akun bisa melakukan Vote berkali-kali (tidak di kunci) karena yang di hitung adalah jumlah produk yang terjual</li>
            </ul>
        </div>
    </div>
</section>







</div>
@endsection

@push('javascript-internal')
<script src="https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js" integrity="sha512-7vRrNQ5TnkhihLzA4Qd32yZP5A1oZvqmowU5OxgL612vmfd1eLgfgvB31J6Wdg8/tQqvikZdrNsZAj0WeONL/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {

        let base_url = window.location.origin;


        $('.register-button-to').on('click', function() {
            $('.modal-login').addClass('hidden')
            $('.modal-register').removeClass('hidden')
        })

        $('.login-button-to').on('click', function() {
            $('.modal-login').removeClass('hidden')
            $('.modal-register').addClass('hidden')
        })

        $('.modal-login-button').on('click', function() {
            $('.modal-login').removeClass('hidden')
        })
        $('.modal-login-button-close').on('click', function() {
            $('.modal-login').addClass('hidden')
        })

        $('.modal-register-button').on('click', function() {
            $('.modal-register').removeClass('hidden')
        })
        $('.modal-login-register-close').on('click', function() {
            $('.modal-register').addClass('hidden')
        })









    });
</script>
@endpush