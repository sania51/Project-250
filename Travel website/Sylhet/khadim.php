<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="stylekhadim.css">
        <link rel="stylesheet" href="../stylecard.css">
        <title>Khadimnagar</title>
    </head>
    <body>

    <?php include 'nav.php';?>
                
        <div class="header">
            <h1>Khadimnagar</h1>
        </div>
        <div class="logo"><img src="imgs/logo.png"></div>

        <!--Overview-->
    <div id="wrapper">
        <section class="overview">
            <h1>Overview</h1>
            <hr class="line">
            <p>About 10 kilometres from Sylhet city on the Sylhet-Jaflong Highway past the Shrine of Shah Paran is Khadimnagar Intersection. A left turn from there leads to Khadimnagar Tea Garden. Waiting to greet tourists with its absorbing lush green warmth just about five kilometres from the Highway through the tea gardens is Khadimnagar Rainforest comprising1,673 acres of hills and natural forest surrounded by six tea gardens — Choragang and Habibnagar on the East, Borjan and Kalagul on the West, Gulni on the North, and Khadimnagar on the South. Officially recognised as a national forest, Khadimnagar Rainforest operates with support from USAID.<span id="dots">...</span><span id="more"><br><br>The rainforest boasts of diverse flora and fauna. There are 217 species of plants and trees. Most notable among them are teakwood (tectona grandis) and mahogany (swietenia mahagon) as well as different types of bamboos and canes. Among the animals and birds are different species of bears, wild cats, apes, pythons, parakeets and doves.<br><br>The forest is quite popular with trekkers with a 45-minute trail and a two-hour one. There is a map of the trails in front of the local forest office. Besides, trekkers can also hire a local guide.<br><br>The northward road from the rainforest leads to the Airport-Haripur Road, from where it is easy to go to Ratargul Swamp Forest. Anyone who intends to explore Sylhet in a day can use this road and visit tea gardens, rainforests as well as swamp forests on the way.<br><br>Even though most parts of this road are brick-laid one can drive there. However, it is a good idea to hire a CNG-run auto-rickshaw from Khadimnagar Intersection on a rainy day.</span></p>
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
            <p>Khadimnagar intersection is seven kilometers north from the Sylhet city. From there the rain forest is five kilometers to the left. Visitors can take their own car or hire a cng auto rickshaw.</p>
            </div>
            <button class="collapsible">Where to stay?</button>
            <div class="content">
            <p>Sylhet has several good quality hotels in the town.</p>
            </div>
            <button class="collapsible">Where to eat?</button>
            <div class="content">
            <p>Sylhet has several good quality restaurents in the town.</p>
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
            <img src="imgs\Sylhet-Dibir-Haor-By-Farzana-Anu.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Dibir Haor</h5>
            <a href="dibir.php" class="btn btn-outline-dark" role="button">Details</a>
            </div>
        </div>
        <div class="card" style="height: 22rem">
            <img src="imgs\panthumai.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Shrine of Hazrat Shahporan</h5>
            <a href="shahporan.php" class="btn btn-outline-dark" role="button">Details</a>
            </div>
        </div>
        <div class="card" style="height: 22rem">
            <img src="imgs\jaflong.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Jaflong</h5>
            <a href="jaflong.php" class="btn btn-outline-dark" role="button">Details</a>
            </div>
        </div>
        </div>
    </div>
        

    <?php
        include "../footer.php";
    ?>

    </body>
</html>