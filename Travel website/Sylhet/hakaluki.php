<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="stylehaka.css">
        <link rel="stylesheet" href="../stylecard.css">
        <title>Hakaluki Haor</title>
    </head>
    <body>

    <?php include 'nav.php';?>
                
        <div class="header">
            <h1>Hakaluki Haor</h1>
        </div>
        <div class="logo"><img src="imgs/logo.png"></div>

        <!--Overview-->
    <div id="wrapper">
        <section class="overview">
            <h1>Overview</h1>
            <hr class="line">
            <p>Hakaluki Haor is a marsh wetland ecological system of Eastern Bangladesh in an area bordering Assam, India. It is one of Bangladesh’s largest and one of Asia’s larger marsh wetland resources. Some 190,000 people live in the surrounding Hakaluki Haor area.<span id="dots">...</span><span id="more"><br><br>Hakaluki Haor was designated an Ecologically Critical Area (ECA). It’s also a protected Ramsar site of international importance for the conservation and sustainable utilization of wetlands.<br><br>The surface area of Hakaluki Haor is 181.15 km2, of which 72.46 km2 (40.01%) is within the territory of Barlekha Upazila. The Haor is partly under the jurisdiction of Barlekha Upazila.</span></p>
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
            <p>You can reach to Moulvibazar from Dhaka only via bus directly. If you want to travel by train, you need to get off at Sreemangal station. Then you need to take a local bus or CNG to reach Moulvibazar.<br><br>It is 65 km away from Moulvibazar Sadar Upazila. First, you have to reach Moulvibazar. From Moulvibazar you can take a CNG auto rickshaw.</p>
            </div>
            <button class="collapsible">Where to stay?</button>
            <div class="content">
            <p>Moulvibazar has several good quality hotels in the town. There are some resorts too.</p>
            </div>
            <button class="collapsible">Where to eat?</button>
            <div class="content">
            <p>Moulvibazar has several good quality restaurents in the town.</p>
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
            <img src="imgs\Tanguar-Haor-1024x619.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Tanguar Haor</h5>
            <a href="tanguar.php" class="btn btn-outline-dark" role="button">Details</a>
            </div>
        </div>
        <div class="card" style="height: 22rem">
            <img src="imgs\Shimul-bagan.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Shimul Bagan</h5>
            <a href="shimul.php" class="btn btn-outline-dark" role="button">Details</a>
            </div>
        </div>
        <div class="card" style="height: 22rem">
            <img src="imgs\bholagonj.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Bholagonj</h5>
            <a href="volagonj.php" class="btn btn-outline-dark" role="button">Details</a>
            </div>
        </div>
        </div>
    </div>
        

    <?php
        include "footer.php";
    ?>

    </body>
</html>