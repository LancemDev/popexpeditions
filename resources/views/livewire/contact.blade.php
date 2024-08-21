<div>
    <!-- Background Photo -->
    <div class="banner image-background">
        <div class="content" id="home"> 
            <nav>
                <img src="{{ asset('files/file.png') }}" class="logo" alt="Logo" title="Pop Expeditions">
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
                        <img src="{{ asset('files/sent.png') }}" class="h-6" alt="Logo" title="Pop Expeditions">
                        <div class="h-6 w-1 bg-blue-900"></div>
                        <p class="text-white">Contact Us</p>
                    </section>
                </div>
                <div class="absolute left-20 top-20 z-10">
                    <p class="text-white text-4xl">Contact Us</p>
                </div>
            </div> 
        </div>

    
    </div>

   
    <!-- Contact Form -->
    <section class="contact-container">
        <div class="contact-form">
            <!-- <h2>Send Us a Message</h2> -->
            <form action="">
                <label for="duration">Duration of Stay</label>
                <select name="duration" id="duration" required>
                    <option value="" disabled selected>Select number of days</option>
                    <option value="1">1 day</option>
                    <option value="2">2 days</option>
                    <option value="3">3 days</option>
                    <option value="4">4 days</option>
                    <option value="5">5 days</option>
                    <option value="6">6 days</option>
                    <option value="7">7 days</option>
                    <option value="8">8 days</option>
                    <option value="9">9 days</option>
                    <option value="10">10 days</option>
                </select>
                

                <label for="arrival">Arrival Date</label>
                <input type="date" name="arrival" id="arrival" required>

                <label for="trip-type">Type of Trip</label>
                <input type="text" name="trip-type" id="trip-type" placeholder="Type of Trip" required>

                <label for="destination">Where would you like to go? (required)</label>
                <select name="destination" id="destination" required>
                    <option value="Kenya">Kenya</option>
                    <option value="Tanzania">Tanzania</option>
                    <option value="Rwanda">Rwanda</option>
                    <option value="Uganda">Uganda</option>
                    <!-- <option value="South Africa">South Africa</option>
                    <option value="Namibia">Namibia</option>
                    <option value="Botswana">Botswana</option>
                    <option value="Zambia & Zimbabwe">Zambia & Zimbabwe</option> -->
                </select>

                <label for="budget">Budget</label>
                <input type="text" name="budget" id="budget" placeholder="Budget">

                <label for="adults">Number of Adults</label>
                <input type="number" name="adults" id="adults" placeholder="Number of Adults">

                <label for="children">Number of Children</label>
                <input type="number" name="children" id="children" placeholder="Number of Children">

                <label for="children-ages">Ages of Children</label>
                <input type="text" name="children-ages" id="children-ages" placeholder="Ages of Children">

                <label for="first-name">First Name (required)</label>
                <input type="text" name="first-name" id="first-name" placeholder="First Name" required>

                <label for="last-name">Last Name (required)</label>
                <input type="text" name="last-name" id="last-name" placeholder="Last Name" required>

                <label for="email">Email Address (required)</label>
                <input type="email" name="email" id="email" placeholder="Your E-mail" required>

                <label>
                    <input type="checkbox" name="newsletter"> Sign up for news and updates
                </label>

                <label for="additional-info">Anything else you think we should know at this stage</label>
                <textarea name="additional-info" id="additional-info" cols="30" rows="10" placeholder="Your Message"></textarea>

                <input type="submit" value="Submit" class="submit-btn">
            </form>
        </div>

        <!-- <div class="contact-info">
            <h2>Get in Touch</h2>
            <p><strong>Location:</strong> 123 Main Street, Nairobi, Kenya</p>
            <p><strong>Phone:</strong> +254 700 000 000</p>
            <p><strong>Email:</strong> info@firstflighttravels.com</p>
        </div> -->
    </section>

</div>
