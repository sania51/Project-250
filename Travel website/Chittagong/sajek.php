<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="stylesajek.css">
        <link rel="stylesheet" href="../stylecard.css">
        <title>Sajek Valley</title>
    </head>
    <body>

    <?php include 'nav.php';?>
                
        <div class="header">
            <h1>Sajek Valley</h1>
        </div>
        <div class="logo"><img src="imgs/logo.png"></div>

        <!--Overview-->
    <div id="wrapper">
        <section class="overview">
            <h1>Overview</h1>
            <hr class="line">
            <p>Sajek is located in the verdant hills of Kasalong range of mountains amidst the serene and exotic beauty of nature. You will notice lofty mountains, dense forest, sprawling grasslands and miles and miles of hilly tracks. On the way, you will come cross Mayni range, River Mayni and River Kasalong where you will feel that the green and blue harmonize together creating a perfect melody. Due to the ups and downs of the mountainous road, at times you will feels that you are very close enough to touch the sky and sometimes it feels as if you are in a free fall to the valley.<br><br>Sajek is an all-weather tourist spot. It is a union located at the farthest north of Chittagong Hill Tracts.it Sajek Union is under Baghaichhari Upazila of Rangamati District. From Khagrachhari town, it is 67 km toward north-east and from Rangamati city, it is 95 km towards North-West. International boundary with India is located within 8 km toward east (Mizoram). It is a natural paradise belonging to the Chittagong Hill Tracks which was left unexplored for a long time. The beauty of Sajek is amazing and it has attracted visitors and tourist from home and abroad since long and as a result nature lovers regularly haunt Sajek.<span id="dots">...</span><span id="more"><br><br>Basically, Sajek is the name of a river which separates Bangladesh from India. The river flows into the Karnafuli River in the Chittagong Hill Tracts. Sajek Valley is situated in the North of Rangamati, near the Mizoram border boundary area. The valley is 1800 feet above sea level. Many small rivers flow through the hills among which Kachalon and Machalong are famous. It is one of the biggest unions in Bangladesh.<br><br>The main ethnic minorities indigenous to the valley are Chakma, Marma, Tripura, Pankua, Lushai and Sagma. However a word of caution, before traveling there bring along body lotions or creams to prevent the mosquitoes, since some malaria cases have been reported. The place is known as the Queen of Hills & Roof of Rangamati for its natural beauty. Marishsham, another beautiful place near the Sajek Valley, is also very well known because its bamboo houses. There is another place near Sajek called Kanlak which is famous for its orange orchard.<br><br>Biggest attractions of this place is sitting back, chilling out and witnessing the majestic sunrises & sunsets, the wet afternoons when it suddenly rains, and the simple way of life of the indigenous people. Tourists may even buy products and crafts made by the aboriginal people from the indigenous Haats (open flea market). The spiraling roads snaking all around the green rolling mountains looks like something out of a idyllic holiday movie.</span></p>
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
            <p>The valley is mainly in Rangamati District, but it would be easy for the tourists to reach there from Khagrachhari. The route is Khagrachhari – Dighinala Bazaar – Bagaihat Bazaar – Machalong Haat – and then Sajek. It is around 75 km from Khagrachhari. The distance between Dighinala and Sajek is 52 km. Main transportation of that area is Chander Gari. It will cost around Tk. 6000-Tk. 8000/- from Khagrachhari. It is like a four wheel jeep. Sometimes visitors can take some tea break on the way at Haat. From Dighinala, travelers can hire motor bike. It may cost Tk. 1000-Tk. 1500/- up-down. The region is extremely backward.</p>
            </div>
            <button class="collapsible">Where to stay?</button>
            <div class="content">
            <p>Stay at any resorts</p>
            </div>
            <button class="collapsible">Where to eat?</button>
            <div class="content">
            <p>In Sajek, you can enjoy your food at ‘Diganta Restaurant’ of Runmoy Resort and ‘Stone Garden Restaurant’ of Sajek Resort. Outside local restaurants are also available but we don’t suggest you to be there regularly. <br><br>You can eat in the hotels and restaurants situated in that place. Also, you can take preparation to cook instead. You can find cooking arrangements in that place. Referred to where to eat in Rangamati.</p>
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
            <img src="imgs\amia.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Amiakhum</h5>
            <a href="#" class="btn btn-outline-dark" role="button">Details</a>
            </div>
        </div>
        <div class="card" style="height: 22rem">
            <img src="imgs\Napittachora.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Napittachora</h5>
            <a href="#" class="btn btn-outline-dark" role="button">Details</a>
            </div>
        </div>
        <div class="card" style="height: 22rem">
            <img src="imgs\nafa.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Nafakhum</h5>
            <a href="#" class="btn btn-outline-dark" role="button">Details</a>
            </div>
        </div>
        </div>
    </div>
        
    <?php
        include "footer.php";
    ?>



    </body>
</html>