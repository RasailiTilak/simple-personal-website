<?php
include "database.php";
?>
<?php
$u_id = $_GET['uid'];
if (count($_POST) > 0) {
    $updt = " UPDATE rasaili SET user = '" . $_POST['username'] . "',
    password = '" . $_POST['password'] . "' WHERE id= $u_id ";
    mysqli_query($connection, $updt);
    header('Location:form.php');
}
?>
<?php
$select = "SELECT * FROM rasaili WHERE id = $u_id";
$update = mysqli_query($connection, $select);

while ($arr = mysqli_fetch_array($update)) {
    $userid = $arr['id'];
    $uname = $arr['user'];
    $pass = $arr['password'];
}
?>
<!DOCTYPE html>

<head>
    <title>Data update</title>
    <style>
        <?php
        include "css/1.css";
        ?>
    </style>
</head>

<body>
    <h1> Update User Data </h1>
    <div class="uptd_form">
        <form action="" method="POST" name="usrform">
            <label for="id"></label>
            <input type="hidden" id="id" name="usrid" value="<?php echo $u_id; ?>" class="update_form">
            <label for="uname">User Name</label><br>
            <input type="text" id="uname" name="username" value="<?php echo $uname; ?>" class="update_form"><br>
            <label for="pass">Password </label><br>
            <input type="text" id="pass" name="password" value="<?php echo $pass; ?>" class="update_form"><br>

            <input type="submit" name="sbt" value="Update" class="btn_update">
        </form>
    </div>
    <br>
    <a class="update_back" href="form.php"> Back to home </a>
</body>

</html>