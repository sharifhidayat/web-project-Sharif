<?php
$title = $_POST['title'];
$name = $_POST['username'];
$email = $_POST['usermail'];
$password = $_POST['password'];
$usercard = $_POST['usercard'];
$cardnumber = $_POST['cardnumber'];
$expdate = $_POST['expdate'];
echo "<h2>Contact Information: </h2>";
echo "<h3>". $title . "</h3>";
echo "<h3>". $name . "</h3>";
echo "<h3>". $email . "</h3>";
echo "<h3>". $password . "</h3>";
echo "<h2>Payment Information: </h2>";
echo "<h3>". $usercard . "</h3>";
echo "<h3>". $cardnumber. "</h3>";
echo "<h3>". $expdate . "</h3>";
echo "<h2>THANK YOU :) </h2>";
?>