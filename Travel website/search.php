<?php
    include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search</title>
</head>
<body>
<br/>
<h2>Results...</h2>
<hr />
<br/>
<?php
   if(isset($_POST['submit-search'])){
       $search = mysqli_real_escape_string($conn, $_POST['search']);
       $sql = "SELECT * FROM search WHERE title LIKE '%$search%' OR descc LIKE '%$search%' 
       OR keywords LIKE '%$search%'";
       $result = mysqli_query($conn, $sql );
       $num = mysqli_num_rows($result);

       echo "There are .$num. results!";

       if($num>0){
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $title = $row['title'];
            $description = $row['descc'];
            $keywords = $row['keywords'];
            $link = $row['link'];

            echo "<h3><a href='$link'>$title</a></h3>
            <p>$description</p><br />"; 
        }
       }else{
           echo "No result found ";
       }
    }
       
?>
</body>
</html>