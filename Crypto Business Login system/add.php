<?php

require 'header.php';
require 'navigation.php';

?>


<div class = "portal">
<div id = "heading">Create an Account</div>
<br>

<h4>Register</h4>

<form action = "display.php" method="Post">
    <input type = "text" name = "fname" placeholder = "Fullname">
    <br>
    <input type = "text" name = "emailID" placeholder = "Email">
    <br> 
    <input type = "text" name = "num" placeholder = "Contact">
    <br>
    <input type = "text" name = "acc_num" placeholder = "Account number">
    <br>
    <input type = "text" name = "ifsc" placeholder = "IFSC Code">
    <br>
    <input type = "text" name = "pan" placeholder = "PAN Number">
    <br>
    <textarea name="add" placeholder="Enter the address"></textarea>
    <input id="final" type ="submit" value = "Submit">
</form>

</div>

