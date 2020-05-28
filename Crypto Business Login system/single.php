<?php

require 'header.php';
require 'navigation.php';

?>
<div class="portal1">
<form action = "single.php" method="Post">
    <input type = "text" name = "fname" placeholder = "Fullname">
    <br>
    <input id="final2" name="submit" type ="submit" value = "Search Single Record">
</form>

<?php
    if(isset($_POST['fname'])) {    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "crypto";
    
    $fname = $_POST['fname'];

    $conn = mysqli_connect($servername,$username,$password,$db);
    $sql = "SELECT * FROM users WHERE fullname='$fname';";    
    
    $result = mysqli_query($conn,$sql) or die(mysqli_error($db));

    while($resultcheck=mysqli_fetch_array($result)) {
        
        echo "<b>Fullname: </b>".$resultcheck['fullname']."<br>"."<b>Email: </b>".$resultcheck['email']."<br>"."<b>Contact: </b>".$resultcheck['contact']."<br>"."<b>Account:  </b>".$resultcheck['account']."<br>"."<b>IFSC:  </b>".$resultcheck['IFSC']."<br>"."<b>Pan:  </b>".$resultcheck['pan']."<br>"."<b>Address:  </b>".$resultcheck['address'];
    }

} else {

    if(isset($_POST['submit'])) {
        echo "<b>Please Enter Name!</b>";
}
}
    
?>

</div>



