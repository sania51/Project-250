<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="styledibir.css">
        <link rel="stylesheet" href="../stylecard.css">
        <title>Dibir Haor</title>
    </head>
    <body>

    <?php include 'nav.php';?>
                
        <div class="header">
            <h1>Dibir Haor</h1>
        </div>
        <div class="logo"><img src="imgs/logo.png"></div>

        <!--Overview-->
    <div id="wrapper">
        <section class="overview">
            <h1>Overview</h1>
            <hr class="line">
            <p>Dibir Haor, a beautiful tourist spot surrounded by mountain at the foot of Meghalaya state of India, was off the radar even four years back, but it has turned out to be a great destination of tourists in a much less time than expected, thanks to the media for their constant coverage since 2014.<span id="dots">...</span><span id="more"><br><br>There are four beels -- Dibi Beel, Yam, Horofkata and Kendree Beel-- where water lilies are grown naturally in around 900 acres of land. During winter, these beels wear an attractive look with the blooming of water lilies and the entire place looks like a carpet decorated with the red water lilies.<br><br>Besides, the chirping of birds makes it more attractive to tourists. This scenic beauty remains visible till 12pm from dawn.</span></p>
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
            <p>From Sylhet, you must come to Jintapur by bus, CNG autorickshaw or private car hire. It can take up to 3 to 5 rupees to reserve CNG-operated auto rickshaws for the entire day. Border Guard Bangladesh (BGB) DB's Haur camp will be visible if the Jantapur Bazar is a little further from the market. Shapala Beel is located 5 km along this camp. If you want to come to DB haor from Kadamtali in Sylhet by bus, do not get off the bus at Jintapur Bazar 2 kms in front of DB Haor camp. Shapla bills may require rent of 1 to 3 rupees if you want to roam the boat.</p>
            </div>
            <button class="collapsible">Where to stay?</button>
            <div class="content">
            <p>Several resorts have been set up on Tamabil Jantapur Road, you can stay in those resorts or come back to Sylhet to stay. Different types of hotels are available in Sylhet city as per requirement and capacity..</p>
            </div>
            <button class="collapsible">Where to eat?</button>
            <div class="content">
            <p>There is no restaurant near Dibir Haor so you can transport food as needed.</p>
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
            <img src="imgs\khadimnagar-rainforest-sylhet.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Khadimnagar</h5>
            <a href="khadim.php" class="btn btn-outline-dark" role="button">Details</a>
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
            <img src="imgs\jaflong.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Jaflong</h5>
            <a href="jaflong.php" class="btn btn-outline-dark" role="button">Details</a>
            </div>
        </div>
        </div>
    </div>
        


    <?php
        include "footer.php";
    ?>
    </body>
</html>