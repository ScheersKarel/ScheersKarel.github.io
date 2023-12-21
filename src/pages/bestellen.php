<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Broodjes Van Eden |Bestel Nu</title>
    <link href="../../dist/output.css" rel="stylesheet">
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
        <div class="text-center h-72 text-white border-t-4 border-customRed bg-no-repeat" name="CTA" style="background-image: url('../images/bestelnu.webp'); background-size: cover;">
        <div class="bg-gray-500 relative w-full h-72  opacity-60 top-0 -mt-1"></div>
            <h1 class="text-4xl  bg-gray-800/50 w-1/2 rounded-3xl py-2 px-4 m-auto lg:w-1/4 relative z-10 -mt-44">Bestel Nu </h1>
        </div>

        <div class="lg:grid lg:grid-cols-4 lg:m-auto">
        <!-- Content -->
            <div class="my-10 w-3/4 m-auto lg:col-span-3 ">
                <h2 class="text-3xl">CATEGORIEËN </h2>
                <p class="mt-4 lg:text-lg font-light ">
                    Bestel vóór <span class="font-normal">10:00 uur!</span> <br>
                    Een minimum bestelbedrag van <span class="font-normal">€12,50</span> is vereist voor levering. <br>
                    Wij leveren uitsluitend aan zakelijke klanten en niet aan particulieren.
                </p>
            </div>
            <!--zoekbalk-->
            <div class="grid grid-cols-4 w-3/4 m-auto mr-20">
                <div class="flex items-center col-span-3 mr-14">
                        <input type="text" class="py-2 px-4 focus:outline-none rounded-3xl border border-customRed" placeholder="Zoeken...">
                        <button class="py-2 px-4 rounded-md -ml-12 mt-1">
                            <iconify-icon   iconify-icon icon="teenyicons:search-outline" style="color: #7a2d2d;" width="20" height="20"></iconify-icon>
                        </button>
                
                </div>                
            </div>
        </div>
        <div class="flex justify-end relative -mt-40">
          <a href="./winkelwagen.php">  <img src="../images/Winkelmandje.webp" alt="winkelwagen"></a>
        </div>
        <!-- Cards -->

        <div class="mt-32 grid grid-cols-2 gap-2 w-4/5 m-auto lg:grid-cols-3 lg:gap-8" >
            <a href="./catogorie-specialiteiten.php">
                <div class="text-center py-12 text-white bg-no-repeat bg-cover rounded-2xl lg:py-20 lg:pb-28 xl:py-36" style="background-image: url('../images/specialiteiten.webp');opacity: 0.8;" alt="Belegd broodje">
                    <h2 class="text-black w-fit text-2xl py-5 px-1 bg-gray-300/80 m-auto rounded-2xl lg:w-2/3">Specialiteiten</h2>
                </div>
            </a>
            <div class="text-center py-12 text-white bg-no-repeat bg-cover rounded-2xl lg:py-20 lg:mt-0 xl:py-36" style="background-image: url('../images/hamburger.webp');opacity: 0.8;" alt="Hamburger">
                <h2 class="text-black w-fit text-2xl py-5 px-1 bg-gray-300/80 m-auto rounded-2xl lg:w-2/3 ">Hamburgers</h2>
            </div>
            <div class="mt-4 text-center py-12 text-white bg-no-repeat bg-cover rounded-2xl lg:py-20 lg:mt-0 xl:py-36" style="background-image: url('../images/belgdeBroodjes.webp');opacity: 0.8;" alt="Belegd broodje">
                <h2 class="text-black w-2/3 text-2xl py-5 px-1 bg-gray-300/80 m-auto rounded-2xl">Belegde Broodjes</h2>
            </div>

            <div class=" mt-4 text-center py-12 text-white bg-no-repeat bg-cover rounded-2xl lg:mt-0 lg:py-20 xl:py-36" style="background-image: url('../images/warmeSnacks.webp');opacity: 0.8;" alt="croque monsieur">
                <h2 class="text-black text-2xl py-5 px-1 bg-gray-300/80 w-2/3 m-auto rounded-2xl">Warme Snacks</h2>
            </div>


            <div class="mt-4 text-center py-12 text-white bg-no-repeat bg-cover rounded-2xl lg:py-20 lg:mt-0 xl:py-36" style="background-image: url('../images/wraps.webp');opacity: 0.8;"alt="Wrap">
                <h2 class="text-black w-2/3 text-2xl py-5 px-1 bg-gray-300/80 m-auto rounded-2xl">Wraps</h2>
            </div>
            <div class="mt-4 text-center py-12 text-white bg-no-repeat bg-cover rounded-2xl lg:py-20 lg:mt-0 xl:py-36" style="background-image: url('../images/salades.webp');opacity: 0.8;" alt="Salades">
                <h2 class="text-black w-2/3 text-2xl py-5 px-1 bg-gray-300/80 m-auto rounded-2xl">Salades</h2>
            </div>

            <div class="mt-4 text-center py-12 text-white bg-no-repeat bg-cover rounded-2xl lg:py-20 lg:mt-0 xl:py-36" style="background-image: url('../images/omelet.webp');opacity: 0.8;"alt="Omelet">
                <h2 class="text-black text-2xl py-5 px-1 bg-gray-300/80 w-2/3 m-auto rounded-2xl ">Omelet</h2>
            </div>
            <div class="mt-4 text-center py-12 text-white bg-no-repeat bg-cover rounded-2xl lg:py-20 lg:mt-0 xl:py-36" style="background-image: url('../images/panini.webp');opacity: 0.8;"alt="Panini">
                <h2 class="text-black w-2/3 text-2xl py-5 px-1 bg-gray-300/80 m-auto rounded-2xl">Panini's</h2>
            </div>

            <div class="mt-4 text-center py-12 text-white bg-no-repeat bg-cover rounded-2xl lg:py-20 lg:mt-0 xl:py-36" style="background-image: url('../images/bagelsbestellen.webp');opacity: 0.8;"alt="Bagels">
                <h2 class="text-black text-2xl py-5 px-1 bg-gray-300/80 w-2/3 m-auto rounded-2xl">Bagels</h2>
            </div>
            <div class="mt-4 text-center py-12 text-white bg-no-repeat bg-cover rounded-2xl lg:py-20 lg:mt-0 xl:py-36" style="background-image: url('../images/dagsoep.webp');opacity: 0.8;"alt="Soep">
                <h2 class="text-black w-2/3 text-2xl py-5 px-1 bg-gray-300/80 m-auto rounded-2xl ">Dagsoep</h2>
            </div>

            <div class="mt-4 text-center py-12 text-white bg-no-repeat bg-cover rounded-2xl lg:py-20 lg:mt-0 xl:py-36" style="background-image: url('../images/Dessert.webp');opacity: 0.8;"alt="Desserts">
                <h2 class="text-black w-2/3 text-2xl py-5 px-1 bg-gray-300/80 m-auto rounded-2xl">Desserts</h2>
            </div>
            <div class="mt-4 text-center py-12 text-white bg-no-repeat bg-cover rounded-2xl lg:py-20 lg:mt-0 xl:py-36" style="background-image: url('../images/koudeDranken.webp');opacity: 0.8;"alt="frisdrank">
                <h2 class="text-black w-2/3 text-2xl py-5 px-1 bg-gray-300/80 m-auto rounded-2xl">Koude Dranken</h2>
            </div>
        </div>
       
    <?php include('../components/footer.html'); ?>
</div>
</body>
</html>
<script src="../../dist/script.js"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
