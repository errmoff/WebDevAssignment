<?php
$servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "courses";




   $conn = mysqli_connect($servername, $username, $password, $dbname);

   if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
   }

   $sql = "SELECT category FROM articles ";
   $result = mysqli_query($conn, $sql);


    

      $q=array();

while ($row = mysqli_fetch_assoc($result)) {
   $q[]=$row['header'];
}
   foreach($q as $header) {
   echo $header.'<br>';
}
   mysqli_close($conn);


  ?>

<div>
  <? echo $q ?>
</div>