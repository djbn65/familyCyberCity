<?php

//create variables
$first_name=$_POST['fname'];
$last_name=$_POST['lname'];
$email=$_POST['email'];
$comment=$_POST['comment'];
$connect=mysqli_connect("sql207.byethost8.com", "b8_19720712", "Firework12", "b8_19720712_booked");
if(mysqli_connect_errno($connect))
{
  echo 'Failed to connect';
}

?>
<?php
//Execute the query

mysqli_query($connect,"INSERT INTO contact(first_name,last_name,email,comments) VALUES('$first_name', '$last_name', '$email', '$comment')");

if(mysqli_affected_rows($connect) > 0) {
  echo "<p>Your request will be viewed as soon as possible! Thanks for your input!</p>";
  echo "<a href='../index.html'>Back to Home!</a><br><br>";
  echo "<a href='../contact.html'>Back to previous page...</a>";
} else {
  echo "Name NOT ADDED!<br>";
  echo mysqli_error($connect);
}
?>
