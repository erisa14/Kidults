<figure class="relative">

    <img class=" w-full lg:h-[60vh] h-[40lvh] brightness-50 saturate-50 mx-auto" src="img/background-img.jpg" alt="image description">

 
    <div class="grid lg:grid-cols-2 grid-cols-1  absolute inset-5 lg:inset-0 lg:gap-0 md:gap-16 gap-10  place-items-center ">

        @yield('font')
        @yield('form')
    </div>
   
    <div>
        @yield('content')
    </div>

  
</figure>

