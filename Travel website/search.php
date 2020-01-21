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
       $query = "SELECT * FROM search WHERE";
       
       $i = 0;
       foreach($terms as $each){
           $i++;

           if($i == 1){
               $query .= "keywords LIKE '%$each%' ";
           }else{
            $query .= "OR keywords LIKE '%$each%' ";
           }
       }
       
       //connect
       mysql_connect("localhost", "root" , "");
       mysql_select_db("travel_website");

       $query = mysql_query($query);
       $num = mysql_num_rows($query);

       if($num>0 && !$search=""){
            
        while($row = mysql_fetch_assoc($query)){
            
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
    mysql_close();
   }
   else{
       echo "Please type any words...";
   }
?>
</body>
</html>