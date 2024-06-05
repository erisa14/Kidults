<figure class="relative">

    <img class=" w-full lg:h-[60vh] h-2/3 brightness-50 saturate-50 mx-auto" src="img/background-img.jpg" alt="image description">
    <!-- <div id="dynamicHeightDiv"  class="lg:hidden flex-grow bg-[#292F36]"></div> -->

 
    <div  class="grid lg:grid-cols-2 grid-cols-1  absolute inset-5 lg:inset-0 xl:gap-0 md:gap-16 lg:gap-12 gap-10  place-items-center ">

        @yield('font')
        @yield('form')
    </div>
   
    <div   class="lg:hidden flex-grow bg-[#292F36]"></div>
    <div >
        @yield('content')
    </div>



</figure>

<script>
//   const dynamicHeightDiv = document.getElementById('dynamicHeightDiv');
//     const figureElement = document.getElementById('imgdiv');

//     function updateDivHeight() {
//         let totalContentHeight = 0;
//         const children = figureElement.children;
//         for (let i = 0; i < children.length/2; i++) {
//             totalContentHeight += children[i].offsetHeight;
//         }
//         dynamicHeightDiv.style.height = `${totalContentHeight}px`;
//     }
//     updateDivHeight();
//     window.addEventListener('resize', updateDivHeight);

    // const contentDiv = document.getElementById('contentDiv');
    // const divElement = document.getElementById('pg2-div');

    // function updateDiv() {
    //     let totalContent = 0;
    //     const children = divElement.children;
    //     for (let i = 0; i < children.length; i++) {
    //         totalContent += children[i].scrollHeight/2.1;
    //     }
    //     contentDiv.style.height = `${totalContent}px`;
    //     console.log(contentDiv)
    // }
    // updateDiv();
    // window.addEventListener('resize', updateDiv);

 
</script>

