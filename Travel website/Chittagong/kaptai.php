<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="stylekap.css">
        <link rel="stylesheet" href="../stylecard.css">
        <title>Kaptai Lake</title>
    </head>
    <body>

    <?php include 'nav.php';?>
                
        <div class="header">
            <h1>Kaptai Lake</h1>
        </div>
        <div class="logo"><img src="imgs/logo.png"></div>

        <!--Overview-->
    <div id="wrapper">
        <section class="overview">
            <h1>Overview</h1>
            <hr class="line">
            <p>Kaptai Lake is a beautiful blue man-made watery lake. The size of this Lake is approximately 11000 square kilometer, which was created as a reservoir when the Kaptai dam was built during the 1960. This amazing Lake was created by flooding valleys and plain lands between numerous hills all around the Lake. Kaptai has Bangladesh’s only hydro-electric project. The Kaptai Dam on the Karnaphuli River created for this purpose resulted in the Kaptai Lake. This created a charming view as forested hills and plateaus rise from beneath the beautiful Lake water.<span id="dots">...</span><span id="more"><br><br>A stretch of road connects the tourist spots of Rangamati and Kaptai. The road goes deep into the hill tracts and displays the natural beauty and wildlife of the district Rangamati. The government of Bangladesh run Tourism Corporation and many private operators offer Kaptai Lake Cruise Tours, which is worth of it. Other scenic spots are also accessible through the waterways. Cruising on the Kaptai Lake is an enjoyable way of observing the landscape as many great picnic spots, natural landmarks and historic monuments are accessible only by boats.</span></p>
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
            <p>Kaptai Lake is located in Rangamati Sadar Upazila. After reaching at Rangamati, take local transport to visit this lake.</p>
            </div>
            <button class="collapsible">Where to stay?</button>
            <div class="content">
            <p>Stay at any resort or hotel</p>
            </div>
            <button class="collapsible">Where to eat?</button>
            <div class="content">
            <p>Eat at any restaurents.</p>
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
            <img src="imgs\Boga-Lake-byTalash.shahnewaz-1024x683.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Boga Lake</h5>
            <a href="#" class="btn btn-outline-dark" role="button">Details</a>
            </div>
        </div>
        <div class="card" style="height: 22rem">
            <img src="imgs\Foys-Lake-Chittagong.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Foy's Lake</h5>
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