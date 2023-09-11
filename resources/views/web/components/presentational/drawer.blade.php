<!-- drawer component -->
<div id="drawer-example" class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-100 " tabindex="-1" aria-labelledby="drawer-label" style="background-image: url(/images/bg-hamburger.jpg); background-repeat: no-repeat;
  background-size: cover;">

    <button type="button" data-drawer-hide="drawer-example" aria-controls="drawer-example" class="text-black bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 right-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
        </svg>
        <span class="sr-only">Close menu</span>
    </button>
    <div class="flex justify-center mt-32">
        <a href="/" class=" font-foobar text-[20px] italic font-extrabold">BERANDA</a>


    </div>

    <div class="flex justify-center mt-10">
        <a href="/mekanisme" class=" font-foobar text-[20px] italic font-extrabold">MEKANISME</a>
    </div>

    @guest
    <div class=" pl-[25px] flex justify-center">
        <li class="relative" style="list-style: none;">
            <div class="kotak4 h-[36px] w-[250px]">
            </div>
            <div class="absolute top-[21px] left-[40px]">

                <a class="text-white leading-[20px]  pr-4 pl-3 font-foobar md:text-[18px] lg:text-[22px] cursor-pointer modal-login-button " aria-current="page">Masuk</a>
                <span class="list-none font-foobar text-white text-[20px] mx-2">|</span>
                <a class="text-white leading-[20px] inline  pr-4 pl-3 font-foobar md:text-[18px] lg:text-[22px] cursor-pointer modal-register-button" aria-current="page">Daftar</a>




            </div>
        </li>

    </div>
    @endguest

    @auth
    <div class="flex justify-center mt-24">
        <a class=" font-foobar text-[20px] italic font-extrabold">{{Auth::user()->name}}</a>
    </div>

    <div class="flex justify-center mt-10">
        <a class="font-foobar text-[20px] italic font-extrabold" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            KELUAR
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
    @endauth
</div>