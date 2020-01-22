<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="stylesat.css">
        <link rel="stylesheet" href="../stylecard.css">
        <title>Sathchori</title>
    </head>
    <body>

    <?php include 'nav.php';?>
                
        <div class="header">
            <h1>Sathchori</h1>
        </div>
        <div class="logo"><img src="imgs/logo.png"></div>

        <!--Overview-->
    <div id="wrapper">
        <section class="overview">
            <h1>Overview</h1>
            <hr class="line">
            <p>Sathchori National ForestSathchori National Forest is situated in Roghunandon Hill at Chunnarughat Upazilla under Habiganj District in Sylhet Division. Previously known as Roghunandon Reserve Forest, this national forest partitions Sathchori Tea Garden and Chaklapunji Tea Garden. There are some other tea gardens near the forest which was actually named after seven choras (creeks) flowing from the hills.<span id="dots">...</span><span id="more"><br><br>Sathchori National Forest is mainly an evergreen woodland boasting of almost 200 types of trees including teakwood (tectona grandis), mahogany (swietenia mahagoni) chrysanthemum and bamboo. In addition to a variety of species of apes and deer, 24 species of mammals, 18 species of reptiles and 150 types of birds are found there.<br><br>There are three trails for trekking. One takes 30 minutes, another one hour and the other three hours to complete trekking. The 30-minute trail takes one to the village of the Tripura indigenous community. The three-hour trail, which is six kilometres long, is ideal for anyone interested in birds and wild animals as well as agar wood (raw material for incense and perfume). There are some well trained guides to take tourists through the forest.</span></p>
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
            <p>Tourists travelling from Dhaka should take the Dhaka-Sylhet highway and turn right at Sayham Circle in Madhobpur. It is also possible to travel to Sreemongol first, and then to go to Sathchori. It is also accessable from Chunaroghat.</p>
            </div>
            <button class="collapsible">Where to stay?</button>
            <div class="content">
            <p>There is Forest Bungalow in Sathchori which need prior permission to stay in. There is no private run accommodation here. Tourist need to stay at Sreemongol or Chunaroghat.</p>
            </div>
            <button class="collapsible">Where to eat?</button>
            <div class="content">
            <p>There is no dining facility in Sathchori.</p>
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
            <img src="imgs\tea_garden.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Sreemongol</h5>
            <a href="sremongol.php" class="btn btn-outline-dark" role="button">Details</a>
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