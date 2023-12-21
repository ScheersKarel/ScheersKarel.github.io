<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Broodjes Van Eden |Betaling Gelukt</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;600;700&family=Lora&display=swap" rel="stylesheet">
    </head>
<body>
<div class="bg-customGray">
    <?php include('../components/header.html'); ?>
    <div class="border-t-2 border-customRed"></div>

    <!--betaling gelutk-->
    <div class="bg-white w-4/5 m-auto p-5 rounded-3xl mt-10 mb-20">

        <!--Check-->
        <div class="bg-customGreen/25 rounded-full p-5 w-32 h-32 m-auto">
            <iconify-icon class="p-3 bg-customGreen rounded-full m-auto flex item-center justify-center" icon="ic:sharp-check" style="color: white;" width="60" height="60"></iconify-icon>
        </div>

        <h1 class="text-3xl text-center mt-10 ">BEDANKT VOOR JE BESTELLING!</h1>

        <p class="text-center mt-10">Je vindt een bevestiging in je mailbox</p>
        <p class="text-center text-lg mt-4 font-semibold">TEAM BROODJES VAN EDEN </p>
        <div class="border-t-2 w-11/12 m-auto border-black mt-6"></div>

        <table class="m-auto mt-10 table-auto w-4/5">
            <tr>
                <td>
                    Ref Nummer
                </td>
                <td class="text-end">
                    00007567362
                </td>
            </tr>
            <tr>
                <td>
                    Tijd Betaling
                </td>
                <td class="text-end">
                    09-04-2023, 9u21
                </td>
            </tr>
            <tr>
                <td>
                    Betalingsmethode
                </td>
                <td class="text-end">
                    Bancontact
                </td>
            </tr>
            <tr>
                <td>
                    Naam
                </td>
                <td class="text-end">
                    John Doe
                </td>
            </tr>
        </table>

        <div class="border-t-2 border-black mt-10 border-dashed"></div>

        <table class="w-4/5 m-auto text-lg mt-6">
            <tr>
                <td>
                    Subtotaal
                </td>
                <td class="text-end">
                    €38,00
                </td>
            </tr>
        </table>
    </div>


    <div class="bg-white pt-1">
        <button class="px-8 py-4 bg-customRed rounded-3xl text-white w-3/4 m-auto flex justify-center my-10">TERUG NAAR PRODUCTEN</button>
    </div>
   

</div>
</body>
</html>
<script src="../../dist/script.js"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>