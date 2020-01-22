<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="stylejalal.css">
        <link rel="stylesheet" href="../stylecard.css">
        <title>Shrine of Shahjalal</title>
    </head>
    <body>

    <?php include 'nav.php';?>
                
        <div class="header">
            <h1>Shrine of Shahjalal</h1>
        </div>
        <div class="logo"><img src="imgs/logo.png"></div>

        <!--Overview-->
    <div id="wrapper">
        <section class="overview">
            <h1>Overview</h1>
            <hr class="line">
            <p>This fascinating and atmospheric shrine of the revered 14th-century Sufi saint Shah Jalal is one of Bangladesh's biggest pilgrimage sites. Housing a mosque (masjid) and the main tomb (mazar), the complex is accessed via an open staircase from the East Darga Gate entrance. Shah Jalal’s tomb is covered with rich brocade, and the space around it is illuminated with candles in the evenings, lending a magical feel.<span id="dots">...</span><span id="more"><br><br>The saint's sword and robes are preserved within the mosque, but aren’t on display. You can also walk around the hillside graveyard behind the shrine, dotted with tombs. Being buried near the saint is considered a great honour. Women can enter the complex – there is even a special prayer hall for women here.<br><br>The pond at the northern end of the complex is filled with sacred catfish that are fed by pilgrims and are, according to legend, metamorphosed black magicians of the Hindu raja Gour Govinda, who was defeated by Shah Jalal in 1303.<\span></p>
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
            <p>Inside sylhet city you can take any rickshaw/auto rickshaw to visit there.</p>
            </div>
            <button class="collapsible">Where to stay?</button>
            <div class="content">
            <p>There are several good quality hotels in sylhet town.</p>
            </div>
            <button class="collapsible">Where to eat?</button>
            <div class="content">
            <p>Eat at any local restaurents.</p>
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
            <img src="imgs\Tanguar-Haor-1024x619.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Tanguar Haor</h5>
            <a href="volagonj.php" class="btn btn-outline-dark" role="button">Details</a>
            </div>
        </div>
        <div class="card" style="height: 22rem">
            <img src="imgs\hakaluki haor sylhet1.png" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Hakaluki Haor</h5>
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
        include "../footer.php";
    ?>

    </body>
</html>