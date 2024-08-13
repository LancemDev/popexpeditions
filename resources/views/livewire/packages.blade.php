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
                        <p class="text-white">Packages</p>
                    </section>
                </div>
                <div class="absolute left-20 top-20 z-10">
                    <p class="text-white text-4xl"> Safari Packages</p>
                </div>
            </div> 
        </div>
    </div>

    <!--Photo Gallery-->
    <div class="relative">
        <div class="flex justify-start mt-10 mb-10 absolute left-20 top-0 z-10">
            <section class="flex items-center space-x-4">
                <img src="{{ asset('files/file.png') }}" class="h-11" alt="Logo" title="Pop Expeditions">
                <div class="h-6 w-1 bg-blue-900"></div>
                <p class="dark:text-white">YOUR PACKAGES</p>
            </section>
        </div>
        <div class="absolute left-20 top-20 z-10">
            <p class="dark:text-white text-4xl">AVAILABLE PACKAGES</p>
        </div>
      </div> 
    <br /><br /><br /><br /><br /><br />


    <section class="ezy__epgrid12 light bg-white dark:bg-[#0b1727] text-zinc-900 dark:text-white relative overflow-hidden z-10">
        <div class="container relative px-4 mx-auto">
            <div class="flex flex-col md:flex-row gap-6 mt-12">
                <!-- sidebar -->
                <div class="w-full md:w-1/3 xl:w-1/4">
                    <div class="bg-white dark:bg-slate-800 rounded-xl border dark:border-slate-700 p-4 lg:p-6">
                        <form>
                            <!-- Sort By Section -->
                            <div>
                                <h5 class="text-xl leading-tight font-bold mt-6">Sort By</h5>
                                @php
                                    $sortOptions = [
                                        'Default' => 'epgrid12-sort1',
                                        'Popularity' => 'epgrid12-sort2',
                                        'Average rating' => 'epgrid12-sort3',
                                        'Newness' => 'epgrid12-sort4',
                                        'Price: Low to High' => 'epgrid12-sort5',
                                        'Price: High to Low' => 'epgrid12-sort6'
                                    ];
                                @endphp
                                @foreach($sortOptions as $label => $id)
                                    <div class="block mt-4">
                                        <input class="form-check-input" type="radio" id="{{ $id }}" {{ $loop->first ? 'checked' : '' }} />
                                        <label class="form-check-label" for="{{ $id }}">{{ $label }}</label>
                                    </div>
                                @endforeach
                            </div>
    
                            <hr class="dark:border-slate-700 my-6" />
    
                            <!-- Price Section -->
                            <div>
                                <h5 class="text-xl leading-tight font-bold mt-6 mb-4">Price</h5>
                                <div class="flex items-center flex-wrap gap-2">
                                    @foreach(['Min Price', 'Max Price'] as $placeholder)
                                        <div>
                                            <select class="bg-white dark:bg-slate-800 border dark:border-slate-700 rounded-md p-3 overflow-hidden">
                                                <option selected hidden>{{ $placeholder }}</option>
                                                @foreach(range(1, 3) as $value)
                                                    <option value="{{ $value }}">{{ $value }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @if (!$loop->last)
                                            <div class="mx-2"><p class="mb-0 text-nowrap">--</p></div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
    
                            <hr class="dark:border-slate-700 my-6" />
    
                            <!-- Color Section -->
                            <div class="ezy__epgrid12-filter-content">
                                <h5 class="text-xl leading-tight font-bold mt-6">Color</h5>
                                @php
                                    $colorOptions = [
                                        'Blue' => 'epgrid12-color1',
                                        'Brown' => 'epgrid12-color2',
                                        'Grey' => 'epgrid12-color3',
                                        'Green' => 'epgrid12-color4',
                                        'Orange' => 'epgrid12-color5',
                                        'White' => 'epgrid12-color6'
                                    ];
                                @endphp
                                @foreach($colorOptions as $label => $id)
                                    <div class="block mt-4">
                                        <input class="form-check-input" type="radio" name="flexRadioColor" id="{{ $id }}" {{ $loop->first ? 'checked' : '' }} />
                                        <label class="form-check-label" for="{{ $id }}">{{ $label }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </form>
                    </div>
                </div>
    
                <!-- products -->
                <div class="w-full md:w-2/3 xl:w-3/4">
                    <!-- The card here -->
                    @foreach($packages as $package)
                        <div class="card bg-white dark:bg-gray-800 shadow-md rounded-lg p-6 mb-4">
                            <h2 class="text-xl font-bold text-gray-900 dark:text-white">{{ $package->name }}</h2>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    

  
  <!--Why Us-->
  <div class="relative">
    <div class="flex justify-start mt-10 mb-10 absolute left-20 top-0 z-10">
        <section class="flex items-center space-x-4">
            <img src="{{ asset('files/file.png') }}" class="h-11" alt="Logo" title="Pop Expeditions">
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
  
</div>
  