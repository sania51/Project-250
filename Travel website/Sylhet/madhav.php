<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="stylemadhav.css">
        <link rel="stylesheet" href="../stylecard.css">
        <title>Madhabkunda</title>
    </head>
    <body>

    <?php include 'nav.php';?>
                
        <div class="header">
            <h1>Madhabkunda</h1>
        </div>
        <div class="logo"><img src="imgs/logo.png"></div>

        <!--Overview-->
    <div id="wrapper">
        <section class="overview">
            <h1>Overview</h1>
            <hr class="line">
            <p>Madhabkunda Waterfall and Eco Park is situated in Barlekha Upazila in Moulvibazar District of Sylhet Division. It is one of the largest waterfalls in Bangladesh. The waterfall is a popular tourist spot in Bangladesh. Big boulders, surrounding forest, and the adjoining streams attract many tourists for picnic parties and day trips. The 267 hectors Madhabkunda Eco Park (est. 2001) is located at Madhabkunda under Moulvibazar District. This area was declared as Eco Park<span id="dots">...</span><span id="more">with a view to conserve the Madhabkunda waterfall and surrounding biodiversity. The Madhabkunda Waterfall is the most attractive site of this Eco Park which is about 200 ft. (61 m) high. A section of ‘Khasia’ tribe lives in the forest villages of this area. They are engaged in some agro-economic activities in the forestland.</span></p>
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
            <p>You can reach to Moulvibazar from Dhaka only via bus directly. If you want to travel by train, you need to get off at Sreemangal station. Then you need to take a local bus or CNG to reach Moulvibazar. <br><br>It is 80 km away from main Sylhet town. You can go to Madhabkunda by train, bus or in private transportation. For train, the nearest station is Kulaura. After arriving at Kulaura, CNG or car can be hired (BDT 400-1000) to go to Madhabkunda. The distance of Madhabkunda is 6-7 km from Barlekha Upazila. For bus, it is suggested to go to Moulvibazar or Barlekha and then take buses to Madhabkunda. There are several bus services available from Dhaka. There is a BDT 20 entry fee to the Eco Park and waterfall. <br><br>It is about one hour journey by microbus from Kulaura rail station to Madhabkunda. It is an exotic journey to Madhabkunda. You can see the green beauty of tea garden, the hills and the zigzag road through the hills on the way which will increase the interest of your journey. You will see the great waterfall in Madhabkunda–million tons of water falls from 200 feet height. Big bolder of stones and the black stones in giving a shape of care in Madhabkundu. </p>
            </div>
            <button class="collapsible">Where to stay?</button>
            <div class="content">
            <p>Moulvibazar has several good quality hotels in the town. There are some resorts too. Sreemangal, the nearby Upazila also has number of 5 star resorts around it. </p>
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
        include "../footer.php";
    ?>

    </body>
</html>