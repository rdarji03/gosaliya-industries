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
                        <h1 class="text-[#2c318c]  inline-block lg:text-4xl text-2xl font-semibold  text-center font-titleFont">
                            ABOUT OUR COMPANY</h1>
                        <img src="{{ asset('img/about/sort.png') }}" alt="" srcset="" class="w-[3%] h-auto">
                    </div>

                </div>
                <div class="about-company-content flex md:flex-row flex-col items-center px-4">
                    <div class="abt-image md:w-1/2 w-full flex justify-center">
                        <img src="{{ asset('img/about/about.jpg') }}" alt="Amritya Industry" class="w-[70%]" />
                    </div>
                    <div class="abt-desc md:w-1/2 w-full flex flex-col gap-5">
                        <p class=" md:text-3xl  font-semibold my-4 capitalize">The Modern  Industrial Company in submersible
                            Field
                        </p>
                        <p class="mb-3 capitalize">we are dedicated to revolutionizing the world of submersible wire with magnet technology, unwavering quality, and a commitment to sustainability. As a leading manufacturer and provider of submersible pump solutions, we take pride in delivering reliable, efficient, and innovative products tailored to meet the diverse needs of our customers across industries. </p>
                        
                        <div class="feature-box flex flex-col gap-5 ">
                            <div class="flex gap-4 items-start">
                                <img src="{{ asset('img/about/engg.png') }}" alt="" srcset="" class="w-[9%] p-[10px] border rounded-full border-dashed border-[#2c318c]">
                                <div class="w-[60%]">
                                    <h3 class="font-semibold text-xl">Quality Assurance</h3>
                                    <p class="mt-1 capitalize"> At our company , quality is our top priority. Each submersible wire undergoes stringent quality control measures to ensure superior performance, durability, and reliability in the most demanding environments</p>
                                </div>
                            </div>
                            <div class="flex gap-4 items-start">
                                <img src="{{ asset('img/about/engg.png') }}" alt="" srcset="" class="w-[9%] p-[10px] border rounded-full border-dashed border-[#2c318c]">
                                <div class="w-[60%]">
                                    <h3 class="font-semibold text-xl">Expertise and Specialization</h3>
                                    <p class="mt-1 capitalize">we specialize in producing a wide range of submersible wires tailored to meet the diverse needs of our clients.</p>
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
                        <h1 class="text-[#2c318c]  inline-block lg:text-4xl text-2xl font-semibold  text-center font-titleFont">
                            WHY CHOOSE US</h1>
                        <img src="{{ asset('img/about/sort.png') }}" alt="" srcset="" class="w-[3%] h-auto">
                    </div>

                </div>
                <div class="about-company-content flex md:flex-row-reverse flex-col items-center px-4">
                    <div class="abt-image  md:w-1/2 w-full flex justify-center">
                        <img src="{{ asset('img/about/about.jpg') }}" alt="Amritya Industry" class="w-[70%]" />
                    </div>
                    <div class="abt-desc md:w-1/2 w-full">
                        <p class=" md:text-3xl  font-semibold my-4">Trust and Performance: Why Customers Choose Us
                        </p>
                        <p class="mb-9 capitalize">When it comes to selecting a partner for your submersible wire needs, there are many options available. However, at our company, we believe that our dedication to excellence, innovation, and customer satisfaction sets us apart. Here are several reasons why you should choose us as your trusted partner:
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
                                <h4>Quality</h4>
                                <h4>100%</h4>
                            </div>
                            <div class="h-3 relative max-w-xl rounded-full overflow-hidden mb-5 bg-[#2c318c20]">
                                <div class="w-[80%] h-full  absolute"></div>
                                <div id="bar2"
                                    class="progressbar-2 transition-all ease-out duration-1000 h-full bg-[#2c318c] relative width-0">
                                </div>
                            </div>
                            <div class="progress-title flex justify-between w-[85%] mb-1">
                                <h4>Service</h4>
                                <h4>80%</h4>
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
