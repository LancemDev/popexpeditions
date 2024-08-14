<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pop Expeditions</title>
    <link rel="icon" href="./files/logo.png">
    <link rel="stylesheet" type="text/css" href="{{ asset(filename='style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
   
</head>
<body>

    <!-- Background Photo -->
    <div class="banner image-background">
        <div class="content" id="home"> 
            <nav>
                <img src="{{ url_for('static', filename='files/file.png') }}" class="logo" alt="Logo" title="Pop Expeditions">
                <ul class="navbar">
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About Us</a></li>
                    <li>
                        <a href="/destinations">Destinations</a>
                        <ul class="dropdown">
                            <li><a href="/destinations/destination-kenya">Kenya Destinations</a></li>
                            <li><a href="/destinations/destination-tanzania">Tanzania Destinations</a></li>
                            <li><a href="/destinations/destination-rwanda">Rwanda Destinations</a></li>
                            <li><a href="/destinations/destination-uganda">Uganda Destinations</a></li>
                        </ul>
                    </li>
                    <li><a href="/safari-packages">Packages</a></li>
                    <li><a href="/accomodation">Accomodation</a></li>
                    <li><a href="/contact-us">Contact Us</a></li>
                    <li><a class="button-list" href="/enquire-now">Enquire Now</a></li>
                </ul>
            </nav>
            <div class="title">
                <h1 class="left-align"></h1>
            </div>
                        <div class="relative">
                <div class="flex justify-start mt-10 mb-10 absolute left-20 top-0 z-10">
                    <section class="flex items-center space-x-4">
                        <img src="{{ url_for('static', filename='files/file.png') }}" class="h-11" alt="Logo" title="Pop Expeditions">
                        <div class="h-6 w-1 bg-blue-900"></div>
                        <p class="text-white">Accomodation</p>
                    </section>
                </div>
                <div class="absolute left-20 top-20 z-10">
                    <p class="text-white text-4xl">Pop Expeditions Accomodations</p>
                </div>
            </div> 
        </div>
    </div>

      <!--Photo Gallery-->
    <div class="relative">
      <div class="flex justify-start mt-10 mb-10 absolute left-20 top-0 z-10">
          <section class="flex items-center space-x-4">
              <img src="{{ url_for('static', filename='files/file.png') }}" class="h-11" alt="Logo" title="Pop Expeditions">
              <div class="h-6 w-1 bg-blue-900"></div>
              <p class="dark:text-white">CHOOSE LOCATIONS</p>
          </section>
      </div>
      <div class="absolute left-20 top-20 z-10">
          <p class="dark:text-white text-4xl">FIND YOUR ACCOMODATION</p>
      </div>
    </div> 
  <br /><br />
  <div class="grid grid-cols-3 gap-4">

    <!--The left navbar-->
    <div class="col-span-1">
      <section class="ezy__about4 light md:py-24 bg-white dark:bg-[#0b1727] text-zinc-900 dark:text-white">
        <div class="container px-4 mx-auto pl-32"> <!-- Increased padding-left to pl-32 -->
          <ul class="space-y-4">
            <li class="flex items-center">
              <input type="checkbox" id="northern" class="mr-2">
              <label for="northern" class="text-lg">Northern Kenya</label>
            </li>
            <li class="flex items-center">
              <input type="checkbox" id="eastern" class="mr-2">
              <label for="eastern" class="text-lg">Eastern Kenya</label>
            </li>
            <li class="flex items-center">
              <input type="checkbox" id="central" class="mr-2">
              <label for="central" class="text-lg">Central Kenya</label>
            </li>
            <li class="flex items-center">
              <input type="checkbox" id="western" class="mr-2">
              <label for="western" class="text-lg">Western Kenya</label>
            </li>
            <li class="flex items-center">
              <input type="checkbox" id="coastal" class="mr-2">
              <label for="coastal" class="text-lg">Coastal Kenya</label>
            </li>
          </ul>
        </div>
      </section>
    </div>

    <!--The Accomodation Gallery-->
    <div class="col-span-2 px-4 mx-auto">
        <section class="ezy__about4 light md:py-24 bg-white dark:bg-[#0b1727] text-zinc-900 dark:text-white">
          <div class="container px-4 mx-auto">
              <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3">
                  <a href="/mara-serena" class="relative group">
                      <img class="object-cover object-center w-full h-40 max-w-full rounded-lg transition-transform duration-1000 ease-in-out transform group-hover:scale-110 group-hover:opacity-70"
                          src="https://images.unsplash.com/photo-1499696010180-025ef6e1a8f9?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1470&amp;q=80"
                          alt="gallery-photo" />
                      <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-700 ease-in-out bg-orange-500 bg-opacity-50">
                          <p class="text-white text-lg">Mara Serena Safari Lodge</p>
                      </div>
                  </a>
                  <a href="/amboseli-serena" class="relative group">
                      <img class="object-cover object-center w-full h-40 max-w-full rounded-lg transition-transform duration-1000 ease-in-out transform group-hover:scale-110 group-hover:opacity-70"
                          src="https://images.unsplash.com/photo-1432462770865-65b70566d673?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80"
                          alt="gallery-photo" />
                      <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-700 ease-in-out bg-orange-500 bg-opacity-50">
                          <p class="text-white text-lg">Amboseli Serena Safari Lodge</p>
                      </div>
                  </a>
                  <a href="/sarova-mara" class="relative group">
                      <img class="object-cover object-center w-full h-40 max-w-full rounded-lg transition-transform duration-1000 ease-in-out transform group-hover:scale-110 group-hover:opacity-70"
                          src="https://images.unsplash.com/photo-1497436072909-60f360e1d4b1?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2560&amp;q=80"
                          alt="gallery-photo" />
                      <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-700 ease-in-out bg-orange-500 bg-opacity-50">
                          <p class="text-white text-lg">Sarova Mara Game Camp</p>
                      </div>
                  </a>
                  <a href="/ol-pejeta" class="relative group">
                      <img class="object-cover object-center w-full h-40 max-w-full rounded-lg transition-transform duration-1000 ease-in-out transform group-hover:scale-110 group-hover:opacity-70"
                          src="https://images.unsplash.com/photo-1493246507139-91e8fad9978e?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2940&amp;q=80"
                          alt="gallery-photo" />
                      <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-700 ease-in-out bg-orange-500 bg-opacity-50">
                          <p class="text-white text-lg">Ol Pejeta Bush Camp</p>
                      </div>
                  </a>
                  <a href="/samburu-intrepids" class="relative group">
                      <img class="object-cover object-center w-full h-40 max-w-full rounded-lg transition-transform duration-1000 ease-in-out transform group-hover:scale-110 group-hover:opacity-70"
                          src="https://images.unsplash.com/photo-1518623489648-a173ef7824f3?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2762&amp;q=80"
                          alt="gallery-photo" />
                      <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-700 ease-in-out bg-orange-500 bg-opacity-50">
                          <p class="text-white text-lg">Samburu Intrepids Luxury Tented Camp</p>
                      </div>
                  </a>
                  <a href="/lake-nakuru" class="relative group">
                      <img class="object-cover object-center w-full h-40 max-w-full rounded-lg transition-transform duration-1000 ease-in-out transform group-hover:scale-110 group-hover:opacity-70"
                          src="https://images.unsplash.com/photo-1682407186023-12c70a4a35e0?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2832&amp;q=80"
                          alt="gallery-photo" />
                      <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-700 ease-in-out bg-orange-500 bg-opacity-50">
                          <p class="text-white text-lg">Lake Nakuru Lodge</p>
                      </div>
                  </a>
                  <a href="/tsavo-safari" class="relative group">
                      <img class="object-cover object-center w-full h-40 max-w-full rounded-lg transition-transform duration-1000 ease-in-out transform group-hover:scale-110 group-hover:opacity-70"
                          src="https://demos.creative-tim.com/material-kit-pro/assets/img/examples/blog5.jpg" alt="gallery-photo" />
                      <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-700 ease-in-out bg-orange-500 bg-opacity-50">
                          <p class="text-white text-lg">Tsavo Safari Camp</p>
                      </div>
                  </a>
              </div>
          </div>
      </section>
    </div>
  </div>


  <div class="relative">
    <div class="flex justify-start mt-10 mb-10 absolute left-20 top-0 z-10">
        <section class="flex items-center space-x-4">
            <img src="{{ url_for('static', filename='files/file.png') }}" class="h-11" alt="Logo" title="Pop Expeditions">
            <div class="h-6 w-1 bg-blue-900"></div>
            <p class="dark:text-white">LET US HELP YOU</p>
        </section>
    </div>
    <div class="absolute left-20 top-20 z-10">
        <p class="dark:text-white text-4xl">FIND YOUR ACCOMODATION</p>
    </div>
  </div> 

    <section class="ezy__comingsoon1 light py-14 md:py-24 bg-white dark:bg-[#0b1727] dark:text-white">
    <div class="container px-16 md:px-8 lg:px-28 mx-auto">
      <div class="grid grid-cols-12 justify-center gap-6">
        <div class="col-span-12 lg:col-span-5 flex flex-col justify-center text-center lg:text-start">
          <h2 class="font-bold text-[32px] leading-none md:text-[45px] mb-6">Helping You to Find a More Exciting Better Value Safari</h2>
          <p class="text-lg opacity-80 mb-2">
            To start planning your tour with us, 
            you can create an itinerary from scratch, or modify one of our suggested itineraries. Want to visit the beautiful destination, or start an adventure to reach to the top? We will make it happen.
          </p>
          <a href="#" class="inline-block bg-orange-900 text-white py-2 px-4 rounded hover:bg-orange-700 transition-colors duration-300">Safari </a>
        </div>
        <div class="col-span-12 lg:col-span-7">
          <img src="https://cdn.easyfrontend.com/pictures/comingsoon/one.png" alt="" class="h-auto max-w-full" />
        </div>
      </div>
    </div>
  </section>

