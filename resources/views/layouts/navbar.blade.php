<nav class="p-5 bg-black shadow md:flex md:items-center md:justify-between">
    <div class="flex justify-between items-center ">
        <span class="text-2xl font-[Poppins] cursor-pointer">
            <a href="/" class="flex items-center w-[80%] md:w-[35%] lg:w-[40%]">
                <img src="{{ asset('img/logo/main-logo.png') }}" class="h-auto sm:w-[35%] md:w-[80%] lg:w-[60%] w-[40%]"
                    alt="Flowbite Logo" />
            </a>
        </span>

        <span class="text-3xl cursor-pointer mx-2 md:hidden block bg-white rounded-md">
            <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
        </span>
    </div>

    <ul
        class="md:flex md:items-center z-[2] md:z-auto md:static absolute bg-black w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-320px] transition-all ease-in duration-500">
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
