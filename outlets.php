<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Outlet</title>
</head>
<body>
    <?php include 'header.php'; ?>

    <!-- OUTLETS SECTION -->
    <section id="outlets" class="bg-pink-50 py-20">
        <div class="absolute -right-[10%] -top-[12%] w-[520px] h-[520px] bg-[#E0006F]/10 rounded-full blur-3xl" aria-hidden="true"></div>
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
    <?php include 'footer.php'; ?>
</body>
</html>