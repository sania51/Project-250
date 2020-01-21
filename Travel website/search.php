<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search</title>
</head>
<body>
    <center>
    <form action="search.php" method="GET">
    <input type="text" name="search">
    <input type="submit" name="submit" value="where to?">
    </form>
</center>
<hr />

<?php
   if(isset($_REQUEST['submit'])){
       $search = $_GET['search'];
       $terms = explode(" ", 'search');
       //$query = "SELECT * FROM search WHERE";
       
       $i = 0;
       foreach($terms as $each){
           $i++;

           if($i == 1){
               $result .= "keywords LIKE '%$each%' ";
           }else{
            $result .= "OR keywords LIKE '%$each%' ";
           }
       }
       
       //connect
      $con = mysqli_connect("localhost", "root" , "", "travel_website");
       //mysqli_select_db("travel_website");

       $result = mysqli_query($con, "SELECT * FROM search");
       $num = mysqli_num_rows($result);

       if($num>0 && !$search=""){
            
        while($row = mysqli_fetch_assoc($result)){
            
            $id = $row['id'];
            $title = $row['title'];
            $description = $row['description'];
            $keywords = $row['keywords'];
            $link = $row['link'];

            echo "<h3><a href='$link'>$title</a></h3>
            $description<br />";
        }
       }
       else{
        echo "No results found";
    }
    mysqli_close($con);
   }
   else{
       echo "Please type any words...";
   }
?>
</body>
</html>