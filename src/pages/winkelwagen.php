<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Broodjes Van Eden |Winkelwagen</title>
    <link href="../../dist/output.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;600;700&family=Lora&display=swap" rel="stylesheet">
     <link href="../../dist/styles.css" rel="stylesheet">
</head>
<body>

<div class="bg-customGray">
    <?php include('../components/header.html');
          include('../components/nav.html');
    ?>
    <!--CTA-->
    <div class="text-center text-white border-t-4 border-customRed bg-no-repeat h-72" name="CTA" style="background-image: url('../images/5634.webp');background-size: cover;" alt="Foto croissant en baguette">
            <div class="bg-gray-700 relative w-full h-72  opacity-60 top-0 -mt-1"></div>
            <h1 class="text-4xl bg-gray-800/50 w-fit rounded-3xl py-2 px-4 m-auto relative z-10 -mt-44 ">Winkelwagen </h1>
    </div>

    <div class="grid grid-cols-2 p-5 lg:hidden">
        <h2 class="font-semibold text-3xl lg:text-center">WINKELWAGEN</h2>
        <iconify-icon class="flex justify-self-end " icon="basil:cancel-outline" style="color: #7a2d2d;" width="40" height="40"></iconify-icon>
    </div>

    <!--Breadkrums-->
    <div class="text-center text-lg my-10 hidden lg:block">
        <span class="mx-5"><a href="./home.php">Home</a></span>
        <span class="mx-5">/</span>
        <span class="mx-5"><a href="#"><u class="text-customRed">Mijn winkelwagen</u></a></span>
        <span class="mx-5">/</span>
        <span class="mx-5"><a href="#">checkout</a></span>
    </div>

    <div class="text-center font-semibold text-3xl my-20 hidden lg:block">
        <h2>MIJN WINKELWAGEN</h2>
    </div>

    <p class="p-5 text-lg lg:hidden">
    Wij bezorgen vanaf minimum €12,50. Wij leveren niet bij particulieren  
    </p>

    <div class="border-t-2 w-4/5 m-auto lg:hidden"></div>

    <!--Verder winkelen-->
    <div class=" w-3/4 m-auto hidden lg:flex">
        <iconify-icon icon="ic:round-arrow-back" style="color: #7a2d2d;" width="30" height="30"></iconify-icon>
        <p class="font-semibold text-lg ml-5">Verder Winkelen</p>
    </div>

    <!--Overkoepelende div -->
    <div class="lg:grid lg:grid-cols-3">

   
    <!--Winkelmand items-->
    <div class="col-span-2" >
        
        <div class="grid grid-cols-4 w-4/5 m-auto gap-6 mt-4 lg:bg-white lg:border lg:border-black rounded-2xl lg:p-10">
            <div class="my-auto grid grid-cols-3 bg-customRed py-2 rounded-xl text-white h-fit">
                <iconify-icon class="flex justify-self-center" icon="ph:minus" style="color: white;" width="20" height="20"></iconify-icon>
                <p class="flex justify-self-center">4</p>
                <iconify-icon class="flex justify-self-center" icon="ph:plus" style="color: white;" width="20" height="20"></iconify-icon>
            </div>
            <div class="col-span-2 ml-6 ">
                <h3 class="font-semibold">Fitness Phila</h3>
                <p>Zonder tomaten</p>
                <p class="font-semibold mt-3 lg:flex lg:justify-end lg:-mt-10">€20,00</p>
            </div>

            <div class="flex justify-self-end ">
                <iconify-icon class="hidden lg:block mr-4" icon="ic:outline-edit" style="color: #7a2d2d;" width="25" height="25"></iconify-icon>
                <iconify-icon icon="icomoon-free:bin" style="color: #7a2d2d;" width="20" height="20"></iconify-icon>
            </div>
                

        </div>

        <!--Winkelmand items-->
        <div class="grid grid-cols-4 w-4/5 m-auto gap-6 mt-8 lg:bg-white lg:border lg:border-black rounded-2xl lg:p-10">
            <div class="my-auto grid grid-cols-3 bg-customRed py-2 rounded-xl text-white h-fit">
                <iconify-icon class="flex justify-self-center" icon="ph:minus" style="color: white;" width="20" height="20"></iconify-icon>
                <p class="flex justify-self-center">4</p>
                <iconify-icon class="flex justify-self-center" icon="ph:plus" style="color: white;" width="20" height="20"></iconify-icon>
            </div>
            <div class="col-span-2 ml-6">
                <h3 class="font-semibold">Fitness Phila</h3>
                <p>Zonder tomaten</p>
                <p class="font-semibold mt-3 lg:flex lg:justify-end lg:-mt-10">€20,00</p>
            </div>

            <div class="flex justify-self-end ">
                <iconify-icon class="hidden lg:block mr-4" icon="ic:outline-edit" style="color: #7a2d2d;" width="25" height="25"></iconify-icon>
                <iconify-icon icon="icomoon-free:bin" style="color: #7a2d2d;" width="20" height="20"></iconify-icon>
            </div>
                

        </div>

        <!--Winkelmand items-->
        <div class="grid grid-cols-4 w-4/5 m-auto gap-6 mt-8 lg:bg-white lg:border lg:border-black rounded-2xl lg:p-10">
            <div class="my-auto grid grid-cols-3 bg-customRed py-2 rounded-xl text-white h-fit">
                <iconify-icon class="flex justify-self-center" icon="ph:minus" style="color: white;" width="20" height="20"></iconify-icon>
                <p class="flex justify-self-center">4</p>
                <iconify-icon class="flex justify-self-center" icon="ph:plus" style="color: white;" width="20" height="20"></iconify-icon>
            </div>
            <div class="col-span-2 ml-6">
                <h3 class="font-semibold">Fitness Phila</h3>
                <p>Zonder tomaten</p>
                <p class="font-semibold mt-3 lg:flex lg:justify-end lg:-mt-10">€20,00</p>
            </div>

            <div class="flex justify-self-end ">
                <iconify-icon class="hidden lg:block mr-4" icon="ic:outline-edit" style="color: #7a2d2d;" width="25" height="25"></iconify-icon>
                <iconify-icon icon="icomoon-free:bin" style="color: #7a2d2d;" width="20" height="20"></iconify-icon>
            </div>

        </div>
    </div>
    <div class="lg:bg-white lg:border lg:border-black rounded-2xl w-11/12 lg:h-fit lg:mt-4">
        <div class="border-t-2 w-4/5 m-auto mt-8 lg:hidden"></div>

        <div class="grid grid-cols-2 gap-2 font-semibold text-2xl w-4/5 m-auto text-center py-16">
            <h2>SUBTOTAAL</h2>
            <h2>€38,00</h2>
        </div>

        <div class="border w-4/5 m-auto lg:border-black"></div>

        <div class="hidden lg:flex mt-10 w-3/4 m-auto">
            <input type="checkbox" name="privicyBeleid" class="w-5 h-5 mr-5" id="">
            <p >
                Ik heb de <a href="./algemeneVoorwaarde.php"><u class="text-customRed">algemene voorwaarden</u></a> van de website gelezen en ga hiermee akkoord*
            </p>
        </div>

        <button class="px-8 py-4 bg-customRed rounded-2xl text-white w-1/2 m-auto flex justify-center my-10">AFREKENEN</button>

        <div class="grid grid-cols-10 w-1/2 m-auto lg:hidden">
            <iconify-icon class="ml-5" icon="material-symbols-light:arrow-back" style="color: #7a2d2d;" width="30" height="30"></iconify-icon>
            <button class="col-span-9 px-8 py-4 text-black  m-auto flex justify-center -mt-3">VERDER WINKELEN</button>
        </div>
    
    </div>

    </div>

    <?php include('../components/footer.html'); ?>
</div>
</body>
</html>
<script src="../../dist/script.js"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>