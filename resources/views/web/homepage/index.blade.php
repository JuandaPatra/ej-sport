@extends('web.index')

@section('container')


@if (Session::has('error'))
<div class="relative">
    <div class="absolute top-10 right-0 z-50">
        <div id="toast-danger" class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z" />
                </svg>
                <span class="sr-only">Error icon</span>
            </div>
            <div class="ml-3 text-sm font-normal">{{ Session::get('error') }}</div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-danger" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
    </div>
</div>

@endif


<section id="banner-header">
    <div class="relative">
        <div class="banner-slider">
            <div class="relative ">
                <div class="absolute top-[230px] lg:top-[120px] left-0 right-0 text-white">

                </div>

                <picture>
                    <source media="(min-width:1000px)" srcset="{{ asset('images/banner-desktop.png') }}">
                    <source media="(min-width:320px)" srcset="{{ asset('images/banner-mobile.png') }}">
                    <img src="{{ asset('images/banner-desktop.png') }}" alt="Flowers" class=" w-full lg:h-[810px] object-cover">
                </picture>

            </div>
        </div>
        <nav class="fixed  z-30 w-100 top-0 left-0 bg-transparent px-4 sm:px-4 py-4 xl:px-[70px] lg:pt-[25px] h-[70px] lg:h-[100px] navbar-top">
            <div class="container flex flex-wrap justify-between items-center mx-auto">
                <a href="" class="flex items-center">
                    <img src="{{ asset('images/logo.png') }}" class="absolute top-[8px] left-[10px] lg:left-[60px] mr-3  h-[105px] lg:h-[150px]  logo-ejs" alt="Extrajoss Logo">
                </a>

                <li class="lg:hidden flex items-center ml-[49%] lg:ml-[30%]">
                    <a href="" class="text-[#FF0000] leading-[20px] block pr-0 lg:pr-4 pl-3 font-head md:text-[18px] lg:text-[22px]" aria-current="page"><img src="{{ asset('images/logoejaudax.png') }}" class="h-[30px]" alt=""></a>
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
                        <li class="flex items-center ">
                            <a href="/" class="text-black font-extrabold leading-[20px] block pr-4 pl-3 font-foobar md:text-[18px] lg:text-[16px] hover:text-white navbar-button" aria-current="page">BERANDA</a>
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

    </div>


</section>


@if ($errors->any())
<div id="toast-danger" class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
    <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z" />
        </svg>
        <span class="sr-only">Error icon</span>
    </div>
    <div class="ml-3 text-sm font-normal">Periksa kembali isian anda</div>
    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-danger" aria-label="Close">
        <span class="sr-only">Close</span>
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
        </svg>
    </button>
</div>
@endif




@include('web.components.presentational.drawer')

@include('web.components.presentational.login')

@include('web.components.presentational.register')

