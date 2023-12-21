<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Broodjes Van Eden |Specialiteiten</title>
    <link href="../../dist/output.css" rel="stylesheet">
    <link href="../../dist/styles.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;600;700&family=Lora&display=swap" rel="stylesheet">
   
</head>
<body>
<div class="bg-customGray page page-enter ">
    <?php include('../components/header.html');
            include('../components/nav.html'); 
           
    ?>
    <div class="border-t-2 border-customRed"></div>
   <div class="lg:grid lg:grid-cols-4">
    <div class=" lg:mx-auto lg:w-3/4">
        <!-- Title -->
       
        <div class="w-4/5 m-auto my-16">
            <h1 class="text-3xl">SPECIALITEITEN</h1>
        </div>

        <!-- Filter/search -->
        <div class="grid grid-cols-2 gap-4 text-center">
            <div id="filterIcon" class="grid grid-cols-2 mt-2 ml-10 lg:hidden">
                <h2 class="text-customRed text-xl -ml-4 cursor-pointer">FILTER</h2>
                <iconify-icon class="mt-1 cursor-pointer" icon="ep:arrow-down" style="color: #7a2d2d;" width="20" height="20"></iconify-icon>
            </div>
            <div class="grid grid-cols-4 w-full">
            <div class="flex items-center col-span-3 ml-6">
                    <input type="text" class="py-2 px-4 focus:outline-none rounded-3xl border border-customRed" placeholder="Zoeken...">
                    <button class="py-2 px-4 rounded-md -ml-12 mt-1">
                        <iconify-icon   iconify-icon icon="teenyicons:search-outline" style="color: #7a2d2d;" width="20" height="20"></iconify-icon>
                    </button>
            </div>
            </div>
            
        </div>

        <!-- Filter -->
        <div class="w-3/4 ml-12 hidden lg:block lg:mt-10 lg:ml-4" id="filterSection">
            <table class="w-1/2 lg:w-1/6  border-separate border-spacing-4	" >
                <tr>
                    <td><input type="checkbox" name="filter" id="kaas" class="w-5 h-5"></td>
                    <td><label for="kaas">Kaas</label></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="filter" id="vlees" class="w-5 h-5"></td>
                    <td><label for="vlees">Vlees</label></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="filter" id="kip" class="w-5 h-5"></td>
                    <td><label for="kip">Kip</label></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="filter" id="vis" class="w-5 h-5"></td>
                    <td><label for="vis">Vis</label></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="filter" id="natuur" class="w-5 h-5"></td>
                    <td><label for="natuur">Natuur</label></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="filter" id="zoet" class="w-5 h-5"></td>
                    <td> <label for="zoet">Zoet</label></td>
                </tr>
            </table>
        </div>
        
        <!-- back  -->
        <a href="./bestellen.php">
        <div class="flex items-center w-4/5 m-auto mt-10 lg:ml-4">
            
            <iconify-icon class=" lg:ml-4" icon="material-symbols-light:arrow-back" style="color: #7a2d2d;" width="30" height="30"></iconify-icon>
            <p class="font-semibold ">CATEGORIEËN</p>
            
        </div>
        </a>

    </div>
        <!-- Product Cards -->
    <div class=" lg:grid lg:grid-cols-2 col-span-3 lg:w-4/5 lg:m-auto">
        <!--Bacon Royale-->
        <div class="catogorieCard">
            <p class="catogorieCardTitle">Bacon Royale</p>
            <p class="font-light">Gebakken spek, cheesespread, rucola, tomaat, rode pesto</p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/milk.webp" alt="melk fles">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/nuts.webp" alt="noten">
                </div>
                <p class="catogorieCardPrice ">€5.00</p>
                <a href="./extras.php" class="catogorieCardIcon "  style="cursor: pointer;">
                    <iconify-icon icon="ei:plus" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </a>
            </div>
        </div>

        <!--Boerenhap-->
        <div class="catogorieCard">
            <p class="catogorieCardTitle">Boerenhap</p>
            <p class="font-light">Aardappelsla, ijsberg, tomaat, spek, BBQ-saus, ui</p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/milk.webp" alt="melk fles">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/nuts.webp" alt="noten">
                </div>
                <p class="catogorieCardPrice ">€5.00</p>
                <div class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" class="extras" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </div>
            </div>
        </div>

        <!--Chicken Appel-Curry-->
        <div class="catogorieCard">
            <p class="catogorieCardTitle">Chicken Appel-Curry</p>
            <p class="font-light">Gebakken kip, appel, kaneel, sojascheuten, currysaus</p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/milk.webp" alt="melk fles">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/nuts.webp" alt="noten">
                </div>
                <p class="catogorieCardPrice ">€5.00</p>
                <a href="./extras.php" style="cursor: pointer;" class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" class="extras" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </a>
            </div>
        </div>

         <!--Chicken Hawaii-->
         <div class="catogorieCard">
            <p class="catogorieCardTitle">Chicken Hawaii</p>
            <p class="font-light">Gebakken kip, ananas, cocktailsaus, sojascheuten</p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/milk.webp" alt="melk fles">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/nuts.webp" alt="noten">
                </div>
                <p class="catogorieCardPrice ">€5.00</p>
                <a href="./extras.php" style="cursor: pointer;" class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" class="extras" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </a>
            </div>
        </div>
        
        <!--Fitness Phila-->
        <div class="catogorieCard">
            <p class="catogorieCardTitle">Fitness Phila</p>
            <p class="font-light">Philadelphia, ijsberg, tomaat, ui, curry ketchup</p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/milk.webp" alt="melk fles">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/nuts.webp" alt="noten">
                </div>
                <p class="catogorieCardPrice ">€5.00</p>
                <a href="./extras.php" style="cursor: pointer;" class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" class="extras" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </a>
            </div>
        </div>
       
         <!--Fris Kipke-->
         <div class="catogorieCard">
            <p class="catogorieCardTitle">Fris Kipke</p>
            <p class="font-light">Kip-curry, ananas, tuinkers</p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/milk.webp" alt="melk fles">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/nuts.webp" alt="noten">
                </div>
                <p class="catogorieCardPrice ">€5.00</p>
                <a href="./extras.php" style="cursor: pointer;" class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" class="extras" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </a>
            </div>
        </div>

        <!--Fris Viske-->
        <div class="catogorieCard">
            <p class="catogorieCardTitle">Fris Viske</p>
            <p class="font-light">Tonijnsla, perzik, tuinkers</p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/milk.webp" alt="melk fles">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/nuts.webp" alt="noten">
                </div>
                <p class="catogorieCardPrice ">€5.00</p>
                <a href="./extras.php" style="cursor: pointer;" class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" class="extras" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </a>
            </div>
        </div>

         <!--Hollands Broodje-->
         <div class="catogorieCard">
            <p class="catogorieCardTitle">Hollands Broodje</p>
            <p class="font-light">Boulet, sla, tomaat, ui, BBQ-saus</p>

            <div class="catogorieCardBottomContainer">
                <div class="catogorieCardIconContainer">
                    <img src="../images/milk.webp" alt="melk fles">
                    <img src="../images/egg.webp" alt="ei">
                    <img src="../images/nuts.webp" alt="noten">
                </div>
                <p class="catogorieCardPrice ">€5.00</p>
                <a href="./extras.php" style="cursor: pointer;" class="catogorieCardIcon">
                <iconify-icon icon="ei:plus" class="extras" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
                </a>
            </div>
        </div>
    </div>
    </div>
        <!-- paginate -->
        <div class="grid grid-cols-6 gap-5 w-2/3 m-auto mt-10 lg:w-1/4">
        
        <iconify-icon icon="ep:arrow-left" style="color: #7a2d2d;" width="20" height="20" ></iconify-icon>
        <div class="text-customRed"><u>1</u></div>
        <div class="text-customRed">2</div>
        <div class="text-customRed">3</div>
        <div class="text-customRed">4</div>
        <iconify-icon icon="ep:arrow-right"  style="color: #7a2d2d;" width="20" height="20"></iconify-icon>

        </div>


    <?php include('../components/footer.html'); ?>
</div>
</body>
</html>
<script src="../../dist/script.js"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>