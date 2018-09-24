<?php

//create variables
$first_name=$_POST['fname'];
$last_name=$_POST['lname'];
$email=$_POST['email'];
$connect=mysqli_connect("sql207.byethost8.com", "b8_19720712", "Firework12", "b8_19720712_booked");
if(mysqli_connect_errno($connect))
{
  echo 'Failed to connect';
}

?>
<?php
//Execute the query

mysqli_query($connect,"INSERT INTO deals(first_name,last_name,email) VALUES('$first_name', '$last_name', '$email')");

if(mysqli_affected_rows($connect) > 0) {
  echo "<p>Your name has been added to our mailing list!</p>";
  echo "<a href='../index.html'>Back to home page...</a><br><br>";
  echo "<a href='../pricing.html'>Back to previous page...</a>";
} else {
  echo "Name NOT ADDED!<br>";
  echo mysqli_error($connect);
}
?>
