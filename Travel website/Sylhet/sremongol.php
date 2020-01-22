<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="stylesree.css">
        <link rel="stylesheet" href="../stylecard.css">
        <title>Sreemongol</title>
    </head>
    <body>

    <?php include 'nav.php';?>
                
        <div class="header">
            <h1>Sreemongol</h1>
        </div>
        <div class="logo"><img src="imgs/logo.png"></div>

        <!--Overview-->
    <div id="wrapper">
        <section class="overview">
            <h1>Overview</h1>
            <hr class="line">
            <p>Despite being an Upazilla – a small administrative unit – under Moulvibazar district in Sylhet, Sreemongol has long been credited as a top tourist attraction having earned its recognition as a town as early as the beginning of the19th century. Even though the first ever tea garden in Sylhet – Malnichara – was established near Sylhet city in 1854, large tea estates eventually found their niche in Sreemongol town and the surrounding hills and mountains. The only tea research institute in Bangladesh – BTRI – which is a popular tourist destination is also situated in this<span id="dots">...</span><span id="more">town. Easily accessible from Dhaka by road or train, Sreemongol has a lot to offer for tourists. Of the 138 tea gardens in Greater Sylhet, 38 are situated in Sreemongol, and this number would be no fewer than 60 when added to gardens in the surrounding areas.<br><br>Anyone travelling in and around Sreemongol is sure to be greeted by lush green tea gardens that stretch over miles and miles of hilly areas, not to speak of the chirping birds and shading trees besides the pineapple and lemon gardens.<br><br>Just two kilometres away from the town, BTRI is easily accessible by rickshaw or CNG-run auto-rickshaw. With permission one can enter the facility and be fascinated by splendid flower gardens, age-old tea plants, a tea factory, a testing lab and many more.<br><br>Just outside of BTRI is Neelkantha Tea Cabin – a fabulous tea stall and another attraction of Sreemongol where tea gardener Ramesh Ram Gour sells tea of a variety of colours and flavours.<br><br>Around sreemongol town there are a number of natural lakes. Just a ten-minute rickshaw ride on the College Road takes one to Varaura Lake, which is surrounded by lush green tea gardens. Rajghat Lake is a bit far from the town. For a 30-minute drive either Kalighat Road or Sindurkhan Road may be taken from Sreemongol town. Moreover, about 10 kilometres east of Sreemongol town is the legendary Madhabpur Lake inside Patrakhola Tea Estate. Water lilies of diverse colours in the lake, pedestrian paths along the bank, as well as the tweeting of numerous birds in winter make it a place worth visiting.<br><br>Besides tea gardens, hills, forests and lakes, Sreemongol has also been enriched by the beauty of beels and haors (i.e. swamplands). With an area of 600 square kilometres, Baikka Beel is situated there. On the east of Hayeel Haor is Baikka Beel comprising 100 hectares of swampland. Following a governmental decision, this swampland has been conserved as a refuge for local fish since 2003.<br><br>In winter this swampland is inhabited by migratory as well as local birds. In addition to the chirping of diverse species of birds, the beauty of different flowers including water lilies enchant tourists. An observation tower has been built there for the convenience of tourist.<br><br>Although most tourists visit Baikka Beel during winter, this swampland assumes an unparalleled beauty in the rainy season.</span></p>
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
            <p>Sreemongol is easily accessible from Dhaka by Bus or Train.</p>
            </div>
            <button class="collapsible">Where to stay?</button>
            <div class="content">
            <p>Grand Sultan Tea Resort & Golf’ is a luxurious accommodation provider in Sreemongol. <br><br>Another Luxurious Resort Dusai also 15 km distance only. <br><br>Tea Resort also provide standard accommodation. Besides that there are a good no of Guest houses and cottages are available at Sreemongol.</p>
            </div>
            <button class="collapsible">Where to eat?</button>
            <div class="content">
            <p>Sreemongol has many restaurants from budget to luxurious. 'Kutumbari Restaurant' in the main town is one of them.</p>
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
            <img src="imgs\HamHam_falls_sylhet.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Hum Hum</h5>
            <a href="hum.php" class="btn btn-outline-dark" role="button">Details</a>
            </div>
        </div>
        <div class="card" style="height: 22rem">
            <img src="imgs\Satchari_Scenario.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Satchori</h5>
            <a href="satchori.php" class="btn btn-outline-dark" role="button">Details</a>
            </div>
        </div>
        <div class="card" style="height: 22rem">
            <img src="imgs\Lawachara.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Lawachora</h5>
            <a href="lawachara.php" class="btn btn-outline-dark" role="button">Details</a>
            </div>
        </div>
        </div>
    </div>
        


    <?php
        include "../footer.php";
    ?>
    </body>
</html>