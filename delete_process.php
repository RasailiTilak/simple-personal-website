<?php
#delete
include "database.php";
if(!isset($_GET['uid']))

{
    die();}
$userid=intval($_GET['uid']);
$delete="DELETE FROM rasaili WHERE id =$userid";
mysqli_query($connection,$delete);
header('Location:form.php')

?>