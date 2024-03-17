@extends('layouts.index')
@section('title', 'Process')
@include('layouts.navbar')
@section('content')
    <div class="grid-box max-w-[1320px] mx-auto my-10">
        <div class="flex items-center justify-center">
            <img src="{{ asset('img/about/sort-l.png') }}" alt="" srcset="" class="w-[3%] h-auto">
            <h1 class="text-[#2c318c]  inline-block text-4xl font-semibold  text-center font-titleFont">
                PROCESS</h1>
            <img src="{{ asset('img/about/sort.png') }}" alt="" srcset="" class="w-[3%] h-auto">
        </div>
        <div class="process-timline mb-10">
            <div class="max-w-[768px] mx-auto px-4 py-8">
                <div class="relative wrap overflow-hidden">
                    <div class="border-2-2 absolute border-opacity-20 border-gray-700 h-full border left-1/2"></div>
                    <div class="mb-[4rem] flex justify-between items-center w-full right-timeline gap-2">
                        <div class="order-1 w-5/12"></div>
                        <div class="z-20 flex items-center order-1 bg-[#2c318c] shadow-xl w-12 h-12 rounded-full">
                            <h1 class="mx-auto font-semibold text-lg text-white">1</h1>
                        </div>
                        <div class="order-1 bg-[#f29503] rounded-lg shadow-xl w-5/12 px-6 py-4">
                            <h3 class=" font-bold text-[#fff] text-xl">Process 1</h3>
                            
                        </div>
                    </div>
                    <div class="mb-[4rem] flex justify-between flex-row-reverse items-center w-full left-timeline">
                        <div class="order-1 w-5/12"></div>
                        <div class="z-20 flex items-center order-1 bg-[#2c318c] shadow-xl w-12 h-12 rounded-full">
                            <h1 class="mx-auto font-semibold text-lg text-white">2</h1>
                        </div>
                        <div class="order-1 bg-[#f29503] rounded-lg shadow-xl w-5/12 px-6 py-4">
                            <h3 class=" font-bold text-[#fff] text-xl text-right">Process 2</h3>
                          
                        </div>
                    </div>
                    <div class="mb-[4rem] flex justify-between items-center w-full right-timeline">
                        <div class="order-1 w-5/12"></div>
                        <div class="z-20 flex items-center order-1 bg-[#2c318c] shadow-xl w-12 h-12 rounded-full">
                            <h1 class="mx-auto font-semibold text-lg text-white">3</h1>
                        </div>
                        <div class="order-1 bg-[#f29503] rounded-lg shadow-xl w-5/12 px-6 py-4">
                            <h3 class=" font-bold text-[#fff] text-xl">Process 3</h3>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" process-slider mt-10">
            <div class="flex items-center justify-center mb-5">
                <img src="{{ asset('img/about/sort-l.png') }}" alt="" srcset="" class="w-[3%] h-auto">
                <h1 class="text-[#2c318c]  inline-block text-4xl font-semibold  text-center font-titleFont">
                    HOW PROCESS WORK</h1>
                <img src="{{ asset('img/about/sort.png') }}" alt="" srcset="" class="w-[3%] h-auto">
            </div>
            <div id="default-carousel" class="relative w-full" data-carousel="static">
                <div class="relative h-56 overflow-hidden rounded-lg md:min-h-[25rem] ">
                    <div class="hidden duration-700 ease-in-out  " data-carousel-item>
                        <div class="Process-item flex justify-center items-center">
                            <div class="w-[30%] flex justify-center"><img src="{{ asset('img/process/about-1.png') }}"
                                    class=" block w-[75%]" alt="...">
                            </div>
                            <div class="w-[50%]">
                                <div class="Process-desc">
                                    <div class="serv-head">
                                        <h1
                                            class="text-[#2c318c] border-b-2 border-[#f29503]  inline-block md:text-3xl font-semibold pb-1 text-center font-poopins mb-5">
                                            Process 1</h1>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et autem ducimus atque
                                        laboriosam
                                        voluptates molestias excepturi ea quia nam, adipisci cum dicta rem porro! Deleniti
                                        alias
                                        excepturi harum magni ipsam.</p>
                                    <div class="about-desc mt-[30px]">
                                        <div class="abt-bullet">

                                            <div class="bullet-point">
                                                <ul>
                                                    <li class="mb-[10px]">

                                                        <i class="fa fa-arrow-right bg-[#f29503] text-[#fff] p-1 rounded mr-1"
                                                            aria-hidden="true"></i>We Use Qulity Manufacturing Materials
                                                    </li>
                                                    <li class="mb-[10px]"><i
                                                            class="fa fa-arrow-right bg-[#f29503] text-[#fff] p-1 rounded mr-1"
                                                            aria-hidden="true"></i>We Use Qulity Manufacturing Materials
                                                    </li>
                                                    <li class="mb-[10px]"><i
                                                            class="fa fa-arrow-right bg-[#f29503] text-[#fff] p-1 rounded mr-1"
                                                            aria-hidden="true"></i>We Use Qulity Manufacturing Materials
                                                    </li>
                                                    <li class="mb-[10px]"><i
                                                            class="fa fa-arrow-right bg-[#f29503] text-[#fff] p-1 rounded mr-1"
                                                            aria-hidden="true"></i>We Use Qulity Manufacturing Materials
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div class="Process-item flex justify-center items-center">
                            <div class="w-[30%] flex justify-center"><img src="{{ asset('img/process/about-1.png') }}"
                                    class=" block w-[75%]" alt="...">
                            </div>
                            <div class="w-[50%]">
                                <div class="Process-desc">
                                    <div class="serv-head">
                                        <h1
                                            class="text-[#2c318c] border-b-2 border-[#f29503]  inline-block md:text-3xl font-semibold pb-1 text-center font-poopins mb-5">
                                            Process 2</h1>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et autem ducimus atque
                                        laboriosam
                                        voluptates molestias excepturi ea quia nam, adipisci cum dicta rem porro! Deleniti
                                        alias
                                        excepturi harum magni ipsam.</p>
                                    <div class="about-desc mt-[30px]">
                                        <div class="abt-bullet">

                                            <div class="bullet-point">
                                                <ul>
                                                    <li class="mb-[10px]">

                                                        <i class="fa fa-arrow-right bg-[#f29503] text-[#fff] p-1 rounded mr-1"
                                                            aria-hidden="true"></i>We Use Qulity Manufacturing Materials
                                                    </li>
                                                    <li class="mb-[10px]"><i
                                                            class="fa fa-arrow-right bg-[#f29503] text-[#fff] p-1 rounded mr-1"
                                                            aria-hidden="true"></i>We Use Qulity Manufacturing Materials
                                                    </li>
                                                    <li class="mb-[10px]"><i
                                                            class="fa fa-arrow-right bg-[#f29503] text-[#fff] p-1 rounded mr-1"
                                                            aria-hidden="true"></i>We Use Qulity Manufacturing Materials
                                                    </li>
                                                    <li class="mb-[10px]"><i
                                                            class="fa fa-arrow-right bg-[#f29503] text-[#fff] p-1 rounded mr-1"
                                                            aria-hidden="true"></i>We Use Qulity Manufacturing Materials
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div class="Process-item flex justify-center items-center">
                            <div class="w-[30%] flex justify-center"><img src="{{ asset('img/process/about-1.png') }}"
                                    class=" block w-[75%]" alt="...">
                            </div>
                            <div class="w-[50%]">
                                <div class="Process-desc">
                                    <div class="serv-head">
                                        <h1
                                            class="text-[#2c318c] border-b-2 border-[#f29503]  inline-block md:text-3xl font-semibold pb-1 text-center font-poopins mb-5">
                                            Process 3</h1>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et autem ducimus atque
                                        laboriosam
                                        voluptates molestias excepturi ea quia nam, adipisci cum dicta rem porro! Deleniti
                                        alias
                                        excepturi harum magni ipsam.</p>
                                    <div class="about-desc mt-[30px]">
                                        <div class="abt-bullet">

                                            <div class="bullet-point">
                                                <ul>
                                                    <li class="mb-[10px]">

                                                        <i class="fa fa-arrow-right bg-[#f29503] text-[#fff] p-1 rounded mr-1"
                                                            aria-hidden="true"></i>We Use Qulity Manufacturing Materials
                                                    </li>
                                                    <li class="mb-[10px]"><i
                                                            class="fa fa-arrow-right bg-[#f29503] text-[#fff] p-1 rounded mr-1"
                                                            aria-hidden="true"></i>We Use Qulity Manufacturing Materials
                                                    </li>
                                                    <li class="mb-[10px]"><i
                                                            class="fa fa-arrow-right bg-[#f29503] text-[#fff] p-1 rounded mr-1"
                                                            aria-hidden="true"></i>We Use Qulity Manufacturing Materials
                                                    </li>
                                                    <li class="mb-[10px]"><i
                                                            class="fa fa-arrow-right bg-[#f29503] text-[#fff] p-1 rounded mr-1"
                                                            aria-hidden="true"></i>We Use Qulity Manufacturing Materials
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div class="Process-item flex justify-center items-center">
                            <div class="w-[30%] flex justify-center"><img src="{{ asset('img/process/about-1.png') }}"
                                    class=" block w-[75%]" alt="...">
                            </div>
                            <div class="w-[50%]">
                                <div class="Process-desc">
                                    <div class="serv-head">
                                        <h1
                                            class="text-[#2c318c] border-b-2 border-[#f29503]  inline-block md:text-3xl font-semibold pb-1 text-center font-poopins mb-5">
                                            Process 4</h1>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et autem ducimus atque
                                        laboriosam
                                        voluptates molestias excepturi ea quia nam, adipisci cum dicta rem porro! Deleniti
                                        alias
                                        excepturi harum magni ipsam.</p>
                                    <div class="about-desc mt-[30px]">
                                        <div class="abt-bullet">

                                            <div class="bullet-point">
                                                <ul>
                                                    <li class="mb-[10px]">

                                                        <i class="fa fa-arrow-right bg-[#f29503] text-[#fff] p-1 rounded mr-1"
                                                            aria-hidden="true"></i>We Use Qulity Manufacturing Materials
                                                    </li>
                                                    <li class="mb-[10px]"><i
                                                            class="fa fa-arrow-right bg-[#f29503] text-[#fff] p-1 rounded mr-1"
                                                            aria-hidden="true"></i>We Use Qulity Manufacturing Materials
                                                    </li>
                                                    <li class="mb-[10px]"><i
                                                            class="fa fa-arrow-right bg-[#f29503] text-[#fff] p-1 rounded mr-1"
                                                            aria-hidden="true"></i>We Use Qulity Manufacturing Materials
                                                    </li>
                                                    <li class="mb-[10px]"><i
                                                            class="fa fa-arrow-right bg-[#f29503] text-[#fff] p-1 rounded mr-1"
                                                            aria-hidden="true"></i>We Use Qulity Manufacturing Materials
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div class="Process-item flex justify-center items-center">
                            <div class="w-[30%] flex justify-center"><img src="{{ asset('img/process/about-1.png') }}"
                                    class=" block w-[75%]" alt="...">
                            </div>
                            <div class="w-[50%]">
                                <div class="Process-desc">
                                    <div class="serv-head">
                                        <h1
                                            class="text-[#2c318c] border-b-2 border-[#f29503]  inline-block md:text-3xl font-semibold pb-1 text-center font-poopins mb-5">
                                            Process 5</h1>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et autem ducimus atque
                                        laboriosam
                                        voluptates molestias excepturi ea quia nam, adipisci cum dicta rem porro! Deleniti
                                        alias
                                        excepturi harum magni ipsam.</p>
                                    <div class="about-desc mt-[30px]">
                                        <div class="abt-bullet">

                                            <div class="bullet-point">
                                                <ul>
                                                    <li class="mb-[10px]">

                                                        <i class="fa fa-arrow-right bg-[#f29503] text-[#fff] p-1 rounded mr-1"
                                                            aria-hidden="true"></i>We Use Qulity Manufacturing Materials
                                                    </li>
                                                    <li class="mb-[10px]"><i
                                                            class="fa fa-arrow-right bg-[#f29503] text-[#fff] p-1 rounded mr-1"
                                                            aria-hidden="true"></i>We Use Qulity Manufacturing Materials
                                                    </li>
                                                    <li class="mb-[10px]"><i
                                                            class="fa fa-arrow-right bg-[#f29503] text-[#fff] p-1 rounded mr-1"
                                                            aria-hidden="true"></i>We Use Qulity Manufacturing Materials
                                                    </li>
                                                    <li class="mb-[10px]"><i
                                                            class="fa fa-arrow-right bg-[#f29503] text-[#fff] p-1 rounded mr-1"
                                                            aria-hidden="true"></i>We Use Qulity Manufacturing Materials
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-10 h-10 bg-[#f7f7f7] text-[#2c318c] p-3 rounded-full rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-10 h-10 bg-[#f7f7f7] text-[#2c318c] p-3 rounded-full rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>

        </div>
    </div>
@endsection
