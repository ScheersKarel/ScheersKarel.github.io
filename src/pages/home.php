<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Broodjes Van Eden | Home</title>
    <link href="../../dist/output.css" rel="stylesheet">
    <link href="../../dist/styles.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;600;700&family=Lora&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/glide.min.js"></script>
 
</head>
<body>
    <div class="bg-customGray">
        <?php include('../components/header.html'); 
        include('../components/nav.html');
        ?>
    
        <!-- CTA -->
        <div class="text-center text-white border-t-4 border-customRed bg-no-repeat h-72" name="CTA" style="background-image: url('../images/5634.webp');background-size: cover;" alt="Foto croissant en baguette">
            <div class="bg-gray-500 relative w-full h-72  opacity-60 top-0 -mt-1 "></div>
            <h1 class="text-4xl bg-gray-800/50 w-fit rounded-3xl py-2 px-4 m-auto relative z-10 -mt-60">Broodjes Van Eden </h1>
            <p class="mt-7 text-xl relative z-10 ">KOFFIE | SNACKS | BROODJES | ZOET</p>
            <a href="./bestellen.php"><button class=" mt-10 w-1/2 py-3 bg-customRed text-white text-xl rounded-3xl lg:w-1/6 relative z-10">BESTEL NU</button></a>
        </div>
         <!-- In de kijker -->
        <div class="text-center mt-10">
            <h2 class="text-3xl mb-6">IN DE KIJKER </h2>
            <div class= "text-gray-500 text-lg font-thin">
                <p class="mb-3" >Bestel vóór 10:00 uur!</p> 
                <p class="mb-3">Een minimum bestelbedrag van €12,50 is vereist voor levering.</p>
                <p>Wij leveren uitsluitend aan zakelijke klanten en niet aan particulieren.</p>
           </div>
        </div>

        <!-- Foto carasel -->
        
        
        <div class="relative mt-20 lg:hidden">
            <div class="glide__arrows absolute ml-6 top-1/2 transform -translate-y-1/2 z-10 lg:hidden">
                    <button class="glide__arrow glide__arrow--prev" data-glide-dir="<"><iconify-icon icon="ooui:next-ltr" style="color: #7a2d2d;" width="20" height="20" rotate="180deg"></iconify-icon></button>
            </div>

            <div class="glide" id="carousel-example">
                <div class="glide__track w-3/4 m-auto" data-glide-el="track">
                    <div class="glide__slides">
                        <div class="glide__slide bg-white rounded-t-full">
                            <img class="w-full rounded-t-full" src="../images/croissant.webp" alt="Croissant Kaas / Hesp">
                                <p class="mt-5 text-center h-10">CROISSANT KAAS / HESP</p>
                                <div class="my-8 border-t-2 border-customRed w-1/2 m-auto"></div>
                                <h3 class="text-center text-xl">€3,50</h3>
                        </div>
                        <div class="glide__slide bg-white rounded-t-full">
                        
                            <img class="w-full rounded-t-full" src="../images/muffin.webp" alt="Gevulde muffin straciatella">
                            <p class="mt-5 text-center h-10">GEVULDE MUFFIN STRACIATELLA</p>
                            <div class="my-8 border-t-2 border-customRed w-1/2 m-auto"></div>
                            <h3 class="text-center text-xl">€3,80</h3>
                    
                        </div>
                        <div class="glide__slide bg-white rounded-t-full">
                    
                            <img class="w-full rounded-t-full" src="../images/soep.webp" alt="Tomatensoep met balletjes">
                            <p class="mt-5 text-center h-10">TOMATENSOEP MET BALLETJES</p>
                            <div class="my-8 border-t-2 border-customRed w-1/2 m-auto"></div>
                            <h3 class="text-center text-xl">€3,00</h3>                            
                    
                        </div>
                        <div class="glide__slide bg-white rounded-t-full">
                    
                            <img class="w-full rounded-t-full" src="../images/bol-mozza-1.webp" alt="Bagel Mozzarella">
                            <p class="mt-5 text-center h-10">BAGEL MOZZARELLA</p>
                            <div class="my-8 border-t-2 border-customRed w-1/2 m-auto"></div>
                            <h3 class="text-center text-xl pb-6">€7,50</h3>
                                
                        </div>
                    </div>
                </div>

            </div>
            <div  class="glide__arrows absolute mr-6 right-0 top-1/2 transform -translate-y-1/2 lg:hidden">
                <button class="glide__arrow glide__arrow--next" data-glide-dir=">"><iconify-icon icon="ooui:next-ltr" style="color: #7a2d2d;" width="20" height="20"></iconify-icon></button>
            </div>
        </div>
 
        

            <!-- grid lg fotos  -->
            <div class="hidden w-4/5 mt-20 m-auto lg:grid lg:grid-cols-4 lg:gap-8 lg:mb-20">
                <div class="bg-white rounded-t-full">
                            <img class="w-full rounded-t-full" src="../images/croissant.webp" alt="Croissant Kaas / Hesp">
                                <p class="mt-5 text-center h-10">CROISSANT KAAS / HESP</p>
                                <div class="my-8 border-t-2 border-customRed w-1/2 m-auto"></div>
                                <h3 class="text-center text-xl">€3,50</h3>
                        </div>
                        <div class="bg-white rounded-t-full">
                        
                            <img class="w-full rounded-t-full" src="../images/muffin.webp" alt="Gevulde muffin straciatella">
                            <p class="mt-5 text-center h-10">GEVULDE MUFFIN STRACIATELLA</p>
                            <div class="my-8 border-t-2 border-customRed w-1/2 m-auto"></div>
                            <h3 class="text-center text-xl">€3,80</h3>
                    
                        </div>
                        <div class="bg-white rounded-t-full">
                    
                            <img class="w-full rounded-t-full" src="../images/soep.webp" alt="Tomatensoep met balletjes">
                            <p class="mt-5 text-center h-10">TOMATENSOEP MET BALLETJES</p>
                            <div class="my-8 border-t-2 border-customRed w-1/2 m-auto"></div>
                            <h3 class="text-center text-xl">€3,00</h3>                            
                    
                        </div>
                        <div class="bg-white rounded-t-full">
                    
                            <img class="w-full rounded-t-full" src="../images/bol-mozza-1.webp" alt="Bagel Mozzarella">
                            <p class="mt-5 text-center h-10">BAGEL MOZZARELLA</p>
                            <div class="my-8 border-t-2 border-customRed w-1/2 m-auto"></div>
                            <h3 class="text-center text-xl pb-6">€7,50</h3>
                                
                        </div>

            </div>

            <div class="flex justify-center mt-10 mb-20">
               <a href="./bestellen.php" class="w-1/2 py-3 bg-customRed text-white text-xl rounded-3xl lg:w-1/6 text-center"> BEKIJK MENU</a>
            </div>

         <!-- Welkom bij broodjes van eden  -->
         <div class="lg:grid lg:grid-cols-2  lg:bg-customBrown/40">
            <div class="bg-customBrown/40 py-10 lg:bg-transparent lg:mt-3">
                <h2 class="text-2xl w-3/4 m-auto lg:text-3xl">WELKOM BIJ <br>BROODJES VAN EDEN </h2>
                <p class="text-lg w-3/4 m-auto mt-6 font-light">Leuk dat je een bezoekje brengt aan onze website!</p>
                <p class="text-lg w-3/4 m-auto mt-6 font-light">Wij zijn Anne & Lisanne, moeder en dochter en baten samen Broodjes van Eden uit. Bij ons kan je genieten van een divers assortiment dat wij steeds met verse producten voor jou bereiden.</p>
                <p class="text-lg w-3/4 m-auto mt-6 font-light">Bekijk gerust onze <u class="text-customRed font-semibold">menukaart</u>  en plaats je bestelling online.</p>
                <p class="text-lg w-3/4 m-auto mt-6 font-light">Zin om langs te komen? PERFECT! Wij beschikken over een ruime zaal met een leuk overdekt terras.</p>
                <p class="text-lg w-3/4 m-auto mt-6 font-light">Wij hopen jou alvast spoedig weer te mogen verwelkomen op onze website of in onze winkel.</p>
                <div class="hidden text-lg w-3/4 m-auto lg:flex justify-left mt-5 mb-20">
                      <a href="./contact.php" class="w-1/2 py-3 bg-customRed text-white text-xl rounded-3xl mt-10 text-center">CONTACTEER ONS</a>
                    </div>
            </div>

                <!-- Contact -->
                
                <div class="w-4/5 m-auto mt-10 ">
                    <img class="rounded-xl" src="../images/teamfoto.webp" alt="Team Broodjes Van Eden">
                    <div class="flex justify-center mt-5 mb-20 lg:hidden">
                       <a href="./contact.php "class=" w-2/3 py-3 bg-customRed text-center text-white text-xl rounded-3xl mt-10 lg:w-1/4">CONTACTEER ONS</a>
                    </div>
                </div>
            </div>
            <!-- LEES MEER -->
            <div class="py-20 bg-no-repeat bg-cover relative lg:grid lg:grid-cols-2 lg:mt-20" style="background-image: url('../images/IMG_4254.webp');" alt="Koffiekoeken">
            <div class="bg-customGray absolute w-full h-full opacity-40 top-0"></div>
                
                <div class="w-3/4 m-auto text-center bg-gray-300/70 p-5 rounded-xl relative z-10 lg:w-3/4 lg:h-96 xl:pt-10">
                    <h2 class="text-2xl text-black lg:text-3xl">ONTBIJTSERVICE</h2>
                    <p class="my-2 lg:my-8 font-light text-lg">Ontbijt beschikbaar op werkdagen na bevestiging.</p>
                    <p class="my-2 lg:my-8 font-light text-lg">Neem contact met ons op via e-mail of telefoon.</p>
                    <p class="my-2 lg:my-8 font-light text-lg">Bestellen vanaf 2 personen.</p>
                    <div class="flex justify-center mt-10 ">
                        <a href="./ontbijtservice.php" class="w-1/2 py-3 bg-customRed text-white text-xl rounded-3xl">LEES MEER</a>
                    </div>
                </div>

                <div class="mt-10 w-3/4 m-auto text-center bg-gray-300/70 p-5 rounded-xl relative z-10 lg:w-3/4 lg:mt-0 lg:h-96 xl:pt-10">
                    <h2 class="text-2xl text-black lg:text-3xl">MEETINGFORMULES</h2>
                    <p class="my-2 lg:my-8 font-light text-lg">Verse assortimenten broodjes en meer.   Met variërend beleg.</p>
                    <p class="my-2 lg:my-8 font-light text-lg">Neem contact met ons op via e-mail of telefoon.</p>
                    <p class="my-2 lg:my-8 font-light text-lg">Bestellen vanaf 2 personen.</p>
                    <div class="flex justify-center mt-10 ">
                       <a href="./meetingformules.php" class="w-1/2 py-3 bg-customRed text-white text-xl rounded-3xl"> LEES MEER</a>
                    </div>
                </div>
            </div>
        <?php include('../components/footer.html'); ?>
    </div>
</body>

</html>
<script>
    document.addEventListener('DOMContentLoaded', function () {
    var glide = new Glide('#carousel-example', {
      type: 'carousel',
      perView: 1,
    });

    glide.mount();

    // Voeg event listeners toe voor de aangepaste knoppen
    document.querySelector('.glide__arrow--prev').addEventListener('click', function () {
      glide.go('<');
    });

    document.querySelector('.glide__arrow--next').addEventListener('click', function () {
      glide.go('>');
    });
  });
</script>
<script src="../../dist/script.js"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>