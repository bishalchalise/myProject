
<?php
require('db.php');
include("auth_session.php");
?>

<?php

include('../connect.php');

$sql = "SELECT * FROM contact_info";
$result = mysqli_query($conn, $sql);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
    <title>Arubari: A Bliss</title>
</head>

<body>

    <?php include '../header.php'; ?>
    <section>
        <br>
        <h1>Visitor's Details</h1>
        <table class="table">

            <tr>
                <thead>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Details</th>
                    <th>Update &nbsp&nbsp&nbsp Delete</th>
                </thead>

            </tr>
            <tbody>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>

                        <tr>
                            <td><?php echo $row['Contact_ID']; ?> </td>
                            <td><?php echo $row['FirstName']; ?> </td>
                            <td><?php echo $row['LastName']; ?> </td>
                            <td><?php echo $row['Email']; ?> </td>
                            <td><?php echo $row['Details']; ?> </td>

                
                     <td>
                    <a href="edit.php?Contact_ID=<?php echo $row['Contact_ID'];?>" >Update</a> &nbsp; 
                    <a href="delete.php?Contact_ID=<?php echo $row['Contact_ID'];?>" >Delete</a>
                    </td>
                        </tr>
                    
                <?php
                    }
                }
                else {
                    echo "0 results";
                }
                mysqli_close($conn);
                ?>



            </tbody>


        </table>

   


    </section>




    <?php include '../footer.php'; ?>

</body>

</html>




 


