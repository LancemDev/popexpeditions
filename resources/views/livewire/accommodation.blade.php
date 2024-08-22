<div x-data="{ showModal: false, selectedAccommodation: null }">

  <!-- Background Photo -->
  <div class="banner image-background">
    <div class="content" id="home"> 
      <nav>
          <img src="{{ asset('files/file.png') }}" class="logo" alt="Logo" title="Pop Expeditions">
          <ul class="navbar">
              <li><a href="/">Home</a></li>
              <li><a href="/about">About Us</a></li>
              <li><a href="/destinations">Destinations</a></li>
              <li><a href="/safari-packages">Packages</a></li>
              <li><a href="/accommodation">Accommodation</a></li>
              <li><a href="/contact">Contact Us</a></li>
              <li><a class="button-list" href="/enquire-now">Enquire Now</a></li>
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
                  <p class="text-white">Accommodation</p>
              </section>
          </div>
          <div class="absolute left-20 top-20 z-10">
              <p class="text-white text-4xl">Pop Expeditions Accommodations</p>
          </div>
      </div> 
    </div>


    <div class="header-inner-shape" >
        </div>
  </div>

  <!-- Main Content -->
  <section class="ezy__epgrid12 light bg-white dark:bg-[#0b1727] text-zinc-900 dark:text-white relative overflow-hidden z-10">
    <div class="container relative px-4 mx-auto">
      <div class="flex flex-col md:flex-row gap-6 mt-12">
        
        <!-- Left Navbar -->
        <div class="w-full md:w-1/3 xl:w-1/4">
          <div class="bg-white dark:bg-slate-800 rounded-xl shadow-xl border dark:border-slate-700 p-4 lg:p-6">
            <form>
              <!-- Filter By Region Section -->
              <div>
                <h5 class="text-xl leading-tight font-bold mt-6">Filter By Region</h5>
                @php
                  $regionOptions = [
                    'Northern Kenya' => 'Northern Kenya',
                    'Eastern Kenya' => 'Eastern Kenya',
                    'Central Kenya' => 'Central Kenya',
                    'Western Kenya' => 'Western Kenya',
                    'Coastal Kenya' => 'Coastal Kenya'
                  ];
                @endphp
                @foreach($regionOptions as $label => $value)
                  <div class="block mt-4">
                    <input class="form-check-input" type="checkbox" id="{{ $value }}" value="{{ $value }}" />
                    <label class="form-check-label" for="{{ $value }}">{{ $label }}</label>
                  </div>
                @endforeach
              </div>
            </form>
          </div>
        </div>

        <!-- Accommodation Gallery -->
        <div class="w-full">
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
                @foreach($accommodations as $accommodation)
                    <a href="javascript:void(0)" wire:click="selectAccommodation({{ $accommodation }})" class="relative group">
                        <img class="object-cover object-center w-full h-40 max-w-full rounded-lg transition-transform duration-1000 ease-in-out transform group-hover:scale-110 group-hover:opacity-70"
                            src="{{ asset('files/file.png') }}"
                            alt="{{ $accommodation->name }}" />
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-700 ease-in-out bg-orange-500 bg-opacity-50">
                            <p class="text-white text-lg">{{ $accommodation->name }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>

        <!-- Pagination Links -->
        <div class="mt-6">
            {{ $accommodations->links() }}
        </div>
        
        <!-- Modal -->
        <div x-show="showModal" @click="showModal = false" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50 transition-opacity duration-300 ease-out"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-300"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0">
          <div @click.stop class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 w-11/12 md:w-1/2 lg:w-1/3 transform transition-transform duration-300 ease-out"
               x-transition:enter="transition ease-out duration-300"
               x-transition:enter-start="scale-90"
               x-transition:enter-end="scale-100"
               x-transition:leave="transition ease-in duration-300"
               x-transition:leave-start="scale-100"
               x-transition:leave-end="scale-90">
            <button @click="showModal = false" class="absolute top-0 right-0 mt-4 mr-4 text-gray-600 dark:text-gray-300">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
            <template x-if="selectedAccommodation">
              <div>
                <img :src="selectedAccommodation.image_url" :alt="selectedAccommodation.name" class="w-full h-48 object-cover rounded-lg">
                <h2 class="text-xl font-bold text-gray-900 dark:text-white mt-4" x-text="selectedAccommodation.name"></h2>
                <p class="text-base leading-7 opacity-70 mt-2 mb-0" x-text="selectedAccommodation.description"></p>
                <p class="text-base leading-7 opacity-70 mt-2 mb-0" x-text="'Country: ' + selectedAccommodation.country"></p>
                <p class="text-base leading-7 opacity-70 mt-2 mb-0" x-text="'Region: ' + selectedAccommodation.city"></p>
              </div>
            </template>
          </div>
        </div>

      </div>
    </div>
  </section>

</div>