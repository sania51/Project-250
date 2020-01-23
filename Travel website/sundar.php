<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="stylesundar.css">
        <link rel="stylesheet" href="../stylecard.css">
        <title>Sundarban</title>
    </head>
    <body>

    <?php include 'nav.php';?>
                
        <div class="header">
            <h1>Sundarban</h1>
        </div>
        <div class="logo"><img src="imgs/logo.png"></div>

        <!--Overview-->
    <div id="wrapper">
        <section class="overview">
            <h1>Overview</h1>
            <hr class="line">
            <p>The Sundarbans is a mangrove area in the delta formed by the confluence of Ganges, Brahmaputra and Meghna Rivers in the Bay of Bengal. It spans from the Hooghly River in India's state of West Bengal to the Baleswar River in Bangladesh. It comprises closed and open mangrove forests, agriculturally used land, mudflats and barren land, and is intersected by multiple tidal streams and channels. Four protected areas in the Sundarbans are enlisted as UNESCO World Heritage Sites, viz Sundarbans National Park, Sundarbans West, Sundarbans South and Sundarbans East Wildlife Sanctuaries.[3] The Sundarbans mangrove forest covers an area of about 10,000 km2 (3,900 sq mi), of which forests in Bangladesh's Khulna Division extend over 6,017 km2 (2,323 sq mi) and in West Bengal, they extend over 4,260 km2 (1,640 sq mi) across the South 24 Parganas and North 24 Parganas districts.[4] The most abundant tree species are sundri (Heritiera fomes) and gewa (Excoecaria agallocha). The forests provide habitat to 453 faunal wildlife, including 290 bird, 120 fish, 42 mammal, 35 reptile and eight amphibian species.<span id="dots">...</span><span id="more"><br><br>Despite a total ban on all killing or capture of wildlife other than fish and some invertebrates, it appears that there is a consistent pattern of depleted biodiversity or loss of species in the 20th century, and that the ecological quality of the forest is declining.[6] The Directorate of Forest is responsible for the administration and management of Sundarban National Park in West Bengal. In Bangladesh, a Forest Circle was created in 1993 to preserve the forest, and Chief Conservators of Forests have been posted since. Despite preservation commitments from both Governments, the Sunderbans are under threat from both natural and human-made causes. In 2007, the landfall of Cyclone Sidr damaged around 40% of the Sundarbans. The forest is also suffering from increased salinity due to rising sea levels and reduced freshwater supply. Again in May 2009 Cyclone Aila devastated Sundarban with massive casualties. At least 100,000 people were affected by this cyclone.[7][8] The proposed coal-fired Rampal power station situated 14 km (8.7 mi) north of the Sundarbans at Rampal Upazila of Bagerhat District in Khulna, Bangladesh, is anticipated to further damage this unique mangrove forest according to a 2016 report by UNESCO.</span></p>
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
            <p></p>
            </div>
            <button class="collapsible">Where to stay?</button>
            <div class="content">
            <p>There is no accommodation facilities in there.</p>
            </div>
            <button class="collapsible">Where to eat?</button>
            <div class="content">
            <p>There is no Dine facility. If needed tourist has to take packed food from Sylhet.</p>
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