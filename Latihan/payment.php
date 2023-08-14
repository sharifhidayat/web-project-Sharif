<?php
// ambil data dari form 
 $name = $_POST['username'];
 $title = $_POST['title'];
 $email = $_POST['usermail'];
 $password = $_POST['password'];
 $cardtype = $_POST['usercard'];
 $cardnumber = $_POST['cardnumber'];
 $expdate = $_POST['expdate'];
// tampilkan
 echo "<h3>Contact Information :</h3> <br/>";
 echo $title , "<br/>";
 echo $name , "<br/>";
 echo $email , "<br/>";
 echo md5($password) , "<br/>";
 echo "<h3>Payment Information :</h3> <br/>";
 echo $cardtype , "<br/>";
 echo $cardnumber , "<br/>";
 echo $expdate , "<br/>";
?>