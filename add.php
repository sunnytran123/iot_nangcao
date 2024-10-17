<?php
 require('db.php');

 $t = $_GET['nhietdo'];
 $h = $_GET['doam'];

 $sql = "INSERT INTO `cbien` (`nhietdo`, `doam`) VALUES ($t, $h)";

 if ($conn->query($sql) === TRUE) {
     echo "New record created successfully";
    } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
 }
 $conn->close();

?>

<!--https://wokwi.com/projects/411825063671980033 -->