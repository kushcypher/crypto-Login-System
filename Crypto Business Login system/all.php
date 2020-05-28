<?php

require 'header.php';
require 'navigation.php';

?>

<div class="portal1">
<?php

 
$servername = "localhost";
$username = "root";
$password = "";
$db = "crypto";
    
    $conn = mysqli_connect($servername,$username,$password,$db);
    $sql = "SELECT * FROM users ORDER BY fullname ASC;";    
    
    $result = mysqli_query($conn,$sql) or die(mysqli_error($db));

while($resultcheck=mysqli_fetch_array($result)) {
        
        echo "<b>Fullname: </b>".$resultcheck['fullname']."<br>"."<b>Email: </b>".$resultcheck['email']."<br>"."<b>Contact: </b>".$resultcheck['contact']."<br>"."<b>Account:  </b>".$resultcheck['account']."<br>"."<b>IFSC:  </b>".$resultcheck['IFSC']."<br>"."<b>Pan:  </b>".$resultcheck['pan']."<br>"."<b>Address:  </b>".$resultcheck['address']."<br><br>";
}

?>

</div>


