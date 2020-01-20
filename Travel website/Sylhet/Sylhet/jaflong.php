<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="stylejaf.css">
        <title>Jaflong</title>
    </head>
    <body>

    <?php include 'nav.php';?>
                
        <div class="header">
            <h1>Jaflong</h1>
        </div>
        <div class="logo"><img src="imgs/logo.png"></div>

        <!--Overview-->
    <div id="wrapper">
        <section class="overview">
            <h1>Overview</h1>
            <hr class="line">
            <p>Despite the loss of its former splendour due to unrestricted mining and crushing of stones, Jaflong is still a ‘must-see’ destination for tourists visiting Sylhet. Flowing from the north Khasi mountains, the river Dauki enters Bangladesh under the name ‘Piyain’, along the bank of which lies the spectacular Jaflong. About 62 km north-east from Sylhet city, Jaflong is in the East Jaflong Union under Guainghat Upazilla. Visitors can hire boats to go to the Zero Point and see the beautiful hanging bridge over the Dauki. Just across the river on the western side are the villages Sangrampunji and Nakshiapunji, which are accessible through ferries or rented boats. Just beside Nakshiapunji is Jaflong Tea Garden which is a top tourist attraction. <br><br>On the way to Jaflong visitors usually take a recess at Tamabil, which is about 7 kilometres away from Jaflong. It is mainly a land custom and immigration checkpost,<span id="dots">...</span><span id="more">behind which is a war cemetery, where martyred freedom fighters were buried in 1971, along the Bangladesh-India border. <br><br>On the way to Tamabil is Jaintapur Upazilla Sadar where tourists usually stop for a while to see the ruins of an ancient royal palace. It was not until 1830 that the independent province of Jaintiapur was invaded and brought under the British empire. Some megalithic monuments still stand testimony to the rich past of the Khasi tribe. Not far from the Upazilla Council is the Citrus Research Centre boasting of gardens with local vegetation such as tezpata, sathkora and many other fruits. Adding to the beauty of this research centre is a plethora of cascading waterfalls flowing from the Khasi mountains of India. Situated between Jaintapur and Tamabil is Sreepur which is a popular picnic spot. Travelling through Jaintapur to Tamabil in the monsoon is once-in-a-lifetime experience. Lush green tall Khasi mountains stand upright beside the road. The stunning beauty of white clouds and gushing waterfalls flowing from the green mountains fascinates locals and tourists alike. <br><br>Though tourists come in large numbers in winter, one has to visit Jaflong in the rainy season to see the real beauty of the falls cascading from lush green mountains. As Sylhet witnesses an extended rainy season the perfect time to visit Jalfong is between April and October. </span>
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
            <p>Nearly two hours drive from Sylhet city centre, Jaflong is easily accessible by route. A microbus can be hired for 4000-5000 BDT. A boat trip from Jaflong to the Zero Point costs 500-1000 BDT. A trip to Khasiapunji by the local transport called moyori would cost 500-1000 BDT. <br><br>There are some reasonably good local restaurants on the east side of the river. Café Sangrampunji, a restaurant run by Nazimghar Resorts operates in Sangrampunji on the west side of the river. The cost, despite being higher than that of the local restaurants, is not much in view of its quality, service and the aesthetic appeal of the restaurant. A sip in a cup of coffee while surveying the wonders of the Khasi mountains, the Piyain and the hanging bridge over the Dauki can be an amazing experience for anyone. </p>
            </div>
            <button class="collapsible">Where to stay?</button>
            <div class="content">
            <p>Near To Tamabil There is a Guest house Run By BGB. <br><br>Before that near to Sreepur there is 'Jaintia Hill Resort'. <br><br>In Lalakhal Nazimgarh has a World class Resort named as Nazimgarh Wilderness Resorts. <br><br>But most of Visitor prefers to stay in Hotel/ Resorts in Sylhet town as it is just a journey of maximum 2 hours. </p>
            </div>
            <button class="collapsible">Where to eat?</button>
            <div class="content">
            <p>TThere are some local quality Restaurants on the East side of the river. <br><br>'Café Sengrampunji' a restaurant run by Nazimghar Resort is found in the Khasi village Sengrampunji on the West side of the river. The cost is comparatively higher than the local restaurants but it is not much beside its quality, serving and the artistic beauty of the restaurant. It is really amazing to have a cup of coffee and see the wonderful beauty of the Khasi Hill, Piyan River, and the Hanging Bridge of Dawki. </p>
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