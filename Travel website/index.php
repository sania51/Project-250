<?php
    include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
      <!-- CSS -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster|Roboto&display=swap" >
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="assets/css/carousel.css">
      
      <title>TraveloBD</title>
    </head>
    <body>
      
        <div class="slideshow-container" style="position: absolute; left: 0">
            <!--First Image-->
            <div class="mySlides fade">
              <div style="background-image: url('imgs/Tanguar_Haor2.jpg'); background-position: center; background-size: cover;padding-top: 20px; height: 90vh; width: 100vw">
              </div>
            </div>
            <!--Second Image-->
            <div class="mySlides fade">
              <div style="background-image: url('imgs/Ratargul-Children.jpg'); background-position: center; background-size: cover;padding-top: 20px; height: 90vh; width: 100vw">
              </div>
            </div>
            <!--Third Image-->
            <div class="mySlides fade">
              <div style="background-image: url('imgs/Waterplants.jpg'); background-position: center; background-size: cover; padding-top: 20px; height: 90vh; width: 100vw">
              </div> 
            </div>
        </div>

        <div class="heading">BANGLADESH</div>
        <div class="intro"><h2>A Place of Beauty and Culture</h2></div>
        <div class="logo"><img src="imgs/logo.png"></div>
        
        <form action="search.php" method="POST">
        <div class="input-group">
          <input type="text" class="form-control" name="search" placeholder="where to?">
          <div class="input-group-append"></div>
          <button type="submit" class="input-group-text btn" name="submit-search" >Search</button>
        </div>
        </form>
        
        <div class="menu">
          
          <nav>
              <ul>
                  <li><a href="index.php">Home</a></li>
                  <li><a href="#">Cities</a>
                      <ul>
                          <li><a href="#">Dhaka</a></li>
                          <li><a href="Chittagong\Chittagong.php">Chittagong</a></li>
                          <li><a href="#">Rajshahi</a></li>
                          <li><a href="#">Rangpur</a></li>
                          <li><a href="Sylhet\Sylhet.php">Sylhet</a></li>
                          <li><a href="#">Khulna</a></li>
                          <li><a href="#">Barishal</a></li>
                      </ul>    
                  </li>       
                  <li><a href="history.php">History</a></li>
                  <li><a href="#">Sign in</a> 
              </ul>
          </nav>
        </div>
        
        <div style="margin-top: 90vh"></div>
        <br>
        
        <div style="text-align:center">
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
        </div>
        
        <script>
        var slideIndex = 0;
        showSlides();
        
        function showSlides() {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}    
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
          setTimeout(showSlides, 4000); // Change image every 2 seconds
        }
        </script>

        <!--welcome-->
        <section class="welcome">
            <h1>Welcome to Bangladesh</h1>
            <hr class="line">
            <p>Bangladesh is South Asia's greenest jewel – a country braided with rivers, with a rich culture waiting to be explored by pioneer travellers.</p>
        </section>

        <!--Top Places -->
        <section class="top_places">

          <h1>Top Places to Visit</h1>
          <hr class = "tline">

          <div class="top-content">
            <div class="container-fluid">
              <div id="carousel-example" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner row w-100 mx-auto" role="listbox">
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
                <div class="card-img-wrap">
                  <a href="Sylhet/Ratargul.php"><img src="assets/imgs/rg.jpg" class="img-fluid mx-auto d-block" alt="img1"  width="350" height="500"></a>
                  <div class="carousel-caption">
                    <h3>RATARGUL</h3>
                    <h6>SYLHET</h6>
                  </div>
                </div>
              </div>
              <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card-img-wrap">
                  <a href="Chittagong/debota.php"><img src="assets/imgs/IMG_20190929_090826.jpg" class="img-fluid mx-auto d-block" alt="img2"></a>
                  <div class="carousel-caption">
                    <h3>DEBOTAKHUM</h3>
                    <h6>BANDARBAN</h6>
                  </div>
                </div>
              </div>
              <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card-img-wrap">
                  <a href="Chittagong/cox.php"><img src="assets/imgs/scenic-view-of-ocean-during-sunset-1032650.jpg" class="img-fluid mx-auto d-block" alt="img3"></a>
                  <div class="carousel-caption">
                    <h3>COX'S BAZAR</h3>
                    <h6>CHITTAGONG</h6>
                  </div>
                </div>
              </div>
              <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card-img-wrap">
                  <a href="sundar.php"><img src="assets/imgs/sb.jpg" class="img-fluid mx-auto d-block" alt="img4"></a>
                  <div class="carousel-caption">
                    <h3>SUNDARBANS</h3>
                    <h6>KHULNA</h6>
                  </div>
                </div>
              </div>
              <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card-img-wrap">
                  <a href="Sylhet/hum.php"><img src="assets/imgs/hum.jpg" class="img-fluid mx-auto d-block" alt="img5"></a>
                  <div class="carousel-caption">
                    <h3>HUM HUM</h3>
                    <h6>SREEMANGAL</h6>
                  </div>
                </div>
              </div>
              <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card-img-wrap">
                  <a href="Chittagong/sajek.php"><img src="assets/imgs/163_gallary_1.jpg" class="img-fluid mx-auto d-block" alt="img6"></a>
                  <div class="carousel-caption">
                    <h3>SAJEK VALLEY</h3>
                    <h6>RANGAMATI</h6>
                  </div>
                </div>
              </div>
              <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card-img-wrap">
                  <a href="Chittagong/kaptai.php"><img src="assets/imgs/kll.jpg" class="img-fluid mx-auto d-block" alt="img7"></a>
                  <div class="carousel-caption">
                    <h3>KAPTAI LAKE</h3>
                    <h6>RANGAMATI</h6>
                  </div>
                </div>
              </div>
              <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card-img-wrap">
                  <a href="Chittagong/nafakhum.php"><img src="assets/imgs/nk.jpg" class="img-fluid mx-auto d-block" alt="img8"></a>
                  <div class="carousel-caption">
                    <h3>NAFAKHUM</h3>
                    <h6>BANDARBAN</h6>
                  </div>
                </div>
              </div>
                </div>
                <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
              </div>
            </div>
          </div>
          </section>
          <?php
            include "footer.php";
          ?>

          <!-- Javascript -->
          <script src="assets/js/jquery-3.3.1.min.js"></script>
          <script src="assets/js/jquery-migrate-3.0.0.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
          <script src="assets/js/jquery.backstretch.min.js"></script> 
          <script src="assets/js/wow.min.js"></script> 
          <script src="assets/js/scripts.js"></script>
    </body>
</html>