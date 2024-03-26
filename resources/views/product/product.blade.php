@extends('layouts.index')
@section('title', 'Product')
@include('layouts.navbar')
@section('content')
    <div class="product-section my-10">
        <div class="product-heading mb-10 px-5">
            <div class="flex items-center justify-center">
                <img src="{{ asset('img/about/sort-l.png') }}" alt="" srcset="" class="w-[3%] h-auto">
                <h1 class="text-[#2c318c]  inline-block md:text-4xl text-2xl font-semibold  text-center font-titleFont">
                    OUR PRODUCT</h1>
                <img src="{{ asset('img/about/sort.png') }}" alt="" srcset="" class="w-[3%] h-auto">
            </div>
            <div class="product-desc">
                <p class=" text-center"> the product here. A small description about what it is and how it helps the user.
                    You can also add
                    some photos below.</p>
            </div>
            <div class="product-slider">
                <div class="relative flex overflow-x-hidden">
                </div>
                <div class="swiper product-curosel ">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper md:min-h-[300px] min-h-auto h-auto mt-10">
                        <!-- Slides -->
                        <div class="swiper-slide"><img src="{{ asset('img/product/450x400.png') }}" alt=""
                                srcset="" class=" h-auto"></div>
                        <div class="swiper-slide"><img src="{{ asset('img/product/450x400.png') }}" alt=""
                            srcset="" class=" h-auto"></div>
                        <div class="swiper-slide"><img src="{{ asset('img/product/450x400.png') }}" alt=""
                            srcset="" class=" h-auto"></div>
                        <div class="swiper-slide"><img src="{{ asset('img/product/450x400.png') }}" alt=""
                            srcset="" class=" h-auto"></div>
                        <div class="swiper-slide"><img src="{{ asset('img/product/450x400.png') }}" alt=""
                            srcset="" class=" h-auto"></div>
                        <div class="swiper-slide"><img src="{{ asset('img/product/450x400.png') }}" alt=""
                            srcset="" class=" h-auto"></div>
                        <div class="swiper-slide"><img src="{{ asset('img/product/450x400.png') }}" alt=""
                            srcset="" class=" h-auto"></div>
                        <div class="swiper-slide"><img src="{{ asset('img/product/450x400.png') }}" alt=""
                            srcset="" class=" h-auto"></div>
                        
                    </div>
                    
                

                    
                </div>

            </div>
        </div>
        <div class="product-benifits">
            <div class="flex items-center justify-center mb-8">
                <img src="{{ asset('img/about/sort-l.png') }}" alt="" srcset="" class="w-[3%] h-auto">
                <h1 class="text-[#2c318c]  inline-block md:text-4xl text-2xl font-semibold  text-center font-titleFont">
                    BENIFITS</h1>
                <img src="{{ asset('img/about/sort.png') }}" alt="" srcset="" class="w-[3%] h-auto">
            </div>
            <div class="product-section max-w-[1320px] mx-auto">
                <div class="relative space-y-16">
                    <div class="">
                        <div
                            class="bg-white bg-opacity-75 divide-y divide-gray-900  divide-opacity-5 backdrop-filter backdrop-blur-2xl rounded-xl">
                            <ul class="grid gap-1 p-2 md:grid-cols-3">
                                <li>
                                    <div
                                        class="flex items-start p-4 space-x-4 transition bg-gray-400 bg-opacity-0 rounded-lg hover:bg-opacity-5 focus:bg-opacity-10">
                                        <div
                                            class="flex items-center justify-center flex-shrink-0 w-12 h-12 font-bold text-white rounded-md ">
                                            <img src="{{ asset('img/about/engg.png') }}" alt="" srcset=""
                                                class=" p-[10px] border rounded-full border-dashed border-[#2c318c]">
                                        </div>

                                        <div>
                                            <h3 class="text-xl font-bold">Heading 1</h3>

                                            <p class="text-base text-gray-900 text-opacity-60">
                                                Despite what your teacher may have told you, there is a wrong
                                                way to wield a lasso. At that moment he wasn't listening.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div
                                        class="flex items-start p-4 space-x-4 transition bg-gray-400 bg-opacity-0 rounded-lg hover:bg-opacity-5 focus:bg-opacity-10">
                                        <div
                                            class="flex items-center justify-center flex-shrink-0 w-12 h-12 font-bold text-white rounded-md ">
                                            <img src="{{ asset('img/about/engg.png') }}" alt="" srcset=""
                                                class=" p-[10px] border rounded-full border-dashed border-[#2c318c]">
                                        </div>

                                        <div>
                                            <h3 class="text-xl font-bold">Heading 2</h3>

                                            <p class="text-base text-gray-900 text-opacity-60">
                                                They ran around the corner to find that they had traveled back
                                                in time. I made myself a peanut butter sandwich.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div
                                        class="flex items-start p-4 space-x-4 transition bg-gray-400 bg-opacity-0 rounded-lg hover:bg-opacity-5 focus:bg-opacity-10">
                                        <div
                                            class="flex items-center justify-center flex-shrink-0 w-12 h-12 font-bold text-white rounded-md ">
                                            <img src="{{ asset('img/about/engg.png') }}" alt="" srcset=""
                                                class=" p-[10px] border rounded-full border-dashed border-[#2c318c]">
                                        </div>

                                        <div>
                                            <h3 class="text-xl font-bold">Heading 3</h3>

                                            <p class="text-base text-gray-900 text-opacity-60">
                                                He didn't heed the warning and it had turned out surprisingly
                                                well. To music, he was living an experience
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div
                                        class="flex items-start p-4 space-x-4 transition bg-gray-400 bg-opacity-0 rounded-lg hover:bg-opacity-5 focus:bg-opacity-10">
                                        <div
                                            class="flex items-center justify-center flex-shrink-0 w-12 h-12 font-bold text-white rounded-md ">
                                            <img src="{{ asset('img/about/engg.png') }}" alt="" srcset=""
                                                class=" p-[10px] border rounded-full border-dashed border-[#2c318c]">
                                        </div>

                                        <div>
                                            <h3 class="text-xl font-bold">Heading 4</h3>

                                            <p class="text-base text-gray-900 text-opacity-60">
                                                Even with the snow falling outside, she felt it appropriate to
                                                wear her bikini. As I didn't want to subsist on veggie crackers
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div
                                        class="flex items-start p-4 space-x-4 transition bg-gray-400 bg-opacity-0 rounded-lg hover:bg-opacity-5 focus:bg-opacity-10">
                                        <div
                                            class="flex items-center justify-center flex-shrink-0 w-12 h-12 font-bold text-white rounded-md ">
                                            <img src="{{ asset('img/about/engg.png') }}" alt="" srcset=""
                                                class=" p-[10px] border rounded-full border-dashed border-[#2c318c]">
                                        </div>

                                        <div>
                                            <h3 class="text-xl font-bold">Heading 5</h3>

                                            <p class="text-base text-gray-900 text-opacity-60">
                                                For the 216th time, he said he would quit drinking soda after
                                                this last Coke. As I didn't want to subsist on veggie crackers
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div
                                        class="flex items-start p-4 space-x-4 transition bg-gray-400 bg-opacity-0 rounded-lg hover:bg-opacity-5 focus:bg-opacity-10">
                                        <div
                                            class="flex items-center justify-center flex-shrink-0 w-12 h-12 font-bold text-white rounded-md ">
                                            <img src="{{ asset('img/about/engg.png') }}" alt="" srcset=""
                                                class=" p-[10px] border rounded-full border-dashed border-[#2c318c]">
                                        </div>

                                        <div>
                                            <h3 class="text-xl font-bold">Heading 6</h3>

                                            <p class="text-base text-gray-900 text-opacity-60">
                                                Normal activities took extraordinary amounts of concentration at
                                                the high altitude. I didn't want to subsist on veggie crackers
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
