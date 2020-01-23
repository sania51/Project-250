<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="stylevola.css">
        <link rel="stylesheet" href="../stylecard.css">
        <title>Bholagonj</title>
    </head>
    <body>

    <?php include 'nav.php';?>
                
        <div class="header">
            <h1>Bholagonj</h1>
        </div>
        <div class="logo"><img src="imgs/logo.png"></div>

        <!--Overview-->
    <div id="wrapper">
        <section class="overview">
            <h1>Overview</h1>
            <hr class="line">
            <p>Bholagonj, the largest stone quarry in Bangladesh, is 33 km away to the north from Sylhet city. Flowing respectively from the Khasi hill in the north and Dauki in the east, the rivers Dholai and the Piyain meet at Companigonj Upazilla Sadar, which is 27 km away from Sylhet city on the Salutikor-Bholagonj Road. Just six kilometres from there is Bholagonj— a place that boasts of rows of hills, rivers, falls and quarries.<span id="dots">...</span><span id="more"><br><br>As a revenue collector of the East India Company, Robert Lindsay came to Sylhet in 1778 after the British invaded the area in 1765. It was while working there for long 12 years that he initiated the trading of limestone, which is used as a raw material in the production of cement. Collected from the hills situated between Bholagonj in Bangladesh and Cherapunji in India, limestone was brought to Chatok, from where it was transported to Kolkata through the Surma. The profit from the limestone business enabled Lindsay to buy huge estates in Scotland, thereby earning him the prestigious titles Sir and Lord. Lindsay’s autobiography includes a lucid description of the fascinating beauty of the then Padhua – the present-day Bholagonj.<br><br>The illustrious charm of Bholagonj as portrayed by Lindsay is no more to be found, due mainly to the uncontrolled quarrying of stones and the nuisance created by stone crushing machines over the last few years. Morever, the frequent movement of stone-laden lorries has left the Sylhet-Bholagonj Road in a sorry state. Nevertheless, the Meghalayan clouds, unremitting flow of waterfalls and ceaseless streams of rivers in the rainy season as well as the sandy shores of the Dholai that appear right after the rainy season are more than enough to mesmerize tourists.<br><br>Tourists who love walking can set off at Bholagonj and move eastwards past Doyar Bazaar, Mayar Bazaar, Uthma, Turong, Upur, Domdoma and Bitthorgul before reaching Bisnakandi. It will take about four hours to cover a distance of about 12 km, and on the way back tourists can travel to Sylhet city by road.</span></p>
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
            <p>Though it is only 33 km away from Sylhet it takes about an hour and a half to reach Bholagonj due to the poor condition of the road. CNG-run auto-rickshaws are available from Amberkhana Point and the fare is 120 BDT per person. Private cars are not suggested due to road condition.</p>
            </div>
            <button class="collapsible">Where to stay?</button>
            <div class="content">
            <p>There is no accommodation facility in Bholagonj but there is Government Bungalow in Companigonj. Tourist may visit Bholagonj from Sylhet city.</p>
            </div>
            <button class="collapsible">Where to eat?</button>
            <div class="content">
            <p>There is no standard restaurant in Bholagonj but there are local food shops.</p>
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
        <div class="near">
            <h1>Nearby Places</h1>
            <hr class="line"> 
    
        </div>

        <div class="card-deck">
        <div class="card" style="height: 22rem">
            <img src="imgs\Tanguar-Haor-1024x619.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Tanguar Haor</h5>
            <a href="volagonj.php" class="btn btn-outline-dark" role="button">Details</a>
            </div>
        </div>
        <div class="card" style="height: 22rem">
            <img src="imgs\hakaluki haor sylhet1.png" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Hakaluki Haor</h5>
            <a href="panthumai.php" class="btn btn-outline-dark" role="button">Details</a>
            </div>
        </div>
        <div class="card" style="height: 22rem">
            <img src="imgs\14855301281_5099685c97_b.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Bichanakandi</h5>
            <a href="bisnakandi.php" class="btn btn-outline-dark" role="button">Details</a>
            </div>
        </div>
        </div>
    </div>
        

    <?php
        include "footer.php";
    ?>

    </body>
</html>