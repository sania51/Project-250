<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="stylenaf.css">
        <link rel="stylesheet" href="../stylecard.css">
        <title>Nafakhum</title>
    </head>
    <body>

    <?php include 'nav.php';?>
                
        <div class="header">
            <h1>Nafakhum</h1>
        </div>
        <div class="logo"><img src="imgs/logo.png"></div>

        <!--Overview-->
    <div id="wrapper">
        <section class="overview">
            <h1>Overview</h1>
            <hr class="line">
            <p>Nafa-khum Waterfall (Bengali: নাফাখুম) is located in Thanchi Upazila of Bandarban on the Sangu River. It is among the largest waterfalls in the country by volume of water falling. The wild hilly river Sangu suddenly falls down here about 25–30 feet.<span id="dots">...</span><span id="more"><br><br>The falls are located in a remote area three hours’ walking distance from Remakri, Thanchi Upazila, Bandarban District. Remakri is located three hours by boat on the Sangu River from Tindu, which is itself three hours by boat from Thanchi. Nafa-khum is not very popular as a tourist destination.<br><br>The word “Khum” in Marma language means “Waterfall”. A special type of flying fish, whose local name is nating, is found at the bottom in a small cave as they swim against the stream but cannot jump over the height of the fall.</span></p>
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
            <p>After reaching Bandarban you have to go to Thanchiupazilla by bus from Bandarban. To reach Amaikum waterfall you have to make a trip from Bandarban to thanchi by “ChanderGari” (public jeep) or a private vehicle. The distance between Bandarban to Thanchi is about 79 km.You need to hire a Tour guide.You must enter your full name, address and contact number at the Army camp of Remakri, Bandarban before hiring a tour guide. There is a tour guide committee and that tour guide committee will select an experienced tour guide for you. This tour guide will stay for 2 days with you during the journey to reach the particular tour spot till you come back to Remakri. For the first day the tour guide will charge 600/= Taka (BDT) and for the second day onwards the tour guide will charge 500/= Taka (BDT) for each day (exclude his food and accommodation). <br><br>You need to hire a Boat for the adventurous journey of Thanchi to Remakri. <br><br>You have to hire an engine boat to reach Remakri from Thanchi, because there is no rowing or paddle boat there. Boat fare is around 4000-4500/Taka- for an up-down journey but the boatmen may ask for more. So you should bargain with them. Boat journey will take around 4(four) hours to travel from Thanchi to Remakri. This journey is very challenging and tough, especially if you are scared of water and high tide. Because in rainy season the tides of Sangu River are very heavy and it is extremely dangerous journey especially at the place of “BoroPathor”. In the area of BoroPathor there are big rocks scattered in the Sangu River and strong tides are there in the Sangu River as well. But the sceneries of both sides of Sangu River are spectacular. <br><br>You should take lunch at Remakri. There are some good restaurants in Remakri and lunch may cost around BDT 120 Taka per person.</p>
            </div>
            <button class="collapsible">Where to stay?</button>
            <div class="content">
            <p>There is no accomodation facility in nafakhum.</p>
            </div>
            <button class="collapsible">Where to eat?</button>
            <div class="content">
            <p>There is no dining facility in nafakhum.</p>
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