<section class="hidden lg:block px-4 pb-[0px] pt-4" style="background-image: url(/images/bg-main-section.jpg); background-repeat: no-repeat;
  background-size: cover;">
    <div class="container-lg">

        <div class="flex justify-center  mt-[59px] text-[50px] ">
            <h1 class="hidden lg:block text-center w-[850px] text-[50px] font-foobar italic font-extrabold ">SPARTAN PARIS BREST PARIS RIDE FOR CHARITY</h1>
        </div>
        <div class="flex justify-center mt-[50px]">
            <h1 class="text-center w-[850px] text-[20px] lg:text-[35px] font-foobar italic font-extrabold ">VOTE & SUPPORT RIDER</h1>
        </div>



        <div class="hidden lg:flex justify-center mt-40 mx-3 lg:mx-5 ">
            <div class="relative mb-[300px] lg:mb-0">
                <div class="kotak6 h-[250px] w-[260px] lg:h-[350px] lg:w-[330px]  bg-black ">
                </div>
                <div class="absolute top-[-70px] left-[100px] lg:left-[155px]">
                    <img src="{{ asset('images/handika.png') }}" alt="">
                </div>
                <h3 class="absolute top-[110px] translate-x-[-50%] left-[50%] text-[#E7EA03] text-[20px] lg:text-[30px] font-foobar font-black tracking-wider pl-[3rem]">
                    HANDIKA
                </h3>
                <div class="absolute top-[150px] translate-x-[-50%] left-[50%] text-white text-[27px] lg:text-[40px] font-DelaGothic font-bold ">
                    <p class="break-words text-center">{{$riders[0]->vote}}</p>
                    <p class="pr-[2rem]">VOTES</p>

                </div>

                <a class=" absolute z-2 top-[300px] left-[40px] text-white text-[18px] lg:text-[25px] bg-[#E61E1E] py-2 px-3 shadow-2xl rounded-lg kotak3 donasi cursor-pointer hover:bg-[#7D0000]" data-donasi=1>PROGRAM PLAN</a>



                <a class=" absolute top-[340px] left-[-3px] text-black text-[18px] lg:text-[20px] bg-[#E7EA03] hover:bg-[#EAB703] font-foobar py-3 px-8 rounded-lg flex justify-between shadow-2xl kotak3 vote-button cursor-pointer" data-rider="HANDIKA">
                    <span>BUY FOR VOTE</span>
                    <span><img src="{{ asset('images/top.png') }}" alt="" class="mt-[2px] ml-[17px]"></span></a>
            </div>
            <div class="relative mb-[300px] lg:mb-0">
                <div class="kotak6 h-[250px] w-[260px] lg:h-[350px] lg:w-[330px]  bg-black ">
                </div>
                <div class="absolute top-[-70px] left-[100px] lg:left-[155px]">
                    <img src="{{ asset('images/munir.png') }}" alt="">
                </div>
                <h3 class="absolute top-[110px] translate-x-[-50%] left-[50%] text-[#E7EA03] text-[20px] lg:text-[30px] font-foobar font-black tracking-wider pl-[3rem]">
                    MUNIR
                </h3>
                <div class="absolute top-[150px] translate-x-[-50%] left-[50%] text-white text-[27px] lg:text-[40px] font-DelaGothic font-bold ">
                    <p class="break-words text-center">{{$riders[1]->vote}}</p>
                    <p class="pr-[2rem]">VOTES</p>

                </div>
                <a class=" absolute z-2 top-[300px] left-[40px] text-white text-[18px] lg:text-[25px] bg-[#E61E1E] py-2 px-3 shadow-2xl rounded-lg kotak3 donasi cursor-pointer hover:bg-[#7D0000]" data-donasi=3>PROGRAM PLAN</a>

                <a class=" absolute top-[340px] left-[-3px] text-black text-[18px] lg:text-[20px] bg-[#E7EA03] hover:bg-[#EAB703] font-foobar py-3 px-8 rounded-lg flex justify-between shadow-2xl kotak3 vote-button cursor-pointer" data-rider="MUNIR">
                    <span>BUY FOR VOTE</span>
                    <span><img src="{{ asset('images/top.png') }}" alt="" class="mt-[2px] ml-[17px]"></span></a>
            </div>
            <div class="relative mb-[300px] lg:mb-0">
                <div class="kotak6 h-[250px] w-[260px] lg:h-[350px] lg:w-[330px]  bg-black ">
                </div>
                <div class="absolute top-[-70px] left-[100px] lg:left-[155px]">
                    <img src="{{ asset('images/luckybw.png') }}" alt="">
                </div>
                <h3 class="absolute top-[110px] translate-x-[-50%] left-[50%] text-[#E7EA03] text-[20px] lg:text-[30px] font-foobar font-black tracking-wider pl-[3rem]">
                    LUCKYBW
                </h3>
                <div class="absolute top-[150px] translate-x-[-50%] left-[50%] text-white text-[27px] lg:text-[40px] font-DelaGothic font-bold ">
                    <p class="break-words text-center">{{$riders[2]->vote}}</p>
                    <p class="pr-[2rem]">VOTES</p>

                </div>
                <a class=" absolute z-2 top-[300px] left-[40px] text-white text-[18px] lg:text-[25px] bg-[#E61E1E] py-2 px-3 shadow-2xl rounded-lg kotak3 donasi cursor-pointer hover:bg-[#7D0000]" data-donasi=5>PROGRAM PLAN</a>

                <a class=" absolute top-[340px] left-[-3px] text-black text-[18px] lg:text-[20px] bg-[#E7EA03] hover:bg-[#EAB703] font-foobar py-3 px-8 rounded-lg flex justify-between shadow-2xl kotak3 vote-button cursor-pointer" data-rider="LUCKYBW">
                    <span>BUY FOR VOTE</span>
                    <span><img src="{{ asset('images/top.png') }}" alt="" class="mt-[2px] ml-[17px]"></span></a>
            </div>

        </div>



        <div class="container-xl">

            <div class="flex justify-center font-foobar text-[40px] mt-[150px] mb-[44px] font-extrabold">
                <h1>MEKANISME VOTING</h1>
            </div>


        </div>

        <div class="flex justify-center mt-[124px] pl-3 pr-0 lg:px-0 ">
            <div class="pt-3 pb-[59px] px-0 text-[16px] lg:text-[18px] text-black  w-[958px] border-b-[1px] border-black">
                <ul class="list-decimal px-4 font-Montserrat">
                    <li class="mb-3">Vote adalah bentuk dukungan terhadap program masing-masing Spartan</li>
                    <li class="mb-3">Jumlah Vote adalah Jumlah produk SKU yang terjual</li>
                    <li class="mb-3">Jumlah vote di update secara manual dengan metode jumlah produk yang terlihat di update per jam (9.00, 14.00, 20.00)</li>
                    <li class="mb-3">1 Akun bisa melakukan Vote berkali-kali (tidak di kunci) karena yang di hitung adalah jumlah produk yang terjual</li>
                </ul>
            </div>
        </div>

        <div class="flex justify-center mt-10">
            <h1 class="text-center text-[30px] lg:text-[50px] italic font-extrabold ">
                #EVERYONECAN
            </h1>

        </div>
        <div class="flex justify-center mt-[40px] px-3 lg:px-0">
            <p class=" text-center text-[16px] lg:text-[18px] w-[952px] font-Montserrat">
                Setelah berhasil menaklukan tantangan memecahkan rekor Jakarta - Bali Dalam waktu 4 hari, kini para SPARTAN ingin menaklukan dunia dengan tantangan “Paris Brest Paris” Event Audax yang diselenggarakan di Paris ini mempunyai jarak tempuh 1200 km hampir sama memang dengan Jakarta - Bali hanya saja kini jalur yang harus mereka lalui tanpa support ideal dari siapapun, hanya bergantung pada diri sendiri.
            </p>
        </div>

        <div class="flex justify-center mt-10 px-3 lg:px-0">
            <p class=" text-center text-[16px] lg:text-[18px] w-[952px] font-Montserrat">
                Next level memang melekat dalam jiwa para SPARTAN, tanpa support sistem yang ideal mereka akan bahu membahu menaklukan “Paris Brest Paris” Tim yang akan berjuang pun berbeda dengan tim Jakarta - Bali, kini SPARTAN hanya akan diperkuat sang captain Handika dan si roda gila Munir, juga ada member baru bernama Lucky yang siap melengkapi persenjataan para SPARTAN. Dengan tantangan harus finish dibawah 78 jam.

            </p>
        </div>
        <div class="flex justify-center mt-3 mb-0 px-3 lg:px-0">
            <p class=" text-center text-[16px] lg:text-[18px] w-[952px] font-Montserrat">
                Inilah cerita mereka tanpa rasa takut dan rasa lelah mereka akan membuktikan dan membawa harum nama Indonesia dalam EJ Sport “ Everyone Can”.
            </p>
        </div>


    </div>
</section>


