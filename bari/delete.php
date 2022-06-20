

<?php
include('connect.php');
$sql = "DELETE FROM contact_info WHERE Contact_ID='" . $_GET["Contact_ID"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Data deleted');</script>"; 
    echo "<script>window.location.href = 'view.php'</script>";  
} 
mysqli_close($conn);
?>