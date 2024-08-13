<!-- resources/views/livewire/destinations.blade.php -->
<div>
    <!-- Background Photo -->
    <div class="banner image-background">
        <div class="content" id="home"> 
            <nav>
                <img src="{{ asset('files/file.png') }}" class="logo" alt="Logo" title="Pop Expeditions">
                <ul class="navbar">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/about') }}">About Us</a></li>
                    <li><a href="{{ url('/destinations') }}">Destinations</a></li>
                    <li><a href="{{ url('/packages') }}">Packages</a></li>
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
                    <p class="text-white text-4xl">Destinations</p>
                </div>
            </div> 
        </div>
    </div>
    <!-- About Section -->
    <div class="relative">
        <div class="flex justify-start mt-10 mb-10 absolute left-20 top-0 z-10">
            <section class="flex items-center space-x-4">
                <img src="{{ asset('files/file.png') }}" class="h-11" alt="Logo" title="Pop Expeditions">
                <div class="h-6 w-1 bg-blue-900"></div>
                <p class="dark:text-white">ABOUT US</p>
            </section>
        </div>
    </div> 
    <section class="ezy__about4 light py-14 md:py-24 bg-white dark:bg-[#0b1727] text-zinc-900 dark:text-white">
        <div class="container px-4 mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-x-8">
                <div>
                    <h2 class="md:text-end text-4xl md:text-6xl leading-tight md:leading-tight font-light mb-0">
                        Discover East Africa: A Land of Stunning Landscapes and Vibrant Cultures
                    </h2>
                </div>
                <div class="lg:px-4 my-6 lg:my-0">
                    <div
                        class="min-h-[300px] md:h-full bg-center bg-cover"
                        style="background-image: url({{ asset('files/about22.jpg') }})"
                    ></div>
                </div>
                <div class="pr-7">
                    <p class="text-base leading-7 opacity-70 mb-0">
                        East Africa, a region rich in natural beauty and cultural diversity, offers an unparalleled blend of breathtaking landscapes, rich wildlife, and vibrant traditions. From the iconic savannas of the Maasai Mara in Kenya to the majestic Rwenzori Mountains in Uganda, the Serengeti plains in Tanzania, and the rolling hills of Rwanda, East Africa is a traveler’s paradise.
                    </p>
                    <p class="text-base leading-7 opacity-70 mt-6 mb-0">
                        Embark on a safari adventure to witness the Great Migration, explore the lush greenery of the Bwindi Impenetrable Forest, dive into the crystal-clear waters of Zanzibar, or experience the warm hospitality of the Rwandan people. East Africa’s diverse attractions promise unforgettable experiences for every traveler.
                    </p>
                    <p class="text-base leading-7 opacity-70 mt-6 mb-0">
                        Whether you're seeking thrilling wildlife encounters, serene landscapes, or cultural immersion, East Africa has it all. Join us in exploring this magnificent region and create memories that will last a lifetime.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Destination Cards Section -->
    <div class="relative">
        <div class="flex justify-start mt-10 mb-10 absolute left-20 top-0 z-10">
            <section class="flex items-center space-x-4">
                <img src="{{ asset('files/file.png') }}" class="h-11" alt="Logo" title="Pop Expeditions">
                <div class="h-6 w-1 bg-blue-900"></div>
                <p class="dark:text-white">DESTINATIONS IN KENYA, UGANDA, TANZANIA AND RWANDA</p>
            </section>
        </div>
    </div> 
    <div class="mt-16"><br /></div>
    <section class="ezy__epgrid12 light bg-white dark:bg-[#0b1727] text-zinc-900 dark:text-white relative overflow-hidden z-10">
        <div class="container relative px-4 mx-auto">
            <div class="flex flex-col md:flex-row gap-6 mt-12">
                <!-- sidebar -->
                <div class="w-full md:w-1/3 xl:w-1/4">
                    <div class="bg-white dark:bg-slate-800 rounded-xl shadow-xl border dark:border-slate-700 p-4 lg:p-6">
                        <form>
                           <!-- Filter By Country Section -->
                            <div>
                                <h5 class="text-xl leading-tight font-bold mt-6">Filter By Country</h5>
                                @php
                                    $countryOptions = [
                                        'Kenya' => 'Kenya',
                                        'Tanzania' => 'Tanzania',
                                        'Uganda' => 'Uganda',
                                        'Rwanda' => 'Rwanda'
                                    ];
                                @endphp
                                @foreach($countryOptions as $label => $value)
                                    <div class="block mt-4">
                                        <input class="form-check-input" type="radio" name="country" id="{{ $value }}" value="{{ $value }}" wire:click="setSelectedCountry('{{ $value }}')" />
                                        <label class="form-check-label" for="{{ $value }}">{{ $label }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </form>
                    </div>
                </div>

                <div class="w-full">
                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
                        @foreach($destinations as $destination)
                            <div class="card bg-white dark:bg-gray-800 shadow-lg shadow-orange-500/50 rounded-lg p-6 transform transition-transform duration-300 hover:scale-105">
                                <div class="relative">
                                    <img src="{{ asset('images/destinations/' . $destination->photo_main) }}" alt="{{ $destination->name }}" class="w-full h-48 object-cover rounded-t-lg transition-opacity duration-300 hover:opacity-90">
                                </div>
                                <h2 class="text-xl font-bold text-gray-900 dark:text-white mt-4">{{ $destination->name }}</h2>
                                <div class="flex items-center mt-2">
                                    <i class="fas fa-map-marker-alt text-gray-900 dark:text-white mr-2"></i>
                                    <p class="text-base leading-7 text-blue-900 dark:text-white">
                                        {{ $destination->country->name }}
                                    </p>
                                </div>
                                <p class="text-base leading-7 opacity-70 mt-2 mb-0">{{ $destination->description }}</p>
                                <a href="{{ route('destination.details', ['id' => $destination->id]) }}" class="underline text-blue-500 dark:text-blue-400 mt-4 inline-block">
                                    Learn More
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="relative">
        <div class="flex justify-start mt-10 mb-10 absolute left-20 top-0 z-10">
            <section class="flex items-center space-x-4">
                <img src="{{ asset('files/file.png') }}" class="h-11" alt="Logo" title="Pop Expeditions">
                <div class="h-6 w-1 bg-blue-900"></div>
                <p class="dark:text-white">SAY YES TO POP EXPEDITIONS!</p>
            </section>
        </div>
    </div> 
    <br /> <br /> <br /> <br />
        <div class="bg-fixed min-h-screen flex items-center justify-center" style="background-image: url('{{ asset('files/rhino1.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <section class="ezy__about1 light py-14 md:py-24 dark:bg-[#0b1727] text-zinc-900 text-white">
            <div class="container px-4 bg-black bg-opacity-50 p-6 rounded-lg">
                <div class="grid md:grid-cols-2 gap-x-10">
                    <div>
                        <h2 class="md:text-end text-4xl md:text-6xl leading-tight md:leading-tight font-light">
                            Developing Amazing Things with Passion since 2016.
                        </h2>
                    </div>
                    <div class="mt-5 lg:pr-6">
                        <p class="text-base tracking-widest opacity-80 mb-0">
                            Created forth two. Behold appear first, kind all i saying fowl man itself moved which every open shall
                            moved subdue appear. Saying life wherein stars. Give dry, own, male had that us third lesser over deep.
                            May every bring in it Whose. Female earth heaven won't behold female.
                        </p>
                        <p class="text-base tracking-widest opacity-80 mt-12">
                            Moved bearing give a two after. Had. Seas. Man they're. Grass above kind saying thing for that void sixth
                            fly His after it.
                        </p>
                        <p class="text-base tracking-widest opacity-80 mt-12 mb-0">
                            The set doesn't moved. Deep don't fruit fowl gathering heaven days moving creeping under from i air. Set
                            it fifth Meat wasness. every bring in it Whose. Female earth heaven won't behold female.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>