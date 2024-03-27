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
                            <h3 class=" font-bold text-[#fff] text-xl capitalize">copper verification</h3>

                        </div>
                    </div>
                    <div class="mb-[4rem] flex justify-between flex-row-reverse items-center w-full left-timeline">
                        <div class="order-1 w-5/12"></div>
                        <div class="z-20 flex items-center order-1 bg-[#2c318c] shadow-xl w-12 h-12 rounded-full">
                            <h1 class="mx-auto font-semibold text-lg text-white">2</h1>
                        </div>
                        <div class="order-1 bg-[#f29503] rounded-lg shadow-xl w-5/12 px-6 py-4">
                            <h3 class=" font-bold text-[#fff] text-xl text-right">Insulation</h3>

                        </div>
                    </div>
                    <div class="mb-[4rem] flex justify-between items-center w-full right-timeline">
                        <div class="order-1 w-5/12"></div>
                        <div class="z-20 flex items-center order-1 bg-[#2c318c] shadow-xl w-12 h-12 rounded-full">
                            <h1 class="mx-auto font-semibold text-lg text-white">3</h1>
                        </div>
                        <div class="order-1 bg-[#f29503] rounded-lg shadow-xl w-5/12 px-6 py-4">
                            <h3 class=" font-bold text-[#fff] text-xl">Heating</h3>
                        </div>
                    </div>
                    <div class="mb-[4rem] flex justify-between flex-row-reverse items-center w-full left-timeline">
                        <div class="order-1 w-5/12"></div>
                        <div class="z-20 flex items-center order-1 bg-[#2c318c] shadow-xl w-12 h-12 rounded-full">
                            <h1 class="mx-auto font-semibold text-lg text-white">4</h1>
                        </div>
                        <div class="order-1 bg-[#f29503] rounded-lg shadow-xl w-5/12 px-6 py-4">
                            <h3 class=" font-bold text-[#fff] text-xl text-right">Rewinding</h3>

                        </div>
                    </div>
                    <div class="mb-[4rem] flex justify-between items-center w-full right-timeline">
                        <div class="order-1 w-5/12"></div>
                        <div class="z-20 flex items-center order-1 bg-[#2c318c] shadow-xl w-12 h-12 rounded-full">
                            <h1 class="mx-auto font-semibold text-lg text-white">5</h1>
                        </div>
                        <div class="order-1 bg-[#f29503] rounded-lg shadow-xl w-5/12 px-6 py-4">
                            <h3 class=" font-bold text-[#fff] text-xl">Quality Inspection
                            </h3>
                        </div>
                    </div>
                    <div class="mb-[4rem] flex justify-between flex-row-reverse items-center w-full left-timeline">
                        <div class="order-1 w-5/12"></div>
                        <div class="z-20 flex items-center order-1 bg-[#2c318c] shadow-xl w-12 h-12 rounded-full">
                            <h1 class="mx-auto font-semibold text-lg text-white">6</h1>
                        </div>
                        <div class="order-1 bg-[#f29503] rounded-lg shadow-xl w-5/12 px-6 py-4">
                            <h3 class=" font-bold text-[#fff] text-xl text-right">Packaging and Shipping</h3>

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
        <div class="swiper process-curosel">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper min-h-[420px] !h-auto p-4 ">
                <!-- Slides -->
                <div class="swiper-slide ">
                    <div class=" duration-700 ease-in-out  w-full">
                        <div class="Process-item flex justify-center items-center md:flex-row flex-col">
                            <div class="md:w-[30%] w-[50%] flex justify-center"><img src="{{ asset('img/process/about-1.png') }}"
                                    class=" block w-[75%]" alt="...">
                            </div>
                            <div class="md:w-[50%] w-[95%]">
                                <div class="Process-desc">
                                    <div class="serv-head">
                                        <h1
                                            class="text-[#2c318c] border-b-2 border-[#f29503]  inline-block md:text-3xl font-semibold pb-1 text-center font-poopins mb-5">
                                            Copper Verification
                                        </h1>
                                    </div>
                                    
                                    <div class="about-desc mt-[30px]">
                                        <div class="abt-bullet">

                                            <div class="bullet-point">
                                                <ul>
                                                    <li class="mb-[10px] flex items-start">

                                                        <i class="fa fa-arrow-right bg-[#f29503] text-[#fff] p-1 rounded mr-1"
                                                            aria-hidden="true"></i><p><strong>Dimensional Inspection:</strong><br>Measure the dimensions of the copper material to ensure it meets the required specifications</p>
                                                    </li>
                                                    <li class="mb-[10px] flex items-start">

                                                        <i class="fa fa-arrow-right bg-[#f29503] text-[#fff] p-1 rounded mr-1"
                                                            aria-hidden="true"></i><p><strong>Electrical Conductivity Testing:</strong><br>Measure the electrical conductivity of the copper material to verify its conductivity properties.</p>
                                                    </li>
                                                    <li class="mb-[10px] flex items-start">

                                                        <i class="fa fa-arrow-right bg-[#f29503] text-[#fff] p-1 rounded mr-1"
                                                            aria-hidden="true"></i><p><strong>Visual Inspection:</strong><br>Conduct a visual inspection of the copper material to check for any signs of damage, defects, or irregularities</p>
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
                            <div class="md:w-[50%] w-[95%]">
                                <div class="Process-desc">
                                    <div class="serv-head">
                                        <h1
                                            class="text-[#2c318c] border-b-2 border-[#f29503]  inline-block md:text-3xl font-semibold pb-1 text-center font-poopins mb-5">
                                            Insulation</h1>
                                    </div>
                                    <p>The copper conductor is wrapped with thin polyester film and Biaxial oriented poly propylene (BOPP) films. The most modern plant with sophisticated wrapping heads and in line continuous heat shrinkage furnace is installed to get uniform covering. A complete quality assurance testing by instruments covering all governing standards is available.</p>
                                    <div class="about-desc mt-[30px]">
                                        <div class="abt-bullet">

                                            <div class="bullet-point">
                                                <ul>
                                                    <li class="mb-[10px] flex items-start">

                                                        <i class="fa fa-arrow-right bg-[#f29503] text-[#fff] p-1 rounded mr-1"
                                                            aria-hidden="true"></i><p><strong>Sizing and Control:</strong><br>The diameter and thickness of the insulation layer are controlled by the design of the extrusion die and the processing parameters, such as temperature, pressure, and extrusion speed. Monitoring and control systems ensure that the insulation layer meets the specified dimensions and quality standards.</p>
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
                            <div class="md:w-[50%] w-[95%]">
                                <div class="Process-desc">
                                    <div class="serv-head">
                                        <h1
                                            class="text-[#2c318c] border-b-2 border-[#f29503]  inline-block md:text-3xl font-semibold pb-1 text-center font-poopins mb-5">
                                            Heating</h1>
                                    </div>
                                    
                                    <div class="about-desc mt-[30px]">
                                        <div class="abt-bullet">

                                            <div class="bullet-point">
                                                <ul>
                                                    <li class="mb-[10px] flex items-start">

                                                        <i class="fa fa-arrow-right bg-[#f29503] text-[#fff] p-1 rounded mr-1 capitalize"
                                                            aria-hidden="true"></i><p><strong>Preparation:</strong><br>The insulated wires are typically prepared by polymeric insulation material around the conductor, as described earlier.</p>
                                                    </li>
                                                    <li class="mb-[10px] flex items-start">

                                                        <i class="fa fa-arrow-right bg-[#f29503] text-[#fff] p-1 rounded mr-1 capitalize"
                                                            aria-hidden="true"></i><p><strong>Heating Stage:</strong><br class="">The insulated wires are subjected to heat to initiate the curing or cross-linking process of the insulation material.<br>
                                                                The temperature and duration of heating are carefully controlled to ensure proper curing or cross-linking of the insulation material without causing damage to the wires.</p>
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
                            <div class="md:w-[50%] w-[95%]">
                                <div class="Process-desc">
                                    <div class="serv-head">
                                        <h1
                                            class="text-[#2c318c] border-b-2 border-[#f29503]  inline-block md:text-3xl font-semibold pb-1 text-center font-poopins mb-5">
                                            Winding
                                        </h1>
                                    </div>
                                    
                                    <div class="about-desc mt-[30px]">
                                        <div class="abt-bullet">

                                            <div class="bullet-point">
                                                <ul>
                                                    <li class="mb-[10px] flex items-start">

                                                        <i class="fa fa-arrow-right bg-[#f29503] text-[#fff] p-1 rounded mr-1"
                                                            aria-hidden="true"></i><p><strong>Preparation:</strong><br>Set up the coiling equipment, including spooling machines or manual winding tools, in a clean and organized workspace.</p>
                                                    </li>
                                                    <li class="mb-[10px] flex items-start">

                                                        <i class="fa fa-arrow-right bg-[#f29503] text-[#fff] p-1 rounded mr-1"
                                                            aria-hidden="true"></i><p><strong>Wire Feeding:</strong><br>Begin the coiling process by feeding the manufactured submersible wire onto the coiling equipment.</p>
                                                    </li>
                                                    <li class="mb-[10px] flex items-start">

                                                        <i class="fa fa-arrow-right bg-[#f29503] text-[#fff] p-1 rounded mr-1"
                                                            aria-hidden="true"></i><p><strong>Winding:</strong><br>Use appropriate winding techniques to ensure that the wire is evenly distributed and tightly wound onto the spools or reels without gaps or overlaps.<br>Monitor the coiling process closely to detect any irregularities or defects in the wire or spooling equipment.</p>
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
                            <div class="md:w-[50%] w-[95%]">
                                <div class="Process-desc">
                                    <div class="serv-head">
                                        <h1
                                            class="text-[#2c318c] border-b-2 border-[#f29503]  inline-block md:text-3xl font-semibold pb-1 text-center font-poopins mb-5">
                                            Quality Inspection
                                        </h1>
                                    </div>
                                    
                                    <div class="about-desc mt-[30px]">
                                        <div class="abt-bullet">

                                            <div class="bullet-point">
                                                <ul>
                                                    
                                                    <li class="mb-[10px] flex items-start">

                                                        <i class="fa fa-arrow-right bg-[#f29503] text-[#fff] p-1 rounded mr-1"
                                                            aria-hidden="true"></i><strong>Elongation Test</strong>
                                                    </li>
                                                    <li class="mb-[10px] flex items-start">

                                                        <i class="fa fa-arrow-right bg-[#f29503] text-[#fff] p-1 rounded mr-1"
                                                            aria-hidden="true"></i><strong>Spring Test</strong>
                                                    </li>
                                                    <li class="mb-[10px] flex items-start">

                                                        <i class="fa fa-arrow-right bg-[#f29503] text-[#fff] p-1 rounded mr-1"
                                                            aria-hidden="true"></i><strong>Volume Resistivity Test</strong>
                                                    </li>   
                                                    <li class="mb-[10px] flex items-start">

                                                        <i class="fa fa-arrow-right bg-[#f29503] text-[#fff] p-1 rounded mr-1"
                                                            aria-hidden="true"></i><strong>Conductor Resistance Test</strong>
                                                    </li>  
                                                    <li class="mb-[10px] flex items-start">

                                                        <i class="fa fa-arrow-right bg-[#f29503] text-[#fff] p-1 rounded mr-1"
                                                            aria-hidden="true"></i><strong>Heat Shock Test</strong>
                                                    </li>  
                                                    <li class="mb-[10px] flex items-start">

                                                        <i class="fa fa-arrow-right bg-[#f29503] text-[#fff] p-1 rounded mr-1"
                                                            aria-hidden="true"></i><strong>High Voltage Test</strong>
                                                    </li>  
                                                    <li class="mb-[10px] flex items-start">

                                                        <i class="fa fa-arrow-right bg-[#f29503] text-[#fff] p-1 rounded mr-1"
                                                            aria-hidden="true"></i><strong>Megger Test</strong>
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
                            <div class="md:w-[50%] w-[95%]">
                                <div class="Process-desc">
                                    <div class="serv-head">
                                        <h1
                                            class="text-[#2c318c] border-b-2 border-[#f29503]  inline-block md:text-3xl font-semibold pb-1 text-center font-poopins mb-5">
                                            Packaging and Shipping

                                        </h1>
                                    </div>
                                    
                                    <div class="about-desc mt-[30px]">
                                        <div class="abt-bullet">

                                            <div class="bullet-point">
                                                <ul>
                                                    <li class="mb-[10px] flex items-start">

                                                        <i class="fa fa-arrow-right bg-[#f29503] text-[#fff] p-1 rounded mr-1"
                                                            aria-hidden="true"></i><p><strong>Product Identification and Labeling:</strong><br>Label each package with essential information, including product name, specifications, quantity, batch number, and customer details.<br>Attach shipping labels, barcodes, or tracking numbers to facilitate inventory management and shipment tracking.</p>
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
<script>
    
</script>