<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="stylectg.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <title>Chittagong</title>
    </head>
    <body>

    <?php include "../nav.php";?>
                
        <div class="header">
            <h1>Chittagong</h1>
            <h2>A Piece of Heaven</h2>
        </div>
        <div class="logo"><img src="imgs/logo.png"></div>

        <!--welcome-->
        <section class="welcome">
            <h1>Welcome to Chittagong</h1>
            <hr class="line">
            <p>With a pictures queen hinterland of large hill forests and lakes,Chittagong is a good vacation spot. 
            It is the second largest city of Bangladesh and a busy of Bangladesh and a busy international sea port.
            Its green hills and forests,<span id="dots">...</span><span id="more"> broad sandy beaches and fine cool climate always attract holiday makers.
            It combines the hump of a restless seaport with the pleasure of a charming hill town with its undulating topography. Chittagong is the country's chief port and is the main site for the establishment of heavy, medium and light industries. 
            Bangladesh's only steel mill and oil refinery are also located here. Chittagong is connected with Dhaka by rail, road, air and water. 
            It is also connected with Cox's Bazar and Calcutta by Air.</span>
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

       <!-- <section class="top_places">
            <h1>Top Places</h1>
            <hr class="line">
            <div class="container">
                    <div class="column">
                <div class="Top_places">
                      <img src="imgs/Ratargul_Scenario.jpg" width="200" height="140" />
                      <div class="desc"><a href="#">Ratargul swamp Forest</a></div>
                </div>
                <div class="Top_places">
                          <img src="imgs/Bisanakandi_Tourist_spot1.jpg" width="200" height="140"/>
                          <div class="desc"><a href="#">Bichanakandi</a></div>
                    </div>
                <div class="Top_places">
                      <img src="imgs/Sylhet-Jaflong.jpg" width="200" height="140" />
                      <div class="desc"><a href="#">Jaflong</a></div>
                </div>
                <div class="Top_places">
                      <img src="imgs/Lawachara.jpg" width="200" height="140" />
                      <div class="desc"><a href="#">Lowachera National Park</a></div>
                </div>
                <div class="Top_places">
                      <img src="imgs/Blog-Tanguar-Haor-4.png" width="200" height="140"/>
                      <div class="desc"><a href="#">Tanguar Haor</a></div>
                </div>
                <div class="Top_places">
                      <img src="imgs/Lalakhal.png" width="200" height="140"/>
                      <div class="desc"><a href="#">Lalakhal</a></div>
                </div>
            </div>
        </div>
        </section> -->

        <section class="visit_places">
                <h1>Places to Visit</h1>
                <hr class="line">
                <h2>Hills</h2>
                <div class="container">
                <div class="columns">               
                <div class="media">
                      <div class= "media_img">
                          
                          <img src="imgs/Keokaradang.jpg" width="80" height="50"/>
                      </div>
                      <div class = "media_body">
                          <a href="keoka.php">Keokradong</a>
                          <p>Chittagong</p>
                      </div>
                </div>
                <div class="media">
                    <div class= "media_img">
                        <img src="imgs/Chandranath_Hill.jpg" width="80" height="50"/>
                    </div>
                    <div class = "media_body">
                        <a href="chandra.php">Chandranath Hill</a>
                        <p>Chittagong</p>
                    </div>
              </div>
              <div class="media">
                    <div class= "media_img">
                        <img src="imgs/nilgiri.jpg" width="80" height="50"/>
                    </div>
                    <div class = "media_body">
                        <a href="nilgiri.php">Nilgiri</a>
                        <p>Chittagong</p>
                    </div>
              </div>
              <div class="media">
                    <div class= "media_img">
                        <img src="imgs/nilachol.jpg" width="80" height="50"/>
                    </div>
                    <div class = "media_body">
                        <a href="lalakhal.php">Nilachol</a>
                        <p>Chittagong</p>
                    </div>
              </div>
              <div class="media">
                    <div class= "media_img">
                        <img src="imgs/Chimbuk-hill.jpg" width="80" height="50"/>
                    </div>
                    <div class = "media_body">
                        <a href="lawachara.php">Chimbuk Hill</a>
                        <p>Chittagong</p>
                    </div>
              </div>
              <div class="media">
                  <div class= "media_img">
                      <img src="imgs/Sajek_Valley.jpg" width="80" height="50"/>
                  </div>
                  <div class = "media_body">
                      <a href="tanguar.php">Sajek Valley</a>
                      <p>Chittagong</p>
                  </div>
            </div>
            <div class="media">
                  <div class= "media_img">
                      <img src="imgs/dimpahar.jpg" width="80" height="50"/>
                  </div>
                  <div class = "media_body">
                      <a href="sremongol.php">Dim Pahar</a>
                      <p>Chittagong</p>
                  </div>
            </div>
            <div class="media">
                  <div class= "media_img">
                      <img src="imgs/debotakhum.jpg" width="80" height="50"/>
                  </div>
                  <div class = "media_body">
                      <a href="sremongol.php">Debotakhum</a>
                      <p>Chittagong</p>
                  </div>
            </div>

            </div>
            </div>

            <h2>Falls</h2>
                <div class="container">
                <div class="columns">               
                <div class="media">
                      <div class= "media_img">
                          
                          <img src="imgs/amia.jpg" width="80" height="50"/>
                      </div>
                      <div class = "media_body">
                          <a href="keoka.php">Amiakhum</a>
                          <p>Chittagong</p>
                      </div>
                </div>
                <div class="media">
                    <div class= "media_img">
                        <img src="imgs/nafa.jpg" width="80" height="50"/>
                    </div>
                    <div class = "media_body">
                        <a href="chandra.php">Nafakhum</a>
                        <p>Chittagong</p>
                    </div>
              </div>
              <div class="media">
                    <div class= "media_img">
                        <img src="imgs/Himchori_Waterfall_.jpg" width="80" height="50"/>
                    </div>
                    <div class = "media_body">
                        <a href="nilgiri.php">Himchari</a>
                        <p>Chittagong</p>
                    </div>
              </div>
              <div class="media">
                    <div class= "media_img">
                        <img src="imgs/Napittachora.jpg" width="80" height="50"/>
                    </div>
                    <div class = "media_body">
                        <a href="lalakhal.php">Napittachora</a>
                        <p>Chittagong</p>
                    </div>
              </div>
              <div class="media">
                    <div class= "media_img">
                        <img src="imgs/khoi.jpg" width="80" height="50"/>
                    </div>
                    <div class = "media_body">
                        <a href="lawachara.php">khoiyachora</a>
                        <p>Chittagong</p>
                    </div>
              </div>
              <div class="media">
                  <div class= "media_img">
                      <img src="imgs/supto.jpg" width="80" height="50"/>
                  </div>
                  <div class = "media_body">
                      <a href="tanguar.php">Suptodhara</a>
                      <p>Chittagong</p>
                  </div>
            </div>
            <div class="media">
                  <div class= "media_img">
                      <img src="imgs/sohosro.jpg" width="80" height="50"/>
                  </div>
                  <div class = "media_body">
                      <a href="sremongol.php">sohosrodhara</a>
                      <p>Chittagong</p>
                  </div>
            </div>
            <div class="media">
                  <div class= "media_img">
                      <img src="imgs/komol.jpg" width="80" height="50"/>
                  </div>
                  <div class = "media_body">
                      <a href="volagonj.php">Komoldoho</a>
                      <p>Chittagong</p>
                  </div>
            </div>
            <div class="media">
                    <div class= "media_img">
                        <img src="imgs/chagol.jpg" width="80" height="50"/>
                    </div>
                    <div class = "media_body">
                        <a href="#">Chagol-kanda Waterfall</a>
                        <p>Chittagong</p>
                    </div>
              </div>
              
            </div>
            </div>

            <h2>Beaches</h2>
            <div class="container">
                    <div class="columns">               
                    <div class="media">
                          <div class= "media_img">
                              <img src="imgs/Saint-Martin-Island.jpg" width="80" height="50"/>
                          </div>
                          <div class = "media_body">
                              <a href="#">Saint-Martin</a>
                              <p>Chittagong</p>
                          </div>
                    </div>
                    <div class="media">
                        <div class= "media_img">
                            <img src="imgs/inani.jpg" width="80" height="50"/>
                        </div>
                        <div class = "media_body">
                            <a href="#">Inani Beach</a>
                            <p>Chittagong</p>
                        </div>
                  </div>
                  <div class="media">
                        <div class= "media_img">
                            <img src="imgs/Sun_set_at_Patenga_sea_beach,_Chittagong,_Bangladesh.jpg" width="80" height="50"/>
                        </div>
                        <div class = "media_body">
                            <a href="#">Patenga sea Beach</a>
                            <p>Chittagong</p>
                        </div>
                  </div>
                  <div class="media">
                        <div class= "media_img">
                            <img src="imgs/guliakhali.jpg" width="80" height="50"/>
                        </div>
                        <div class = "media_body">
                            <a href="#">Guliakhali Beach</a>
                            <p>Chittagong</p>
                        </div>
                  </div>
                  <div class="media">
                        <div class= "media_img">
                            <img src="imgs/khejurtala-sea-beach.jpg" width="80" height="50"/>
                        </div>
                        <div class = "media_body">
                            <a href="#">khejurtala sea Beach</a>
                            <p>Chittagong</p>
                        </div>
                  </div>
                  <div class="media">
                        <div class= "media_img">
                            <img src="imgs/bashkhali.jpg" width="80" height="50"/>
                        </div>
                        <div class = "media_body">
                            <a href="#">Baskhali sea beach</a>
                            <p>Chittagong</p>
                        </div>
                  </div>
                  <div class="media">
                        <div class= "media_img">
                            <img src="imgs/Kutubdia_Island,_Cox'sbazar.jpg" width="80" height="50"/>
                        </div>
                        <div class = "media_body">
                            <a href="#">Kutubdia_Island</a>
                            <p>Chittagong</p>
                        </div>
                  </div>

                </div>
                </div>

                <h2>Lakes</h2>
                <div class="container">
                    <div class="columns">               
                    <div class="media">
                          <div class= "media_img">
                              <img src="imgs/kaptai.jpg" width="80" height="50"/>
                          </div>
                          <div class = "media_body">
                              <a href="#">Kaptai Lake</a>
                              <p>Chittagong</p>
                          </div>
                    </div>
                    <div class="media">
                        <div class= "media_img">
                            <img src="imgs/Foys-Lake-Chittagong.jpg" width="80" height="50"/>
                        </div>
                        <div class = "media_body">
                            <a href="#">Foy's Lake</a>
                            <p>Chittagong</p>
                        </div>
                  </div>
                  <div class="media">
                        <div class= "media_img">
                            <img src="imgs/vatiary lake.jpg" width="80" height="50"/>
                        </div>
                        <div class = "media_body">
                            <a href="#">Vatiary Lake</a>
                            <p>Chittagong</p>
                        </div>
                  </div>
                  <div class="media">
                        <div class= "media_img">
                            <img src="imgs/Boga-Lake-byTalash.shahnewaz-1024x683.jpg" width="80" height="50"/>
                        </div>
                        <div class = "media_body">
                            <a href="#">Boga Lake</a>
                            <p>Chittagong</p>
                        </div>
                  </div>
                  <div class="media">
                        <div class= "media_img">
                            <img src="imgs/dhormo.jpg" width="80" height="50"/>
                        </div>
                        <div class = "media_body">
                            <a href="#">Darmo Sagor Lake</a>
                            <p>Chittagong</p>
                        </div>
                  </div>
                  <div class="media">
                        <div class= "media_img">
                            <img src="imgs/Mayabini.jpg" width="80" height="50"/>
                        </div>
                        <div class = "media_body">
                            <a href="#">Mayabini Lake</a>
                            <p>Chittagong</p>
                        </div>
                  </div>

                </div>
                </div>
        
            <h2>Historical & Religious Places</h2>
            <div class="container">
                    <div class="columns">               
                    <div class="media">
                          <div class= "media_img">
                              <img src="imgs/Chandranath_Temple.jpg" width="80" height="50"/>
                          </div>
                          <div class = "media_body">
                              <a href="#">Chandranath Temple</a>
                              <p>Chittagong</p>
                          </div>
                    </div>
                    <div class="media">
                        <div class= "media_img">
                            <img src="imgs/gold.jpg" width="80" height="50"/>
                        </div>
                        <div class = "media_body">
                            <a href="#">Shorno Mondir</a>
                            <p>Chittagong</p>
                        </div>
                  </div>
                  <div class="media">
                        <div class= "media_img">
                            <img src="imgs/Shrine-of-Bayazid-Bastami.jpg" width="80" height="50"/>
                        </div>
                        <div class = "media_body">
                            <a href="#">Shrine of Bayazid Bastami</a>
                            <p>Chittagong</p>
                        </div>
                  </div>
                  <div class="media">
                        <div class= "media_img">
                            <img src="imgs/War_cemetary22.jpg" width="80" height="50"/>
                        </div>
                        <div class = "media_body">
                            <a href="#">War cemetary</a>
                            <p>Chittagong</p>
                        </div>
                  </div>
                  <div class="media">
                        <div class= "media_img">
                            <img src="imgs/ramu.jpg" width="80" height="50"/>
                        </div>
                        <div class = "media_body">
                            <a href="#">Ramu</a>
                            <p>Chittagong</p>
                        </div>
                  </div>
                  <div class="media">
                        <div class= "media_img">
                            <img src="imgs/shalbon.jpg" width="80" height="50"/>
                        </div>
                        <div class = "media_body">
                            <a href="#">Shalban Vihara</a>
                            <p>Chittagong</p>
                        </div>
                  </div>
                  <div class="media">
                        <div class= "media_img">
                            <img src="imgs/moyna.jpg" width="80" height="50"/>
                        </div>
                        <div class = "media_body">
                            <a href="#">Moynamoti</a>
                            <p>Chittagong</p>
                        </div>
                  </div>
                  <div class="media">
                        <div class= "media_img">
                            <img src="imgs/bojra.jpg" width="80" height="50"/>
                        </div>
                        <div class = "media_body">
                            <a href="#">Bajra Shahi Mosque</a>
                            <p>Chittagong</p>
                        </div>
                  </div>
                </div>
                </div>

                <h2>Others</h2>
                <div class="container">
                    <div class="columns">               
                    <div class="media">
                          <div class= "media_img">
                              <img src="imgs/tindu.jpg" width="80" height="50"/>
                          </div>
                          <div class = "media_body">
                              <a href="#">Tindu</a>
                              <p>Chittagong</p>
                          </div>
                    </div>
 
                  <div class="media">
                        <div class= "media_img">
                            <img src="imgs/CREL_Nijhum_Samiul_02.jpg" width="80" height="50"/>
                        </div>
                        <div class = "media_body">
                            <a href="#">Nijhum Dwip</a>
                            <p>Chittagong</p>
                        </div>
                  </div>
                  <div class="media">
                        <div class= "media_img">
                            <img src="imgs/Kaptai-Lake-2-1140x530.jpg" width="80" height="50"/>
                        </div>
                        <div class = "media_body">
                            <a href="#">Hanging Bridge</a>
                            <p>Chittagong</p>
                        </div>
                  </div>
                  <div class="media">
                        <div class= "media_img">
                            <img src="imgs/Alutila.jpg" width="80" height="50"/>
                        </div>
                        <div class = "media_body">
                            <a href="#">Alutila cave</a>
                            <p>Chittagong</p>
                        </div>
                  </div>
                  <div class="media">
                        <div class= "media_img">
                            <img src="imgs/Halda_River_near_Narayan_Hat.jpg" width="80" height="50"/>
                        </div>
                        <div class = "media_body">
                            <a href="#">Halda river</a>
                            <p>Chittagong</p>
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