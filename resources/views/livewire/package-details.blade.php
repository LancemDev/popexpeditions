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
                    <li><a href="{{ url('/contact-us') }}">Contact Us</a></li>
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
    </div>

    <section class="ezy__about10 light py-14 md:py-24 bg-white dark:bg-[#0b1727] text-zinc-900 dark:text-white">
        <div class="container px-4">
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
                <div class="col-span-12 md:col-span-6">
                    <div>
                        <h3 class="text-2xl font-bold mb-4">Itinerary</h3>
                        <p class="opacity-60 leading-relaxed">
                            Itineraries
                        </p>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-6">
                    <div>
                        <h3 class="text-2xl font-bold mb-4">Highlights</h3>
                        <p class="opacity-60 leading-relaxed">
                             Highlights
                        </p>
                    </div>
                </div>
            </div>
    
            <!-- Additional Information -->
            <div class="grid grid-cols-12 gap-5 mt-12">
                <div class="col-span-12 md:col-span-6">
                    <div>
                        <h3 class="text-2xl font-bold mb-4">Price Details</h3>
                        <p class="opacity-60 leading-relaxed">
                            {{ $destination->price_details }}
                        </p>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-6">
                    <div>
                        <h3 class="text-2xl font-bold mb-4">Duration</h3>
                        <p class="opacity-60 leading-relaxed">
                            <i class="fas fa-calendar-alt text-gray-900 dark:text-white mr-2"></i>
                            {{ $destination->days }} days / {{ $destination->nights }} nights
                        </p>
                    </div>
                </div>
            </div>        
        </div>
    </section>

    <section>


<div id="gallery" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
            <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
        </div>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
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
</div>

    </section>
</div>