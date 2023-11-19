<div  class="h-full pb-36 pt-[69px]">
    <header class="relative w-full h-[600px]">

      <div class="slideshow-container">

        <div class="relative">
          <div class="mySlides fade">
              <img class="w-full h-[600px] opacity-30" src="{{ asset('img/bg1.jpeg') }}" alt="Image">
              <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-white">
                  <h1 class="font-bold text-6xl w-[1000px] text-center">Welcome to my Portfolio</h1>
              </div>
          </div>
      </div>
      
      <div class="relative">
        <div class="mySlides fade">
          <img class="w-full h-[600px] opacity-30" src="{{asset('img/bg2.jpeg')}}">
          <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-white">
            <h1 class="font-bold text-6xl w-[1200px] text-center">Hello, I'am Jeril , Focusing on Functional Elements Creating Beautiful Design Experience.</h1>
              </div>
        </div>
        </div>
        
        </div>
        <br>
        
        <script>
       let slideIndex = 0;
showSlides();

function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    // let dots = document.getElementsByClassName("dot"); // I-comment out o tanggalin ito
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    // I-comment out ang sumusunod na lines
    /*
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    */
    slides[slideIndex-1].style.display = "block";
    // I-comment out ang sumusunod na line
    // dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 5000);
}

        </script>
<style>
  .mySlides {display: none;}
  
  
  /* Caption text */
  .text {
    color: #f2f2f2;
    font-size: 15px;
    padding: 8px 12px;
    position: absolute;
    bottom: 8px;
    width: 100%;
    text-align: center;
  }
  
  /* Fading animation */
  .fade {
    animation-name: fade;
    animation-duration: 1.5s;
  }
  
  @keyframes fade {
    from {opacity: .4} 
    to {opacity: 1}
  }
  </style>        
      </header>

      <section class="bg-white dark:bg-gray-900">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">About Me</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">I'm Jeril, and I really want to do front-end development. I have experience using HTML, CSS, JavaScript, Tailwind, Laravel, Livewire, Rappasoft PowerGrid, animation, Bootstrap, Figma, and I can also work on network-related tasks.</p>
                <a href="#" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                    Get started
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
                <a href="#next" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                    Download my resume
                </a>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="{{asset('img/profile.png')}}" alt="mockup">
            </div>
        </div>
    </section>


</div>
