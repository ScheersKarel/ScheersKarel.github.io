<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Broodjes Van Eden | Galerij</title>
    <link href="../../dist/output.css" rel="stylesheet">
    <link href="../../dist/styles.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;600;700&family=Lora&display=swap" rel="stylesheet">
</head>
<body>

<div class="bg-customGray w-full">
    <?php include('../components/header.html'); 
    include('../components/nav.html'); ?>
    <div class="border-t-2 border-customRed"></div>
    

    <h1 class="text-center text-3xl my-14">GALERIJ</h1>

    <!-- GALERIJ -->
    <div class="w-4/5 m-auto lg:hidden">
        <!-- First construction of 3 -->
        <div class="grid grid-cols-2 gap-2">
            <div class=" m-auto ">
                <img class="w-full h-full object-cover rounded-3xl " src="../images/tartines-with-eggs-board.webp" alt="Brood met een omelet">
            </div>
            <div class="row-span-2 h-full m-auto">
                <img class="w-full h-full object-cover rounded-3xl" src="../images/img2.webp" alt="Bagel">
            </div>
           <div class="m-auto">
                <img class="w-full h-full object-cover rounded-3xl" src="../images/img3.webp" alt="Wraps ">
           </div>
            
        </div>

        <!-- Second construction of 1 -->
        <div class="my-3">
            <img class="w-full object-cover rounded-3xl" src="../images/img4.webp" alt="Macarons">
        </div>

        <!-- Third construction of 2 -->
        <div class="grid grid-cols-2 gap-2">
            <img class="w-full object-cover rounded-3xl" src="../images/frisdrankrectangle.webp" alt="Frisdrank">
            <img class="w-full object-cover rounded-3xl" src="../images/cakerectangle.webp" alt="Cake">
        </div>

        <!-- Fourth construction of 1 -->
        <div class="my-3">
            <img class="w-full object-cover rounded-3xl" src="../images/img7.webp" alt="Koffiekoeken">
        </div>

        <!-- Fifth construction of 2-->
        <div class="grid grid-cols-2 gap-2">
            <img class="w-full object-cover rounded-3xl" src="../images/cakerectangle.webp" alt="Cake">
            <img class="w-full h-full object-cover rounded-3xl" src="../images/img9.webp" alt="Croissants en sandwiches">
        </div>

        <!-- Sixth construction of 2 -->
        <div class="grid grid-cols-3 gap-2 mt-3">
            <img class="w-full h-full col-span-2 object-cover rounded-3xl" src="../images/arrangement-fresh-baked-breads.webp" alt="Stokbrood">
            <img class="w-full h-full object-cover rounded-3xl" src="../images/sliced-baguette-table-top-view.webp" alt="Stokbrood">
        </div>
    </div>

    <!-- GALERIJ DESKTOP-->
    <div class="hidden lg:grid lg:grid-cols-3 lg:gap-10 w-11/12 m-auto ">
        <img class="rounded-3xl" src="../images/tartines-with-eggs-board.webp" alt=" toast belegd met ei ">
        <img class="row-span-2 rounded-3xl" src="../images/img2.webp" alt="bruine bagel">
        <img class="row-span-2 rounded-3xl" src="../images/sliced-baguette-table-top-view.webp" alt="Stokbrood">
        <img class="rounded-3xl mt-8" src="../images/img3.webp" alt="Wraps ">
        <img class="rounded-3xl mt-9 " src="../images/img2.webp" alt=" Croissants en sandwiches">
        <img class="col-span-2 rounded-3xl relative -mt-48" src="../images/img4.webp" alt="Macrons">
        <img class="rounded-3xl w-full h-full object-cover" src="../images/frisdranken.webp" alt="frisdranken">
        <img class="rounded-3xl w-full h-full object-cover" src="../images/cake.webp" alt="cake met glazuur">
        <img class="rounded-3xl w-full h-full object-cover" src="../images/donuts (2).webp" alt="donuts">
        <img class="col-span-2 rounded-3xl" src="../images/img7.webp" alt="koffiekoeken ">
        <img class="rounded-3xl w-full h-full object-cover" src="../images/arrangement-fresh-baked-breads.webp" alt="stokbrood">



    </div>
        
    <?php include('../components/footer.html'); ?>
</div>
</body>
</html>
<script src="../../dist/script.js"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>