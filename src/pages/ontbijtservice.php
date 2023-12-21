<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Broodjes Van Eden |Ontbijtservice</title>
    <link rel="stylesheet" href="../../dist/styles.css">
    <link href="../../dist/styles.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;600;700&family=Lora&display=swap" rel="stylesheet">
    
</head>
<body>
    <div class="bg-customGray">
    <?php include('../components/header.html');
     include('../components/nav.html'); ?>

    <!-- CTA -->
    <div class="text-center h-72 text-white border-t-4 border-customRed bg-no-repeat bg-cover " name="CTA" style="background-image: url('../images/food-breakfast-black-table.webp');" alt="Ontbijt">
    <div class="bg-gray-500 relative w-full h-72  opacity-60 top-0 -mt-1"></div>
            <h1 class=" text-4xl bg-gray-800/50 w-fit rounded-3xl px-8 py-2 m-auto relative z-10 -mt-44">Ontbijtservice</h1>
    </div>

    <!-- Ontbijtservice -->
    <div class="w-2/3 m-auto">
        <h2 class="text-2xl mt-10">GENIET VAN ONZE ONTBIJTSERVICE</h2>
        <p class="my-5 font-light">Op zoek naar een leuk cadeau of een originele attentie? Ontbijt aan huis is bij elke gelegenheid een uitstekende manier om je geliefde, familie, vrienden, zakenrelaties, collega’s of werknemers op een aangename manier te verrassen. </p>
        <p class=" font-light">Elke weekdag (ma - vr) leverbaar na bevestiging. Bestellen via mail of telefonisch.</p>
    </div>

    <!-- Socials -->
    <div class="w-2/3 m-auto mb-44 lg:mb-20 ">
    <div class=" mt-10 lg:flex">
        
            <p class="flex">
                <iconify-icon class="border border-customRed  rounded-xl p-2" icon="ion:mail-outline" style="color: #7a2d2d;" width="25" height="25"></iconify-icon>
                <a href="mailto:contact@broodjesvaneden.be" class="text-customRed ml-5 mt-2"><u>contact@broodjesvaneden.be</u></a>
            </p>
            <p class="mt-5 flex lg:mt-0 lg:ml-20">
                <iconify-icon class="border border-customRed   rounded-xl p-2" icon="carbon:phone" style="color: #7a2d2d;"  width="25" height="25"></iconify-icon>
                <a href="tel:+32 3 772 19 63" class="ml-5 mt-2"> +32 3 772 19 63</a>
            </p>
            
       
    </div>
    </div>
    <!-- Soorten ontbijt -->
    <div class="breakfastCardContainer">
         <!--KIDS ONTBIJT -->
        <div class="breakfastCard ">
            <div class="breakfastCardImgDiv ">
                <img class="breakfastCardImg" src="../images/kidsOntbijt_1.webp" alt="cake en chocolade">
            </div>

            <h2 class="breakfastCardTitle">KIDS ONTBIJT</h2>

            <div class="breakfastCardLine"></div>

            
            <ol class="breakfastCardContent font-light">
                <li>Chocomelk</li>
                <li>Stuk fruit </li>
                <li>2 Pancakes</li>
                <li>Een kleine surpise</li>
                <li>Croissant of chocoladebroodje</li>
                <li>Enkel voor kinderen</li>
            </ol>
          

            <div class="breakfastCardLine"></div>

            <div class="breakfastCardPrice">
                €9 Per persoon
            </div>

        </div>

        <!-- CLASSIC ONTBIJT -->
        <div class="breakfastCard ">
            <div class="breakfastCardImgDiv">
                <img class="breakfastCardImg" src="../images/ClassicOntbijt_1.webp" alt="Koffiekoeken, muffins en pannekoeken">
            </div>

            <h2 class="breakfastCardTitle">CLASSIC ONTBIJT</h2>


            <div class="breakfastCardLine"></div>
        
            <ol class="breakfastCardContent font-light">
                <li>3 mini broodjes</li>
                <li>Yoghurt + Granola </li>
                <li>Fruitsapje & Thee</li>
                <li>2 mini koffiekoeken | Havermoutkoek</li>
                <li>Kipcurry | Confituur & Boter | Kaas & Hesp</li>
            </ol>
          

            <div class="breakfastCardLine"></div>

            <div class="text-center text-xl font-semibold py-5">
                €15 Per persoon
            </div>

        </div>

        <!-- SUPERIOR ONTBIJT -->

        <div class="breakfastCard ">
            <div class="breakfastCardImgDiv ">
                <img class="breakfastCardImg" src="../images/SuperiorOtbijt_1.webp" alt="Koffiekoeken en beleg">
            </div>

            <h2 class="breakfastCardTitle">SUPERIOR ONTBIJT</h2>

            <div class="breakfastCardLine"></div>

            <ol class="breakfastCardContent font-light">
                <li>5 mini broodjes</li>
                <li>Roerei </li>
                <li>2 Pancakes</li>
                <li>Fruitsapje & Thee</li>
                <li>Yoghurt + Granola | Fruitsla</li>
                <li>3 mini koffiekoeken /havermoutkoek</li>
                <li>Kipcurry & Brie | Confituur & Boter | Kaas & Hesp</li>
            </ol>
            
            <div class="breakfastCardLine"></div>

            <div class="text-center text-xl font-semibold py-5 pb-12">
                €25 Per persoon
            </div>

        </div>

        <!-- LUXE ONTBIJT -->
        <div class="breakfastCard">
            <div class="breakfastCardImgDiv">
                <img class="breakfastCardImg" src="../images/LuxeOntbijt_1.webp" alt="Koffiekoeken, salades en broodjes">
            </div>
            
            <h2 class="breakfastCardTitle">LUXE ONTBIJT</h2>

            <div class="breakfastCardLine"></div>
        
                <ol class="breakfastCardContent font-light">
                    <li>3 mini koffiekoeken</li>
                    <li>Roerei </li>
                    <li>2 Pancakes | Muffin</li>
                    <li>Fruitsapje & Thee</li>
                    <li>Yoghurt + Granola | Fruitsla</li>
                    <li>Spelt of bruine pistolet | Sandwish | stokbroodje</li>
                    <li>Kipcurry & Brie | Gerookte zalm | Confituur & Boter | Kaas & Hesp</li>
                </ol>

            <div class="breakfastCardLine"></div>

            <div class="text-center text-xl font-semibold py-5">
                €30 Per persoon
            </div>

        </div>
    </div>

    <?php include('../components/footer.html'); ?>
    </div>
</body>
</html>
<script src="../../dist/script.js"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>