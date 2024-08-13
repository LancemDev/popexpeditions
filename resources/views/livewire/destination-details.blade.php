<div>
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
                        <p class="text-white">Destination</p>
                    </section>
                </div>
                <div class="absolute left-20 top-20 z-10">
                    <p class="text-white text-4xl">{{ $destination->name }}</p>
                    <div class="flex items-center mt-2">
                        <i class="fas fa-map-marker-alt text-blue-900 mr-2"></i>
                        <p class="text-white text-xl">{{ $destination->location }}, Kenya</p>
                    </div>
                </div>
                <br />
            </div> 
        </div>
    </div>

    <div class="container mx-auto px-4">
        <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6 mb-4">
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">{{ $destination->name }}</h1>
            <p class="text-base leading-7 opacity-70 mt-2 mb-0">{{ $destination->description }}</p>
            <!-- Add more details as needed -->
        </div>
    </div>

</div>