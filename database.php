 <?php
 $host = "localhost";
 $database = "tilak";
 $user = "root";
 $pass = "";
 $connection = mysqli_connect($host,$user,$pass,$database);
 mysqli_select_db($connection, $database);


 
 if(!$connection){
     echo("error, uncable to connect");
    
     
 }
 else{
     echo("connection done");
 }
 ?> 