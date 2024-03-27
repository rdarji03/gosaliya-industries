@extends('layouts.index')
@section('title', 'Home')
@include('layouts.navbar')
@section('content')
    @include('layouts.sliders')
    <div class="grid-box flex flex-col justify-center items-center">
        <div class="about-container ">
            <div class="about-section ">

                <div class="max-w-screen-xl mx-auto py-8 px-4 lg:py-16 lg:px-6">
                    <div class="text-center mb-10">
                        <h1
                            class="text-[#2c318c] border-b-2 border-[#f29503]  inline-block md:text-4xl text-2xl font-semibold pb-1 text-center font-titleFont mb-5">
                            ABOUT OUR COMPANY</h1>
                    </div>

                    <div class="flex flex-col md:flex-row items-center">
                        <!-- can help image -->
                        <div class="mr-0 md:mr-8 mb-6 md:mb-0">
                            <img class="w-full md:w-full mx-auto" src="https://placeholder.pics/svg/400"
                                alt="can_help_banner">
                        </div>
                        <!-- end can help image -->

                        <div class="flex-1 flex flex-col sm:flex-row flex-wrap -mb-4 -mx-2">
                            <div class="w-full  mb-4 px-2 ">
                                We are manufacturer and supplier of quality submersible winding wires in the submersible
                                pump Industry.

                                These wires are widely used for power transfer in various pumps and
                                motors. Our success occurs in our continuous commitment in providing
                                quality products, emphasis on technology and customer centric
                                approach in delivering the finest products.

                                We are using pure EC grade (99.9996) copper to fulfill
                                supreme quality of submersible winding wire.
                            </div>

                            <div class="w-full sm:w-1/2 mb-4 px-2 ">
                                <div
                                    class="min-h-[190px] py-4 px-6 border border-[#f29503]  border-t-0 border-l-0 rounded-br-xl   hover:shadow-lg transition-all">
                                    <h3 class="text-2xl font-bold text-md mb-6 text-[#2c318c] font-titleFont">Expertise and
                                        Innovation
                                    </h3>
                                    <p class="text-sm capitalize"> we continuously push the boundaries of innovation,
                                        developing advanced pump solutions that address the evolving needs and challenges of
                                        modern industries.</p>
                                </div>
                            </div>

                            <div class="w-full sm:w-1/2 mb-4 px-2 ">
                                <div
                                    class="min-h-[190px] py-4 px-6 border border-[#f29503]  border-t-0 border-l-0 rounded-br-xl   hover:shadow-lg transition-all ">
                                    <h3 class="text-2xl font-bold text-md mb-6 text-[#2c318c] font-titleFont ">Our Vision
                                    </h3>
                                    <p class="text-sm capitalize">Looking ahead, We poised for continued growth, innovation,
                                        and impact. We envision a future where our pump solutions play a vital role in
                                        driving progress across industries.</p>
                                </div>
                            </div>

                            <button type="button"
                                class="mt-5 w-[200px] text-white  hover:bg-[#2c318c] bg-[#f29503] transition-all duration-200  font-medium rounded-full text-m px-5 py-2.5 text-center inline">Read
                                More
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section id="service" class=" pt-[50px] pb-[50px] w-full flex justify-center bg-[#fbfbfb]">
            <div class="">
                <div class="flex flex-wrap  ">
                    <div class="w-full px-4">
                        <div class="mx-auto max-w-[570px] text-center mb-[50px] wow fadeInUp" data-wow-delay=".1s"
                            style="visibility: visible; animation-delay: 0.1s;">
                            <h2
                                class="text-[#2c318c] border-b-2 border-[#f29503]  inline-block md:text-4xl text-2xl font-semibold pb-1 text-center  mb-5 font-titleFont">
                                OUR SERVICES</h2>
                            <p class="text-body-color text-base md:text-lg leading-relaxed md:leading-relaxed">
                              We specialize in providing comprehensive solutions for the submersible wire industry. With years of experience and expertise, we offer a range of services
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap  justify-center gap-5 mb-[50px] px-4">
                    <div
                        class=" min-h-[250px] service-box bg-white shadow-md md:w-96 w-full border-t-8 border-[#2c318c] rounded-lg flex flex-col items-center p-5 hover:border-[#f29503] transition-all duration-300 ">
                        <div class="service-icon">
                            <img src="{{ asset('img/home/serve-icon.png') }}" class=" w-[70%]">
                        </div>
                        <div class="service-heading">
                            <h3 class="text-2xl font-bold text-md my-3 text-[#2c318c] font-titleFont">Submersible Wire
                                Manufacturing</h3>
                        </div>
                        <div class="service-content">
                            <p class=" font-poopins text-center">Our state-of-the-art manufacturing facilities are equipped
                                with magnet technology and operated by skilled professionals dedicated to producing
                                high-quality submersible wires. We utilize premium materials and adhere to stringent quality
                                control measures.</p>
                        </div>
                    </div>
                    <div
                        class=" min-h-[250px] service-box bg-white shadow-md md:w-96 w-full border-t-8 border-[#2c318c] rounded-lg flex flex-col items-center hover:border-[#f29503] transition-all duration-300 p-5">
                        <div class="service-icon">
                            <img src="{{ asset('img/home/serve-icon.png') }}" class=" w-[70%]">
                        </div>
                        <div class="service-heading">
                            <h3 class="text-2xl font-bold text-md my-3 text-[#2c318c] font-titleFont">Technical Support</h3>
                        </div>
                        <div class="service-content">
                            <p class=" font-poopins text-center">Our commitment to customer satisfaction extends beyond
                                product delivery. We provide comprehensive technical support to assist you throughout the
                                entire lifecycle of your submersible wire systems.</p>
                        </div>
                    </div>
                    <div
                        class=" min-h-[250px] service-box bg-white shadow-md md:w-96 w-full border-t-8 border-[#2c318c] rounded-lg flex flex-col items-center hover:border-[#f29503] transition-all duration-300 p-5">
                        <div class="service-icon">
                            <img src="{{ asset('img/home/serve-icon.png') }}" class=" w-[70%]">
                        </div>
                        <div class="service-heading">
                            <h3 class="text-2xl font-bold text-md my-3 text-[#2c318c] font-titleFont">Customization Services
                            </h3>
                        </div>
                        <div class="service-content">
                            <p class=" font-poopins text-center">We understand that every wire is unique, and
                                off-the-shelf solutions may not always suffice. That's why we offer customization services
                                to tailor submersible wires to your specific requirements. 

                                </p>
                        </div>
                    </div>
                </div>
                
        </section>

        <section class="process py-[50px]">
            <div class="flex flex-wrap  ">
                <div class="w-full px-4">
                    <div class="mx-auto max-w-[570px] text-center  wow fadeInUp" data-wow-delay=".1s"
                        style="visibility: visible; animation-delay: 0.1s;">
                        <h2
                            class="text-[#2c318c] border-b-2 border-[#f29503]  inline-block md:text-4xl text-2xl font-semibold pb-1 text-center font-titleFont mb-5">
                            Our Process </h2>
                        <p class="text-body-color text-base md:text-lg leading-relaxed md:leading-relaxed">
                            There are many variations of passages of Lorem Ipsum available but the majority have
                            suffered alteration
                            in some form.
                        </p>
                    </div>
                </div>
            </div>
            <div class="process-container px-4">
                <div class="w-full">
                    <div class="container mx-auto my-10 flex flex-col items-center gap-16">

                        <div
                            class="flex w-full flex-col items-center justify-between gap-y-10 lg:flex-row lg:gap-x-8 lg:gap-y-0 xl:gap-x-10">
                            <div class="flex items-start gap-4">
                                <div
                                    class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full border-2 border-solid border-purple-blue-500 bg-[#2c318c] text-purple-blue-500">
                                    <span class="text-base font-bold leading-7 text-white">1</span>
                                </div>
                                <div class="flex flex-col">
                                    <h3 class="mb-2 text-base font-bold leading-tight text-dark-grey-900">
                                        Dimenssion And Concentrate Of Copper
                                    </h3>
                                    <p class="text-base font-medium leading-7 text-dark-grey-600">
                                        Check The diameter toleronce and percentage of copper
                                    </p>
                                </div>
                            </div>
                            <div class="rotate-90 lg:rotate-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="43" height="42" viewBox="0 0 43 42"
                                    fill="none">
                                    <g clip-path="url(#clip0_3346_6663)">
                                        <path
                                            d="M16.9242 11.7425C16.2417 12.425 16.2417 13.5275 16.9242 14.21L23.7142 21L16.9242 27.79C16.2417 28.4725 16.2417 29.575 16.9242 30.2575C17.6067 30.94 18.7092 30.94 19.3917 30.2575L27.4242 22.225C28.1067 21.5425 28.1067 20.44 27.4242 19.7575L19.3917 11.725C18.7267 11.06 17.6067 11.06 16.9242 11.7425Z"
                                            fill="#f29503" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_3346_6663">
                                            <rect width="42" height="42" fill="white"
                                                transform="translate(0.666748)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div class="flex items-start gap-4">
                                <div
                                    class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full border-2 border-solid border-purple-blue-500 bg-[#2c318c] text-purple-blue-500">
                                    <span class="text-base font-bold leading-2 text-white">2</span>
                                </div>
                                <div class="flex flex-col">
                                    <h3 class="mb-2 text-base font-bold leading-tight text-dark-grey-900">
                                        Insulation with the help of magnet techenology
                                    </h3>
                                    <p class="text-base font-medium leading-7 text-dark-grey-600">
                                       For minimal margin of error in outer diameter 
                                    </p>
                                </div>
                            </div>
                            <div class="rotate-90 lg:rotate-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="43" height="42" viewBox="0 0 43 42"
                                    fill="none">
                                    <g clip-path="url(#clip0_3346_6663)">
                                        <path
                                            d="M16.9242 11.7425C16.2417 12.425 16.2417 13.5275 16.9242 14.21L23.7142 21L16.9242 27.79C16.2417 28.4725 16.2417 29.575 16.9242 30.2575C17.6067 30.94 18.7092 30.94 19.3917 30.2575L27.4242 22.225C28.1067 21.5425 28.1067 20.44 27.4242 19.7575L19.3917 11.725C18.7267 11.06 17.6067 11.06 16.9242 11.7425Z"
                                            fill="#f29503" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_3346_6663">
                                            <rect width="42" height="42" fill="white"
                                                transform="translate(0.666748)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div class="flex items-start gap-4">
                                <div
                                    class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full border-2 border-solid border-purple-blue-500 bg-[#2c318c] text-purple-blue-500">
                                    <span class="text-base font-bold leading-2 text-white">3</span>
                                </div>
                                <div class="flex flex-col">
                                    <h3 class="mb-2 text-base font-bold leading-tight text-dark-grey-900">
                                        Heating Treatment
                                    </h3>
                                    <p class="text-base font-medium leading-2 text-dark-grey-600">
                                       For amalgamation of insulation and copper 
                                    </p>
                                </div>
                            </div>
                            <div class="rotate-90 lg:rotate-0">
                              <svg xmlns="http://www.w3.org/2000/svg" width="43" height="42" viewBox="0 0 43 42"
                                  fill="none">
                                  <g clip-path="url(#clip0_3346_6663)">
                                      <path
                                          d="M16.9242 11.7425C16.2417 12.425 16.2417 13.5275 16.9242 14.21L23.7142 21L16.9242 27.79C16.2417 28.4725 16.2417 29.575 16.9242 30.2575C17.6067 30.94 18.7092 30.94 19.3917 30.2575L27.4242 22.225C28.1067 21.5425 28.1067 20.44 27.4242 19.7575L19.3917 11.725C18.7267 11.06 17.6067 11.06 16.9242 11.7425Z"
                                          fill="#f29503" />
                                  </g>
                                  <defs>
                                      <clipPath id="clip0_3346_6663">
                                          <rect width="42" height="42" fill="white"
                                              transform="translate(0.666748)" />
                                      </clipPath>
                                  </defs>
                              </svg>
                          </div>
                            <div class="flex items-start gap-4">
                              <div
                                  class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full border-2 border-solid border-purple-blue-500 bg-[#2c318c] text-purple-blue-500">
                                  <span class="text-base font-bold leading-2 text-white">4</span>
                              </div>
                              <div class="flex flex-col">
                                  <h3 class="mb-2 text-base font-bold leading-tight text-dark-grey-900">
                                    Quality Analysis 
                                  </h3>
                                  <p class="text-base font-medium leading-2 text-dark-grey-600">
                                     As per IS: 8783 -2000 part &#8547
                                     section 3
                                  </p>
                              </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="service-button flex justify-center items-center">
              <button type="button"
                  class="text-white bg-[2c318c] hover:bg-[#f29503] transition-all duration-200  font-medium rounded-full text-m px-5 py-2.5 text-center me-2 mb-2 mt-5 uppercase font-poopins">Know More</button>
          </div>
        </section>
    </div>
@endsection
