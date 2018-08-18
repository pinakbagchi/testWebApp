<?php

$Uemail = $_POST['Email'];

$Upassword = $_POST['Password'];

echo "<br> $Uemail<br> $Upassword";

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
//$sql1 = "SELECT `password` FROM `signup`";
$sql2 = "SELECT * FROM `signup` ";
$result = $conn->query($sql2);

$connected = false;

if ($result->num_rows > 0)
{
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "<br> password: ". $row["password"] . "<br>";
        if(($Uemail==$row["email"]||$Uemail==$row["mobile"])) {
          //echo "<br> password: ". $row["password"] . "<br>";
            if($Upassword==$row["password"]) {
            echo "<br> Logged in successfully <br>";
            $connected = true;
            break;
            }
        }

    }
    echo $connected;
    if($connected == false) {
    echo "<br>Wrong email and password";
}
} else {
    echo "0 results";
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
