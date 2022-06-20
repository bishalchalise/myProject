<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css" />
    <title>Arubari: A Bliss</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <?php include 'header.php'; ?>

    <form action="/bari/contact.php" method="POST">

        <section class="contact" id="contact">
            <div class="title">
                <h2 class="titleText"><span>C</span>ontact Us</h2>
                <p style="font-size: 25px;">Contact us for more to explore</p>
            </div>
            <div>
                <?php
                include_once('connect.php');

                if (isset($_POST['Send'])) {
                    $fname = $_POST['fname'];
                    $lname =  $_POST['lname'];
                    $email = $_POST['email'];
                    $detail = $_POST['detail'];

                    $sql = "INSERT INTO `contact_info` (`FirstName`, `LastName`, `Email`, `Details`) VALUES ('$fname', '$lname', '$email', '$detail')";
                    $result = mysqli_query($conn, $sql);

                    if ($result) {

                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                         <strong>Success!</strong> Your Details has been submitted. 
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                         </div>';
                    } else {
                        echo "entry not successfull" . mysqli_error($conn);
                    }
                }

                ?>
            </div>
            <div class="contactForm">
                <h3>Send Details</h3>
                <div class="inputBox">
                    <input type="text" id="fname" name="fname" placeholder="First Name">
                </div>
                <div class="inputBox">
                    <input type="text" id="lname" name="lname" placeholder="Last Name">
                </div>
                <div class="inputBox">
                    <input type="text" id="email" name="email" placeholder="Email">
                </div>
                <div class="inputBox">
                    <textarea id="detail" name="detail" placeholder="Your Review"></textarea>
                </div>
                <div class="inputBox">
                    <input id="Send" type="submit" value="Send" name="Send">
                </div>
            </div>
           
        </section>

    </form>

    <?php include 'footer.php'; ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>