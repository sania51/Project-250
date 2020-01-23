

<head>
  
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->
  
  
  
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  </head>
  
  <style>
  
  @import url('https://fonts.googleapis.com/css?family=Berkshire+Swash&display=swap');
  
	  html{
		  position: relative;
		  min-height: 100%;
	  }
	  body{
		  margin-bottom: 20px;
		  
	  }
	  
	  .foot{
		  position: absolute;
		  bottom: -500px;
		  width: 100%;
		  /*height: 100px;*/
		  background-color:  rgb(100, 100, 100);
	  }
	  
	  #copy p{
		  color: white;
	  }    
  
	  .log{
		  color:#FFF;
		  margin-top: 14%;
		  font-size:46px;
		  font-family: 'Berkshire Swash', cursive;
	  }
  
	  .address span , .men span{
	  color: white; 
	  font-weight: bold; 
	  border-bottom: 1px solid #c7c7c7; 
	  padding:10px 0px;
	  display: block;
	  text-transform: uppercase;
	  font-size: 16px;
	  letter-spacing: 3px;
	  }
	  
	  .address li a , .men li a{
		  color:wheat;
		  letter-spacing: 3px;
		  text-decoration:none;
		  font-size:14px;
	  }
  
	  .address li, .men li{
		  margin:20px 0px;
		  list-style: none;
	  }
  
	  .address li a:hover , .men li a:hover{
		  color: black;
		  -webkit-transition: all 1s ease-in-out;
		  -moz-transition: all 1s ease-in-out;
		  -o-transition: all 1s ease-in-out;
		  transition: all 1s ease-in-out;
	  }
  
	  .address .fa{
		  color: white;
		  margin-right: 10px;
		  font-size:18px;
	  }
  
  </style>
  
  
  <footer class="foot">
	 
		  <div class="row justify-content-between">
		  
			  <div class="col-md-4 col-sm-6 col-xs-12">
				  <div  class="log"><p class="text-center">TraveloBD</p></div>
			  </div>
		  
			  <div class="col-md-3 col-sm-5 col-xs-10">
				  <ul class="men">
					  <span>Menu</span>    
					  <li>
					  <a href="../index.php">Home</a>
					  </li>
						  
					  <li>
						  <a href="#">About</a>
					  </li>
						  
					  <li>
					  <a href="../history.php">History</a>
					  </li>
  
				  </ul>
			  </div>
  
			  <div class="col-md-3 col-sm-5 col-xs-10">
				  <ul class="address">
					  <span>Contact</span>       
					  <li>
						  <i class="fa fa-map-marker" aria-hidden="true"></i> <a href="#">SWE, IICT, SUST</a>
					  </li>
					  <li>
						  <i class="fa fa-phone" aria-hidden="true"></i> <a href="#">+880-XX-NNNN-NNNN</a>
					  </li> 
					  <li>
						  <i class="fa fa-envelope" aria-hidden="true"></i> <a href="#">travelobd@gmail.com</a>
					  </li> 
				  </ul>
			  </div>
		  </div>
  
		  <div id="copy">
		  <p class="text-center">
			  <?php
			  $today=date("Y");
			  echo "Copyright &copy; $today";
			  ?>
		  </p>
	  </div> 
  
  </footer>
  