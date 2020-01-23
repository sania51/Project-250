<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="styleclock.css">
        <link rel="stylesheet" href="../stylecard.css">
        <title>Ali Amjad's Clock</title>
    </head>
    <body>

    <?php include 'nav.php';?>
                
        <div class="header">
            <h1>Ali Amjad's Clock</h1>
        </div>
        <div class="logo"><img src="imgs/logo.png"></div>

        <!--Overview-->
    <div id="wrapper">
        <section class="overview">
            <h1>Overview</h1>
            <hr class="line">
            <p>Folk lore refers to the introduction of the Ali Amjad Clock Tower, by Nawab Ali Ahmed Khan in 1874, an enthusiasm which was drawn from the one in Chandnichawk in Delhi, India. It was set up by a philanthropist named Shahzadi Jahan Ara. Ali Ahmed, the tower was named after his son Nawab Ali Amjad Khan.<span id="dots">...</span><span id="more"><br><br>Another story claims that Amjad Ali established the historic clock himself. But it was found that Amjad Ali was only 3 years old at the time the clock was built.</span></p>
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
            <p>It is located on the Northern bank of the Surma River at Chadnighat, down left to the Kean Bridge. After heading to Sylhet a person may take rickshaw or CNG auto rickshaw and head towards the Dak-bangla road close to Shah Jalal road.</p>
            </div>
            <button class="collapsible">Where to stay?</button>
            <div class="content">
            <p>There are a number of good quality hotels in Sylhet town.</p>
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
        <div class="card-deck">
        <div class="card" style="height: 22rem">
            <img src="imgs\Shimul-bagan.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Shimul Bagan</h5>
            <a href="tanguar.php" class="btn btn-outline-dark" role="button">Details</a>
            </div>
        </div>
        <div class="card" style="height: 22rem">
            <img src="imgs\panthumai.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Panthumai</h5>
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