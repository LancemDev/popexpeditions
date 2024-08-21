<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pop Expeditions</title>
    <link rel="icon" href="{{ asset('files/file.png') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/css/tw-elements.min.css" />

    <!-- Alpine.js -->
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com/3.3.0"></script>
    <script>
    tailwind.config = {
        darkMode: "class",
        theme: {
            fontFamily: {
                sans: ["Roboto", "sans-serif"],
                body: ["Roboto", "sans-serif"],
                mono: ["ui-monospace", "monospace"],
            },
        },
        corePlugins: {
            preflight: false,
        },
    };
    </script>
</head>
<body>
    {{ $slot }}

    <!-- Footer -->
    <section class="footer">
        <div class="foot">
            <div class="footer-content">
                <div class="footlinks-1">
                    <div class="column">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="/register">Register</a></li>
                            <li><a href="/about">About Us</a></li>
                            <li><a href="/safari-packages">Packages</a></li>
                            <li><a href="/accomodation">Accomodation</a></li>
                            <li><a href="/contact-us">Contact Us</a></li>
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
                        <a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
                        <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                        <a href="#" target="_blank"><i class='bx bxl-twitter' ></i></a>
                        <a href="#" target="_blank"><i class='bx bxl-linkedin' ></i></a>
                        <a href="#" target="_blank"><i class='bx bxl-youtube' ></i></a>
                        <a href="#" target="_blank"><i class='bx bxl-wordpress' ></i></a>
                        <a href="#" target="_blank"><i class='bx bxl-github'></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="end">
            <p>Copyright © 2024 Pop Expeditions All Rights Reserved.<br>Website developed by: <a href="#">Abugahh and LancemDev</a></p>
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

    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
</body>
</html>