<section class=" lg:hidden px-4 pb-[40px] pt-4" style="background-image: url(/images/bg-vote.png); background-repeat: no-repeat;
  background-size: cover;">
    <div class="container-lg">
        <div class="hidden lg:flex justify-center mt-[50px]">
            <h1 class="text-center w-[850px] text-[20px] lg:text-[35px] font-foobar italic font-extrabold ">VOTE & SUPPORT RIDER</h1>
        </div>

        <div class="relative">
            <div class="h-[550px] absolute top-[-350px] left-0 mt-[50px]">
                <div class=" text-center">
                    <h1 class=" text-[20px] lg:text-[35px] font-foobar italic font-extrabold ">VOTE & SUPPORT RIDER</h1>
                </div>



                <div class="flex flex-wrap justify-center lg:hidden mt-36 mx-0 lg:mx-5 ">
                    <div class="relative mb-[130px] lg:mb-0">
                        <div class="kotak6 h-[250px] w-[265px] lg:h-[350px] lg:w-[330px]  bg-black ">
                        </div>
                        <div class="absolute top-[-45px] left-[120px] lg:left-[155px]">
                            <img src="{{ asset('images/handika.png') }}" alt="" class=" h-[100px]">
                        </div>
                        <h3 class="absolute top-[70px]  translate-x-[-50%] left-[50%] text-[#E7EA03] text-[20px] lg:text-[30px] font-foobar font-black tracking-wider">
                            HANDIKA
                        </h3>

                        <div class="absolute top-[105px] translate-x-[-50%] left-[50%] text-white text-[25px] lg:text-[40px] font-DelaGothic font-bold ">
                            <p class="break-words text-center">{{$riders[0]->vote}}</p>
                            <p class="pr-[2rem]">VOTES</p>

                        </div>
                        <a class=" absolute z-2 top-[205px] left-[35px] text-white text-[18px] lg:text-[25px] bg-[#E61E1E] py-2 px-3 shadow-2xl rounded-lg kotak3 donasi" data-donasi="1">PROGRAM PLAN</a>

                        <a class=" absolute top-[240px] left-[0px] text-black text-[16px] lg:text-[30px] bg-[#E7EA03] hover:bg-[#EAB703] font-foobar p-[20px] rounded-lg flex justify-between shadow-2xl kotak3 vote-button cursor-pointer" data-rider="HANDIKA">
                            <span>BUY FOR VOTE</span>
                            <span><img src="{{ asset('images/top.png') }}" alt="" class="mt-[0px] ml-[17px]"></span></a>
                    </div>

                    <div class="relative mb-[130px] lg:mb-0">
                        <div class="kotak6 h-[250px] w-[265px] lg:h-[350px] lg:w-[330px]  bg-black ">
                        </div>
                        <div class="absolute top-[-45px] left-[120px] lg:left-[155px]">
                            <img src="{{ asset('images/munir.png') }}" alt="" class=" h-[100px]">
                        </div>
                        <h3 class="absolute top-[70px]  translate-x-[-50%] left-[50%] text-[#E7EA03] text-[20px] lg:text-[30px] font-foobar font-black tracking-wider">
                            MUNIR
                        </h3>

                        <div class="absolute top-[105px] translate-x-[-50%] left-[50%] text-white text-[25px] lg:text-[40px] font-DelaGothic font-bold ">
                            <p class="break-words text-center">{{$riders[1]->vote}}</p>
                            <p class="pr-[2rem]">VOTES</p>

                        </div>
                        <a class=" absolute z-2 top-[205px] left-[35px] text-white text-[18px] lg:text-[25px] bg-[#E61E1E] py-2 px-3 shadow-2xl rounded-lg kotak3 donasi" data-donasi="3">PROGRAM PLAN</a>

                        <a class=" absolute top-[240px] left-[0px] text-black text-[16px] lg:text-[30px] bg-[#E7EA03] hover:bg-[#EAB703] font-foobar p-[20px] rounded-lg flex justify-between shadow-2xl kotak3 vote-button cursor-pointer" data-rider="MUNIR">
                            <span>BUY FOR VOTE</span>
                            <span><img src="{{ asset('images/top.png') }}" alt="" class="mt-[0px] ml-[17px]"></span></a>
                    </div>

                    <div class="relative mb-[130px] lg:mb-0">
                        <div class="kotak6 h-[250px] w-[265px] lg:h-[350px] lg:w-[330px]  bg-black ">
                        </div>
                        <div class="absolute top-[-45px] left-[120px] lg:left-[155px]">
                            <img src="{{ asset('images/luckybw.png') }}" alt="" class=" h-[100px]">
                        </div>
                        <h3 class="absolute top-[70px]  translate-x-[-50%] left-[50%] text-[#E7EA03] text-[20px] lg:text-[30px] font-foobar font-black tracking-wider">
                            LUCKYBW
                        </h3>

                        <div class="absolute top-[105px] translate-x-[-50%] left-[50%] text-white text-[25px] lg:text-[40px] font-DelaGothic font-bold ">
                            <p class="break-words text-center">{{$riders[2]->vote}}</p>
                            <p class="pr-[2rem]">VOTES</p>

                        </div>
                        <a class=" absolute z-2 top-[205px] left-[35px] text-white text-[18px] lg:text-[25px] bg-[#E61E1E] py-2 px-3 shadow-2xl rounded-lg kotak3 donasi" data-donasi="5">PROGRAM PLAN</a>

                        <a class=" absolute top-[240px] left-[0px] text-black text-[16px] lg:text-[30px] bg-[#E7EA03] hover:bg-[#EAB703] font-foobar p-[20px] rounded-lg flex justify-between shadow-2xl kotak3 vote-button cursor-pointer" data-rider="LUCKYBW">
                            <span>BUY FOR VOTE</span>
                            <span><img src="{{ asset('images/top.png') }}" alt="" class="mt-[0px] ml-[17px]"></span></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="h-[800px] mb-[350px]">
        </div>

        <div class="container-xl">

            <div class="flex justify-center font-foobar text-[40px] mt-[150px] mb-[44px] font-extrabold">
                <h1>MEKANISME VOTING</h1>
            </div>


        </div>

        <div class="flex justify-center mt-[40px] pl-3 pr-0 lg:px-0 ">
            <div class="pt-3 pb-[59px] px-0 text-[16px] lg:text-[18px] text-black  w-[958px] border-b-[1px] border-black">
                <ul class="list-decimal px-4 font-Montserrat">
                    <li class="mb-3">Vote adalah bentuk dukungan terhadap program masing-masing Spartan</li>
                    <li class="mb-3">Jumlah Vote adalah Jumlah produk SKU yang terjual</li>
                    <li class="mb-3">Jumlah vote di update secara manual dengan metode jumlah produk yang terlihat di update per jam (9.00, 14.00, 20.00)</li>
                    <li class="mb-3">1 Akun bisa melakukan Vote berkali-kali (tidak di kunci) karena yang di hitung adalah jumlah produk yang terjual</li>
                </ul>
            </div>
        </div>

        <div class="flex justify-center mt-10">
            <h1 class="text-center text-[30px] lg:text-[50px] italic font-extrabold ">
                #EVERYONECAN
            </h1>

        </div>

        <div class="flex justify-center mt-[59px] px-8 lg:px-0">
            <p class=" text-center text-[16px] lg:text-[18px] w-[952px] font-Montserrat">
                Setelah berhasil menaklukan tantangan memecahkan rekor Jakarta - Bali Dalam waktu 4 hari, kini para SPARTAN ingin menaklukan dunia dengan tantangan “Paris Brest Paris” Event Audax yang diselenggarakan di Paris ini mempunyai jarak tempuh 1200 km hampir sama memang dengan Jakarta - Bali hanya saja kini jalur yang harus mereka lalui tanpa support ideal dari siapapun, hanya bergantung pada diri sendiri.
            </p>
        </div>

        <div class="flex justify-center mt-10 px-8 lg:px-0">
            <p class=" text-center text-[16px] lg:text-[18px] w-[952px] font-Montserrat">
                Next level memang melekat dalam jiwa para SPARTAN, tanpa support sistem yang ideal mereka akan bahu membahu menaklukan “Paris Brest Paris” Tim yang akan berjuang pun berbeda dengan tim Jakarta - Bali, kini SPARTAN hanya akan diperkuat sang captain Handika dan si roda gila Munir, juga ada member baru bernama Lucky yang siap melengkapi persenjataan para SPARTAN. Dengan tantangan harus finish dibawah 78 jam.

            </p>
        </div>
        <div class="flex justify-center mt-3 mb-[5rem] lg:mb-40 px-8 lg:px-0">
            <p class=" text-center text-[16px] lg:text-[18px] w-[952px] font-Montserrat">
                Inilah cerita mereka tanpa rasa takut dan rasa lelah mereka akan membuktikan dan membawa harum nama Indonesia dalam EJ Sport “ Everyone Can”.
            </p>
        </div>

        <div class="flex justify-center mt-3">
            <h1 class="text-center text-[30px] lg:text-[50px] italic font-extrabold ">
                #EVERYONECAN
            </h1>

        </div>
    </div>
