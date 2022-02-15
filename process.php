<?php

$name=$_POST["name"];
$id=$_POST["id"];
$email=$_POST["email"];


?>


<h1 class="welcome"> welcome  <?php echo($name )  ?>   !!  </h1>


<?php

if($name=="birikha"){

    echo("wow my name is birikha".'<br>' );

}
else{
    echo " you ara not birikha your name is lirikha";
}
?>


<?php echo($id.'<br>' )?>
<?php echo($email.'<br>' )?>
