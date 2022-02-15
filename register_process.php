<?php
 include "database.php";

 $usr=$_POST['usrname'];
 $pas=$_POST['usrpass'];
 

$insert= "INSERT INTO rasaili (user, password) VALUES ('$usr','$pas')";
mysqli_query($connection,$insert);

header('Location:form.php');

 ?> 