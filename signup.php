<?php
$Uname = $_POST['Name'];
$Uemail = $_POST['Email'];
$Umobile = $_POST['Mobile'];
$Upassword = $_POST['Password'];

echo "<br>$Uname<br> $Uemail<br> $Umobile <br> $Upassword";

$host = "localhost";
$user = "id6731431_pinak1997";
$pass = "pinakdb";
$database = "id6731431_pinak97";

$conn = new mysqli($host, $user, $pass, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "connection successed!! <br>";

$sql2 = "SELECT * FROM `signup` ";
$result = $conn->query($sql2);
$available = true;
if ($result->num_rows > 0) {
    // output data of each rowa
    while($row = $result->fetch_assoc()) {
        //echo "<br> password: ". $row["password"] . "<br>";
        if($Uemail==$row["email"]) {
          //echo "<br> password: ". $row["password"] . "<br>";
          echo "This email already exist";
          $available = false;
          break;

        }
    }
} else {
    echo "0 results";
}

if($available == true) {
  $sql1 = "INSERT INTO `signup`(`name`,`email`,`mobile`,`password`)VALUES('$Uname','$Uemail','$Umobile','$Upassword')";
  $conn->query($sql1);
}

$conn->close();


//@mysql_query("UPDATE `views` SET `view` = `view`+1 WHERE `views`.`id` = 1");
/*
$sql1 = "UPDATE `views` SET `view` = `view`+1 WHERE `views`.`id` = 1";
$conn->query($sql1);
$sql2 = "SELECT * FROM `views`";
$result = $conn->query($sql2);
*/

?>
