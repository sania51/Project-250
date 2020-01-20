<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="stylelova.css">
        <title>Lovachora</title>
    </head>
    <body>

    <?php include 'nav.php';?>
                
        <div class="header">
            <h1>Lovachora</h1>
        </div>
        <div class="logo"><img src="imgs/logo.png"></div>

        <!--Overview-->
    <div id="wrapper">
        <section class="overview">
            <h1>Overview</h1>
            <hr class="line">
            <p>Lovachora is a bordering area from Kanaighat Upazilla in the eastern part of Sylhet district, which is somewhat fortified from northeast to northwest by the Meghalayan ranges. It is essentially a quarry where stones and boulders are mined, besides an age-old tea garden.<span id="dots">...</span><span id="more"><br><br>Visit to Lovachora involves with a boat journey from Kanaighat Sodor. As the boat moves east, it will soon reach the confluence of three rivers. Flowing respectively from the south and north, the Borak and the Lova meet at one point, assume the name Surma and flow west towards Sylhet city.<br><br>The shades of far-flung hills falling on the crystal clear streams of the Lova make for a heavenly sight. The Lovachora Tea Garden is spread over a wide area from the river bank to the slopes of the hills. Still preserved in the garden is a tea factory ravaged in the War of Liberation in 1971. Together with an antique cottage, it is a must-see for visitors. The hilltop cottage is popularly known as Fergusson Bungalow, named after the Fergusson family who set up the tea garden.<br><br>What’s more, subject to the permission from the border patrol force BGB, tourists can go to the source of the Lova and see the hanging bridge which connects two hills on the other side of the border.</span></p>
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
            <p>One has to go to Kanaighat Upazilla Sadar first to reach Lovachora. Different routes can be taken to go to Kanaighat from Sylhet. One option would be to use the Sylhet-Jaflong Highway and take a right turn at Dorbosth Bazaar. The one-and-a-half-hour drive itself is an attraction in its own right. On the left are rows of the Jainta hills. Upon reaching Kanaighat Upazilla Sadar, which is on the bank of the Surma, tourists can hire a boat to go to Lovachora.<br><br>The boat ride from Kanaighat to Lovachora takes an hour and a half.</p>
            </div>
            <button class="collapsible">Where to stay?</button>
            <div class="content">
            <p>There is no accommodation facilities in Lovachora. If needed may stay at local hotel in Kanaighat.</p>
            </div>
            <button class="collapsible">Where to eat?</button>
            <div class="content">
            <p>There is no Dining facility in Kanaighat. But may have some local food at Kanaighat Bazar</p>
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