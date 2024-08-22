<div>
    <!-- Background Photo -->
    <div class="banner image-background">
        <div class="content" id="home"> 
            <nav>
                <img src="{{ asset('files/file.png') }}" class="logo" alt="Logo" title="Pop Expeditions">
                <ul class="navbar">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/about') }}">About Us</a></li>
                    <li>
                        <a href="{{ url('/destinations') }}">Destinations</a>
                        <ul class="dropdown">
                            <li><a href="{{ url('/destinations/destination-kenya') }}">Kenya Destinations</a></li>
                            <li><a href="{{ url('/destinations/destination-tanzania') }}">Tanzania Destinations</a></li>
                            <li><a href="{{ url('/destinations/destination-rwanda') }}">Rwanda Destinations</a></li>
                            <li><a href="{{ url('/destinations/destination-uganda') }}">Uganda Destinations</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/safari-packages') }}">Packages</a></li>
                    <li><a href="{{ url('/accomodation') }}">Accomodation</a></li>
                    <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                    <li><a class="button-list" href="{{ url('/enquire-now') }}">Enquire Now</a></li>
                </ul>
            </nav>
            <div class="title">
                <h1 class="left-align"></h1>
            </div>
            <div class="relative">
                <div class="flex justify-start mt-10 mb-10 absolute left-20 top-0 z-10">
                    <section class="flex items-center space-x-4">
                        <img src="{{ asset('files/file.png') }}" class="h-11" alt="Logo" title="Pop Expeditions">
                        <div class="h-6 w-1 bg-blue-900"></div>
                        <p class="text-white">Packages</p>
                    </section>
                </div>
                <div class="absolute left-20 top-20 z-10">
                    <p class="text-white text-4xl">{{ $destination->name }}</p>
                    <div class="flex items-center mt-2">
                        <i class="fas fa-map-marker-alt text-blue-900 mr-2"></i>
                        <p class="text-white text-xl">{{ $destination->location }}</p>
                    </div>
                </div>
                <br />
            </div> 
        </div>

        <div class="header-inner-shape" >
        </div>
    </div>

    <section class="ezy__about10 light py-14 md:py-24 bg-white dark:bg-[#0b1727] text-zinc-900 dark:text-white">
        <div class="container px-4">
            <div class="grid grid-cols-12 gap-5">
                <!-- Main Content (First 2 Columns) -->
                <div class="col-span-12 lg:col-span-8">
                    <!-- Package Header -->
                    <div class="grid grid-cols-12 gap-5 items-center text-center lg:text-start mb-12">
                        <div class="col-span-12 lg:col-span-4">
                            <div>
                                <h2 class="text-4xl leading-normal font-normal uppercase tracking-wide">
                                    {{ $destination->name }}
                                </h2>
                                <p class="text-xl mt-4">{{ $destination->description }}</p>
                            </div>
                        </div>
                        <div class="col-span-12 md:col-span-6 lg:col-span-4">
                            <div class="w-full mx-auto">
                                <img src="https://cdn.easyfrontend.com/pictures/blog/blog_2_4.png" alt="" class="w-full h-auto" />
                            </div>
                        </div>
                        <div class="col-span-12 md:col-span-6 lg:col-span-4">
                            <div>
                                <img src="https://cdn.easyfrontend.com/pictures/blog/blog_2_3.png" alt="" class="w-full h-auto" />
                            </div>
                        </div>
                    </div>

                    <!-- Package Details -->
                    <div class="grid grid-cols-12 gap-5">
                        <div class="col-span-12">
                            <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-6">
                                <h3 class="text-2xl font-bold mb-4">Itinerary</h3>
                                <p class="opacity-60 leading-relaxed">
                                    Itineraries
                                </p>
                            </div>
                        </div>
                        <div class="col-span-12">
                            <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-6">
                                <h3 class="text-2xl font-bold mb-4">Highlights</h3>
                                <p class="opacity-60 leading-relaxed">
                                    Highlights
                                </p>
                                <ul class="list-disc list-inside mt-4 text-gray-900 dark:text-gray-300" style="list-style-type: disc; padding-left: 1.5rem;">
                                    <li>This tour is offered by Ongeri Expeditions.</li>
                                    <li>This operator reserves the right to change rates advertised.</li>
                                    <li>If an accommodation is fully booked, the operator will suggest a comparable alternative.</li>
                                    <li>The exact order.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Information -->
                    <div class="grid grid-cols-12 gap-5 mt-12">
                        <div class="col-span-12">
                            <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-6">
                                <h3 class="text-2xl font-bold mb-4">Price Details</h3>
                                <p class="opacity-60 leading-relaxed">
                                    {{ $destination->price_details }}
                                </p>
                            </div>
                        </div>
                        <div class="col-span-12">
                            <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-6">
                                <h3 class="text-2xl font-bold mb-4">Duration</h3>
                                <p class="opacity-60 leading-relaxed">
                                    <i class="fas fa-calendar-alt text-gray-900 dark:text-white mr-2"></i>
                                    {{ $destination->days }} / {{ $destination->nights }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
    
                
                <!-- Placeholder (Rightmost Column) -->
                <div class="col-span-12 lg:col-span-4">
                    <div class="bg-gray-200 dark:bg-gray-700 h-full p-6 rounded-lg">
                        <h3 class="text-2xl font-bold mb-4">Let's start Planning</h3>
                        <form action="#" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="full_name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Full Name</label>
                                <input type="text" id="full_name" name="full_name" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                            </div>
                            <div class="mb-4">
                                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                                <input type="email" id="email" name="email" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                            </div>
                            <div class="mb-4">
                                <label for="country_code" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Country Code</label>
                                <select id="country_code" name="country_code" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                    <option value="+1">United States (+1)</option>
                                    <option value="+44">United Kingdom (+44)</option>
                                    <option value="+91">India (+91)</option>
                                    <!-- Add more country codes as needed -->
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="phone" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Phone</label>
                                <input type="text" id="phone" name="phone" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                            </div>
                            <div class="mb-4">
                                <label for="date" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Date</label>
                                <input type="date" id="date" name="date" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                            </div>
                            <div class="mb-4 grid grid-cols-2 gap-4">
                                <div>
                                    <label for="adults" class="block text-sm font-medium text-gray-700 dark:text-gray-300">No. of Adults</label>
                                    <input type="number" id="adults" name="adults" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                </div>
                                <div>
                                    <label for="children" class="block text-sm font-medium text-gray-700 dark:text-gray-300">No. of Children</label>
                                    <input type="number" id="children" name="children" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="additional_info" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Additional Info</label>
                                <textarea id="additional_info" name="additional_info" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                            </div>
                            <div class="mb-4">
                                <button type="submit" class="w-full bg-orange-600 text-white p-2 rounded-md shadow-sm hover:bg-orange-700 focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">Request Quote</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    



<!-- <div id="gallery" class="relative w-full" data-carousel="slide"> -->
    <!-- Carousel wrapper -->
    <!-- <div class="relative h-56 overflow-hidden rounded-lg md:h-96"> -->
         <!-- Item 1 -->
        <!-- <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
        </div> -->
        <!-- Item 2 -->
        <!-- <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
            <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
        </div> -->
        <!-- Item 3 -->
        <!-- <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
        </div> -->
        <!-- Item 4 -->
        <!-- <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
        </div> -->
        <!-- Item 5 -->
        <!-- <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
        </div> -->
    <!-- </div> -->
    <!-- Slider controls -->
    <!-- <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div> -->

<div
  id="carouselExampleCaptions"
  class="relative"
  data-twe-carousel-init
  data-twe-carousel-slide>
  <div
    class="absolute bottom-0 left-0 right-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0"
    data-twe-carousel-indicators>
    <button
      type="button"
      data-twe-target="#carouselExampleCaptions"
      data-twe-slide-to="0"
      data-twe-carousel-active
      class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
      aria-current="true"
      aria-label="Slide 1"></button>
    <button
      type="button"
      data-twe-target="#carouselExampleCaptions"
      data-twe-slide-to="1"
      class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
      aria-label="Slide 2"></button>
    <button
      type="button"
      data-twe-target="#carouselExampleCaptions"
      data-twe-slide-to="2"
      class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
      aria-label="Slide 3"></button>
  </div>
  <div
    class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
    <div
      class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
      data-twe-carousel-active
      data-twe-carousel-item
      style="backface-visibility: hidden">
      <div
        class="relative overflow-hidden bg-cover bg-no-repeat"
        style="background-position: 50%">
        <img
          src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(123).jpg"
          class="block w-full" />
        <div
          class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-black bg-fixed opacity-50"></div>
      </div>
      <div
        class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
        <h5 class="text-xl">First slide label</h5>
        <p>
          Some representative placeholder content for the first slide.
        </p>
      </div>
    </div>
    <div
      class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
      data-twe-carousel-item
      style="backface-visibility: hidden">
      <div
        class="relative overflow-hidden bg-cover bg-no-repeat"
        style="background-position: 50%">
        <img
          src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(124).jpg"
          class="block w-full" />
        <div
          class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-black bg-fixed opacity-50"></div>
      </div>
      <div
        class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
        <h5 class="text-xl">Second slide label</h5>
        <p>
          Some representative placeholder content for the second slide.
        </p>
      </div>
    </div>
    <div
      class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
      data-twe-carousel-item
      style="backface-visibility: hidden">
      <div
        class="relative overflow-hidden bg-cover bg-no-repeat"
        style="background-position: 50%">
        <img
          src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(125).jpg"
          class="block w-full" />
        <div
          class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-black bg-fixed opacity-50"></div>
      </div>
      <div
        class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
        <h5 class="text-xl">Third slide label</h5>
        <p>
          Some representative placeholder content for the third slide.
        </p>
      </div>
    </div>
  </div>
  <button
    class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
    type="button"
    data-twe-target="#carouselExampleCaptions"
    data-twe-slide="prev">
    <span class="inline-block h-8 w-8">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        stroke-width="1.5"
        stroke="currentColor"
        class="h-6 w-6">
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          d="M15.75 19.5L8.25 12l7.5-7.5" />
      </svg>
    </span>
    <span
      class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
      >Previous</span
    >
  </button>
  <button
    class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
    type="button"
    data-twe-target="#carouselExampleCaptions"
    data-twe-slide="next">
    <span class="inline-block h-8 w-8">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        stroke-width="1.5"
        stroke="currentColor"
        class="h-6 w-6">
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          d="M8.25 4.5l7.5 7.5-7.5 7.5" />
      </svg>
    </span>
    <span
      class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
      >Next</span
    >
  </button>
</div>

</div>