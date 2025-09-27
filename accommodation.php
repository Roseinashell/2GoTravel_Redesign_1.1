<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Accommodation</title>
</head>
<body>
    <?php include 'header.php'; ?>

    <!-- ACCOMMODATION SECTION -->
    <section id="accomodation" class="bg-white py-20">
        <div class="absolute -right-[10%] -top-[12%] w-[520px] h-[520px] bg-[#E0006F]/10 rounded-full blur-3xl" aria-hidden="true"></div>
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
    <?php include 'footer.php'; ?>
</body>
</html>