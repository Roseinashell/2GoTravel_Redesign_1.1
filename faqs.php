<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>FAQS</title>
</head>
<body>
    <?php include 'header.php'; ?>

    <!-- FAQs Section -->
    <section id="faqs" class="bg-pink-50 py-20">
        <div class="absolute -right-[10%] -top-[12%] w-[520px] h-[520px] bg-[#E0006F]/10 rounded-full blur-3xl" aria-hidden="true"></div>
        <div class="max-w-4xl mx-auto px-6">
            <h2 class="text-3xl font-bold mb-6 text-center text-gray-800">FAQs</h2>
            <p class="text-gray-600 text-center max-w-2xl mx-auto mb-12">
                    Find answers to the most common questions about booking, travel policies, and onboard services.
            </p>
            <div class="space-y-4">

                <!-- FAQ Item -->
                <details class="bg-white p-6 rounded-2xl shadow group">
                    <summary class="text-[#E0006F] font-semibold mb-2 flex justify-between items-center cursor-pointer list-none">
                        How can I book a ticket with 2GO Travel?
                        <i class="fa-solid fa-chevron-down transition-transform duration-300 group-open:rotate-180"></i>
                    </summary>
                    <p class="text-gray-600 text-sm mt-2">
                        You can book tickets online through the official 2GO Travel website, at any 2GO outlet nationwide, or through accredited travel agents.
                    </p>
                </details>

                <details class="bg-white p-6 rounded-2xl shadow group">
                    <summary class="text-[#E0006F] font-semibold mb-2 flex justify-between items-center cursor-pointer list-none">
                        How do I check my booking or ticket status?
                        <i class="fa-solid fa-chevron-down transition-transform duration-300 group-open:rotate-180"></i>
                    </summary>
                    <p class="text-gray-600 text-sm mt-2">
                        Visit the “Manage Booking” section on the 2GO Travel website and enter your booking reference number, or contact the hotline for assistance.
                    </p>
                </details>

                <details class="bg-white p-6 rounded-2xl shadow group">
                    <summary class="text-[#E0006F] font-semibold mb-2 flex justify-between items-center cursor-pointer list-none">
                        What accommodations are available on board?
                        <i class="fa-solid fa-chevron-down transition-transform duration-300 group-open:rotate-180"></i>
                    </summary>
                    <p class="text-gray-600 text-sm mt-2">
                        2GO Travel offers a variety of accommodations including Economy, Tourist Class, Business Class, and private suites to fit your budget and comfort needs.
                    </p>
                </details>

                <details class="bg-white p-6 rounded-2xl shadow group">
                    <summary class="text-[#E0006F] font-semibold mb-2 flex justify-between items-center cursor-pointer list-none">
                        Can I bring luggage on board?
                        <i class="fa-solid fa-chevron-down transition-transform duration-300 group-open:rotate-180"></i>
                    </summary>
                    <p class="text-gray-600 text-sm mt-2">
                        Yes, passengers are allowed baggage within the free allowance depending on their ticket type. Excess baggage may be subject to additional fees.
                    </p>
                </details>

                <details class="bg-white p-6 rounded-2xl shadow group">
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
    <?php include 'footer.php'; ?>
</body>
</html>