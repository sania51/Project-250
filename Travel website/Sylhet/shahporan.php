<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="styleporan.css">
        <link rel="stylesheet" href="../stylecard.css">
        <title>Shrine of Shahparan</title>
    </head>
    <body>

    <?php include 'nav.php';?>
                
        <div class="header">
            <h1>Shrine of Shahparan</h1>
        </div>
        <div class="logo"><img src="imgs/logo.png"></div>

        <!--Overview-->
    <div id="wrapper">
        <section class="overview">
            <h1>Overview</h1>
            <hr class="line">
            <p>Hazrat Shah Paran was a Sufi saint of the Suhrawardiyya and Jalalia order. It is said that he was the son of a sister of Shah Jalal and was born in Hadramaut, Yemen. He was an accomplice of his uncle, Shah Jalal, with whom he arrived in India. In 1303 AD, He took part in the expedition of Sylhet which was led by Shah Jalal. After the conquest of Sylhet he established a khanqah at Khadim Nagar in Dakshingarh Pargana, about 7 km away from Sylhet town, where he started Sufi spiritual practices and activities. He played a significant role in propagating Islam and establishing Muslim rule in the Sylhet region.<span id="dots">...</span><span id="more"><br><br>It is unclear how and when he died, but he is buried near his khanqah. For centuries, large numbers of devotees have been visiting his tomb, a practice which continues even today. On the 4th, 5th and 6th day of Rabi-ul-Awal, the Urs of Hazrat Shah Paran takes place. His grave is located in a high hillock and it is carefully preserved at a place which is built with bricks and surrounded by walls. On the northern side of the grave there is an old tree, the branches and branchlets of which are extended above the entire tomb.<br><br>The name of the tree is ‘Ashagachh’ (a tree of hopes). From a close observation of the leaves of the tree, it appears that the tree has grown out of a mixture of the fig, mango and some other tree. People eat the seeds of the figs devotionally in the hope of getting rid of diseases. Mangoes are also eaten with utmost respect as Tabaruk. There is an ancient mosque by the side of the tomb. The mosque has been modernized in 1989-91. About 1500 devout Muslims in a body can now say their prayers there.<br><br>Adjacent to the main tomb complex of Shah Paran, found in the East of Sylhet, is another tomb visited by worshipers, that of Konya Shah. Legend has it that this follower of the great saints was neither man nor woman. There is a permanent exhibition of the life and times of this saint. Contemporary paintings and pictures featured at the tomb/exhibition depict a person most likely to be a eunuch. Though the original conquerors earned a prominent role in Islamic history, main stream Islam shuns the idea of worshiping saints and eunuchs. A road bridge over the Surma River, a passenger ferry and a hall of residence at Shahjalal University of Science and Technology have all been named after Shah Paran.<br><br>Hazrat Shah Paran (the nephew of Hazrat Shah Jalal) was involved in preaching Islam in Sylhet. Shah Paran’s Mazaar (tomb) is located in periphery of Sylhet town, in Major Tila. He was a companion of his uncle, Shah Jalal, with whom he arrived in India. In 1303 AD, He took part in the expedition of Sylhet which was led by Shah Jalal. After the conquest of Sylhet he established a khanqah at Khadim Nagar in Dakshingarh Pargana, about 7 km away from Sylhet town, where he started Sufi spiritual practices and activities. He played a significant role in propagating Islam and establishing Muslim rule in the Sylhet region.</span></p>
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
            <p>It is located 8 km from Sylhet Sadar City, Major Tila. You have to take CNG auto rickshaw or local bus to Major Tila from the main town, where that mazar is located.</p>
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