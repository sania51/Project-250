<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="sylhetStyle.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <title>Sylhet</title>
    </head>
    <body>

    <?php include 'nav.php';?>
                
        <div class="header">
            <h1>Sylhet</h1>
            <h2>A Place of Tea Beauty</h2>
        </div>
        <div class="logo"><img src="imgs/logo.png"></div>

        <!--welcome-->
        <section class="welcome">
            <h1>Welcome to Sylhet</h1>
            <hr class="line">
            <p>Sylhet is one of the greenest divisions in Bangladesh. The greenery of Sylhet is so peaceful and calming.
                Though Sylhet is mostly known for its tea but<span id="dots">...</span><span id="more"> the  the wetland marshes of Ratargul and Sunamganj,
                the forested nature reserves of Lowacherra, and Srimangal's rolling hills blanketed in waist-high tea bushes, 
                Sylhet boasts a mind-blowing array of landscapes and sanctuaries that call out to nature lovers from around the world.</span>
            </p>
            <button onclick="myFunction()" id="myBtn">Read more</button>

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

       
        <section class="visit_places">
                <h1>Places to Visit</h1>
                <hr class="line">
                <h2>Natural Places</h2>
                <div class="container">
                <div class="columns">               
                <div class="media">
                      <div class= "media_img">
                          
                          <img src="imgs/Sylhet-Jaflong.jpg" width="80" height="50"/>
                      </div>
                      <div class = "media_body">
                          <a href="jaflong.php">Jaflong</a>
                          <p>Sylhet</p>
                      </div>
                </div>
                <div class="media">
                    <div class= "media_img">
                        <img src="imgs/Ratargul_Scenario.jpg" width="80" height="50"/>
                    </div>
                    <div class = "media_body">
                        <a href="ratargul.php">Ratargul</a>
                        <p>Sylhet</p>
                    </div>
              </div>
              <div class="media">
                    <div class= "media_img">
                        <img src="imgs/Bisanakandi_Tourist_spot.jpg" width="80" height="50"/>
                    </div>
                    <div class = "media_body">
                        <a href="bisnakandi.php">Bichanakandi</a>
                        <p>Sylhet</p>
                    </div>
              </div>
              <div class="media">
                    <div class= "media_img">
                        <img src="imgs/Lalakhal.png" width="80" height="50"/>
                    </div>
                    <div class = "media_body">
                        <a href="lalakhal.php">Lalakhal</a>
                        <p>Sylhet</p>
                    </div>
              </div>
              <div class="media">
                    <div class= "media_img">
                        <img src="imgs/Lawachara.jpg" width="80" height="50"/>
                    </div>
                    <div class = "media_body">
                        <a href="lawachara.php">Lawachara</a>
                        <p>Sylhet</p>
                    </div>
              </div>
              <div class="media">
                  <div class= "media_img">
                      <img src="imgs/Tanguar-Haor-1024x619.jpg" width="80" height="50"/>
                  </div>
                  <div class = "media_body">
                      <a href="tanguar.php">Tanguar Haor</a>
                      <p>Sylhet</p>
                  </div>
            </div>
            <div class="media">
                  <div class= "media_img">
                      <img src="imgs/Sreemangal-Bangladesh-bangladesh-41724982-770-450.jpg" width="80" height="50"/>
                  </div>
                  <div class = "media_body">
                      <a href="sremongol.php">Sreemangal</a>
                      <p>Sylhet</p>
                  </div>
            </div>
            <div class="media">
                  <div class= "media_img">
                      <img src="imgs/IMG_20180914_114238.jpg" width="80" height="50"/>
                  </div>
                  <div class = "media_body">
                      <a href="volagonj.php">Bholagonj</a>
                      <p>Sylhet</p>
                  </div>
            </div>
            <div class="media">
                    <div class= "media_img">
                        <img src="imgs/HamHam_falls_sylhet.jpg" width="80" height="50"/>
                    </div>
                    <div class = "media_body">
                        <a href="hum.php">Hum Hum</a>
                        <p>Sylhet</p>
                    </div>
              </div>
              <div class="media">
                    <div class= "media_img">
                        <img src="imgs/Madhabkunda_Waterfall.jpg" width="80" height="50"/>
                    </div>
                    <div class = "media_body">
                        <a href="madhav.php">Madhabkunda</a>
                        <p>Sylhet</p>
                    </div>
                </div>
                    <div class="media">
                            <div class= "media_img">
                                <img src="imgs/Khadimnagar_Rain_Forest_Sylhet_(8005265382).jpg" width="80" height="50"/>
                            </div>
                            <div class = "media_body">
                                <a href="khadim.php">Khadimnagar</a>
                                <p>Sylhet</p>
                            </div>
              </div>
              <div class="media">
                    <div class= "media_img">
                        <img src="imgs/Swamp_Sylhet.jpg" width="80" height="50"/>
                    </div>
                    <div class = "media_body">
                        <a href="dibir.php">Dibir Haor</a>
                        <p>Sylhet</p>
                    </div>
                </div>
                <div class="media">
                        <div class= "media_img">
                            <img src="imgs/hakaluki.jpg" width="80" height="50"/>
                        </div>
                        <div class = "media_body">
                            <a href="hakaluki.php">Hakaluki Haor</a>
                            <p>Sylhet</p>
                        </div>
                    </div>
                    <div class="media">
                            <div class= "media_img">
                                <img src="imgs/lova-chora-1.jpg" width="80" height="50"/>
                            </div>
                            <div class = "media_body">
                                <a href="lova.php">Lovachora</a>
                                <p>Sylhet</p>
                            </div>
                        </div>
                        <div class="media">
                                <div class= "media_img">
                                    <img src="imgs/shimul bagan.jpg" width="80" height="50"/>
                                </div>
                                <div class = "media_body">
                                    <a href="shimul.php">Shimul Bagan</a>
                                    <p>Sylhet</p>
                                </div>
                            </div>
                        <div class="media">
                            <div class= "media_img">
                                <img src="imgs/Satchari_Scenario.jpg" width="80" height="50"/>
                            </div>
                            <div class = "media_body">
                                <a href="satchori.php">Sathchori</a>
                                <p>Sylhet</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class= "media_img">
                                <img src="imgs/panthumai.jpg" width="80" height="50"/>
                            </div>
                            <div class = "media_body">
                                <a href="panthumai.php">Panthumai</a>
                                <p>Sylhet</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class= "media_img">
                                <img src="imgs/turung-4-750x350.jpg" width="80" height="50"/>
                            </div>
                            <div class = "media_body">
                                <a href="turong.php">Turong Chora</a>
                                <p>Sylhet</p>
                            </div>
                        </div>
            </div>
            </div>
        
            <h2>Historical & Religious Places</h2>
            <div class="container">
                    <div class="columns">               
                    <div class="media">
                          <div class= "media_img">
                              <img src="imgs/jalal.jpg" width="80" height="50"/>
                          </div>
                          <div class = "media_body">
                              <a href="shahjalal.php">Shrine of Hazrat Shahjalal</a>
                              <p>Sylhet</p>
                          </div>
                    </div>
                    <div class="media">
                          <div class= "media_img">
                              <img src="imgs/poran.jpg" width="80" height="50"/>
                          </div>
                          <div class = "media_body">
                              <a href="shahporan.php">Shrine of Hazrat Shahparan</a>
                              <p>Sylhet</p>
                          </div>
                    </div>
                  <div class="media">
                        <div class= "media_img">
                            <img src="imgs/1280px-Keane_Bridge_6426.jpg" width="80" height="50"/>
                        </div>
                        <div class = "media_body">
                            <a href="kean.php">Keane Bridge</a>
                            <p>Sylhet</p>
                        </div>
                  </div>
                  <div class="media">
                        <div class= "media_img">
                            <img src="imgs/DsYb1NiU8AEk3wH.jpg" width="60" height="55"/>
                        </div>
                        <div class = "media_body">
                            <a href="clock.php">Ali Amjad's Clock</a>
                            <p>Sylhet</p>
                        </div>
                  </div>
                </div>
                </div>
        </section>
        
        <?php
        include "../footer.php";
        ?>
    </body>
</html>