</section>



<section class="bg-[#F0F0F0] pt-[60px] absolute w-full z-[-3]">

    <div class="container-xl h-auto bg-white pt-[50px] lg:pt-[100px] rounded-none lg:rounded-2xl w-[100%] lg:w-[70%]">
        <div class="hidden lg:flex justify-center mb-[30px]">
            <h1 class=" font-foobar text-[29px] text-center lg:text-start ">
                Kasih dukungan ke tim SPARTAN
            </h1>
        </div>
        <div class=" lg:hidden justify-center mb-[30px]">
            <h1 class=" font-foobar text-[29px] text-center lg:text-start ">
                Kasih dukungan ke <br> tim SPARTAN
            </h1>
        </div>

        <div class="px-2 py-4 bg-white  mx-auto max-w-2xl sm:px-5 hover:border-blue-200">

            <div class="relative">

                <div class="absolute inset-y-0 right-0 flex items-center pr-3.5 cursor-pointer post-comment">
                    <a>
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                            <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                            <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                        </svg>
                    </a>
                </div>
                <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                    @guest
                    <img alt="profil" src="https://ui-avatars.com/api/?name=Anonymous" class="object-cover w-8 h-8 mx-auto rounded-full">
                    @endguest
                    @auth
                    <img alt="profil" src="https://ui-avatars.com/api/?name={{Auth::user()->name}}" class="object-cover w-8 h-8 mx-auto rounded-full">
                    @endauth
                </div>
                <input type="text" id="comment" name="comment" class="bg-gray-50 border border-blue-400 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-[102%] h-16 pl-16 p-2.5 comment-box  " placeholder="tulis dukungan mu disini">
            </div>

            <div class="mt-4 my-[-2rem] lg:my-4 ">
                <div class="flex justify-end">
                    <small class="text-base font-bold text-gray-700 ml-1 comment-count">{{$commentCount}} comments</small>
                </div>
                <div class="flex flex-col mt-4 comment-column  overflow-y-auto">
                    @foreach($comments as $comment)
                    <div class="flex flex-row mx-auto justify-between px-1 py-1 mb-[30px] ">
                        <div class="flex mr-2">
                            <div class="items-center justify-center w-12 h-12 mx-auto">
                                <img alt="profil" src="https://ui-avatars.com/api/?name={{$comment->user->name}}" class="object-cover w-12 h-12 mx-auto rounded-full">
                            </div>
                        </div>
                        <div class="flex-1 pl-1 w-[550px]">
                            <div class=" text-[20px] font-semibold text-gray-600">{{$comment->user->name}}<span class="text-sm font-normal text-gray-500"> {{$comment->time}}</span>
                            </div>
                            <div class="text-sm text-gray-600">
                                {{$comment->comments}}
                            </div>



                        </div>
                    </div>

                    @endforeach

                </div>
                <div class="flex justify-center">
                    <a class=" block w-1/2  text-white bg-[#E61E1E]  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-8 lg:px-5 py-2.5 mt-16 mb-10 text-center loadMoreButton">LOAD MORE</a>
                </div>

            </div>
        </div>

    </div>

    <div class="relative">
        <div class=" absolute bottom-[-100px] lg:bottom-[-260px]  z-[-3] w-[100%]">

            <img src="{{ asset('images/bg-footer.png') }}" class="w-[100%]" alt="">
        </div>

    </div>

</section>

<!-- F -->




