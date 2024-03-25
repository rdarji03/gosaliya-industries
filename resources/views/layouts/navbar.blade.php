{{-- <nav class="bg-[#000]">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <div class=" ">
            <a href="/" class="flex items-center w-[80%] md:w-[35%] lg:w-[40%]">
                <img src="{{ asset('img/logo/main-logo.png') }}" class="h-auto sm:w-[35%] md:w-[80%] lg:w-[60%] w-[65%]"
                    alt="Flowbite Logo" />
            </a>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul
                class="md:font-medium sm:text-sm md:text-base	 flex flex-col p-4 md:p-0   bg-[black] md:flex-row md:space-x-8">
                <li>
                    <a href="/"
                        class="block pb-0 px-3 text-[#f29503] ease-in duration-150  md:hover:text-white uppercase text-base"
                        aria-current="page">Home</a>
                </li>
                <li>
                    <a href="/about"
                        class="block pb-0 px-3 text-[#f29503] ease-in duration-150 md:hover:text-white uppercase text-base"
                        aria-current="page">About</a>
                </li>
                <li>
                    <a href="/product"
                        class="block pb-0 px-3 text-[#f29503] ease-in duration-150  md:hover:text-white uppercase text-base"
                        aria-current="page">Products</a>
                </li>
                <li>
                    <a href="/process"
                        class="block pb-0 px-3 text-[#f29503] ease-in duration-150  md:hover:text-white uppercase text-base"
                        aria-current="page">Process</a>
                </li>
                <li>
                    
                </li>

            </ul>
        </div>
    </div>
</nav> --}}
<nav class="p-5 bg-black shadow md:flex md:items-center md:justify-between">
    <div class="flex justify-between items-center ">
        <span class="text-2xl font-[Poppins] cursor-pointer">
            <a href="/" class="flex items-center w-[80%] md:w-[35%] lg:w-[40%]">
                <img src="{{ asset('img/logo/main-logo.png') }}" class="h-auto sm:w-[35%] md:w-[80%] lg:w-[60%] w-[65%]"
                    alt="Flowbite Logo" />
            </a>
        </span>

        <span class="text-3xl cursor-pointer mx-2 md:hidden block bg-white rounded-md">
            <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
        </span>
    </div>

    <ul
        class="md:flex md:items-center z-[2] md:z-auto md:static absolute bg-black w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[161px] transition-all ease-in duration-500">
        <li class="mx-4 my-6 md:my-0">
            <a href="/"
                class="block pb-0 px-3 text-[#f29503] ease-in duration-150  md:hover:text-white uppercase text-base"
                aria-current="page">Home</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
            <a href="/about"
                class="block pb-0 px-3 text-[#f29503] ease-in duration-150 md:hover:text-white uppercase text-base"
                aria-current="page">About</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
            <a href="/product"
                class="block pb-0 px-3 text-[#f29503] ease-in duration-150  md:hover:text-white uppercase text-base"
                aria-current="page">Products</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
            <a href="/process"
                class="block pb-0 px-3 text-[#f29503] ease-in duration-150  md:hover:text-white uppercase text-base"
                aria-current="page">Process</a>
        </li>


        <li class="mx-4 my-6 md:my-0">
        <a href="/contact"
            class="block pb-0 px-3 text-[#f29503] ease-in duration-150 md:hover:text-white uppercase text-base"
            aria-current="page">Contact Us</a>
          </li>
        <h2 class=""></h2>
    </ul>
</nav>