<!--Why Us-->
<div class="relative">
  <div class="flex justify-start mt-10 mb-10 absolute left-20 top-0 z-10">
      <section class="flex items-center space-x-4">
          <img src="{{ url_for('static', filename='files/file.png') }}" class="h-11" alt="Logo" title="Pop Expeditions">
          <div class="h-6 w-1 bg-blue-900"></div>
          <p class="dark:text-white">WHY US?</p>
      </section>
  </div>
  <div class="absolute left-20 top-20 z-10">
      <p class="dark:text-white text-4xl"></p>
  </div>
</div>
<section class="ezy__service10 light py-14 md:py-24 bg-white dark:bg-[#0b1727] text-zinc-900 dark:text-white font-montserrat">
  <div class="container relative mx-auto">

    <div class="grid grid-cols-3 gap-6 text-center">
      <div class="col-span-3 md:col-span-1">
        <div class="group bg-transparent hover:bg-gray-700 transition duration-300 hover:text-white h-full">
          <div class="p-6 lg:py-12">
            <div
              class="bg-blue-600 bg-opacity-10 text-blue-600 w-32 h-32 rounded-full text-6xl inline-flex justify-center items-center group-hover:bg-white group-hover:bg-opacity-10 group-hover:text-white"
            >
              <i class="fas fa-cannabis"></i>
            </div>
            <h4 class="text-3xl font-medium mb-4 mt-6">Expert Guides</h4>
            <p class="opacity-70">
              Our guides are knowledgeable and experienced, ensuring you get the most out of your travel experience.
            </p>
          </div>
        </div>
      </div>
      <div class="col-span-3 md:col-span-1">
        <div class="group bg-transparent hover:bg-gray-700 transition duration-300 hover:text-white h-full">
          <div class="p-6 lg:py-12">
            <div
              class="bg-blue-600 bg-opacity-10 text-blue-600 w-32 h-32 rounded-full text-6xl inline-flex justify-center items-center group-hover:bg-white group-hover:bg-opacity-10 group-hover:text-white"
            >
              <i class="fas fa-random"></i>
            </div>
            <h4 class="text-3xl font-medium mb-4 mt-6">Customized Itineraries</h4>
            <p class="opacity-70">
              We offer personalized itineraries tailored to your interests and preferences, making your trip unique.
            </p>
          </div>
        </div>
      </div>
      <div class="col-span-3 md:col-span-1">
        <div class="group bg-transparent hover:bg-gray-700 transition duration-300 hover:text-white h-full">
          <div class="p-6 lg:py-12">
            <div
              class="bg-blue-600 bg-opacity-10 text-blue-600 w-32 h-32 rounded-full text-6xl inline-flex justify-center items-center group-hover:bg-white group-hover:bg-opacity-10 group-hover:text-white"
            >
              <i class="fas fa-camera"></i>
            </div>
            <h4 class="text-3xl font-medium mb-4 mt-6">Exceptional Service</h4>
            <p class="opacity-70">
              Our commitment to quality service ensures that every aspect of your trip is handled with care and professionalism.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  
  