<!-- modal 1 -->
<div class="">
    <div id="defaultModal" tabindex="-1" aria-hidden="true" class="hidden fixed top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full justify-center flex items-center modal-1 bg-[#0008]" data-modalPopup=1>
        <div class="relative w-full max-w-5xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white  shadow dark:bg-gray-700">
                <!-- Modal header -->

                <div class="relative">
                    <div class="absolute z-2 left-[-35px] top-[-100px]">
                        <img src="{{ asset('images/header-panti.png') }}" alt="" class="mt-[0px] ml-[17px]">
                    </div>

                </div>
                <div class="flex items-start justify-between p-4  dark:border-gray-600">
                    <button type="button" class="z-30 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white donasi-modal-close-1" data-modal-hide="defaultModal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="flex justify-center px-[46px] lg:px-[80px] mx-3 lg:mx-48 mb-16 font-Montserrat text-[14px] lg:text-[16px] text-center">
                    <p>Badan orang bisa dirantai, tetapi semangat merdeka tidak dapat diikat.  Dalam rangka menyambut hari kemerdekaan Indonesia yang ke 78, saya ingin mengajak semua teman teman penggiat olahraga untuk mendukung saya bersepeda sejauh 1.200 km dalam event Audax club parisien dari Paris menuju Brest dan kembali lagi ke Paris. Terus dukung saya, karena dukungan kalian adalah bara yang mengobarkan semangat saya menyelesaikan setiap kayuhan ini. Setiap kayuhan ini akan saya sumbangkan ke panti asuhan. Saya tidak bisa berjuang sendiri, mari sebarkan kebaikan untuk menjadi bagian perjuangan untuk adik-adik Yatim Piatu. Indonesia bisa, Indonesia mendunia #EveryoneCan #GoExtraLevel
                    </p>
                </div>
                <div class="relative">
                    <div class="absolute z-20 top-[-300px] lg:top-[-200px]  w-full">
                        <div class="flex justify-end mx-[5px] lg:mx-[10px]">
                            <div> <img src="{{ asset('images/kanan.png') }}" alt="" class="kanan1"></div>
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->

                <div class="flex items-start justify-between p-4  dark:border-gray-600">


                    <button type="button" class="hidden text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto  justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="relative">
                    <div class="absolute left-0 bottom-0">
                        <img src="{{ asset('images/flag.png') }}" alt="" class="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal 2 -->
<div class="">
    <div id="defaultModal2" tabindex="-1" aria-hidden="true" class="hidden fixed top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full justify-center items-center bg-[#0008] flex modal-2" data-modalPopup=2>
        <div class="relative w-full max-w-5xl max-h-full mt-[144px] lg:mt-0">
            <!-- Modal content -->
            <div class="relative bg-white  shadow dark:bg-gray-700">
                <!-- Modal header -->

                <div class="relative">
                    <div class="absolute z-2 left-[-35px] top-[-100px]">
                        <img src="{{ asset('images/header-panti.png') }}" alt="" class="mt-[0px] ml-[17px]">
                    </div>

                </div>
                <div class="flex items-start justify-between p-4  dark:border-gray-600">
                    <button type="button" class="z-30 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white donasi-modal-close-2" data-modal-hide="defaultModal2">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="flex flex-col-reverse lg:flex-row px-[46px] lg:px-[80px]  justify-between mx-3 lg:mx-32 mb-16 font-Montserrat text-[14px] text-center">
                    <div class=" w-auto lg:w-[450px]">
                        <p class="mb-3">
                            Nisa menjadi yatim saat berumur 9 tahun, sudah 2 tahun berjuang untuk hidup nya dan nenek tercinta yang dirawat seorang diri. Kondisi nenek Nisa yang berumur 72 tahun sudah tidak berdaya lagi dan sekarang sakit-sakitan.
                        </p>
                        <p>
                            Dengan menjual buras dan kerupuk Nisa bertahan hidup.  Sebelum bersekolah Nisa merawat dan mnegurus keperluan nenek nya terlebih dahulu. Setelah pulang sekolah Nisa akan mulai berjualan buras dan kerupuk dengan berjalan kaki cukup jauh dan sering kali berjualan sampai larut malam. Upah yang didapat dari berjualan sering kali tidak bisa mecukupi kebutuhan makan Nisa dan nenek, apalagi saat ada kebutuhan untuk beli obat - obatan nenek. Dan Nisa rela menahan lapar agar kebutuhan nenek nya dan kebutuhan sekolah Nisa tercukupi. Kasih sayang Nisa kepada neneknya dan mengejar cita-cita Nisa menjadi sumber semangat untuk berjuang di pahit nya kehidupan.

                        </p>
                    </div>
                    <div class=" mx-auto pt-[20px] pl-[20px]">

                        <img src="{{ asset('images/donasinisa.png') }}" alt="" class="">

                        <div>
                            <span>Sumber:</span><a href="https://donasionline.id/nisayatimry">https://donasionline.id/nisayatimry</a>
                        </div>

                    </div>

                </div>
                <div class="relative">
                    <div class="absolute z-20 top-[-300px] lg:top-[-200px]  w-full">
                        <div class="flex justify-start mx-[5px] lg:mx-[10px]">
                            <div> <img src="{{ asset('images/kiri.png') }}" alt="" class="kiri2"></div>
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-start justify-between p-4  dark:border-gray-600">


                    <button type="button" class="hidden text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto  justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="relative">
                    <div class="absolute left-0 bottom-0">
                        <img src="{{ asset('images/flag.png') }}" alt="" class="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- modal 3 -->
