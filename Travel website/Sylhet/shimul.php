<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="styleshimul.css">
        <link rel="stylesheet" href="../stylecard.css">
        <title>Shimul Bagan</title>
    </head>
    <body>

    <?php include 'nav.php';?>
                
        <div class="header">
            <h1>Shimul Bagan</h1>
        </div>
        <div class="logo"><img src="imgs/logo.png"></div>

        <!--Overview-->
    <div id="wrapper">
        <section class="overview">
            <h1>Overview</h1>
            <hr class="line">
            <p>‘Shimul Bagan’ is situated in the Jadukata river banks taking over 100 bighas of land in Tahirpur, Sunamganj. The garden also contains lemon trees. It appears like a field of Bombax that has been decorated by imaginary colors. The cloudy Mountains of India on the other side, Jadukata Nodi in<span id="dots">...</span><span id="more">between, and a forest of Bombax trees on this side, all together makes up an extraordinary spiritual display of nature. The garden was built 14 years ago on 2400 decimals of land by a rich businessman, named Jaynal Abedin, because of his personal desire. In spring, it catches the eyes of the tourists when the flowers bloom together in over 2000 trees. <br><br>The bloodstream beauty of the Shimul Garden can be enjoyed only one month of every year. You can see the trees covered in flower only if you go in the month of Falgun. </span></p>
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
            <p>You can take Ena, Shemoli, or Mamun bus to reach Sunamganj from Dhaka, paying a fare of about 500 Taka. Alternatively, you can take the 9.50 PM train from Dhaka to Sylhet, paying a fare of 320 Taka. But you must book your ticket 1-2 day before, from the station or online. You will reach Sylhet by dawn. Then take the bus to Sunamganj from Kumargaon bus-stand. The fare will be 90 Taka and it will take 2 hours to reach there. <br><br>After reaching Sunamganj, hire one of the motorbikes standing on the opposite side of the new bridge to your next destination, Barek Tila River. It will take about 150-200 Taka and 2 person can ride in it. The bike will drop you in Jadukata River and you have to pay 5 Taka to reach the other side by ferry to the Barek Tila River. Ask any of the local tea stores there and they will show you the direction to the Shimul Garden. From there, you can easily walk to reach your destination. <br><br>The garden is a private property. So get permission before entering and do not do any such work that will make the garden dirty. </p>
            </div>
            <button class="collapsible">Where to stay?</button>
            <div class="content">
            <p>You can stay in a rest house for 200-400 Taka in Barchhara Bazaar, near Barek Tila River. Also, you can stay in nearby Hotels for around 200-1000 Taka.</p>
            </div>
            <button class="collapsible">Where to eat?</button>
            <div class="content">
            <p>Eat at the local restaurants.</p>
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
            <img src="imgs\hakaluki haor sylhet1.png" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Hakaluki Haor</h5>
            <a href="hakaluki.php" class="btn btn-outline-dark" role="button">Details</a>
            </div>
        </div>
        <div class="card" style="height: 22rem">
            <img src="imgs\Tanguar-Haor-1024x619.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Tanguar Haor</h5>
            <a href="tanguar.php" class="btn btn-outline-dark" role="button">Details</a>
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