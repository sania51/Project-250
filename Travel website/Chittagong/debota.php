<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="styledeb.css">
        <link rel="stylesheet" href="../stylecard.css">
        <title>Debotakhum</title>
    </head>
    <body>

    <?php include 'nav.php';?>
                
        <div class="header">
            <h1>Debotakhum</h1>
        </div>
        <div class="logo"><img src="imgs/logo.png"></div>

        <!--Overview-->
    <div id="wrapper">
        <section class="overview">
            <h1>Overview</h1>
            <hr class="line">
            <p>Debotakhum is located in Roangchari upazila of Bandarban district.Debotakhum is located in Roangchari upazila of Bandarban district.<span id="dots">...</span><span id="more"><br><br>The trail to the deity is as awesome as it is beautiful. In the rainy season, as the trail falls, you will be caught in the danger of falling into a rocky path. No noise, outside the network. The silence that surrounds the silence is like a haunted environment. The atmosphere will feel more spooky with the sound of splashing water. The path between two huge mountains has passed, which can be passed through the valleys. You can enjoy the nature very closely here. As if to merge with nature. The way to go will tell you - how beautiful the path to heaven can be.</span>
            </p>
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
            <p>Bandarban has to go from anywhere in Bangladesh first. From there by bus / moon car / CNG / motor bike to Rowanchari (3-5 minutes walk). From there, turtle market (3 minutes walk) to CNG / Motor Bike. Then for an hour and a half at the foot of the deity.You have to first go from Roangchari to the Turtle Army Camp and trek to Pir (Liragaon). Of course, a strong bamboo can be built from the sealing point. The pier must first cross Pong Su Ang Khum. After the crossing of Pong Su Ang, the deity's room begins. To the locals it is a goldsmith. Many also call it Thongchikhum again in Marma language.</p>
            </div>
            <button class="collapsible">Where to stay?</button>
            <div class="content">
            <p>There is no accommodation facilities in there.</p>
            </div>
            <button class="collapsible">Where to eat?</button>
            <div class="content">
            <p>There is no Dine facility in Debotakhum. If needed tourist has to take packed food from Sylhet.</p>
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
            <img src="imgs\nafa.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Nafakhum</h5>
            <a href="#" class="btn btn-outline-dark" role="button">Details</a>
            </div>
        </div>
        <div class="card" style="height: 22rem">
            <img src="imgs\amia.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Amiakhum</h5>
            <a href="#" class="btn btn-outline-dark" role="button">Details</a>
            </div>
        </div>
        <div class="card" style="height: 22rem">
            <img src="imgs\Sajek_Valley.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Sajek</h5>
            <a href="#" class="btn btn-outline-dark" role="button">Details</a>
            </div>
        </div>
        </div>
    </div>
        
    <?php
        include "footer.php";
    ?>



    </body>
</html>