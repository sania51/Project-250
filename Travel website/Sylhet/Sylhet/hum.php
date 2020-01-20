<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="stylehum.css">
        <title>Hum Hum</title>
    </head>
    <body>

    <?php include 'nav.php';?>
                
        <div class="header">
            <h1>Hum Hum</h1>
        </div>
        <div class="logo"><img src="imgs/logo.png"></div>

        <!--Overview-->
    <div id="wrapper">
        <section class="overview">
            <h1>Overview</h1>
            <hr class="line">
            <p>Hum Hum is a waterfall in Moulvibazar, Bangladesh. It was discovered in 2010. It is situated in Razkandi reserve forest, Sreemangal,Maulvibazar district, Sylhet.The height of the fall is about 147 to 160 feet.<span id="dots">...</span><span id="more"><br><br>It is actually a place where you can find the real taste of adventure.The height of the fall is about 135-160 feet.</span></p>
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
            <p>You can reach to Moulvibazar from Dhaka only via bus directly. If you want to travel by train, you need to get off at Sreemangal station. Then you need to take a local bus or CNG to reach Moulvibazar. In case, you would like to fly to Moulvibazar.<br><br>It would be the best to travel this place in rainy season to discover the unlimited beauty of the fall. It is a matter of wonder that most of the Bangladeshi people do not even know about the fall. You can go throw bus or train from Dhaka to Sreemangal. You can find some hotels there. The next step is to go kolabagan bosti. For going to kolabagan bosti, you need to hire a jeep. <br><br>The most important thing is you need to start your journey early in the morning about 5-6 am. Carrying Knife, torch, dry food, fresh water, saline, glucose, and fast aid is a must for everyone. Now a days, there are a lot of guides available who can help the tourists to reach Hum Hum. Take some bamboo sticks as a support for you to from kolabagan which will really helpful in the whole journey. Since starting to walk through this for about 30 minutes, the tourist will have to get down in a natural fountain (locally called chhara or nala), where the tourist will have to walk through water. The height of this water level will vary from ankle to thigh level time to time.<br><br>To reach Hum Hum Waterfall, you have to trek 3-4 hours through the muddy paths and jungle. When you travel through the jungle, you surely can find the unlimited beauty created by the God. Leeches are waiting there eagerly for you and the worst thing is, you cannot escape from them. There are two ways to reach Hum Hum fall. The guide will suggest you which will better to follow. <br><br>While trekking, you will find jhiri path which is full of water and stones. You need to pass the path very carefully. Please do not spend much time to see the beauty of waterfall or for bathing because if it is getting dark, you need to struggle a lot. However, it is surely be advisable to go Hum Hum with a team rather individually. </p>
            </div>
            <button class="collapsible">Where to stay?</button>
            <div class="content">
            <p>There is no accommodation facility in Hum Hum.</p>
            </div>
            <button class="collapsible">Where to eat?</button>
            <div class="content">
            <p>There is no Dine facility in Hum Hum. If needed tourist has to take packed food from Sylhet..</p>
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