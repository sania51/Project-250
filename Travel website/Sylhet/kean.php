<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="stylekean.css">
        <link rel="stylesheet" href="../stylecard.css">
        <title>Keane Bridge</title>
    </head>
    <body>

    <?php include 'nav.php';?>
                
        <div class="header">
            <h1>Keane Bridge</h1>
        </div>
        <div class="logo"><img src="imgs/logo.png"></div>

        <!--Overview-->
    <div id="wrapper">
        <section class="overview">
            <h1>Overview</h1>
            <hr class="line">
            <p>Keane Bridge was named after Sir Micheal Keane who was English governor of Assam from 1932-1937, located on top of Surma river and it is known as the gateway to Sylhet. It was built in the year 1936. Standing on 1150 feet tall and with a width of 18 feet, this bridge the sign of many history. The budget required to build this bridge was 5.6 million taka.</p>

        </section>

        <div class="plan">
            <h1>Plan Your Visit</h1>
            <hr class="line"> 
        </div>
<br><br><br>
        <div class="c">
            <button class="collapsible">How to go there?</button>
            <div class="content">
            <p>It is located in Sylhet town, 246 km northeast of Dhaka. So, anyone can easily get there by rickshaw or CNG auto rickshaw from the Sylhet town. After heading to Sylhet, you may take rickshaw or CNG auto rickshaw and head towards the Dak-bangla road close to Shah Jalal road.</p>
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
            <img src="imgs\jaflong.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Jaflong</h5>
            <a href="jaflong.php" class="btn btn-outline-dark" role="button">Details</a>
            </div>
        </div>
        <div class="card" style="height: 22rem">
            <img src="imgs\Sylhet-Dibir-Haor-By-Farzana-Anu.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Dibir Haor</h5>
            <a href="dibir.php" class="btn btn-outline-dark" role="button">Details</a>
            </div>
        </div>
        <div class="card" style="height: 22rem">
            <img src="imgs\22544610395_da5fd8965b_b.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Lovachora</h5>
            <a href="lova.php" class="btn btn-outline-dark" role="button">Details</a>
            </div>
        </div>
        </div>
    </div>
        

    <?php
        include "../footer.php";
    ?>

    </body>
</html>