<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Broodjes Van Eden |Contact</title>
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
        <div class="text-center h-72 text-white border-t-4 border-customRed bg-no-repeat bg-cover" name="CTA" style="background-image: url('../images/5634.webp');opacity: 0.9;">
        <div class="bg-gray-500 relative w-full h-72  opacity-60 top-0 -mt-1"></div>
            <h1 class="text-4xl  bg-gray-800/50 w-fit rounded-3xl py-2 px-4 m-auto relative z-10 -mt-44 ">Contact </h1>
        </div>

        <!-- Contact -->
        <div class="bg-customBrown/50 mt-10 lg:grid lg:grid-cols-3">
            <div class="hidden lg:block">
                <img class="w-1/5 rounded-2xl ml-20 mt-52 absolute" src="../images/locatie.webp" alt="interieur broodjes van eden ">
            </div>
            <div class="hidden lg:block">
                <h2 class="text-3xl mt-10 ">OPENINGSUREN</h2>
            <table class=" mt-10 text-black w-full font-light ">
                    <tr>
                        <td>maandag</td>
                        <td>7:30 - 15:00</td>
                    </tr>
                    <tr>
                        <td>dinsdag</td>
                        <td>7:30 - 15:00</td>
                    </tr>
                    <tr>
                        <td>woensdag</td>
                        <td>7:30 - 15:00</td>
                    </tr>
                    <tr>
                        <td>donderdag</td>
                        <td>7:30 - 15:00</td>
                    </tr>
                    <tr>
                        <td>vrijdag</td>
                        <td>7:30 - 15:00</td>
                    </tr>
                    <tr>
                        <td>zaterdag</td>
                        <td>Gesloten</td>
                    </tr>
                    <tr>
                        <td>zondag</td>
                        <td>Gesloten</td>
                    </tr>
                </table>
            </div>
            <div class="pt-8 w-3/4 m-auto ">
                <H2 class="text-3xl">LOCATIE</H2>
                <h3 class="font-semibold text-xl my-3">BROODJES VAN EDEN</h3>
                <h3 class="text-xl">EDENPLEIN 15, 2610 WILRIJK</h3>
                <div class="mt-10 border-t-2 border-customRed w-3/4 m-auto lg:w-full"></div>
                <div class="pb-6">
                <table class="w-2/3 m-auto mt-10 lg:w-full">
                    <tr>
                        <td><iconify-icon class="border border-customRed bg-customGray  rounded-xl p-2" icon="ion:mail-outline" style="color: #7a2d2d;" width="25" height="25"></iconify-icon></td>
                        <td ><a href="mailto:contact@broodjesvaneden.be" class="text-customRed"><u>contact@broodjesvaneden.be</u></a></td>
                    </tr>
                    <tr>
                        <td><iconify-icon class="border border-customRed bg-customGray  rounded-xl p-2" icon="carbon:phone" style="color: #7a2d2d;"  width="25" height="25"></iconify-icon></td>
                        <td><a href="tel:+32 3 772 19 63">+32 3 772 19 63</a></td>
                    </tr>
                </table>
            </div>
            </div>
            
           

             
            
        </div>
    <div class=" lg:grid lg:grid-cols-2 lg:mt-60 xl:mt-80 2xl:mt-96 lg:bg-customBrown/50">
        
        <!--contactformulier-->
        <div class="w-4/5 m-auto mt-10  ">
            <h2 class="text-center lg:text-left text-3xl">CONTACT FORMULIER</h2>
            <p class="text-center lg:text-left mt-2 mb-10">Heb je een vraag? We staan je graag te woord!</p>

            <table class="w-full text-lg ">
                <tr >
                    <td >Voornaam</td>
                </tr>
                <tr>
                    <td><input class="border-b-2 border-gray-500 w-full bg-customGray lg:bg-transparent" type="text"></td>
                </tr>
                <tr class="">
                    <td class="pt-6">Achternaam</td>
                </tr>
                <tr>
                    <td><input class="border-b-2 border-gray-500 w-full bg-customGray lg:bg-transparent" type="text"></td>
                </tr>
                <tr>
                    <td class="pt-6">E-mail</td>
                </tr>
                <tr>
                    <td><input class="border-b-2 border-gray-500 w-full bg-customGray lg:bg-transparent" type="text"></td>
                </tr>
                <tr>
                    <td class="pt-6">Wat is je vraag?</td>
                </tr>
                <tr>
                    <td><input class="border-b-2 border-gray-500 w-full bg-customGray lg:bg-transparent" type="text"></td>
                </tr>
            </table>

            <div class="border border-dashed border-gray-500 mt-3 py-4 m-auto flex justify-center">
                <iconify-icon icon="material-symbols-light:upload" style="color: black;" width="32" height="32"></iconify-icon>
                <p class="ml-3 mt-2">Upload Additional File</p>
            </div>

            <p class="text-center mt-3">De bestandsgrootte van uw documenten mag niet groter zijn dan 10 MB</p>

            <button class="w-1/2 py-3 bg-customRed text-white text-xl rounded-3xl m-auto flex justify-center my-10">VERSTUUR</button>
                   
        </div>

        <img class=" mt-10 bg-no-repeat bg-cover w-3/4 rounded-2xl m-auto " src="../images/maps.webp" alt="Maps / ligging broodjes van eden">
    
        
    </div>
    <?php include('../components/footer.html'); ?>
</div>
</body>
</html>
<script src="../../dist/script.js"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>