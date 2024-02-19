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
        <section id="features" class=" pt-[50px] pb-[50px] w-full flex justify-center bg-[#fbfbfb]">
            <div class="">
                <div class="flex flex-wrap  ">
                    <div class="w-full px-4">
                        <div class="mx-auto max-w-[570px] text-center mb-[50px] wow fadeInUp" data-wow-delay=".1s"
                            style="visibility: visible; animation-delay: 0.1s;">
                            <h2
                                class="text-[#2c318c] border-b-2 border-[#f29503]  inline-block md:text-4xl font-semibold pb-1 text-center font-poopins mb-5">
                                Our Services</h2>
                            <p class="text-body-color text-base md:text-lg leading-relaxed md:leading-relaxed">
                                There are many variations of passages of Lorem Ipsum available but the majority have
                                suffered alteration
                                in some form.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap  justify-center gap-5 ">
                    <div class="w-full md:w-1/2 lg:w-[30%] px-4 shadow-sm border rounded-md hover:shadow-indigo-500/50 ">
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
                                class="font-bold text-[#2c318c] dark:text-white text-xl sm:text-2xl lg:text-xl xl:text-2xl mb-5">
                                Crafted for
                                Startups</h3>
                            <p class="text-body-color text-base leading-relaxed font-medium pr-[10px]">
                                Tuae nam ex similique incidunt expedita exerci tationem laudantium. Repellendus quisquam
                                numquam
                                perferendis earum sapiente non tempore? Fugit repellat ut maiores.
                            </p>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 lg:w-[30%] px-4 shadow-sm border   rounded-md  hover:shadow-indigo-500/50">
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
                                class="font-bold text-[#2c318c] dark:text-white text-xl sm:text-2xl lg:text-xl xl:text-2xl mb-5">
                                Crafted for
                                Startups</h3>
                            <p class="text-body-color text-base leading-relaxed font-medium pr-[10px]">
                                Tuae nam ex similique incidunt expedita exerci tationem laudantium. Repellendus quisquam
                                numquam
                                perferendis earum sapiente non tempore? Fugit repellat ut maiores.
                            </p>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 lg:w-[30%] px-4 shadow-sm border   rounded-md  hover:shadow-indigo-500/50">
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
                                class="font-bold text-[#2c318c] dark:text-white text-xl sm:text-2xl lg:text-xl xl:text-2xl mb-5">
                                Crafted for
                                Startups</h3>
                            <p class="text-body-color text-base leading-relaxed font-medium pr-[10px]">
                                Tuae nam ex similique incidunt expedita exerci tationem laudantium. Repellendus quisquam
                                numquam
                                perferendis earum sapiente non tempore? Fugit repellat ut maiores.
                            </p>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 lg:w-[30%] px-4 shadow-sm border   rounded-md  hover:shadow-indigo-500/50">
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
                                class="font-bold text-[#2c318c] dark:text-white text-xl sm:text-2xl lg:text-xl xl:text-2xl mb-5">
                                Crafted for
                                Startups</h3>
                            <p class="text-body-color text-base leading-relaxed font-medium pr-[10px]">
                                Tuae nam ex similique incidunt expedita exerci tationem laudantium. Repellendus quisquam
                                numquam
                                perferendis earum sapiente non tempore? Fugit repellat ut maiores.
                            </p>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 lg:w-[30%] px-4 shadow-sm border   rounded-md  hover:shadow-indigo-500/50">
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
                                class="font-bold text-[#2c318c] dark:text-white text-xl sm:text-2xl lg:text-xl xl:text-2xl mb-5">
                                Crafted for
                                Startups</h3>
                            <p class="text-body-color text-base leading-relaxed font-medium pr-[10px]">
                                Tuae nam ex similique incidunt expedita exerci tationem laudantium. Repellendus quisquam
                                numquam
                                perferendis earum sapiente non tempore? Fugit repellat ut maiores.
                            </p>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 lg:w-[30%] px-4 shadow-sm border   rounded-md  hover:shadow-indigo-500/50">
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
                                class="font-bold text-[#2c318c] dark:text-white text-xl sm:text-2xl lg:text-xl xl:text-2xl mb-5">
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
                <div class="service-button flex justify-center items-center">
                <button type="button"
                    class="text-white bg-[2c318c] hover:bg-[#f29503] transition-all duration-200  font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 mt-5">Our
                    Services</button>
                </div>
        </section>

        <section class="process py-[50px]">
            <div class="flex flex-wrap  ">
                <div class="w-full px-4">
                    <div class="mx-auto max-w-[570px] text-center  wow fadeInUp" data-wow-delay=".1s"
                        style="visibility: visible; animation-delay: 0.1s;">
                        <h2
                            class="text-[#2c318c] border-b-2 border-[#f29503]  inline-block md:text-4xl font-semibold pb-1 text-center font-poopins mb-5">
                            Our Process </h2>
                        <p class="text-body-color text-base md:text-lg leading-relaxed md:leading-relaxed">
                            There are many variations of passages of Lorem Ipsum available but the majority have
                            suffered alteration
                            in some form.
                        </p>
                    </div>
                </div>
            </div>
            <div class="process-container">
                <ul class="mx-auto mt-12 grid max-w-md grid-cols-1 gap-10 sm:mt-16  lg:max-w-5xl lg:grid-cols-4">
                    <li class="flex-start group relative flex lg:flex-col">
                        <span
                            class="absolute left-[18px] top-14 h-[calc(100%_-_32px)] w-px bg-gray-300 lg:right-0 lg:left-auto lg:top-[18px] lg:h-px lg:w-[calc(100%_-_72px)]"
                            aria-hidden="true"></span>
                        <div
                            class="inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-xl border border-gray-300 bg-gray-50 transition-all duration-200 group-hover:border-gray-900 group-hover:bg-gray-900">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600 group-hover:text-white">
                                <path
                                    d="M21 12C21 13.6569 16.9706 15 12 15C7.02944 15 3 13.6569 3 12M21 5C21 6.65685 16.9706 8 12 8C7.02944 8 3 6.65685 3 5M21 5C21 3.34315 16.9706 2 12 2C7.02944 2 3 3.34315 3 5M21 5V19C21 20.6569 16.9706 22 12 22C7.02944 22 3 20.6569 3 19V5"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                        <div class="ml-6 lg:ml-0 lg:mt-10">
                            <h3
                                class="text-xl font-bold  before:mb-2 before:block before:font-mono before:text-sm before:text-gray-500 text-[#2c318c]">
                                vitae condimentum
                            </h3>
                            <h4 class="mt-2 text-base text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Curabitur vitae condimentum lectus. Cras viverra nulla eget leo auctor, et feugiat leo
                                efficitur.</h4>
                        </div>
                    </li>
                    <li class="flex-start group relative flex lg:flex-col">
                        <span
                            class="absolute left-[18px] top-14 h-[calc(100%_-_32px)] w-px bg-gray-300 lg:right-0 lg:left-auto lg:top-[18px] lg:h-px lg:w-[calc(100%_-_72px)]"
                            aria-hidden="true"></span>
                        <div
                            class="inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-xl border border-gray-300 bg-gray-50 transition-all duration-200 group-hover:border-gray-900 group-hover:bg-gray-900">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600 group-hover:text-white">
                                <path
                                    d="M2 3L2 21M22 3V21M11.8 20H12.2C13.8802 20 14.7202 20 15.362 19.673C15.9265 19.3854 16.3854 18.9265 16.673 18.362C17 17.7202 17 16.8802 17 15.2V8.8C17 7.11984 17 6.27976 16.673 5.63803C16.3854 5.07354 15.9265 4.6146 15.362 4.32698C14.7202 4 13.8802 4 12.2 4H11.8C10.1198 4 9.27976 4 8.63803 4.32698C8.07354 4.6146 7.6146 5.07354 7.32698 5.63803C7 6.27976 7 7.11984 7 8.8V15.2C7 16.8802 7 17.7202 7.32698 18.362C7.6146 18.9265 8.07354 19.3854 8.63803 19.673C9.27976 20 10.1198 20 11.8 20Z"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                        <div class="ml-6 lg:ml-0 lg:mt-10">
                            <h3
                                class="text-xl font-bold text-[#2c318c] before:mb-2 before:block before:font-mono before:text-sm before:text-gray-500">
                                vitae condimentum
                            </h3>
                            <h4 class="mt-2 text-base text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Curabitur vitae condimentum lectus. Cras viverra nulla eget leo auctor, et feugiat leo
                                efficitur.</h4>
                        </div>
                    </li>
                    <li class="flex-start group relative flex lg:flex-col">
                        <span
                            class="absolute left-[18px] top-14 h-[calc(100%_-_32px)] w-px bg-gray-300 lg:right-0 lg:left-auto lg:top-[18px] lg:h-px lg:w-[calc(100%_-_72px)]"
                            aria-hidden="true"></span>
                        <div
                            class="inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-xl border border-gray-300 bg-gray-50 transition-all duration-200 group-hover:border-gray-900 group-hover:bg-gray-900">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600 group-hover:text-white">
                                <path
                                    d="M22 12C22 17.5228 17.5228 22 12 22M22 12C22 6.47715 17.5228 2 12 2M22 12C22 9.79086 17.5228 8 12 8C6.47715 8 2 9.79086 2 12M22 12C22 14.2091 17.5228 16 12 16C6.47715 16 2 14.2091 2 12M12 22C6.47715 22 2 17.5228 2 12M12 22C14.2091 22 16 17.5228 16 12C16 6.47715 14.2091 2 12 2M12 22C9.79086 22 8 17.5228 8 12C8 6.47715 9.79086 2 12 2M2 12C2 6.47715 6.47715 2 12 2"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                        <div class="ml-6 lg:ml-0 lg:mt-10">
                            <h3
                                class="text-xl font-bold text-[#2c318c] before:mb-2 before:block before:font-mono before:text-sm ">
                                vitae condimentum
                            </h3>
                            <h4 class="mt-2 text-base text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Curabitur vitae condimentum lectus. Cras viverra nulla eget leo auctor, et feugiat leo
                                efficitur.</h4>
                        </div>
                    </li>
                    <li class="flex-start group relative flex lg:flex-col">
                        <div
                            class="inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-xl border border-gray-300 bg-gray-50 transition-all duration-200 group-hover:border-gray-900 group-hover:bg-gray-900">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600 group-hover:text-white">
                                <path
                                    d="M5.50049 10.5L2.00049 7.9999L3.07849 6.92193C3.964 6.03644 4.40676 5.5937 4.9307 5.31387C5.39454 5.06614 5.90267 4.91229 6.42603 4.86114C7.01719 4.80336 7.63117 4.92617 8.85913 5.17177L10.5 5.49997M18.4999 13.5L18.8284 15.1408C19.0742 16.3689 19.1971 16.983 19.1394 17.5743C19.0883 18.0977 18.9344 18.6059 18.6867 19.0699C18.4068 19.5939 17.964 20.0367 17.0783 20.9224L16.0007 22L13.5007 18.5M7 16.9998L8.99985 15M17.0024 8.99951C17.0024 10.1041 16.107 10.9995 15.0024 10.9995C13.8979 10.9995 13.0024 10.1041 13.0024 8.99951C13.0024 7.89494 13.8979 6.99951 15.0024 6.99951C16.107 6.99951 17.0024 7.89494 17.0024 8.99951ZM17.1991 2H16.6503C15.6718 2 15.1826 2 14.7223 2.11053C14.3141 2.20853 13.9239 2.37016 13.566 2.5895C13.1623 2.83689 12.8164 3.18282 12.1246 3.87469L6.99969 9C5.90927 10.0905 5.36406 10.6358 5.07261 11.2239C4.5181 12.343 4.51812 13.6569 5.07268 14.776C5.36415 15.3642 5.90938 15.9094 6.99984 16.9998V16.9998C8.09038 18.0904 8.63565 18.6357 9.22386 18.9271C10.343 19.4817 11.6569 19.4817 12.7761 18.9271C13.3643 18.6356 13.9095 18.0903 15 16.9997L20.1248 11.8745C20.8165 11.1827 21.1624 10.8368 21.4098 10.4331C21.6291 10.0753 21.7907 9.6851 21.8886 9.27697C21.9991 8.81664 21.9991 8.32749 21.9991 7.34918V6.8C21.9991 5.11984 21.9991 4.27976 21.6722 3.63803C21.3845 3.07354 20.9256 2.6146 20.3611 2.32698C19.7194 2 18.8793 2 17.1991 2Z"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                        <div class="ml-6 lg:ml-0 lg:mt-10">
                            <h3
                                class="text-xl font-bold text-[#2c318c] before:mb-2 before:block before:font-mono before:text-sm before:text-gray-500">
                                vitae condimentum
                            </h3>
                            <h4 class="mt-2 text-base text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Curabitur vitae condimentum lectus. Cras viverra nulla eget leo auctor, et feugiat leo
                                efficitur.</h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </div>
@endsection
