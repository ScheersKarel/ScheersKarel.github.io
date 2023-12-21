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
            <h1 class="text-3xl">WARME BROODJES</h1>
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

        <!--Beemsterkaasbroodje-->
        <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Beemsterkaasbroodje</h2>
            <p>Beschrijving</p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/MILK.webp" alt="melk fles">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                </div>
                <p class="catogorieCardPrice ">€2,70</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>

        <!--Broodje Sitostick-->
        <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Broodje Sitostick</h2>
            <p>Grote baguette met kip sitostick, sla, tomaat, smoelsaus en bickyuitjes</p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/MILK.webp" alt="melk fles">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                </div>
                <p class="catogorieCardPrice ">€6,50</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>

        <!--Croissant Kaas-->
        <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Croissant Kaas</h2>
            <p>Croissant met Kaas tussen</p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/MILK.webp" alt="melk fles">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                </div>
                <p class="catogorieCardPrice ">€3.00</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>

         <!--Croissant Hesp-->
         <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Croissant Hesp</h2>
            <p>Croissant met Hesp tussen</p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/MILK.webp" alt="melk fles">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                </div>
                <p class="catogorieCardPrice ">€3.00</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>
        
        <!--Croissant Kaas & Hesp-->
        <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Croissant Kaas & Hesp</h2>
            <p>Croissant met Kaas & Hesp tussen</p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/MILK.webp" alt="melk fles">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                </div>
                <p class="catogorieCardPrice ">€3.50</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>
       
         <!--Croque Hawai-->
         <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Croque Hawai</h2>
            <p>Croque met ananas</p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/MILK.webp" alt="melk fles">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                </div>
                <p class="catogorieCardPrice ">€7.00</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>

        <!--Croque uit ’t vuistje-->
        <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Croque uit ’t vuistje</h2>
            <p>Inclusief sausje</p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/MILK.webp" alt="melk fles">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                </div>
                <p class="catogorieCardPrice ">€4.00</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>

         <!--Uitsmijter-->
         <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Uitsmijter</h2>
            <p>
                Croque met ei erbij
            </p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/MILK.webp" alt="melk fles">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                </div>
                <p class="catogorieCardPrice ">€8.50</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>

        <!--Curryrol-->
        <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Curryrol</h2>
            <p>
            Beschrijving            
            </p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/MILK.webp" alt="melk fles">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                </div>
                <p class="catogorieCardPrice ">€2.50</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>

        <!--Curryrol Speciaal-->
        <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Curryrol Speciaal</h2>
            <p>
            Keuze uit ketchup of curryketchup doorgeven in de opmerkingen
            </p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/MILK.webp" alt="melk fles">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                </div>
                <p class="catogorieCardPrice ">€3.00</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>

        <!--Hotdog Klein-->
        <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Hotdog Klein</h2>
            <p>
                Beschrijving            
            </p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/MILK.webp" alt="melk fles">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                </div>
                <p class="catogorieCardPrice ">€3.00</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>

        <!--Hotdog Groot-->
        <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Hotdog Groot</h2>
            <p>
                Beschrijving
            </p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/MILK.webp" alt="melk fles">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                </div>
                <p class="catogorieCardPrice ">€4.00</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>

        <!--Hotdog Bacon-->
        <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Hotdog Bacon</h2>
            <p>
                Bicky ui, mosterd, ketchup
            </p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/MILK.webp" alt="melk fles">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                </div>
                <p class="catogorieCardPrice ">€5.00</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>

        <!--Lasagne-->
        <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Lasagne</h2>
            <p>
                Met brood
            </p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/MILK.webp" alt="melk fles">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                </div>
                <p class="catogorieCardPrice ">€6.00</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>

        <!--Spaghetti Bolognaise-->
        <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Spaghetti Bolognaise</h2>
            <p>
                Met brood           
             </p>

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