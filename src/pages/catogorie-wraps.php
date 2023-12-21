<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../../dist/output.css" rel="stylesheet">
    <link rel="stylesheet" href="../../dist/styles.css">
</head>
<body>
<div class="bg-customGray">
    <?php include('../components/header.html'); ?>
        <!-- Title -->
        <div class="border-t-2 border-customRed"></div>
        <div class="w-4/5 m-auto my-16">
            <h1 class="text-3xl">HAMBURGERS</h1>
        </div>

        <!-- Filter/search -->
        <div class="grid grid-cols-2 gap-4 text-center">
            <div class="grid grid-cols-2 mt-2 ml-10">
                <h2 class="text-customRed text-xl">FILTER</h2>
                <iconify-icon class="mt-1" icon="ep:arrow-down" style="color: #7a2d2d;" width="20" height="20"></iconify-icon>
            </div>
            <div class="grid grid-cols-4 w-full">
            <div class="flex items-center col-span-3 m-auto">
                    <input type="text" class="py-2 px-4 focus:outline-none rounded-3xl border border-customRed" placeholder="Zoeken...">
                    <button class="py-2 px-4 rounded-md -ml-12 mt-1">
                        <iconify-icon   iconify-icon icon="teenyicons:search-outline" style="color: #7a2d2d;" width="20" height="20"></iconify-icon>
                    </button>
            </div>
            </div>
            
        </div>

        <!-- back  -->
        <div class="flex items-center mt-10">
            <iconify-icon class="ml-16" icon="material-symbols-light:arrow-back" style="color: #7a2d2d;" width="30" height="30"></iconify-icon>
            <h2 class="font-semibold ">CATEGORIEËN</h2>
        </div>


        <!-- Product Cards -->

        <!--Wrap Kip-->
        <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Wrap Kip</h2>
            <p>Wrap met Philadelphia, groene pesto, sla, kip, parmezaan, zonnebloempitten</p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/MILK.webp" alt="melk fles">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                    <img src="../images/MUSTARD.webp" alt="mosterd">
                </div>
                <p class="catogorieCardPrice ">€7.50</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>

        <!--Wrap Kip Hawai-->
        <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Wrap Kip Hawai</h2>
            <p>Wrap met gebakken kip, sla, ananas, bickyuitjes en smoelsaus</p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/MILK.webp" alt="melk fles">
                    <img src="../images/NUTS.webp" alt="noten">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                </div>
                <p class="catogorieCardPrice ">€7.50</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>

        <!--Wrap Paprika-->
        <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Wrap Paprika</h2>
            <p>Wortelwrap met omelet, zoete paprika en verse spinazie</p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/MILK.webp" alt="melk fles">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                </div>
                <p class="catogorieCardPrice ">€7.50</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>

         <!--Wrap Zalm-->
         <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Wrap Zalm</h2>
            <p>Wrap met gerookte zalm, verse spinazie, rode pesto, zongedroogde tomaten en bicky ui</p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/MILK.webp" alt="melk fles">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                    <img src="../images/FISH.webp" alt="vis">
                </div>
                <p class="catogorieCardPrice ">€8.50</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>
        
       
        <!-- paginate -->
        <div class="grid grid-cols-6 gap-5 w-2/3 m-auto mt-10">
        
        <iconify-icon icon="ep:arrow-left" style="color: #7a2d2d;" width="20" height="20" ></iconify-icon>
        <div class="text-customRed"><u>1</u></div>
        <div class="text-customRed">2</div>
        <div class="text-customRed">3</div>
        <div class="text-customRed">4</div>
        <iconify-icon icon="ep:arrow-right" style="color: #7a2d2d;" width="20" height="20"></iconify-icon>

        </div>


    <?php include('../components/footer.html'); ?>
</div>
</body>
</html>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>