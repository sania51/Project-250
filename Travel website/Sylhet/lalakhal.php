<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="stylelalakhal.css">
        <link rel="stylesheet" href="../stylecard.css">
        <title>Lalakhal</title>
    </head>
    <body>

    <?php include 'nav.php';?>
                
        <div class="header">
            <h1>Lalakhal</h1>
        </div>
        <div class="logo"><img src="imgs/logo.png"></div>

        <!--Overview-->
    <div id="wrapper">
        <section class="overview">
            <h1>Overview</h1>
            <hr class="line">
            <p>Lalakhal,which is another top tourist attraction in Jaintapur Upazilla, is covered with hills, natural forests, tea gardens, and rivers under the Jainta Hill which comprises part of the Meghalaya Ranges of India. Flowing from the Indian part, the river Myntdu enters Lalakhal as the Saree and meets the river Guaiyan after passing<span id="dots">...</span><span id="more">Sarighat. Over a stretch of nearly 12 km of the river from Lalakhal to Sarighat, the colour of the water stays transparent green in winter (as well as in other seasons when it does not rain) due to the minerals flowing with water and the sandy river bed.<br><br>At the eastern bank of river Saree, there is the ‘Lalakhal Tea Garden’.<br><br>A tourist can experience green water river, Range of mountain and Tea Garden- at once in Lalakhal. </span></p>
            <button class="b" onclick="myFunction()" id="myBtn">Read more</button>

            <script>
                function myFunction() {
                    var dots = document.getElementById("dots");
                    var moreText = document.getElementById("more");
                    var btnText = document.getElementById("myBtn");
                
                    if (dots.style.display === "none") {
                    dots.style.display = "inline";
                    btnText.innerHTML = "Read more"; 
                    moreText.style.display = "none";
                    } else {
                    dots.style.display = "none";
                    btnText.innerHTML = "Read less"; 
                    moreText.style.display = "inline";
                    }
                }
            </script>
        </section>

        <div class="plan">
            <h1>Plan Your Visit</h1>
            <hr class="line"> 
        </div>
<br><br><br>
        <div class="c">
            <button class="collapsible">How to go there?</button>
            <div class="content">
            <p>Tourists usually travel to Sarighat, which is 42 km away from Sylhet city centre, by road and then hire a boat to reach Lalakhal. The one-and-a-quarter hour (mechanised-) boat ride over this crystal green water with lush green hills on both sides of the river is a soothing sight for any nature lovers.<br><br>There is a boat station in Sarighat operated by Nazimgarh Resort. Different types of mechanised boats can be hired from there to travel to Lalakhal.<br><br>It is also possible to go to Lalakhal by Micro Bus or Private car. Not far from the Sari Bridge is an old structure which used to be a tavern named after ‘Iraboti’, the princess of the Jainta Province,in the middle of the road. Lalakhal is just 7 km away from this landmark. Tourists can embark on a journey to the Zero Point by boat from the River Queen restaurant. A microbus can be rented for 3500-5500 BDT depending on its size and make, though it would cost more at the weekend (especially on Fridays).<br><br>Locally made mechanised boats may be hired from Sarighat about 1200-1500 BDT while the special boats of Nazimgarh Boat Station would cost 2000-5000 BDT.<br><br>A half-an-hour boat ride from the River Queen restaurant (Lalakhal) costs 500 BDT.</p>
            </div>
            <button class="collapsible">Where to stay?</button>
            <div class="content">
            <p>TNazimgarh Resorts operates ‘Adventure Tent Camp’ in Lalakhal which is open to tourist during Winter. <br><br>Apart that, Nazimgarh has a world class nature Resort Wilderness in Lalakhal.</p>
            </div>
            <button class="collapsible">Where to eat?</button>
            <div class="content">
            <p>Nazimgarh Resort runs a cosy restaurant named River Queen located on the bank of the Sari and open to all tourists. Lunch costs about 400-500 BDT per person.</p>
            </div>

            <script>
            var coll = document.getElementsByClassName("collapsible");
            var i;

            for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.maxHeight){
                content.style.maxHeight = null;
                } else {
                content.style.maxHeight = content.scrollHeight + "px";
                } 
            });
            }
            </script>
        </div>
        <div class="card-deck">
        <div class="card" style="height: 22rem">
            <img src="imgs\jaflong.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Jaflong</h5>
            <a href="jaflong.php" class="btn btn-outline-dark" role="button">Details</a>
            </div>
        </div>
        <div class="card" style="height: 22rem">
            <img src="imgs\panthumai.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Panthumai</h5>
            <a href="panthumai.php" class="btn btn-outline-dark" role="button">Details</a>
            </div>
        </div>
        <div class="card" style="height: 22rem">
            <img src="imgs\22357970719_ec34687729_b.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Lovachora</h5>
            <a href="lova.php" class="btn btn-outline-dark" role="button">Details</a>
            </div>
        </div>
        </div>
    </div>
        

    <?php
        include "../footer.php";
    ?>

    </body>
</html>