<div class="">
    <div id="defaultModal" tabindex="-1" aria-hidden="true" class="hidden fixed top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full justify-center items-center bg-[#0008] flex modal-3" data-modalPopup=3>
        <div class="relative w-full max-w-5xl max-h-full mt-[144px] lg:mt-0">
            <!-- Modal content -->
            <div class="relative bg-white  shadow dark:bg-gray-700">
                <!-- Modal header -->

                <div class="relative">
                    <div class="absolute z-2 left-[-35px] top-[-100px]">
                        <img src="{{ asset('images/header-kidnutrition.png') }}" alt="" class="mt-[0px] ml-[17px]">
                    </div>

                </div>
                <div class="flex items-start justify-between p-4  dark:border-gray-600">
                    <button type="button" class="z-30 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white donasi-modal-close-3" data-modal-hide="defaultModal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="flex justify-center mx-3 lg:mx-48 px-[46px] lg:px-[80px] mb-16 font-Montserrat text-[16px] text-center">
                    <p>Sebagai seorang pesepeda muda, saya memiliki banyak kesempatan untuk mengikuti banyak kompetisi untuk mengembangkan potensi saya. Dalam semangat kemerdekaan Indonesia yang ke-78 ini, saya ingin mendedikasikan diri saya untuk dapat finish di Paris-Brest-Paris untuk mengharumkan nama Bangsa Indonesia. Dalam ajang ini saya juga akan menjalankan misi untuk memberikan bantuan makanan bergizi untuk anak-anak yatim piatu. Dalam setiap kayuhan saya sejauh 1.200 km bertujuan untuk sehatkan anak Indonesia. Ayo dukung saya dalam penyelesaian misi ini sebagai bentuk kontribusi dalam membantu adik-adik yatim piatu tercinta agar mendapatkan kehidupan yang lebih baik. Indonesia bisa, Indonesia mendunia #EveryoneCan #GoExtraLevel

                    </p>
                </div>
                <div class="relative">
                    <div class="absolute z-20 top-[-300px] lg:top-[-200px]  w-full">
                        <div class="flex justify-end mx-[5px] lg:mx-[10px]">
                            <div> <img src="{{ asset('images/kanan.png') }}" alt="" class="kanan3"></div>
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-start justify-between p-4  dark:border-gray-600">


                    <button type="button" class="hidden text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto  justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="relative">
                    <div class="absolute left-0 bottom-0">
                        <img src="{{ asset('images/flag.png') }}" alt="" class="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal 4 -->
<div class="">
    <div id="defaultModal" tabindex="-1" aria-hidden="true" class="hidden fixed top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full justify-center items-center bg-[#0008] flex modal-4" data-modalPopup=4>
        <div class="relative w-full max-w-5xl max-h-full mt-[144px] lg:mt-0">
            <!-- Modal content -->
            <div class="relative bg-white  shadow dark:bg-gray-700">
                <!-- Modal header -->

                <div class="relative">
                    <div class="absolute z-2 left-[-35px] top-[-100px]">
                        <img src="{{ asset('images/header-kidnutrition.png') }}" alt="" class="mt-[0px] ml-[17px]">
                    </div>

                </div>
                <div class="flex items-start justify-between p-4  dark:border-gray-600">
                    <button type="button" class="z-30 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white donasi-modal-close-4" data-modal-hide="defaultModal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="flex flex-col-reverse lg:flex-row justify-between mx-3  lg:mx-32 px-[46px] lg:px-[80px] mb-16 font-Montserrat text-[14px] text-center">
                    <div class="w-auto lg:w-[450px] pt-[30px]">
                        <p class="mb-3">
                            Melihat adik-adik kecil ini kekurangan kebutuhan dasar mereka membuat pilu hati. Banyak dari adik-adik ini ditelantarkan orang tua nya dan beberapa dari mereka sudah tidak lagi memiliki orang tua. Di sebuah panti asuhan sederhana yang ala kadar nya, adik - adik ini dibesarkan. 
                        </p>
                        <p>
                            Mari kita ganti nasi kecap mereka dengan makanan yang layak. Dengan memberikan kebutuhan dasar berupa makanan yang bergizi agar adik - adik bisa tumbuh seperti anak - anak lain nya. Besar harapan kepada  adik - adik kecil ini tumbuh besar menjadi generasi penerus dan harapan bangsa.
                        </p>
                    </div>
                    <div class=" mx-auto lg:mx-0 pt-[20px] pl-0 lg:pl-[20px]">

                        <img src="{{ asset('images/donasikidnutrition.png') }}" alt="" class="">

                        <div>
                            <span>Sumber:</span><a href="https://kitabisa.com/campaign/kitabantugiz"> https://kitabisa.com/campaign/kitabantugiz</a>
                        </div>

                    </div>

                </div>
                <div class="relative">
                    <div class="absolute z-20 top-[-200px]  w-full">
                        <div class="flex justify-start mx-[5px] lg:mx-[10px]">
                            <div> <img src="{{ asset('images/kiri.png') }}" alt="" class="kiri4"></div>
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-start justify-between p-4  dark:border-gray-600">


                    <button type="button" class="hidden text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto  justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="relative">
                    <div class="absolute left-0 bottom-0">
                        <img src="{{ asset('images/flag.png') }}" alt="" class="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal 5 -->
<div class="">
    <div id="defaultModal" tabindex="-1" aria-hidden="true" class="hidden fixed top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full justify-center items-center bg-[#0008] flex modal-5" data-modalPopup=5>
        <div class="relative w-full max-w-5xl max-h-full mt-[144px] lg:mt-0">
            <!-- Modal content -->
            <div class="relative bg-white  shadow dark:bg-gray-700">
                <!-- Modal header -->

                <div class="relative">
                    <div class="absolute z-2 left-[-35px] top-[-100px]">
                        <img src="{{ asset('images/header-pani.png') }}" alt="" class="mt-[0px] ml-[17px]">
                    </div>

                </div>
                <div class="flex items-start justify-between p-4  dark:border-gray-600">
                    <button type="button" class="z-30 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white donasi-modal-close-5" data-modal-hide="defaultModal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="flex justify-center mx-48 mb-16 font-Montserrat text-[16px] text-center">
                    <p>Pemuda adalah tonggak bagi kemajuan dan pembangunan bangsa, melihat semangat Pani dalam memperjuangkan pendidikan merupakan wujud nyata dari semangat pemuda harapan bangsa, dalam rangka menyambut Hari Kemerdekaan Indonesia yg ke 78, saya ingin mengajak teman-teman untuk mendukung Pani dalam tiap kayuhan saya sepanjang 1.200 km dalam event Audax dari Paris menuju Brest dan kembali lagi ke Paris. Indonesia bisa, Indonesia mendunia #EveryoneCan #GoExtraLevel

                    </p>
                </div>
                <div class="relative">
                    <div class="absolute z-20 top-[-300px] lg:top-[-200px]  w-full">
                        <div class="flex justify-end mx-[5px] lg:mx-[10px]">
                            <div> <img src="{{ asset('images/kanan.png') }}" alt="" class="kanan5"></div>
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-start justify-between p-4  dark:border-gray-600">


                    <button type="button" class="hidden text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto  justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="relative">
                    <div class="absolute left-0 bottom-0">
                        <img src="{{ asset('images/flag.png') }}" alt="" class="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- modal 6 -->
