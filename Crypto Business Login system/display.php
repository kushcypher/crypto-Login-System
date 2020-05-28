<?php

require 'header.php';
require 'navigation.php';

?>

<div class = "portal1">
    <?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "crypto";
    
    $conn = mysqli_connect($servername,$username,$password,$db);
        
        $fname = $_POST['fname'];
        $id = $_POST['emailID'];
        $num =$_POST['num'];
        $acc_num = $_POST['acc_num'];
        $ifsc =  $_POST['ifsc'];
        $pan = $_POST['pan'];
        $add = $_POST['add'];

        echo "<b>The Account Has Been Added to The DataBase.</b>";
    
    
    $sql = "INSERT INTO users(fullname,email,contact,account,IFSC,pan,address) 
    VALUES('$fname','$id','$num','$acc_num','$ifsc','$pan','$add');";
    $result = mysqli_query($conn,$sql);
    
    ?>
</div>


        
        
    



