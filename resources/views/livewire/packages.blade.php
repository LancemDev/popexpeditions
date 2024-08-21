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
                    @foreach($packages as $package)
                        <div class="card bg-white dark:bg-gray-800 shadow-lg shadow-orange-500/50 rounded-lg p-6 transform transition-transform duration-300 hover:scale-105">
                            <div class="relative">
                                <img src="{{ asset('images/packages/' . $package->photo_main) }}" alt="{{ $package->name }}" class="w-full h-48 object-cover rounded-t-lg transition-opacity duration-300 hover:opacity-90">
                            </div>
                            <h2 class="text-xl font-bold text-gray-900 dark:text-white mt-4">{{ $package->name }}</h2>
                            <div class="flex items-center mt-2">
                                <i class="fas fa-map-marker-alt text-gray-900 dark:text-white mr-2"></i>
                                <p class="text-base leading-7 text-blue-900 dark:text-white">
                                    No name for now
                                </p>
                            </div>
                            <p class="text-base leading-7 opacity-70 mt-2 mb-0">{{ $package->description }}</p>
                            <div class="flex items-center mt-2">
                                <i class="fas fa-calendar-alt text-gray-900 dark:text-white mr-2"></i>
                                <p class="text-base leading-7 text-blue-900 dark:text-white">
                                    {{ $package->days }} days / {{ $package->nights }} nights
                                </p>
                            </div>
                            <div class="h-px bg-gray-300 my-4"></div>
                            <div class="flex items-center mt-2">
                                <i class="fas fa-dollar-sign text-gray-900 dark:text-white mr-2"></i>
                                <p class="text-base leading-7 text-blue-900 dark:text-white">
                                    {{ $package->price_details }}
                                </p>
                            </div>
                            <div class="flex items-center mt-2">
                                <i class="fas fa-star text-yellow-500 mr-2"></i>
                                <p class="text-base leading-7 text-blue-900 dark:text-white">
                                    {{ $package->rating }}
                                </p>
                            </div>
                            <a href="{{ route('package.details', ['id' => $package->id]) }}" class="underline text-blue-500 dark:text-blue-400 mt-4 inline-block">
                                Learn More
                            </a>
                        </div>
                    @endforeach
                </div>
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
  