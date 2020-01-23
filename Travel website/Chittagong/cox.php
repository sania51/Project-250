<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="stylecox.css">
        <link rel="stylesheet" href="../stylecard.css">
        <title>Cox's Bazar</title>
    </head>
    <body>

    <?php include 'nav.php';?>
                
        <div class="header">
            <h1>Cox's Bazar</h1>
        </div>
        <div class="logo"><img src="imgs/logo.png"></div>

        <!--Overview-->
    <div id="wrapper">
        <section class="overview">
            <h1>Overview</h1>
            <hr class="line">
            <p>Cox's Bazar sea beach is the longest sea beach in the world, 120 km long, having no 2nd instance. The wavy water of Bay of Bengal touches the beach throughout this 120 km.<br><br>For Bangladeshi's it doesn't get much better than Cox's Bazar, the country's most popular beach town than the other one 'Kuakata beach town. It's sort of a Cancun of the east. It's choc-a-bloc with massive well-architectured concrete structures, affluent 5 & 3 star hotels, catering largely to the country's elite and overseas tourists. The beach is only a bit crowded in tourist season, October to March, especially near the hotel-motel zone, but remains virgin during the rest of the year, April to September, when it's better to take a trip there.<span id="dots">...</span><span id="more"><br><br>The part of the 120 km beach is named differently having diversified flora & fauna. It starts with 'Laboni Beach,' Sughandha Beach' within the Cox's Bazar region and 10 km south is known as 'Himchari Beach',30 km fur known as 'Inani Beach' and more 70 km off is the 'Teknaf Beach'. Things should be quieter here, but still expect to draw great attention. The entire 120 km beach can be traveled in one go by motorbike. The more one gets into the south, the more the ocean water becomes blue.</span></p>
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
            <p>Daily non-stop flights are available from Chittagong and Dhaka on United Airways [7] or Regent [8]. The journey by plane takes 60 minutes and the fare is BD taka.6000.00 and 3500.00 one way from Dhaka & Chittagong respectievly. <br><br>By bus it will take about 10-12 hours from Dhaka and 4-5 hours from Chittagong. The private AC Bus line named 'Greenline', 'Soudia', 'Hanif','TR Travels' 'Shamoli' and 'Amader Baghdad' are available from Dhaka and Chittagong. AC bus will take BDT 1400-1800 from Dhaka to Cox'sbazar. Moreover, many non-AC services are also available from Dhaka and Chittagong costing from BD taka.350.00-750.00(from Dhaka) or BD taka 200.00-360.00 (from Chittagong). <br><br>The main bus terminal is a few kilometers east of the central town area, about a 15-20 minute / Tk 100-120 by electric bike known as 'Easy Bike' or CNG auto ride. Local buses head to Chittagong (Tk 120, 4 hours) and Teknaf (Tk 70, 3 hours). <br><br> The private bus companies have offices near 'Hotel Sea Queen' on the main road, and also down in the hotel-motel zone. During the tourist season bus tickets goes scarcity requires advance ticketing to avoid delayed staying. Better to book immediately on arrival.</p>
            </div>
            <button class="collapsible">Where to stay?</button>
            <div class="content">
            <p>There are several good quality hotels and resorts in the city.</p>
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
            <img src="imgs\bholagonj.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Bholagonj</h5>
            <a href="volagonj.php" class="btn btn-outline-dark" role="button">Details</a>
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