<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="styletanguar.css">
        <link rel="stylesheet" href="../stylecard.css">
        <title>Tanguar Haor</title>
    </head>
    <body>

    <?php include 'nav.php';?>
                
        <div class="header">
            <h1>Tanguar Haor</h1>
        </div>
        <div class="logo"><img src="imgs/logo.png"></div>

        <!--Overview-->
    <div id="wrapper">
        <section class="overview">
            <h1>Overview</h1>
            <hr class="line">
            <p>At the foot of the Meghalaya ranges in the middle of Tahirpur and Dharmapasha Upazilla under Sunamgonj district in north-east Sylhet is a vast swampland popularly known as Tangoar Haor that spans over an area of nearly 100 square kilometres. Cascading from the Meghalaya about 30 waterfalls flow into this large water body engendering a charm that is truly rare.<br><br><span id="dots">...</span><span id="more">In 2000, it was internationally recognised as a Ramseur site. After the Sundarbans, it is the second Ramseur site in Bangladesh. Prior to that, in 1999, the government of Bangladesh earmarked Tangoar Haor as an ecologically critical area.<br><br>Tangoar Haor, which is a crucial hub for biodiversity, is home to a diverse range of birds. In winter, numerous migratory birds join the local birds giving rise to an eye-soothing abundance of fauna. There are a total of 51 species of birds. Besides rare species of Palace eagles and large grey king storks from among the migratory birds, the swampland is inhabited by numerous local species of birds including vultures, seagulls and cranes in addition to six species of mammals, four species of snakes, six species of turtles, seven species of lizards as well as rare species of amphibians.<br><br>Tangoar Haor, which is a crucial hub for biodiversity, is home to a diverse range of birds. In winter, numerous migratory birds join the local birds giving rise to an eye-soothing abundance of fauna. There are a total of 51 species of birds. Besides rare species of Palace eagles and large grey king storks from among the migratory birds, the swampland is inhabited by numerous local species of birds including vultures, seagulls and cranes in addition to six species of mammals, four species of snakes, six species of turtles, seven species of lizards as well as rare species of amphibians.<br><br>According to Professor Ali Reza Khan, Tangoar Haor is inhabited by a total of 250 species of birds, 140 species of fish, more than 12 species of frogs, over 150 species of reptiles and over 1,000 invertebrates.<br><br>Tangoar Haor is worth visiting in winter (December to February) when tourists would be greeted by thousands of local and migratory species of birds, as well as in the rainy season (June to August) when bustling waves together with incessant rains and Meghalayan clouds create a scene that charms all and sundry. </span></p>
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
            <p>In winter tourists can hire motor bikes from Shaheb-bari Kheyaghat in Sunamganj and go to Tahirpur or Takerghat in a couple of hours. From either of the places a boat may be hired to roam about Tangoar Haor. In the rainy season, many tourists hire a bojra – a spacious mechanised local boat suitable for overnight stay – from Sunamgonj to visit Tangoar Haor. Hiring a bojra costs about 10,000 BDT a day. However, it is not a good idea to visit Tangoar Haor in the rainy season without a life jacket and other necessary precautions in view of the rough, wavy waterline, despite the unparalleled splendour that this large water body exhibits in this season.<br><br>The best option is to hire a launch (a steamer-like engine-operated boat) from Sunamganj, travel to Tangoar Haor via Tahirpur and finally reach Takerghat, which is a Bangladeshi limestone mine at the foot of the Meghalayan ranges currently lying in an abandoned state.</p>
            </div>
            <button class="collapsible">Where to stay?</button>
            <div class="content">
            <p>There is only one hotel in Tahirpur Bazar and this too is a low-quality one. Besides this, there is a bungalow owned by the District Council where one can stay overnight with prior permission. The mine project at Takerghat also has a bungalow of its own.</p>
            </div>
            <button class="collapsible">Where to eat?</button>
            <div class="content">
            <p>Food may consume at Tahipur Bazar Or Takerghat/ Borsora Bazar. Even boat man may arrange fresh fish at their boat.</p>
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
            <img src="imgs\hakaluki haor sylhet1.png" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Hakaluki Haor</h5>
            <a href="panthumai.php" class="btn btn-outline-dark" role="button">Details</a>
            </div>
        </div>
        <div class="card" style="height: 22rem">
            <img src="imgs\Shimul-bagan.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Shimul Bagan</h5>
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