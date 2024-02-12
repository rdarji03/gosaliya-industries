@extends('layouts.index')
@section('title', 'Home')
@include('layouts.navbar');
@section('content')
    <div class="grid-box flex flex-col justify-center items-center">
        <div class="about-container w-[1320px]">
            <div class="about-section flex justify-center py-14">
                <div class="about-us flex justify-between w-[75%]">

                    <div class="about-content w-[45%]">
                        <div class="about-heading">
                            <h1
                                class="text-[#2c318c] border-b-2 border-[#f29503]  inline-block md:text-3xl font-semibold pb-1 text-center font-poopins mb-5">
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
                        <img src="{{ asset('img\home\about.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
