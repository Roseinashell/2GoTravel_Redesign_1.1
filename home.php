<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Home</title>
</head>
<body>
    <?php include 'header.php'; ?>

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
                        <a href="accommodation.php" class="inline-flex items-center gap-2 font-bold px-5 py-3 rounded-lg bg-[#E0006F] text-white shadow hover:bg-[#c10060] transition">
                            <i class="fa-solid fa-bed"></i>
                            View Accommodation
                        </a>
                        <a href="contact.php" class="hover:border-[#E0006F] inline-flex items-center gap-2 font-bold px-5 py-3 rounded-lg bg-white text-[#E0006F] border border-gray-200 transition">
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
    <?php include 'footer.php'; ?>
</body>
</html>