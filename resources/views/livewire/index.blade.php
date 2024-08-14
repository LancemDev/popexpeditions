<div>

<!-- Background Video & Header -->

    <div class="banner video-background">
        <video src="{{ asset('files/bgvid.mp4') }}" type="video/mp4" autoplay muted loop></video>
    
    <!-- Header -->

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
            <h1 class="left-align">POP EXPEDITIONS</h1>
            <p class="left-align">Get upto 20% off on your tours!</p>
            <a href="/register" class="button">Start Traveling!</a>
        </div>
        </div>
    </div>


    
    <!-- Welcome and About Pop Expeditions --> 
    <div class="relative">
      <div class="flex justify-start mt-10 mb-10 absolute left-20 top-0 z-10">
          <section class="flex items-center space-x-4">
              <img src="{{ asset('files/sent.png') }}" class="h-6" alt="Logo" title="Pop Expeditions">
              <div class="h-6 w-1 bg-blue-900"></div>
              <p class="text-gray-700">Beautiful places await</p>
          </section>
      </div>
    </div> 
    <section class="ezy__about12 light bg-white dark:bg-[#0b1727] text-zinc-900 dark:text-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-12 gap-5 justify-center items-center">
                <div class="col-span-12 lg:col-span-6">
                    <div class="lg:px-7">
                        <h1 class="md:text-3xl leading-tight font-medium mb-2">Welcome to Pop Expeditions</h1>
                        <p class="text-lg leading-normal opacity-75 my-6">
                            Completely network collaborative web services via user-centric initiatives. Quickly promote sticky
                            testing procedures collaborator before unique process improvements. Since our inception set out in 2012,
                            TalEx has set out to disrupt inception the HR & Talent/Staffing Management industry. Purposefully
                            designed by our founders (Amrita Grewal and Julie Dacar) to connect great companies and great talent.
                        </p>
                        <div class="mt-12">
                        </div>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-6">
                    <!-- <div class="flex justify-center lg:justify-start lg:ml-12"> -->
                    <div class="flex justify-center items-center lg:ml-12" style="height: 100%;">
                        <img src="{{ asset('files/giraffess.jpg') }}" alt="" class="max-w-full" style="height: 600px; margin-top: 70px;" />
                    </div>
                </div>
            </div>
        </div>
    </section>
  


  <!-- Packages -->



  <!-- Destinations -->
  <div class="relative">
    <div class="flex justify-start mt-10 mb-10 absolute left-20 top-0 z-10">
      <section class="flex items-center space-x-4">
        <img src="{{ asset('files/file.png') }}" class="h-6" alt="Logo" title="Pop Expeditions">
        <div class="h-6 w-1 bg-blue-900"></div>
        <p class="text-gray-700">Beautiful places await</p>
    </section>
    </div>
  </div>
  <br /><br /><br /><br />


  <section class="container">
      <div class="w-full">
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
            @foreach($destinations->take(3) as $destination)
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
    </section>
  


  <!-- Testomonials -->
  <div class="relative">
    <div class="flex justify-start mt-10 mb-10 absolute left-20 top-0 z-10">
      <section class="flex items-center space-x-4">
        <img src="{{ asset('files/sent.png') }}" class="h-6" alt="Logo" title="Pop Expeditions">
        <div class="h-6 w-1 bg-blue-900"></div>
        <p class="text-gray-700">Beautiful places await</p>
    </section>
    </div>
  </div>
  <section class="ezy__testimonial7 light py-14 md:py-24 bg-white dark:bg-[#0b1727] text-zinc-900 dark:text-white">
      <div class="container px-4 mx-auto">
        <div class="grid grid-cols-12 mb-6 md:mb-12">
          <!-- <div class="col-span-12 lg:col-span-5">
            <h2 class="text-3xl leading-none md:text-[45px] font-bold mb-6">
              Everyone should believe in What Our Client Say.
            </h2>
          </div> -->
          <div class="col-span-12 lg:col-span-6 lg:col-start-4 text-center">
            <!-- <h2 class="text-3xl leading-none md:text-[45px] font-bold mb-6">Client Testomonials</h2> -->
            <h2 class="client-testimonials-title">Client Testimonials</h2>

            <!-- <p class="text-lg opacity-80">
              Had creeping had, appear that made living morning over brought stars likeness first, said Don't god Upon
              them days them.
            </p> -->
          </div>
        </div>
    
        <div class="grid grid-cols-3 gap-6">
          <div class="col-span-3 md:col-span-1">
            <div class="bg-white dark:bg-slate-800 shadow-xl rounded-2xl p-6 lg:p-12 h-full">
              <img
                src="https://cdn.easyfrontend.com/pictures/users/user22.jpg"
                alt=""
                class="max-w-full h-auto rounded-full mb-6 border"
                width="100"
              />
              <h4 class="text-xl font-medium mb-1">Akshay Kumar</h4>
              <p class="mb-6">
                <span class="fas fa-star text-yellow-500"></span>
                <span class="fas fa-star text-yellow-500"></span>
                <span class="fas fa-star text-yellow-500"></span>
                <span class="fas fa-star-half-alt text-yellow-500"></span>
                <span class="fas fa-star text-yellow-200 dark:text-opacity-20"></span>
              </p>
              <p class="opacity-80">
                Over third given bring lights divide saying. Fowl, all creeping second saw creature isn't gathered
                likeness shall fruitful saying let.
              </p>
            </div>
          </div>
          <div class="col-span-3 md:col-span-1">
            <div class="bg-white dark:bg-slate-800 shadow-xl rounded-2xl p-6 lg:p-12 h-full">
              <img
                src="https://cdn.easyfrontend.com/pictures/users/user4.jpg"
                alt=""
                class="max-w-full h-auto rounded-full mb-6 border"
                width="100"
              />
              <h4 class="text-xl font-medium mb-1">Raima Sen</h4>
              <p class="mb-6">
                <span class="fas fa-star text-yellow-500"></span>
                <span class="fas fa-star text-yellow-500"></span>
                <span class="fas fa-star text-yellow-500"></span>
                <span class="fas fa-star-half-alt text-yellow-500"></span>
                <span class="fas fa-star text-yellow-200 dark:text-opacity-20"></span>
              </p>
              <p class="opacity-80">
                Tree the whales fifth for their whose. Deep From fruitful spirit creature morning, fowl greater said, it
                first creepeth after.
              </p>
            </div>
          </div>
          <div class="col-span-3 md:col-span-1">
            <div class="bg-white dark:bg-slate-800 shadow-xl rounded-2xl p-6 lg:p-12 h-full">
              <img
                src="https://cdn.easyfrontend.com/pictures/users/user20.jpg"
                alt=""
                class="max-w-full h-auto rounded-full mb-6 border"
                width="100"
              />
              <h4 class="text-xl font-medium mb-1">Arjun Kapur</h4>
              <p class="mb-6">
                <span class="fas fa-star text-yellow-500"></span>
                <span class="fas fa-star text-yellow-500"></span>
                <span class="fas fa-star text-yellow-500"></span>
                <span class="fas fa-star-half-alt text-yellow-500"></span>
                <span class="fas fa-star text-yellow-200 dark:text-opacity-20"></span>
              </p>
              <p class="opacity-80">
                Assumenda non repellendus distinctio nihil dicta sapiente, quibusdam maiores, illum at, aliquid
                blanditiis eligendi qui.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  

    <!-- Why us -->

    <section class="flex justify-center items-center space-x-4">
      <img src="{{ asset('files/sent.png') }}" class="h-6" alt="Logo" title="Pop Expeditions">
      <div class="h-6 w-1 bg-blue-900"></div>
      <p class="text-white-700">Don't Be A Tourist, Be A Traveler</p>
    </section>

    <section class="why-us">
      <h2 class="title">Why Choose Us?</h2>
      <div class="why-us-icons">
          <div class="why-us-item">
              <img src="{{ asset('files/rating.png') }}" alt="Expert Guides">
              <h1><strong>Expert <br> Guides</strong></h1>
          </div>
          <div class="why-us-item">
              <img src="{{ asset('files/journey.png') }}" alt="Customized Tours">
              <h1><strong>Customized <br> Tours</strong> </h1>
          </div>
          <div class="why-us-item">
              <img src="{{ asset('files/green-energy.png') }}"  alt="Sustainable Practices">
              <h1><strong>Sustainable <br> Practices</strong> </h1>
          </div>
          <div class="why-us-item">
            <img src="{{ asset('files/24-hours.png') }}"  alt="Sustainable Practices">
            <h1><strong>24hrs</strong> </h1>
        </div>
      </div>
    </section>

  

    <!-- Find your perfect accomodation-->


    <!-- Newsletter -->
    <div class="relative">
      <div class="flex justify-start mt-10 mb-10 absolute left-20 top-0 z-10">
        <section class="flex items-center space-x-4">
          <img src="{{ asset('files/sent.png') }}" class="h-6" alt="Logo" title="Pop Expeditions">
          <div class="h-6 w-1 bg-blue-900"></div>
          <p class="text-gray-700">Beautiful places await</p>
      </section>
      </div>
    </div>

    <section class="newsletter">
        <div class="newstext">
            <h2>Newsletter</h2>
            <p>Subscribe to get offers and latest<br>updates every week!</p>
        </div>

        <div class="send">
            <form action="">
                <input type="email" name="emailid" placeholder="E-mail" required>
                <input type="submit" value="Subscribe">
            </form>
        </div>

    </section>

    
</div>