<!-- Footer -->

<section class="footer">
  <div class="foot">
      <div class="footer-content">
          
                      <div class="footlinks">
              <div class="column">
                  <h4>Quick Links</h4>
                  <ul>
                      <li><a href="/register">Register</a></li>
                      <li><a href="/about">About Us</a></li>
                      <li><a href="/destinations">Destinations</a></li>
                      <li><a href="/safari-packages">Packages</a></li>
                      <li><a href="/accomodation">Accomodation</a></li>
                      <li><a href="/contact-us">Contact Us</a></li>
                  </ul>
              </div>
          
              <div class="column">
                  <h4>Destinations</h4>
                  <ul>
                      <li><a href="/destinations/destination1">Destination 1</a></li>
                      <li><a href="/destinations/destination2">Destination 2</a></li>
                      <li><a href="/destinations/destination3">Destination 3</a></li>
                  </ul>
              </div>
          
              <div class="column">
                  <h4>Support</h4>
                  <ul>
                      <li><a href="/contact-us">Contact Us</a></li>
                      <li><a href="/faq">FAQs</a></li>
                      <li><a href="/terms">Terms & Conditions</a></li>
                      <li><a href="/privacy">Privacy Policy</a></li>
                  </ul>
              </div>
          </div>


          <div class="footlinks">
              <h4>Connect</h4>
              <div class="social">
                  <a href="https://www.facebook.com/mohd.rahil.blogger" target="_blank"><i class='bx bxl-facebook'></i></a>
                  <a href="https://www.instagram.com/mohdrahil101" target="_blank"><i class='bx bxl-instagram' ></i></a>
                  <a href="https://www.twitter.com/mohdrahil101" target="_blank"><i class='bx bxl-twitter' ></i></a>
                  <a href="https://www.linkedin.com/in/mohdrahil101" target="_blank"><i class='bx bxl-linkedin' ></i></a>
                  <a href="https://www.youtube.com/techdollarz" target="_blank"><i class='bx bxl-youtube' ></i></a>
                  <a href="https://www.mohdrahil.wordpress.com" target="_blank"><i class='bx bxl-wordpress' ></i></a>
                  <a href="https://www.github.com/mohdrahil101" target="_blank"><i class='bx bxl-github'></i></a>
              </div>
          </div>
          
      </div>
  </div>

  <div class="end">
      <p>Copyright © 2024 Pop Expeditions All Rights Reserved.<br>Website developed by: Abugahh and LancemDev</p>
  </div>
</section>

<script>
  window.addEventListener('scroll', function() {
      const nav = document.querySelector('nav');
      if (window.scrollY > 50) {
          nav.classList.add('scrolled');
      } else {
          nav.classList.remove('scrolled');
      }
  });
</script>
</body>


</html>
