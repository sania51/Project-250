<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="stylepan.css">
        <link rel="stylesheet" href="../stylecard.css">
        <title>Panthumai</title>
    </head>
    <body>

    <?php include 'nav.php';?>
                
        <div class="header">
            <h1>Panthumai</h1>
        </div>
        <div class="logo"><img src="imgs/logo.png"></div>

        <!--Overview-->
    <div id="wrapper">
        <section class="overview">
            <h1>Overview</h1>
            <hr class="line">
            <p>Panthumai – a village from West Jaflong Union under Guainghat Upazilla – is another tourism hub in Sylhet. The village, which is very near to the east Khasia hill of the Meghalaya ranges, boasts of an eye-catching fall popularly known as Borhill Fall. Though the main fall is geographically located in the Indian territory, people can enjoy its enormous splendour head-on. Flowing from the Borhill Fall is a branch of the river Piyain that heads west and leads to Bisnakandi, another major tourist spot.<span id="dots">...</span><span id="more"><br><br>In addition to the splendid fall, the Guainghat-Pangthumai Road itself is a sight for the sore eye. As one heads east, the enormous mountain ranges appear to come closer and turn from blue to green gradually. And the clouds and the falls playing hide and seek are sure to fill one with awe. The best possible time to visit Pangthumai is between April and mid-October.<\span></p>
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
            <p>To visit Panthumai, one should go to Guainghat Upazilla Sadar. From Sylhet city s/he is to take the Sylhet-Tamabil Highway and travel about 42 km to reach Sarighat, where s/he has to take a left turn and travel about 16 km to reach Guainghat Point, where the road diverges. The right road leads to Upazilla Sadar while the left to Sylhet Airport. Just a kilometre of journey on the left road takes one to Guainghat College. A further 12-km journey on the eastward narrow alley beside the College leads one to the Pagthumai village. On the way to the village is a marketplace popularly known as Maturtol Bazaar. After reaching at Pangthumai village one should step out of the vehicle and walk on the left for a short while, and s/he would be in for a big surprise. A breathtaking waterfall is all set to welcome him/her with its dazzling beauty. <br><br> Tourists can visit Lalakhal and Pangthumai on the same day if they want, due to the proximity of these places. Starting early on, they can travel to Lalakhal by car or bus and then take a boat to the Zero Point, roam about Lalakhal Tea Garden, and finally have lunch at the River Queen restaurant before setting off to Pangthumai. The drive should take no more than an hour and a half, leaving one with the entire afternoon to spend in the fall before embarking on a two-hour drive to return to the city. <br><br> To visit Lalakhal and Pangthumai a microbus can be rented for 5500-7500 BDT depending on its size and make, although it will cost a bit more at weekends.</p>
            </div>
            <button class="collapsible">Where to stay?</button>
            <div class="content">
            <p>There is no accommodation facilities in Panthumai.</p>
            </div>
            <button class="collapsible">Where to eat?</button>
            <div class="content">
            <p>There is no Dine facility in Panthumai. But may have some local food at Mathurtol Bazar.</p>
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
            <img src="imgs\jaflong.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Jaflong</h5>
            <a href="jaflong.php" class="btn btn-outline-dark" role="button">Details</a>
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