<div class="">
    <div id="defaultModal" tabindex="-1" aria-hidden="true" class="hidden fixed top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full justify-center items-center bg-[#0008] flex modal-6" data-modalPopup=6>
        <div class="relative w-full max-w-5xl max-h-full mt-[144px] lg:mt-0">
            <!-- Modal content -->
            <div class="relative bg-white  shadow dark:bg-gray-700">
                <!-- Modal header -->

                <div class="relative">
                    <div class="absolute z-2 left-[-35px] top-[-100px]">
                        <img src="{{ asset('images/header-pani.png') }}" alt="" class="mt-[0px] ml-[17px]">
                    </div>

                </div>
                <div class="flex items-start justify-between p-4  dark:border-gray-600">
                    <button type="button" class="z-30 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white donasi-modal-close-6" data-modal-hide="defaultModal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="flex flex-col-reverse lg:flex-row justify-between mx-3 lg:mx-32 px-[46px] lg:px-[80px] mb-16 font-Montserrat text-[14px] text-center">
                    <div class="w-auto lg:w-[450px] pt-[30px]">
                        <p class="mb-3">
                            Nasib malang Pani menjadi anak Yatim Piatu. Selang 6 bulan ibunya meninggal, ayahnya pun pergi entah kemana. Pani menjadi anak pemurung, air mata senantiasa membasahi pipi Pani sambil memanggil-manggil sang ibu yang telah tiada.
                        </p>
                        <p>
                            Sepeninggal Ibu nya, Pani dirawat oleh keluarga terdekat. Namun karena perekonomian yang  kurang baik, sehingga Pani mengalami kesulitan untuk memenuhi biaya sekolah. Jangankan untuk memenuhi kebutuhan sekolah, untuk memenuhi kebutuhan sehari-hari saja pas-pasan.

                        </p>
                        <p>Melihat hal ini Pani terus berjuang agar bisa terus sekolah dengan berjualan es. Berkeliling tanpa lelah ke setiap kampung menawarkan es dagangannya. Dengan harapan bisa terus sekolah dan menjadi dokter.</p>
                    </div>
                    <div class=" pt-[20px] pl-[1px]">

                        <img src="{{ asset('images/donasipani.png') }}" alt="" class=" mx-auto">

                        <div>
                            <span>Sumber:</span><a class="break-words" href="https://www.ayobantu.com/campaign/yatimpiatujuales"> https://www.ayobantu.com/campaign/yatimpiatujuales</a>
                        </div>

                    </div>

                </div>
                <div class="relative">
                    <div class="absolute z-20 top-[-200px]  w-full">
                        <div class="flex justify-start mx-[5px] lg:mx-[10px]">
                            <div> <img src="{{ asset('images/kiri.png') }}" alt="" class="kiri6"></div>
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-start justify-between p-4  dark:border-gray-600">


                    <button type="button" class="hidden text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto  justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="relative">
                    <div class="absolute left-0 bottom-0">
                        <img src="{{ asset('images/flag.png') }}" alt="" class="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main modal -->



<input type="hidden" name="commenttotal" value="{{$totalComment}}" class="totalComment">


@endsection

@push('javascript-internal')

