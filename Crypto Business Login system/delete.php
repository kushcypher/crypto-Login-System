<?php

require 'header.php';
require 'navigation.php';

?>
<div class="portal1">
<h5><b>Please enter fullname</b><h5>
<form action = "delete.php" method="Post">
    <input type = "text" name = "fname" placeholder = "Fullname">
    <br>
    <input id="final2" name="submit" type ="submit" value = "Delete Record">
</form>

<?php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $db = "crypto";

     $fname = $_POST['fname'];
     $conn = mysqli_connect($servername,$username,$password,$db);
     
     
if(isset($_POST['fname'])) {    
    $sql = "DELETE FROM users WHERE fullname='$fname';";    
    
    $result = mysqli_query($conn,$sql) or die(mysqli_error($db));
    
    echo "<b>The Requested Account has been Deleted</b>";

} else {
    if(isset($_POST['submit'])) {
    echo "<b>Please Enter Name!</b>";
    }
}
    
?>

</div>
