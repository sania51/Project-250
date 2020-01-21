<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="sytleRG.css">
        <title>Ratargul</title>
    </head>
    <body>

    <?php include 'nav.php';?>
                
        <div class="header">
            <h1>Ratargul</h1>
        </div>
        <div class="logo"><img src="imgs/logo.png"></div>

        <!--Overview-->
    <div id="wrapper">
        <section class="overview">
            <h1>Overview</h1>
            <hr class="line">
            <p>Ratargul is the only freshwater Swamp Forest in Bangladesh. Despite its existence over a vast stretch of swampland in the not too distant past, the swamp forest now occupies an area of only two square kilometres. <br><br>A dense forest comprising mostly native Hijol and Koroch trees, Ratargul offers a sanctuary for different species of birds, monkeys, snakes and other reptiles.<span id="dots">...</span><span id="more"><br><br>Ratargul is in close proximity of three rivers. Flowing respectively from the south and the east, the Chenger Khal and the Kafna meet near Ratargul and head north towards Guainghat under the nomenclature Guain. Once upon a time, the swamp forest occupied the banks of all these rivers. The water of these rivers makes its way into the forest and leaves it marooned under 15 to 20 feet water in the rainy season. With the bottom half of the dense forest covered under water and the top half visible with its multitudes of shades falling on crystal-clear water underneath, Ratargul makes for a sight that can soothe even the most uninterested of eyes.
<br><br>The best time to visit Ratargul Swamp Forest is early in the morning or early in the evening in the rainy season. That’s when one would be enthralled by the existence of the local fauna including different species of birds and monkeys. As the water recedes with the departure of the rainy season it becomes muddy. And in winter it is possible to roam about the forest on foot.
<br><br>Tourists can also bundle Lalakhal/Jaflong/ Pangthumai / Bisnakandhi with Ratargul on the same day.</span>
            </p>
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
            <p>Though Ratargul is situated in Guainghat Upazilla, it is not too far away from Sylhet city. <br><br>Driving on the Airport Road , one reaches Dhupagul point on the Sylhet-Companigonj Highway, from where s/he should take the Dhupagul-Horipur Road and drive a short distance to Motorghat, from where visitors can enter the swamp forest on small boats. Rather than stopping at Motorghat, tourists can also move a little further ahead and reach Ramnagar Bazaar. A right turn from the Bazaar leads to the Ratargul village, where tourists can hire a boat to visit the forest. <br><br>The simplicity and hospitability of the villagers are sure to fascinate an average tourist. On the way back, it is a good idea to travel through Horipur on the Sylhet-Jaflong Highway rather than going back to Dhupagul.
From Ratarghul Village local boats may charge Taka 1000-1500 for a ride inside the forest.</p>
            </div>
            <button class="collapsible">Where to stay?</button>
            <div class="content">
            <p>There is no accommodation facilities in Ratargul. As it is close to City itself, tourist may stay at hotels in Sylhet.</p>
            </div>
            <button class="collapsible">Where to eat?</button>
            <div class="content">
            <p>There is no Dine facility in Ratargul. If needed tourist has to take packed food from Sylhet.</p>
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
    </div>
        



    </body>
</html>