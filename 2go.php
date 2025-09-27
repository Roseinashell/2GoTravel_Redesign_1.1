<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
        <title>2GO - Travel</title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </head>


    <body class="min-w-[320px]">
        <div id="preloader" class="fixed inset-0 bg-white flex items-center justify-center z-50 transition-opacity duration-500">
            <div class="animate-spin rounded-full h-16 w-16 border-t-4 border-pink-600 border-solid"></div>
        </div>

        <script>
            window.addEventListener("load", () => {
                const preloader = document.getElementById("preloader");
                    preloader.classList.add("opacity-0");
                    setTimeout(() => {
                        preloader.style.display = "none";
                    }, 1000);
            });
        </script>

        <header class="bg-white shadow-sm sticky top-0 z-40">
            <div class="max-w-7xl mx-auto px-6">
                <div class="flex justify-between items-center h-20">
                    <!-- Logo -->
                    <a href="#home" class="flex items-center gap-3">
                        <img src="Img/magentaLogo.png" alt="2GO Logo" class="h-8 w-auto object-contain">
                    </a>

                    <!-- Desktop Nav -->
                    <nav class="hidden md:flex space-x-8 font-medium">
                        <a href="#home" class="hover:text-pink-600">Home</a>
                        <a href="#accommodation" class="hover:text-pink-600">Accommodation</a>
                        <a href="#outlets" class="hover:text-pink-600">Outlets</a>
                        <a href="#contact" class="hover:text-pink-600">Contact Us</a>
                        <a href="#faqs" class="hover:text-pink-600">FAQs</a>
                    </nav>

                    <!-- Mobile Hamburger -->
                    <div class="md:hidden">
                        <button id="menu-btn" class="text-gray-800 focus:outline-none text-2xl">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden bg-white shadow-lg">
                <div class="px-4 py-6 space-y-4 flex flex-col items-center font-medium">
                    <a href="#home" class="block hover:text-pink-600">Home</a>
                    <a href="#accommodation" class="block hover:text-pink-600">Accommodation</a>
                    <a href="#outlets" class="block hover:text-pink-600">Outlets</a>
                    <a href="#contact" class="block hover:text-pink-600">Contact Us</a>
                    <a href="#faqs" class="block hover:text-pink-600">FAQs</a>
                </div>
            </div>

            <!-- Active Link + Mobile Toggle Script -->
            <script>
                document.addEventListener("DOMContentLoaded", () => {
                const navLinks = document.querySelectorAll("header nav a, #mobile-menu a");
                const sections = document.querySelectorAll("section[id]");
                const menuBtn = document.getElementById("menu-btn");
                const mobileMenu = document.getElementById("mobile-menu");

                // Toggle mobile menu
                menuBtn.addEventListener("click", () => {
                    mobileMenu.classList.toggle("hidden");
                });

                function removeActive() {
                    navLinks.forEach(link => link.classList.remove("text-pink-600", "font-bold"));
                }

                // Clicking
                navLinks.forEach(link => {
                    link.addEventListener("click", () => {
                    removeActive();
                    link.classList.add("text-pink-600", "font-bold");
                    mobileMenu.classList.add("hidden"); // close menu after click
                    });
                });

                // Scrolling
                window.addEventListener("scroll", () => {
                    let current = "";
                    sections.forEach(section => {
                    const sectionTop = section.offsetTop - 100;
                    if (scrollY >= sectionTop) {
                        current = section.getAttribute("id");
                    }
                    });

                    navLinks.forEach(link => {
                    link.classList.remove("text-pink-600", "font-bold");
                    if (link.getAttribute("href") === "#" + current) {
                        link.classList.add("text-pink-600", "font-bold");
                    }
                    });
                });
                });
            </script>
        </header>


        
        <!-- HOME SECTION -->
        <section id="home" class="relative overflow-hidden bg-gradient-to-b from-white via-white to-pink-50 py-20">
            <!-- Decorative blur circle -->
            <div class="absolute -right-[10%] -top-[12%] w-[520px] h-[520px] bg-[#E0006F]/10 rounded-full blur-3xl" aria-hidden="true"></div>

            <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-10 items-center px-6 relative">            
                <!-- Right sie / Slideshow) -->
                <div class="relative w-full max-w-md mx-auto rounded-2xl shadow-lg overflow-hidden">
                    <!-- Slideshow wrapper -->
                    <div id="slideshow" class="w-full aspect-[3/4] relative">
                        <img src="img/slides/s1.png" alt="2GO Slide 1" class="slide absolute inset-0 w-full h-full object-cover opacity-100 transition-opacity duration-1000">
                        <img src="img/slides/s2.png" alt="2GO Slide 2" class="slide absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-1000">
                        <img src="img/slides/s3.png" alt="2GO Slide 3" class="slide absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-1000">
                        <img src="img/slides/s4.png" alt="2GO Slide 4" class="slide absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-1000">
                        <img src="img/slides/s5.png" alt="2GO Slide 5" class="slide absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-1000">
                        <img src="img/slides/s6.png" alt="2GO Slide 6" class="slide absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-1000">
                    </div>

                    <!-- Navigation dots -->
                    <div id="dots" class="absolute bottom-3 left-1/2 -translate-x-1/2 flex gap-2">
                        <button class="dot w-3 h-3 rounded-full bg-white/70"></button>
                        <button class="dot w-3 h-3 rounded-full bg-white/30"></button>
                        <button class="dot w-3 h-3 rounded-full bg-white/30"></button>
                        <button class="dot w-3 h-3 rounded-full bg-white/30"></button>
                        <button class="dot w-3 h-3 rounded-full bg-white/30"></button>
                        <button class="dot w-3 h-3 rounded-full bg-white/30"></button>
                    </div>
                </div>
            
                <!-- Left sie -->
                <div>
                    <span class="text-[#E0006F] font-extrabold tracking-widest uppercase text-xs">
                        Philippine-wide coverage
                    </span>
                    <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mt-3 mb-5 text-gray-900">
                        Seamless Travel Across the Philippines
                    </h1>
                    <p class="text-gray-600 text-base md:text-lg mb-8">
                        From island-to-island ferry journeys to comfortable passenger services, 2GO Travel connects people and destinations with safe, reliable, and affordable sea travel.
                    </p>

                    <!-- CTA Buttons -->
                    <div class="flex flex-wrap gap-4 mb-10">
                        <a href="#accommodation" class="inline-flex items-center gap-2 font-bold px-5 py-3 rounded-lg bg-[#E0006F] text-white shadow hover:bg-[#c10060] transition">
                            <i class="fa-solid fa-bed"></i>
                            View Accommodation
                        </a>
                        <a href="#contact" class="hover:border-[#E0006F] inline-flex items-center gap-2 font-bold px-5 py-3 rounded-lg bg-white text-[#E0006F] border border-gray-200 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                            </svg>
                            Contact Us
                        </a>
                    </div>

                    <!-- Stats kuno -->
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-5 text-center">
                        <div class="p-4 bg-white rounded-lg shadow-sm border border-pink-100 flex flex-col items-center justify-center">
                            <strong class="text-xl">20+</strong>
                            <span class="text-xs text-gray-500 mt-1">Destinations Nationwide</span>
                        </div>
                        <div class="p-4 bg-white rounded-lg shadow-sm border border-pink-100 flex flex-col items-center justify-center">
                            <strong class="text-xl">24/7</strong>
                            <span class="text-xs text-gray-500 mt-1">Online Booking</span>
                        </div>
                        <div class="p-4 bg-white rounded-lg shadow-sm border border-pink-100 flex flex-col items-center justify-center">
                            <strong class="text-xl">Comfort</strong>
                            <span class="text-xs text-gray-500 mt-1">Cabins & Amenities</span>
                        </div>
                        <div class="p-4 bg-white rounded-lg shadow-sm border border-pink-100 flex flex-col items-center justify-center">
                            <strong class="text-xl">40+ Years</strong>
                            <span class="text-xs text-gray-500 mt-1">Trusted Travel Partner</span>
                        </div>
                    </div>
                </div>
            </div>

            <script>
            const slides = document.querySelectorAll('#slideshow .slide');
            const dots = document.querySelectorAll('#dots .dot');
            let index = 0;

            function showSlide(i) {
                slides.forEach((slide, idx) => {
                slide.classList.toggle("opacity-100", idx === i);
                slide.classList.toggle("opacity-0", idx !== i);
                dots[idx].classList.toggle("bg-white/70", idx === i);
                dots[idx].classList.toggle("bg-white/30", idx !== i);
                });
                index = i;
            }

            function nextSlide() {
                index = (index + 1) % slides.length;
                showSlide(index);
            }

            setInterval(nextSlide, 4000);

            dots.forEach((dot, i) => {
                dot.addEventListener("click", () => showSlide(i));
            });

            showSlide(index);

            </script>
        </section>


        <!-- ACCOMMODATION SECTION -->
        <section id="accommodation" class="bg-white py-20">
            <div class="max-w-6xl mx-auto px-6 text-center">
                <h2 class="text-3xl font-bold mb-6 text-gray-800">Meet The Fleet</h2>
                <p class="text-gray-600 max-w-2xl mx-auto mb-12">
                    Prices may vary among our vessels depending on your destination
                </p>

                <div class="grid md:grid-cols-4 gap-6">
                    <?php
                    $vessels = [
                        [
                            'image'=>'maligaya.png',
                            'title'=>'M.V. 2GO Maligaya',
                            'rooms'=>['maligaya-img1.png', 'maligaya-img2.png', 'maligaya-img3.png', 'maligaya-img4.png', 'maligaya-img5.png']
                        ],
                        [
                            'image'=>'masagana.png',
                            'title'=>'M.V. 2GO Masagana',
                            'rooms'=>['masagana-img1.png', 'masagana-img2.png', 'masagana-img3.png', 'masagana-img4.png', 'masagana-img5.png', 'masagana-img6.png']
                        ],
                        [
                            'image'=>'masigla.png',
                            'title'=>'M.V. 2GO Masigla',
                            'rooms'=>['masigla-img1.png']
                        ],
                        [
                            'image'=> 'masikap.png',
                            'title' =>'M.V. 2GO Masikap',
                            'rooms' => ['masikap-img1.png', 'masikap-img2.png', 'masikap-img3.png', 'masikap-img4.png', 'masikap-img5.png', 'masikap-img6.png']
                        ],
                        [
                            'image'=> 'augustine.png',
                            'title' =>'St. Augustine of Hippo',
                            'rooms' => []
                        ],
                        [
                            'image'=> 'francis.png',
                            'title' =>'St. Francis Xavier',
                            'rooms' => ['francis-img1.png', 'francis-img2.png', 'francis-img3.png', 'francis-img4.png', 'francis-img5.png', 'francis-img6.png', 'francis-img7.png', 'francis-img8.png']
                        ],
                        [
                            'image'=> 'ignatius.png',
                            'title' =>'St. Ignatius of Loyola',
                            'rooms' => ['ignatius-img1.png', 'ignatius-img2.png', 'ignatius-img3.png', 'ignatius-img4.png', 'ignatius-img5.png', 'ignatius-img6.png']
                        ],
                        [
                            'image'=> 'michael.png',
                            'title' =>'St. Michael the Archangel',
                            'rooms' => []
                        ],
                    ];

                    foreach($vessels as $vessel){
                        $id = strtolower(str_replace(' ','-', $vessel['title']));

                        echo '<a href="#modal-'.$id.'" class="relative rounded-2xl overflow-hidden shadow hover:shadow-lg hover:opacity-80 transition cursor-pointer block">';
                        echo '<img src="img/vessel/'.$vessel['image'].'" alt="'.$vessel['title'].'" class="w-full h-48 object-cover">';
                        echo '</a>';

                        echo '<div id="modal-'.$id.'" class="fixed inset-0 bg-black/70 flex items-center justify-center z-50 opacity-0 pointer-events-none transition-opacity duration-300 target:opacity-100 target:pointer-events-auto">';
                        echo '<div class="bg-white rounded-2xl shadow-xl max-w-5xl w-full relative p-6 overflow-y-auto max-h-[90vh]">';
                        echo '<a href="#accommodation" class="absolute top-2 right-2 text-gray-600 hover:text-gray-800 text-3xl font-bold">&times;</a>';
                        echo '<h3 class="text-xl font-bold mb-4 text-center">'.$vessel['title'].'</h3>';

                        if(!empty($vessel["rooms"])){
                            echo '<div class="grid sm:grid-cols-2 md:grid-cols-3 gap-4">';
                            foreach($vessel['rooms'] as $room){
                                echo '<img src="img/vessel/'.$room.'" alt="'.$vessel['title'].' Room" class="w-full h-48 object-cover rounded-lg shadow hover:scale-105 transition">';
                            }
                            echo '</div>';
                        } else {
                            echo '<p class="text-gray-500 text-center">No accommodation images available for this vessel.</p>';
                        }

                        echo '</div></div>'; 
                    }
                    ?>
                </div>
            </div>
        </section>


        <!-- OUTLETS SECTION -->
        <section id="outlets" class="bg-pink-50 py-20">
            <div class="max-w-6xl mx-auto px-6 text-center">
                <h2 class="text-3xl font-bold mb-6 text-gray-800">2GO Travel Outlets</h2>
                <p class="text-gray-600 max-w-2xl mx-auto mb-12">
                    Visit our 2GO Travel ticketing and service outlets nationwide. Book tickets, manage your trips, or inquire about our services at the location nearest you.
                </p>

                <div class="grid md:grid-cols-4 gap-8">
                    <?php
                        $outlets = [
                            [
                                'image'=>'manila.png', 
                                'name'=>'Metro Manila',
                                'address'=>'2GO Travel Main Office, Pier 4, North Harbor, Manila',
                                'email'=>'manila@2go.com.ph',
                                'phone'=>'(+63) 23 456-7890',
                                'map'=>'https://maps.app.goo.gl/RftDNJHEVB4anrQX6'
                            ],
                            [
                                'image'=>'cebu.png', 
                                'name'=>'Cebu',
                                'address'=>'2GO Travel Cebu Ticketing Office, Pier 4, North Reclamation Area, Cebu City',
                                'email'=>'cebu@2go.com.ph',
                                'phone'=>'(+63) 23 456-7890',
                                'map'=>'https://maps.app.goo.gl/NZUJk2YdTvQoUMoJ7'
                            ],
                            [
                                'image'=>'davao.png', 
                                'name'=>'Davao',
                                'address'=>'2GO Travel Davao Office, Sta. Ana Wharf, Davao City',
                                'email'=>'davao@2go.com.ph',
                                'phone'=>'(+63) 23 456-7890',
                                'map'=>'https://maps.app.goo.gl/5VLiC3MjsecfFhEL9'
                            ],
                            [
                                'image'=>'iloilo.png', 
                                'name'=>'Iloilo',
                                'address'=>'2GO Travel Iloilo Office, Muelle Loney St., Iloilo City',
                                'email'=>'iloilo@2go.com.ph',
                                'phone'=>'(+63) 23 456-7890',
                                'map'=>'https://maps.app.goo.gl/W9rnpySrmRv5XdVdA'
                            ],
                        ];

                        foreach($outlets as $out){
                            echo '<div class="bg-white p-6 rounded-2xl shadow hover:shadow-md transition flex flex-col justify-between h-full">';

                            echo '<img src="img/outlets/'.$out['image'].'" alt="'.$out['name'].'" class="rounded-lg mb-4 h-40 w-full object-cover">'; 

                            echo '<div class="flex-1">';
                            echo '<h3 class="font-semibold text-lg mb-1">'.$out['name'].'</h3>';
                            echo '<p class="text-gray-600 text-sm mb-1">'.$out['address'].'</p>';

                            echo '<p class="text-gray-600 text-sm mb-1 flex items-center justify-center gap-2">';
                            echo '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">';
                            echo '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />';
                            echo '</svg>';
                            echo '<a href="mailto:'.$out['email'].'" class="hover:text-pink-600">'.$out['email'].'</a>';
                            echo '</p>';

                            echo '<p class="text-gray-600 text-sm mb-2 flex items-center justify-center gap-2">';
                            echo '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">';
                            echo '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />';
                            echo '</svg>';
                            echo '<a href="tel:'.$out['phone'].'" class="hover:text-pink-600">'.$out['phone'].'</a>';
                            echo '</p>';

                            echo '</div>';

                            echo '<a href="'.$out['map'].'" target="_blank" class="mt-auto inline-block text-sm font-semibold px-4 py-2 rounded-lg bg-[#E0006F] text-white hover:bg-[#c10060] transition">View on Map</a>';
                            echo '</div>';
                        }
                    ?>
                </div>
            </div>
        </section>


        <!-- CONTACT SECTION -->
        <section id="contact" class="py-20">
            <div class="max-w-6xl mx-auto px-6">
                <h2 class="text-3xl font-bold mb-6 text-center text-gray-800">Get in Touch</h2>
                <p class="text-gray-600 text-center max-w-2xl mx-auto mb-12">
                    Contact us for ticketing, reservations, customer assistance, and more. Our team is ready to help.
                </p>
                <div class="md:flex md:items-center md:gap-8">
                    <div class="md:w-1/2 space-y-6">
                        <!-- Card1 -->
                        <div class="bg-white p-6 rounded-2xl shadow space-y-3">
                            <h3 class="text-[#E0006F] font-semibold mb-2">
                                For Online Ticketing, Reservations, Schedules, Rates, and Group Bookings
                            </h3>
                            <p class="text-gray-600 text-sm flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                </svg>
                                <a href="mailto:travel@2go.com.ph" class="hover:text-pink-600">travel@2go.com.ph</a>
                            </p>
                            <p class="text-gray-600 text-sm flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                </svg>
                                <a href="tel:+63285287000" class="hover:text-pink-600">(+63) 23 456-7890</a>
                            </p>
                        </div>

                        <!-- Card2 -->
                        <div class="bg-white p-6 rounded-2xl shadow space-y-3">
                            <h3 class="text-[#E0006F] font-semibold mb-2">
                                For Customer Support, MICE, Apprenticeship Program, and Point-to-Point Services
                            </h3>
                            <p class="text-gray-600 text-sm flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                </svg>
                                <a href="mailto:support@2go.com.ph" class="hover:text-pink-600">support@2go.com.ph</a>
                            </p>
                            <p class="text-gray-600 text-sm flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                </svg>
                                <a href="tel:+639224352642" class="hover:text-pink-600">(+63) 123 456-7890</a>
                            </p>
                            <p class="text-gray-600 text-sm flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                </svg>
                                <a href="tel:+63285287171" class="hover:text-pink-600">(+63) 123 456-7890 (Local: 80326S)</a>
                            </p>
                        </div>
                    </div>
                    <div class="md:w-1/2 mt-8 md:mt-0">
                        <img src="img/contact.png" alt="Contact 2GO">
                    </div>
                </div>
            </div>
        </section>


        <!-- FAQs Section -->
        <section id="faqs" class="bg-pink-50 py-20">
            <div class="max-w-4xl mx-auto px-6">
                <h2 class="text-3xl font-bold mb-6 text-center text-gray-800">FAQs</h2>
                <p class="text-gray-600 text-center max-w-2xl mx-auto mb-12">
                    Find answers to the most common questions about booking, travel policies, and onboard services.
                </p>
                <div class="space-y-4">
                    <!-- FAQ Item -->
                    <details class="faq-item bg-white p-6 rounded-2xl shadow group">
                        <summary class="text-[#E0006F] font-semibold mb-2 flex justify-between items-center cursor-pointer list-none">
                            How can I book a ticket with 2GO Travel?
                            <i class="fa-solid fa-chevron-down transition-transform duration-300 group-open:rotate-180"></i>
                        </summary>
                        <p class="text-gray-600 text-sm mt-2">
                            You can book tickets online through the official 2GO Travel website, at any 2GO outlet nationwide, or through accredited travel agents.
                        </p>
                    </details>

                    <details class="faq-item bg-white p-6 rounded-2xl shadow group">
                        <summary class="text-[#E0006F] font-semibold mb-2 flex justify-between items-center cursor-pointer list-none">
                            How do I check my booking or ticket status?
                            <i class="fa-solid fa-chevron-down transition-transform duration-300 group-open:rotate-180"></i>
                        </summary>
                        <p class="text-gray-600 text-sm mt-2">
                            Visit the “Manage Booking” section on the 2GO Travel website and enter your booking reference number, or contact the hotline for assistance.
                        </p>
                    </details>

                    <details class="faq-item bg-white p-6 rounded-2xl shadow group">
                        <summary class="text-[#E0006F] font-semibold mb-2 flex justify-between items-center cursor-pointer list-none">
                            What accommodations are available on board?
                            <i class="fa-solid fa-chevron-down transition-transform duration-300 group-open:rotate-180"></i>
                        </summary>
                        <p class="text-gray-600 text-sm mt-2">
                            2GO Travel offers a variety of accommodations including Economy, Tourist Class, Business Class, and private suites to fit your budget and comfort needs.
                        </p>
                    </details>

                    <details class="faq-item bg-white p-6 rounded-2xl shadow group">
                        <summary class="text-[#E0006F] font-semibold mb-2 flex justify-between items-center cursor-pointer list-none">
                            Can I bring luggage on board?
                            <i class="fa-solid fa-chevron-down transition-transform duration-300 group-open:rotate-180"></i>
                        </summary>
                        <p class="text-gray-600 text-sm mt-2">
                            Yes, passengers are allowed baggage within the free allowance depending on their ticket type. Excess baggage may be subject to additional fees.
                        </p>
                    </details>

                    <details class="faq-item bg-white p-6 rounded-2xl shadow group">
                        <summary class="text-[#E0006F] font-semibold mb-2 flex justify-between items-center cursor-pointer list-none">
                            How can I check sailing schedules?
                            <i class="fa-solid fa-chevron-down transition-transform duration-300 group-open:rotate-180"></i>
                        </summary>
                        <p class="text-gray-600 text-sm mt-2">
                            Sailing schedules are posted on the official 2GO Travel website and Facebook page. You may also call the hotline or visit the nearest outlet for updated schedules.
                        </p>
                    </details>
                </div>
            </div>
        </section>

        <script>
            const faqs = document.querySelectorAll(".faq-item");

            faqs.forEach((faq) => {
                faq.addEventListener("toggle", () => {
                    if (faq.open) {
                        faqs.forEach((other) => {
                            if (other !== faq) {other.removeAttribute("open");}
                        });
                    }
                });
            });
        </script>


        <!-- FOOTER -->
        <footer class="bg-[#E0006F] text-white py-8">
            <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-4 gap-8">
                <!-- Column 1 -->
                <div>
                    <img src="img/whiteLogo.png" alt="2GO Logo" class="h-10 mb-3">
                    <p class="text-sm text-pink-100 mb-4">Delivering logistics and travel solutions across the Philippines.</p>
                    
                    <div class="flex items-center gap-4">
                        <a href="https://www.facebook.com/2GOTravel" class="text-white" aria-label="Facebook">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                        <a href="https://x.com/2go_travel" class="text-white" aria-label="X (Twitter)">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                        <a href="https://www.instagram.com/2go_travel" class="text-white" aria-label="Instagram">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="https://www.youtube.com/channel/UCIoxYWenwMO85ZC9rn5XtDw" class="text-white" aria-label="YouTube">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </div>
                </div>

                <!-- Column 2 -->
                <div>
                    <h4 class="font-semibold mb-3">Quick Links</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#home" class="hover:underline">Home</a></li>
                        <li><a href="#accommodation" class="hover:underline">Accommodation</a></li>
                        <li><a href="#outlets" class="hover:underline">Outlets</a></li>
                        <li><a href="#contact" class="hover:underline">Contact Us</a></li>
                        <li><a href="#faqs" class="hover:underline">Frequently Asked Questions</a></li>
                    </ul>
                </div>

                <!-- Column 3 -->
                <div>
                    <h4 class="font-semibold mb-3">Contact</h4>

                    <p class="text-sm flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                        </svg>
                        <a href="mailto:support@2go.com.ph">support@2go.com.ph</a>
                    </p>

                    <p class="text-sm flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                        </svg>
                        <a href="tel:+63287729700">+63 2 8772 9700</a>
                    </p>

                    <p class="text-sm flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                        </svg>
                        Manila, Philippines
                    </p>
                </div>

                <!-- Column 4 -->
                <div>
                    <h4 class="font-semibold mb-3">OUr Company</h4>

                    <p class="space-y-2 text-sm">
                        <a href="#about" class="hover:underline">About Us</a>
                    </p>

                    <p class="space-y-2 text-sm">
                        <a href="https://2go.com.ph/careers/" class="hover:underline">Careers</a>
                    </p>
                </div>
            </div>
            <div class="text-center text-sm mt-6 text-pink-100">&copy; 2025 2GO Group, Inc. All r\Rights Reserved.</div>
        </footer>
    </body>
</html>