<script>
    $(document).ready(function() {


        let base_url = window.location.origin;


        let dataCount = $('.totalComment').val();
        if (dataCount < 10) {
            $('.loadMoreButton').addClass('hidden')
        } else {
            $('.loadMoreButton').removeClass('hidden')
        }


        $('.kiri1').on('click', function() {
            $('.modal-1').addClass('hidden')
            $('.modal-2').removeClass('hidden')
            $('#defaultModal').scrollTop(0)
        })

        $('.kanan1').on('click', function() {
            $('.modal-1').addClass('hidden')
            $('.modal-2').removeClass('hidden')
            $('#defaultModal').scrollTop(0)
        })

        $('.kiri2').on('click', function() {
            $('.modal-2').addClass('hidden')
            $('.modal-1').removeClass('hidden')
            $('#defaultModal').scrollTop(0)
        })

        $('.kanan2').on('click', function() {
            $('.modal-2').addClass('hidden')
            $('.modal-1').removeClass('hidden')
            $('#defaultModal').scrollTop(0)
        })

        $('.kiri3').on('click', function() {
            $('.modal-3').addClass('hidden')
            $('.modal-4').removeClass('hidden')
            $('#defaultModal').scrollTop(0)
        })

        $('.kanan3').on('click', function() {
            $('.modal-3').addClass('hidden')
            $('.modal-4').removeClass('hidden')
            $('#defaultModal').scrollTop(0)
        })

        $('.kiri4').on('click', function() {
            $('.modal-4').addClass('hidden')
            $('.modal-3').removeClass('hidden')
            $('#defaultModal').scrollTop(0)
        })

        $('.kanan4').on('click', function() {
            $('.modal-4').addClass('hidden')
            $('.modal-3').removeClass('hidden')
            $('#defaultModal').scrollTop(0)
        })

        $('.kiri5').on('click', function() {
            $('.modal-5').addClass('hidden')
            $('.modal-6').removeClass('hidden')
            $('#defaultModal').scrollTop(0)
        })

        $('.kanan5').on('click', function() {
            $('.modal-5').addClass('hidden')
            $('.modal-6').removeClass('hidden')
            $('#defaultModal').scrollTop(0)
        })

        $('.kiri6').on('click', function() {
            $('.modal-6').addClass('hidden')
            $('.modal-5').removeClass('hidden')
            $('#defaultModal').scrollTop(0)
        })

        $('.kanan6').on('click', function() {
            $('.modal-6').addClass('hidden')
            $('.modal-5').removeClass('hidden')
            $('#defaultModal').scrollTop(0)
        })

        $('.donasi').on('click', function() {
            let id = $(this).data("donasi")

            let donasimodal = 'modal-' + id
            $(`.${donasimodal}`).removeClass('hidden')
            $('html').addClass('overflow-y-hidden')
        })

        $('.donasi-modal-close-1').on('click', function() {
            $('html').removeClass('overflow-y-hidden')
            $('.modal-1').addClass('hidden')
        })

        $('.donasi-modal-close-2').on('click', function() {
            $('html').removeClass('overflow-y-hidden')
            $('.modal-2').addClass('hidden')
        })

        $('.donasi-modal-close-3').on('click', function() {
            $('html').removeClass('overflow-y-hidden')
            $('.modal-3').addClass('hidden')
        })

        $('.donasi-modal-close-4').on('click', function() {
            $('html').removeClass('overflow-y-hidden')
            $('.modal-4').addClass('hidden')
        })
        $('.donasi-modal-close-5').on('click', function() {
            $('html').removeClass('overflow-y-hidden')
            $('.modal-5').addClass('hidden')
        })
        $('.donasi-modal-close-6').on('click', function() {
            $('html').removeClass('overflow-y-hidden')
            $('.modal-6').addClass('hidden')
        })

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





        $(document).scroll(function() {
            var scroll = $(this).scrollTop();
            var topDist = $("#banner-header").position();
            if (scroll > topDist.top) {
                $('.navbar-top').removeClass('bg-transparent')
                $('.navbar-top').addClass('bg-[#9294A3]')

            } else {
                $('.navbar-top').removeClass('bg-[#9294A3]')
                $('.navbar-top').addClass('bg-transparent')
            }
        });


        var authcheck = $('meta[name="auth-check"]').attr('content');



       

        $('.post-comment').on('click', function(e) {
            let comment = $('#comment').val()

            var format = /[`@$%^*_+\-=\[\]{}\\|<>\/~]/;
            let tes = format.test(comment)

            if (tes == true) {
                $('#comment').val('');
                $('#comment').change();
                e.preventDefault();
            } else {

                if (comment == '') {
                    $('.comment-box').removeClass('border-blue-400')
                    $('.comment-box').removeClass('bg-gray-50')
                    $('.comment-box').addClass('border-gagal')
                    $('#comment').val('');
                    $('#comment').change();
                }

                $.ajax({
                    type: "POST",
                    url: `${base_url}/comment-form`,
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                            "content"
                        ),
                    },
                    data: {
                        comment,
                    },
                    error: function(xhr, error) {



                        if (xhr.status === 401) {

                            $('.comment-box').removeClass('border-blue-400')
                            $('.comment-box').removeClass('bg-gray-50')
                            $('.comment-box').addClass('border-gagal')
                            $('#comment').val('');
                            $('#comment').change();

                        }

                        if (xhr.status === 402) {

                            $('.modal-login').removeClass('hidden')


                        }


                    },
                    success: function(data) {
                        $('.comment-box').removeClass('border-gagal')
                        $('#comment').val('');
                        $('#comment').change();
                        let comments = data;
                        $('.comment-count').empty()
                        $('.comment-count').append(data[0] + ' comment')
                        $('.comment-column').empty()

                        for (i = 0; i < comments[1].length; i++) {
                            $('.comment-column').append(`<div class="flex flex-row mx-auto justify-between px-1 py-1 mb-[30px]">
        <div class="flex mr-2">
            <div class="items-center justify-center w-12 h-12 mx-auto">
                <img alt="profil" src=https://ui-avatars.com/api/?name=${data[1][i]['user'].name}" class="object-cover w-12 h-12 mx-auto rounded-full">
            </div>
        </div>
        <div class="flex-1 pl-1 w-[550px]">
            <div class=" text-[20px] font-semibold text-gray-600">${data[1][i]['user'].name}<span class="text-sm font-normal text-gray-500"> ${comments[1][i].time}</span>
            </div>
            <div class="text-sm text-gray-600">
                ${comments[1][i].comments}
            </div>
    
        </div>
        </div>`)
                        }
                    },
                });
            }
        })

        $('.vote-button').on('click', function() {

            let rider = $(this).data("rider")

            $.ajax({
                type: "GET",
                url: `${base_url}/vote/${rider}`,


                error: function(xhr, error) {
                    $('.modal-login').removeClass('hidden')
                },
                success: function(data) {
                    setTimeout(() => {
                        window.open(data.url, '_blank');
                    })
                }
            })
        })


        $('.loadMoreButton').on('click', function() {

            let dataCount = $('.totalComment').val()

            $.ajax({
                type: "POST",
                url: `${base_url}/comment-form/load`,
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                data: {
                    dataCount,
                },
                error: function(xhr, error) {
                    console.log('gaggal')
                },
                success: function(data) {
                    $('.totalComment').val(data[0])
                    $('.totalComment').change()


                    for (i = 0; i < data[1].length; i++) {
                        $('.comment-column').append(`<div class="flex flex-row mx-auto justify-between px-1 py-1 mb-[30px]">
        <div class="flex mr-2">
            <div class="items-center justify-center w-12 h-12 mx-auto">
                <img alt="profil" src=https://ui-avatars.com/api/?name=${data[1][i]['user'].name}" class="object-cover w-12 h-12 mx-auto rounded-full">
            </div>
        </div>
        <div class="flex-1 pl-1 w-[550px]">
            <div class=" text-[20px] font-semibold text-gray-600">${data[1][i]['user'].name}<span class="text-sm font-normal text-gray-500"> ${data[1][i].time}</span>
            </div>
            <div class="text-sm text-gray-600">
                ${data[1][i].comments}
            </div>

        </div>
        </div>`)
                    }
                },
            });


        })
    });
</script>
@endpush