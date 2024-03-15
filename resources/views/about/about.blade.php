@extends('layouts.index')
@section('title', 'About')
@include('layouts.navbar')
@section('content')
    <div class="about-section my-10">
        <div class="about-container max-w-[1320px] mx-auto mb-8">
            <div class="about-company my-5 ">
                <div class="about-company-heading mb-10">
                    <div class="flex items-center justify-center">
                        <img src="{{ asset('img/about/sort-l.png') }}" alt="" srcset="" class="w-[3%] h-auto">
                        <h1 class="text-[#2c318c]  inline-block text-4xl font-semibold  text-center font-titleFont">
                            ABOUT OUR COMPANY</h1>
                        <img src="{{ asset('img/about/sort.png') }}" alt="" srcset="" class="w-[3%] h-auto">
                    </div>

                </div>
                <div class="about-company-content flex items-center">
                    <div class="abt-image w-1/2 flex justify-center">
                        <img src="{{ asset('img/about/about.jpg') }}" alt="Amritya Industry" class="w-[70%]" />
                    </div>
                    <div class="abt-desc w-1/2 flex flex-col gap-5">
                        <p class=" md:text-3xl  font-semibold my-4">The Modern & Largest Industrial Company in this
                            Field
                        </p>
                        <p class="mb-3">Commodo dictum iaculis eget mas phasellus ultrices nunc dignissim. Id nulla
                            amet
                            tincidunt urna sed massa the sed massa ultrices amet a egetristique the maecenas condimentum
                            dolor.
                            dictum iaculis eget more amet tincidunt urna massa done.Commodo dictum iaculis eget mas
                            phasellus
                            ultrices dignissim. Id nulla amet tincidunt urna sed massa the sed massa ultrices amet a
                            egetristique maecenas condimentum dolor. </p>
                        
                        <div class="feature-box flex flex-col gap-5 ">
                            <div class="flex gap-4 items-start">
                                <img src="{{ asset('img/about/engg.png') }}" alt="" srcset="" class="w-[9%] p-[10px] border rounded-full border-dashed border-[#2c318c]">
                                <div class="w-[60%]">
                                    <h3 class="font-semibold text-xl"> Expert Engineers</h3>
                                    <p class="mt-1"> Commodo dictum iaculis eget mas phasellus ultrices nunc the dignissim Id nulla amet tincidunt urna.</p>
                                </div>
                            </div>
                            <div class="flex gap-4 items-start">
                                <img src="{{ asset('img/about/engg.png') }}" alt="" srcset="" class="w-[9%] p-[10px] border rounded-full border-dashed border-[#2c318c]">
                                <div class="w-[60%]">
                                    <h3 class="font-semibold text-xl"> Expert Engineers</h3>
                                    <p class="mt-1"> Commodo dictum iaculis eget mas phasellus ultrices nunc the dignissim Id nulla amet tincidunt urna.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="why-choose-container max-w-[1320px] mx-auto">
            <div class="why-choose-us">
                <div class="about-company-heading my-10">
                    <div class="flex items-center justify-center">
                        <img src="{{ asset('img/about/sort-l.png') }}" alt="" srcset="" class="w-[3%] h-auto">
                        <h1 class="text-[#2c318c]  inline-block text-4xl font-semibold  text-center font-titleFont">
                            WHY CHOOSE US</h1>
                        <img src="{{ asset('img/about/sort.png') }}" alt="" srcset="" class="w-[3%] h-auto">
                    </div>

                </div>
                <div class="about-company-content flex flex-row-reverse items-center ">
                    <div class="abt-image w-1/2 flex justify-center">
                        <img src="{{ asset('img/about/about.jpg') }}" alt="Amritya Industry" class="w-[70%]" />
                    </div>
                    <div class="abt-desc w-1/2">
                        <p class=" md:text-3xl  font-semibold my-4">The Modern & Largest Industrial Company in this
                            Field
                        </p>
                        <p class="mb-9">Commodo dictum iaculis eget mas phasellus ultrices nunc dignissim. Id nulla
                            amet
                            tincidunt urna sed massa the sed massa ultrices amet a egetristique the maecenas condimentum
                            dolor.
                            dictum iaculis eget more amet tincidunt urna massa done.Commodo dictum iaculis eget mas
                            phasellus
                            ultrices dignissim. Id nulla amet tincidunt urna sed massa the sed massa ultrices amet a
                            egetristique maecenas condimentum dolor.
                        </p>
                        <div class="progress-bar">
                            <div class="progress-title flex justify-between w-[85%] mb-1">
                                <h4>Manufacture</h4>
                                <h4>100%</h4>
                            </div>
                            <div class="h-3 relative max-w-xl rounded-full overflow-hidden mb-5 bg-[#2c318c20]">
                                
                                <div class="w-[80%] h-full  absolute"></div>
                                <div id="bar1"
                                    class="progressbar-1 transition-all ease-out duration-1000 h-full bg-[#2c318c] relative width-0">
                                </div>
                            </div>
                            <div class="progress-title flex justify-between w-[85%] mb-1">
                                <h4>Manufacture</h4>
                                <h4>80%</h4>
                            </div>
                            <div class="h-3 relative max-w-xl rounded-full overflow-hidden mb-5 bg-[#2c318c20]">
                                <div class="w-[80%] h-full  absolute"></div>
                                <div id="bar2"
                                    class="progressbar-2 transition-all ease-out duration-1000 h-full bg-[#2c318c] relative width-0">
                                </div>
                            </div>
                            <div class="progress-title flex justify-between w-[85%] mb-1">
                                <h4>Manufacture</h4>
                                <h4>70%</h4>
                            </div>
                            <div class="h-3 relative max-w-xl rounded-full overflow-hidden mb-5 bg-[#2c318c20]">
                                <div class="w-[80%] h-full  absolute"></div>
                                <div id="bar3"
                                    class="progressbar-3 transition-all ease-out duration-1000 h-full bg-[#2c318c] relative width-0">
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection