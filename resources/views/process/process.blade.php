@extends('layouts.index')
@section('title', 'Process')
@include('layouts.navbar')
@section('content')
    <div class="grid-box max-w-[1320px] mx-auto my-10">
        <div class="flex items-center justify-center">
            <img src="{{ asset('img/about/sort-l.png') }}" alt="" srcset="" class="w-[3%] h-auto">
            <h1 class="text-[#2c318c]  inline-block lg:text-4xl 2xl font-semibold  text-center font-titleFont">
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
                <h1 class="text-[#2c318c]  inline-block lg:text-4xl 2xl font-semibold  text-center font-titleFont">
                    HOW PROCESS WORK</h1>
                <img src="{{ asset('img/about/sort.png') }}" alt="" srcset="" class="w-[3%] h-auto">
            </div>


        </div>
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper min-h-[420px] !h-auto p-4 ">
                <!-- Slides -->
                <div class="swiper-slide ">
                    <div class=" duration-700 ease-in-out  w-full">
                        <div class="Process-item flex justify-center items-center md:flex-row flex-col">
                            <div class="md:w-[30%] w-[50%] flex justify-center"><img src="{{ asset('img/process/about-1.png') }}"
                                    class=" block w-[75%]" alt="...">
                            </div>
                            <div class="md:w-[50%] w-[100%]">
                                <div class="Process-desc">
                                    <div class="serv-head">
                                        <h1
                                            class="text-[#2c318c] border-b-2 border-[#f29503]  inline-block md:text-3xl font-semibold pb-1 text-center font-poopins mb-5">
                                            Process 1</h1>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et autem ducimus atque
                                        laboriosam
                                        voluptates molestias excepturi ea quia nam, adipisci cum dicta rem porro!
                                        Deleniti
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
                <div class="swiper-slide ">
                    <div class=" duration-700 ease-in-out  w-full">
                        <div class="Process-item flex justify-center items-center md:flex-row flex-col">
                            <div class="md:w-[30%] w-[50%] flex justify-center"><img src="{{ asset('img/process/about-1.png') }}"
                                    class=" block w-[75%]" alt="...">
                            </div>
                            <div class="md:w-[50%] w-[100%]">
                                <div class="Process-desc">
                                    <div class="serv-head">
                                        <h1
                                            class="text-[#2c318c] border-b-2 border-[#f29503]  inline-block md:text-3xl font-semibold pb-1 text-center font-poopins mb-5">
                                            Process 1</h1>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et autem ducimus atque
                                        laboriosam
                                        voluptates molestias excepturi ea quia nam, adipisci cum dicta rem porro!
                                        Deleniti
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
                <div class="swiper-slide ">
                    <div class=" duration-700 ease-in-out  w-full">
                        <div class="Process-item flex justify-center items-center md:flex-row flex-col">
                            <div class="md:w-[30%] w-[50%] flex justify-center"><img src="{{ asset('img/process/about-1.png') }}"
                                    class=" block w-[75%]" alt="...">
                            </div>
                            <div class="md:w-[50%] w-[100%]">
                                <div class="Process-desc">
                                    <div class="serv-head">
                                        <h1
                                            class="text-[#2c318c] border-b-2 border-[#f29503]  inline-block md:text-3xl font-semibold pb-1 text-center font-poopins mb-5">
                                            Process 1</h1>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et autem ducimus atque
                                        laboriosam
                                        voluptates molestias excepturi ea quia nam, adipisci cum dicta rem porro!
                                        Deleniti
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

                
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination block  md:hidden"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev hidden  md:block"></div>
            <div class="swiper-button-next hidden  md:block"></div>

            <!-- If we need scrollbar -->

        </div>
    </div>
@endsection
