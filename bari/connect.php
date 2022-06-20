<?php
$servername="localhost"; 
$username ="root"; 
$password = "";
$database = "details"; 

$conn = mysqli_connect($servername, $username, $password, $database); 

if (!$conn)
{
    die("connection to the database not successfull"); 
}

// $sql='CREATE TABLE `details`.`contact_info` ( `Contact_ID` INT NOT NULL AUTO_INCREMENT , `FirstName` VARCHAR(50) NOT NULL , `LastName` VARCHAR(50) NULL , `Email` VARCHAR(50) NOT NULL , `Details` VARCHAR(500) NOT NULL , PRIMARY KEY (`Contact_ID`))';
//  $result = mysqli_query($conn, $sql); 

//     if ($result)
//      {
//         echo "Table Created"; 
//     }
//     else{
//        echo "Table Not Created" .mysqli_error($conn);
//     }

?>

