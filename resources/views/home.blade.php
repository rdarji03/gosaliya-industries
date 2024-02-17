@extends('layouts.index')
@section('title', 'Home')
@include('layouts.navbar')
@section('content')
    @include('layouts.sliders')
    <div class="grid-box flex flex-col justify-center items-center">
        <div class="about-container w-[1320px]">
            <div class="about-section flex justify-center py-14">
                <div class="about-us flex justify-between w-[75%]">

                    <div class="about-content w-[45%]">
                        <div class="about-heading">
                            <h1
                                class="text-[#2c318c] border-b-2 border-[#f29503]  inline-block md:text-4xl font-semibold pb-1 text-center font-poopins mb-5">
                                ABOUT OUR COMPANY</h1>
                        </div>
                        <div class="about-para ">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas congue augue id pharetra
                                cursus. Vivamus eu sem mauris. Cras porttitor nulla nec erat convallis varius. Morbi
                                lobortis orci nunc, sit amet dictum metus aliquam et. Etiam finibus vel lectus ut iaculis.
                                Cras accumsan nisl eu velit consequat, eu finibus diam pharetra. Phasellus a risus et sapien
                                mattis cursus. Pellentesque id vulputate nibh. Vestibulum faucibus at felis ac feugiat. Cras
                                ex lacus, consequat eget urna nec, mattis sagittis nisi. Ut scelerisque, quam vitae ultrices
                                aliquet, mauris diam eleifend nunc, id tempor ligula augue vel leo</p>
                            <button type="button"
                                class="text-white bg-[2c318c] hover:bg-[#f29503] transition-all duration-200  font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 mt-5">Read
                                More</button>
                        </div>
                    </div>
                    <div class="about-img w-[45%]">
                        <img src="{{ asset('img\home\about.jpg') }}">
                    </div>
                </div>
            </div>
        </div>
        <section id="features" class=" pt-[120px] pb-[50px] w-full flex justify-center">
            <div class="">
                <div class="flex flex-wrap  ">
                    <div class="w-full px-4">
                        <div class="mx-auto max-w-[570px] text-center mb-[100px] wow fadeInUp" data-wow-delay=".1s"
                            style="visibility: visible; animation-delay: 0.1s;">
                            <h2 class="text-[#2c318c] border-b-2 border-[#f29503]  inline-block md:text-4xl font-semibold pb-1 text-center font-poopins mb-5">Main
                                Features</h2>
                            <p class="text-body-color text-base md:text-lg leading-relaxed md:leading-relaxed">
                                There are many variations of passages of Lorem Ipsum available but the majority have
                                suffered alteration
                                in some form.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap  justify-center gap-5 ">
                    <div class="w-full md:w-1/2 lg:w-[30%] px-4 shadow-sm border   rounded-md">
                        <div class="mb-[70px] wow fadeInUp" data-wow-delay=".15s"
                            style="visibility: visible; animation-delay: 0.15s;">
                            <div
                                class="w-[70px] h-[70px] flex items-center justify-center rounded-md bg-primary bg-opacity-10 mb-10 text-primary">
                                <svg width="40" height="41" viewBox="0 0 40 41" class="fill-current">
                                    <path opacity="0.5"
                                        d="M37.7778 40.2223H24C22.8954 40.2223 22 39.3268 22 38.2223V20.0001C22 18.8955 22.8954 18.0001 24 18.0001H37.7778C38.8823 18.0001 39.7778 18.8955 39.7778 20.0001V38.2223C39.7778 39.3268 38.8823 40.2223 37.7778 40.2223Z">
                                    </path>
                                    <path
                                        d="M23.2222 0C22.6699 0 22.2222 0.447715 22.2222 1V12.3333C22.2222 12.8856 22.6699 13.3333 23.2222 13.3333H39C39.5523 13.3333 40 12.8856 40 12.3333V0.999999C40 0.447714 39.5523 0 39 0H23.2222ZM0 39C0 39.5523 0.447715 40 1 40H16.7778C17.3301 40 17.7778 39.5523 17.7778 39V27.6667C17.7778 27.1144 17.3301 26.6667 16.7778 26.6667H1C0.447716 26.6667 0 27.1144 0 27.6667V39ZM0 21.2222C0 21.7745 0.447715 22.2222 1 22.2222H16.7778C17.3301 22.2222 17.7778 21.7745 17.7778 21.2222V0.999999C17.7778 0.447714 17.3301 0 16.7778 0H1C0.447716 0 0 0.447715 0 1V21.2222Z">
                                    </path>
                                </svg>
                            </div>
                            <h3
                                class="font-bold text-[#f29503] dark:text-white text-xl sm:text-2xl lg:text-xl xl:text-2xl mb-5">
                                Crafted for
                                Startups</h3>
                            <p class="text-body-color text-base leading-relaxed font-medium pr-[10px]">
                                Tuae nam ex similique incidunt expedita exerci tationem laudantium. Repellendus quisquam
                                numquam
                                perferendis earum sapiente non tempore? Fugit repellat ut maiores.
                            </p>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 lg:w-[30%] px-4 shadow-sm border   rounded-md">
                        <div class="mb-[70px] wow fadeInUp" data-wow-delay=".15s"
                            style="visibility: visible; animation-delay: 0.15s;">
                            <div
                                class="w-[70px] h-[70px] flex items-center justify-center rounded-md bg-primary bg-opacity-10 mb-10 text-primary">
                                <svg width="40" height="41" viewBox="0 0 40 41" class="fill-current">
                                    <path opacity="0.5"
                                        d="M37.7778 40.2223H24C22.8954 40.2223 22 39.3268 22 38.2223V20.0001C22 18.8955 22.8954 18.0001 24 18.0001H37.7778C38.8823 18.0001 39.7778 18.8955 39.7778 20.0001V38.2223C39.7778 39.3268 38.8823 40.2223 37.7778 40.2223Z">
                                    </path>
                                    <path
                                        d="M23.2222 0C22.6699 0 22.2222 0.447715 22.2222 1V12.3333C22.2222 12.8856 22.6699 13.3333 23.2222 13.3333H39C39.5523 13.3333 40 12.8856 40 12.3333V0.999999C40 0.447714 39.5523 0 39 0H23.2222ZM0 39C0 39.5523 0.447715 40 1 40H16.7778C17.3301 40 17.7778 39.5523 17.7778 39V27.6667C17.7778 27.1144 17.3301 26.6667 16.7778 26.6667H1C0.447716 26.6667 0 27.1144 0 27.6667V39ZM0 21.2222C0 21.7745 0.447715 22.2222 1 22.2222H16.7778C17.3301 22.2222 17.7778 21.7745 17.7778 21.2222V0.999999C17.7778 0.447714 17.3301 0 16.7778 0H1C0.447716 0 0 0.447715 0 1V21.2222Z">
                                    </path>
                                </svg>
                            </div>
                            <h3
                                class="font-bold text-[#f29503] dark:text-white text-xl sm:text-2xl lg:text-xl xl:text-2xl mb-5">
                                Crafted for
                                Startups</h3>
                            <p class="text-body-color text-base leading-relaxed font-medium pr-[10px]">
                                Tuae nam ex similique incidunt expedita exerci tationem laudantium. Repellendus quisquam
                                numquam
                                perferendis earum sapiente non tempore? Fugit repellat ut maiores.
                            </p>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 lg:w-[30%] px-4 shadow-sm border   rounded-md">
                        <div class="mb-[70px] wow fadeInUp" data-wow-delay=".15s"
                            style="visibility: visible; animation-delay: 0.15s;">
                            <div
                                class="w-[70px] h-[70px] flex items-center justify-center rounded-md bg-primary bg-opacity-10 mb-10 text-primary">
                                <svg width="40" height="41" viewBox="0 0 40 41" class="fill-current">
                                    <path opacity="0.5"
                                        d="M37.7778 40.2223H24C22.8954 40.2223 22 39.3268 22 38.2223V20.0001C22 18.8955 22.8954 18.0001 24 18.0001H37.7778C38.8823 18.0001 39.7778 18.8955 39.7778 20.0001V38.2223C39.7778 39.3268 38.8823 40.2223 37.7778 40.2223Z">
                                    </path>
                                    <path
                                        d="M23.2222 0C22.6699 0 22.2222 0.447715 22.2222 1V12.3333C22.2222 12.8856 22.6699 13.3333 23.2222 13.3333H39C39.5523 13.3333 40 12.8856 40 12.3333V0.999999C40 0.447714 39.5523 0 39 0H23.2222ZM0 39C0 39.5523 0.447715 40 1 40H16.7778C17.3301 40 17.7778 39.5523 17.7778 39V27.6667C17.7778 27.1144 17.3301 26.6667 16.7778 26.6667H1C0.447716 26.6667 0 27.1144 0 27.6667V39ZM0 21.2222C0 21.7745 0.447715 22.2222 1 22.2222H16.7778C17.3301 22.2222 17.7778 21.7745 17.7778 21.2222V0.999999C17.7778 0.447714 17.3301 0 16.7778 0H1C0.447716 0 0 0.447715 0 1V21.2222Z">
                                    </path>
                                </svg>
                            </div>
                            <h3
                                class="font-bold text-[#f29503] dark:text-white text-xl sm:text-2xl lg:text-xl xl:text-2xl mb-5">
                                Crafted for
                                Startups</h3>
                            <p class="text-body-color text-base leading-relaxed font-medium pr-[10px]">
                                Tuae nam ex similique incidunt expedita exerci tationem laudantium. Repellendus quisquam
                                numquam
                                perferendis earum sapiente non tempore? Fugit repellat ut maiores.
                            </p>
                        </div>
                    </div>
            </div>
        </section>
    </div>
@endsection
