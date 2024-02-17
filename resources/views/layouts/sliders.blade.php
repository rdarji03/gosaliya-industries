<head>
    {{-- <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
      <script>
        var cont=0;
    function loopSlider(){
      var xx= setInterval(function(){
            switch(cont)
            {
            case 0:{
                $("#slider-1").fadeOut(400);
                $("#slider-2").delay(400).fadeIn(400);
                $("#sButton1").removeClass("bg-purple-800");
                $("#sButton2").addClass("bg-purple-800");
            cont=1;
            
            break;
            }
            case 1:
            {
            
                $("#slider-2").fadeOut(400);
                $("#slider-1").delay(400).fadeIn(400);
                $("#sButton2").removeClass("bg-purple-800");
                $("#sButton1").addClass("bg-purple-800");
               
            cont=0;
            
            break;
            }
            
            
            }},8000);
    
    }
    
    function reinitLoop(time){
    clearInterval(xx);
    setTimeout(loopSlider(),time);
    }
    
    
    
    function sliderButton1(){
    
        $("#slider-2").fadeOut(400);
        $("#slider-1").delay(400).fadeIn(400);
        $("#sButton2").removeClass("bg-purple-800");
        $("#sButton1").addClass("bg-purple-800");
        reinitLoop(4000);
        cont=0
        
        }
        
        function sliderButton2(){
        $("#slider-1").fadeOut(400);
        $("#slider-2").delay(400).fadeIn(400);
        $("#sButton1").removeClass("bg-purple-800");
        $("#sButton2").addClass("bg-purple-800");
        reinitLoop(4000);
        cont=1
        
        }
    
        $(window).ready(function(){
            $("#slider-2").hide();
            $("#sButton1").addClass("bg-purple-800");
            
    
            loopSlider();
         
            
        
        
        
        
        });
    
      
      </script>
    </head> --}}

<body>
    <div class="sliderAx h-auto">
        <div id="slider-1" class="">
            <div class="bg-cover bg-center bg-no-repeat  h-full text-[white] py-24 px-10 object-fill flex items-center justify-center"
                style="background-image: url({{ asset('img/home/banner-img.jpg') }})">
                <div class="md:w-1/2 flex flex-col items-center">
                    <p class="text-6xl font-bold animate-fade-right font-poopins tracking-wider text-center">Electroplating Perfected
                    </p>
                    <p class=" text-[30px]  leading-none mt-[30px] mb-[45px] font-open-sans">Our Commitment to Excellence
                        and Efficiency</p>
                    <button type="button"
                        class="text-white bg-[#2c318c] hover:bg-[#f29503] transition-all duration-200  font-medium rounded-full text-m px-5 py-2.5 text-center me-2 mb-2 mt-5">Read
                        More</button>
                </div> <!-- container -->
                <br>
            </div>

            {{-- <div id="slider-2" class="">
            <div class="bg-cover bg-top  h-full flex items-center text-white py-24 px-10 object-fill" style="background-image: url({{asset("img/sliders/slider-2.jpg")}})">
                <div class="md:w-1/2">
      <p class="font-bold text-sm uppercase">Services</p>
            <p class="text-3xl font-bold">Hello world</p>
            <p class="text-2xl mb-10 leading-none">Carousel with TailwindCSS and jQuery</p>
            <a href="#" class="bg-[#b87333] py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-[#0b6e4f] transition ease-in-out duration-300 ">Contact us</a>
        </div>
        </div> <!-- container -->
          <br>
          </div>
        </div>
     <div  class="flex justify-between w-12 mx-auto pb-2">
            <button id="sButton1" onclick="sliderButton1()" class="bg-purple-400 rounded-full w-4 pb-2 " ></button>
        <button id="sButton2" onclick="sliderButton2() " class="bg-purple-400 rounded-full w-4 p-2"></button>
      </div> --}}
        </div>
</body>
