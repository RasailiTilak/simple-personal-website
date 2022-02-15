
<?php 
include "database.php";
?>
<div>
<table border="1" >
<th>username</th>
<th>password</th>
<th>Remove</th>
<th>Edit</th>


<?php 
$select="SELECT * FROM rasaili";
$row= mysqli_query($connection,$select);


while( $arr= mysqli_fetch_array($row))
{

    $usr_id=$arr['id'];

$username = $arr['user'];
$pass = $arr['password'];

?>



<tr>
    <td><?php echo "$username"; ?></td>\
    <td><?php echo "$pass"; ?></td>
    <td><?php echo "<a href=\"delete_process.php?uid=$usr_id\">Delete</a> "?></td>
    <td><?php echo "<a href=\"edit_process.php?uid=$usr_id\">Edit</a> "?></td>

</tr>

<?php
}
?>
</table>





</html>



