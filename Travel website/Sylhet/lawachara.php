<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="stylelawa.css">
        <link rel="stylesheet" href="../stylecard.css">
        <title>Lawachara</title>
    </head>
    <body>

    <?php include 'nav.php';?>
                
        <div class="header">
            <h1>Lawachara</h1>
        </div>
        <div class="logo"><img src="imgs/logo.png"></div>

        <!--Overview-->
    <div id="wrapper">
        <section class="overview">
            <h1>Overview</h1>
            <hr class="line">
            <p>On the Vanugach-Komalganj Road about seven kilometres from Sreemongol town is the entry to Lauachora National Garden. It is an evergreen rainforest with excessive precipitation. Tall trees with their lofty branches and soaring foliage make for a unique cover for the forest on a sunny day. Lauachora is one of the<span id="dots">...</span><span id="more">seven safari parks and 10 national gardens in Bangladesh. An area of 1,250 hectares from the 2,740-hectare West Vanugach Reserve Forest was declared a national garden in 1996.<br><br>Upon payment of a certain amount of fee, one can visit the forest. There are 30-minute, one-hour and three-hour trails that can be walked with the help of trained guides. A wide variety of plants, orchids, insects, birds and other animals can be seen.<br><br>Even though it is not very large in size, this forest is a sanctuary for rare species of plants and animals that include endangered species of hoolok gibbon, phayre’s langur, as well as a wide variety of apes, cats and snakes including pythons, in addition to parrots, magpies and many other birds.</span></p>
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
            <p>Lawachera is easily accessible from sreemongol town by own drive or cng auto rickshaw. Tourist may come to sreemongol from Dhaka or Sylhet by car or train.</p>
            </div>
            <button class="collapsible">Where to stay?</button>
            <div class="content">
            <p>Grand Sultan Tea Resort & Golf’ is a luxurious accommodation provider near Lawachera. <br><br>Another Luxurious Resort Dusai also not far. <br><br>There are a good no of Guest houses and cottages are available around Lawachera.</p>
            </div>
            <button class="collapsible">Where to eat?</button>
            <div class="content">
            <p>At the Lawachera - Sreemongol road there are restaurants from budget to luxurious. 'Kutumbari Restaurant' in the main town is one of them.</p>
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
            <img src="imgs\tea_garden.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Sreemongol</h5>
            <a href="sremongol.php" class="btn btn-outline-dark" role="button">Details</a>
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
            <img src="imgs\HamHam_falls_sylhet.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Hum Hum</h5>
            <a href="hum.php" class="btn btn-outline-dark" role="button">Details</a>
            </div>
        </div>
        </div>
    </div>
        

    <?php
        include "footer.php";
    ?>

    </body>
</html>