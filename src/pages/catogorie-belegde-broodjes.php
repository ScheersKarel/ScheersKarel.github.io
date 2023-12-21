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
            <h1 class="text-3xl">BELEGDE BROODJES</h1>
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

        <!--Broodje Boulet-->
        <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Broodje Boulet</h2>
            <p>Boulet</p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/MILK.webp" alt="melk fles">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                    <img src="../images/MUSTARD.webp" alt="mosterd">
                    <img src="../images/SOYA.webp" alt="soja boon">
                </div>
                <p class="catogorieCardPrice ">€2,80</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>

        <!--Broodje Gerookte Ham-->
        <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Broodje Gerookte Ham</h2>
            <p>Gerookte Ham</p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/MILK.webp" alt="melk fles">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                </div>
                <p class="catogorieCardPrice ">€2,80</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>

        <!--Broodje Hesp-->
        <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Broodje Hesp</h2>
            <p>Hesp</p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/MILK.webp" alt="melk fles">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                </div>
                <p class="catogorieCardPrice ">€2,50</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>

         <!--Broodje Martino-->
         <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Broodje Martino</h2>
            <p>Met martinosaus, ui en mosterd</p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/MILK.webp" alt="melk fles">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                    <img src="../images/MUSTARD.webp" alt="mosterd">
                </div>
                <p class="catogorieCardPrice ">€3,30</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>
        
        <!--Broodje Preparé-->
        <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Broodje Preparé</h2>
            <p>Preparé</p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/MILK.webp" alt="melk fles">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                </div>
                <p class="catogorieCardPrice ">€2,80</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>
       
         <!--Broodje Pittasla-->
         <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Broodje Pittasla</h2>
            <p>Pittasla</p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/MILK.webp" alt="melk fles">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                    <img src="../images/MUSTARD.webp" alt="mosterd">
                </div>
                <p class="catogorieCardPrice ">€2,80</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>

        <!--Broodje Pita Pikant-->
        <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Broodje Pita Pikant</h2>
            <p>Pikante pittasla</p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/MILK.webp" alt="melk fles">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                    <img src="../images/MUSTARD.webp" alt="mosterd">
                    
                </div>
                <p class="catogorieCardPrice ">€3,00</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>

         <!--Broodje Vleessla-->
         <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Broodje Vleessla</h2>
            <p>
                Vleessla
            </p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/MILK.webp" alt="melk fles">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                    <img src="../images/MUSTARD.webp" alt="mosterd">
                </div>
                <p class="catogorieCardPrice ">€2,80</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>

        <!--Broodje Kip-Curry-->
        <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Broodje Kip-Curry</h2>
            <p>
                Kip-Curry
            </p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/MILK.webp" alt="melk fles">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                    <img src="../images/MUSTARD.webp" alt="mosterd">
                    <img src="../images/CELERY.webp" alt="celder">
                </div>
                <p class="catogorieCardPrice ">€2,80</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>

        <!--Broodje Kipsla-->
        <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Broodje Kipsla</h2>
            <p>
            Kipsla
            </p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/MILK.webp" alt="melk fles">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                </div>
                <p class="catogorieCardPrice ">€2,80</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>

        <!--Broodje Kipfilet-->
        <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Broodje Kipfilet</h2>
            <p>
                Kipfilet in stukjes
            </p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/MILK.webp" alt="melk fles">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                </div>
                <p class="catogorieCardPrice ">€3,30</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>

        <!--Broodje Kippenwit-->
        <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Broodje Kippenwit</h2>
            <p>
                Kippenwit
            </p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/MILK.webp" alt="melk fles">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                </div>
                <p class="catogorieCardPrice ">€2,50</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>

        <!--Broodje Aardappelsla-->
        <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Broodje Aardappelsla</h2>
            <p>
            Aardappelsla
            </p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/MILK.webp" alt="melk fles">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                    <img src="../images/MUSTARD.webp" alt="mosterd">
                </div>
                <p class="catogorieCardPrice ">€2,80</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>

        <!--Broodje Eiersla-->
        <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Broodje Eiersla</h2>
            <p>
                Eiersla huisbereid
            </p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/MILK.webp" alt="melk fles">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                </div>
                <p class="catogorieCardPrice ">€3,30</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>

        <!--Broodje Eiersla + Spek-->
        <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Broodje Eiersla + Spek</h2>
            <p>
                Eiersla met gebakken spek
            </p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/MILK.webp" alt="melk fles">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                </div>
                <p class="catogorieCardPrice ">€3,30</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>

        <!--Broodje Gezond-->
        <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Broodje Gezond</h2>
            <p>
                Groenten
            </p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/MILK.webp" alt="melk fles">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                </div>
                <p class="catogorieCardPrice ">€2,80</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>

        <!--Broodje 4-Seizoensla-->
        <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Broodje 4-Seizoensla</h2>
            <p>
            4-Seizoensla
            </p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/MILK.webp" alt="melk fles">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                    <img src="../images/MUSTARD.webp" alt="mosterd">
                    <img src="../images/CELERY.webp" alt="celder">
                </div>
                <p class="catogorieCardPrice ">€2,80</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>
        <!--Broodje Nutella-->
        <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Broodje Nutella</h2>
            <p>
            Nutella
            </p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/MILK.webp" alt="melk fles">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                </div>
                <p class="catogorieCardPrice ">€2,00</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>

        <!--Broodje Belegen Kaas-->
        <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Broodje Belegen Kaas</h2>
            <p>
            Belegen Kaas
            </p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/MILK.webp" alt="melk fles">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                </div>
                <p class="catogorieCardPrice ">€2,80</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>

        <!--Broodje Brie-->
        <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Broodje Brie</h2>
            <p>
                Brie
            </p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/MILK.webp" alt="melk fles">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                </div>
                <p class="catogorieCardPrice ">€3,00</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>

        <!--Broodje Jonge Kaas-->
        <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Broodje Jonge Kaas</h2>
            <p>
            Jonge Kaas
            </p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/MILK.webp" alt="melk fles">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                </div>
                <p class="catogorieCardPrice ">€2,50</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>

        <!--Broodje Kaas & Hesp-->
        <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Broodje Kaas & Hesp</h2>
            <p>
            Kaas & Hesp
            </p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/MILK.webp" alt="melk fles">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                </div>
                <p class="catogorieCardPrice ">€2,80</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>

         <!--Broodje Mozza Tom Pesto-->
         <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Broodje Mozza Tom Pesto</h2>
            <p>
            Mozzarella + tomaat + pesto
            </p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/MILK.webp" alt="melk fles">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                    <img src="../images/MUSTARD.webp" alt="mosterd">
                </div>
                <p class="catogorieCardPrice ">€2,80</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>

         <!--Broodje Philadelphia-->
         <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Broodje Philadelphia</h2>
            <p>
            Eiersla huisbereid
            </p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/MILK.webp" alt="melk fles">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                </div>
                <p class="catogorieCardPrice ">€2,50</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>

         <!--Broodje Smos Belegen K/H-->
         <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Broodje Smos Belegen K/H</h2>
            <p>
                Smos met belegen kaas en hesp
            </p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/MILK.webp" alt="melk fles">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                </div>
                <p class="catogorieCardPrice ">€3,80</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>

         <!--Broodje Tonijnsla-->
         <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Broodje Tonijnsla</h2>
            <p>
            Huisbereid
            </p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/MILK.webp" alt="melk fles">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                    <img src="../images/FISH.webp" alt="vis">
                    <img src="../images/MUSTARD.webp" alt="mosterd">
                </div>
                <p class="catogorieCardPrice ">€3,30</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>

         <!--Broodje Tonijn Pikant-->
         <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Broodje Tonijn Pikant</h2>
            <p>
            Huisbereid
            </p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/MILK.webp" alt="melk fles">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                    <img src="../images/FISH.webp" alt="vis">
                    <img src="../images/MUSTARD.webp" alt="mosterd">

                </div>
                <p class="catogorieCardPrice ">€3,50</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>

         <!--Broodje Tonijntino-->
         <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Broodje Tonijntino</h2>
            <p>
            Beschrijving
            </p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/MILK.webp" alt="melk fles">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                    <img src="../images/FISH.webp" alt="vis">
                    <img src="../images/MUSTARD.webp" alt="mosterd">
                </div>
                <p class="catogorieCardPrice ">€3,50</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>

         <!--Broodje Tonijn Natuur-->
         <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Broodje Tonijn Natuur</h2>
            <p>
            Olijfjes + olijfolie
            </p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/MILK.webp" alt="melk fles">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                    <img src="../images/FISH.webp" alt="vis">
                    <img src="../images/MUSTARD.webp" alt="mosterd">
                </div>
                <p class="catogorieCardPrice ">€4,00</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>

         <!--Broodje Fish-->
         <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Broodje Fish</h2>
            <p>
            Grote baguette met lekkerbek, sla, tomaat en verse ui
            </p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/MILK.webp" alt="melk fles">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                    <img src="../images/FISH.webp" alt="vis">
                </div>
                <p class="catogorieCardPrice ">€7,50</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>

         <!--Broodje Gerookte Zalm-->
         <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Broodje Gerookte Zalm</h2>
            <p>
            Gerookte zalm
            </p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/MILK.webp" alt="melk fles">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                    <img src="../images/FISH.webp" alt="vis">
                </div>
                <p class="catogorieCardPrice ">€4,00</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>

         <!--Broodje Garnaalsla-->
         <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Broodje Garnaalsla</h2>
            <p>
            Garnaal
            </p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/MILK.webp" alt="melk fles">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                    <img src="../images/FISH.webp" alt="vis">
                </div>
                <p class="catogorieCardPrice ">€5,20</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>

         <!--Broodje Krabsla-->
         <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Broodje Krabsla</h2>
            <p>
            Krabsla
            </p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/CRUSTACEANS.webp" alt="schelpdieren">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                    <img src="../images/MUSTARD.webp" alt="mosterd">
                    <img src="../images/FISH.webp" alt="vis">
                </div>
                <p class="catogorieCardPrice ">€4,00</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>

         <!--Broodje Holy Crab-->
         <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Broodje Holy Crab</h2>
            <p>
            Krabsla, rucola, spek en zonnebloempitjes
            </p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/CRUSTACEANS.webp" alt="schelpdieren">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                    <img src="../images/MUSTARD.webp" alt="mosterd">
                    <img src="../images/FISH.webp" alt="vis">
                </div>
                <p class="catogorieCardPrice ">€4,50</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>

         <!--Broodje Scampi Diablo-->
         <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Broodje Scampi Diablo</h2>
            <p>
            Met sla en tomaat
            </p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/CRUSTACEANS.webp" alt="schelpdieren">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                    <img src="../images/MUSTARD.webp" alt="mosterd">
                    <img src="../images/FISH.webp" alt="vis">
                </div>
                <p class="catogorieCardPrice ">€5,00</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>

         <!--Broodje Scampi Look-->
         <div class="catogorieCard">
            <h2 class="catogorieCardTitle">Broodje Scampi Look</h2>
            <p>
            Met sla en ananas
            </p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/CRUSTACEANS.webp" alt="schelpdieren">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/GLUTEN.webp" alt="gluten">
                    <img src="../images/MUSTARD.webp" alt="mosterd">
                    <img src="../images/FISH.webp" alt="vis">
                </div>
                <p class="catogorieCardPrice ">€5,50</p>
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