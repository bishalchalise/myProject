<?php
include('connect.php');
if (count($_POST) > 0) {
    mysqli_query($conn, "UPDATE contact_info set Contact_ID='" . $_POST['Contact_ID'] . "', FirstName='" . $_POST['FirstName'] . "', LastName='" . $_POST['LastName'] . "', Email='" . $_POST['Email'] . "' , Details='" . $_POST['Details'] . "' WHERE Contact_ID='" . $_POST['Contact_ID'] . "'");
    $message = "Record Modified Successfully";
}
$result = mysqli_query($conn, "SELECT * FROM contact_info WHERE Contact_ID='" . $_GET['Contact_ID'] . "'");
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

<?php include 'header.php';?>

<form  method="POST" >
<div><?php if (isset($message)) {
                    echo "<script>alert('You have successfully updated the data');</script>";
                    echo "<script type='text/javascript'> document.location ='view.php'; </script>";
                } ?>
        </div>
    <section class="contact" id="contact">
        <div class="title">
            <h2 class="titleText"><span>C</span>ontact Us</h2>
            <p>Contact Us for more detail</p>
        </div>
        <div class="contactForm"> 
            <h3>Send Message</h3>
            <div class="inputBox">
            ID: <br>
        <input type="hidden" name="Contact_ID" value="<?php echo $row['Contact_ID']; ?>">
        <input type="text" name="Contact_ID" value="<?php echo $row['Contact_ID']; ?>">
        <br>
        </div>

            <div class="inputBox">
                First Name: <br>
            <input type="text" name="FirstName" class="txtField" value="<?php echo $row['FirstName']; ?>">
            </div>
         
            <div class="inputBox">
                Last Name: <br>
            <input type="text" name="LastName" class="txtField" value="<?php echo $row['LastName']; ?>">
            </div>

        <div class="inputBox">
        Email:<br>
        <input type="text" name="Email" class="txtField" value="<?php echo $row['Email']; ?>">
        </div>
        <div class="inputBox">
        Details:<br>
        <input type="text" name="Details" class="txtField" value="<?php echo $row['Details']; ?>">
        </div>
        <div class="inputBox">
            <input type="submit" value="Update">
        </div>
        </div>
    </section>
</form>
    <?php include 'footer.php';?>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>




