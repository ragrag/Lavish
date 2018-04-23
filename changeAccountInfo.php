<?php       //Update user account info 
    session_start();
    if(isset($_SESSION['user_login']))
        include 'header_logged.php'; 
    else include 'header_not_logged.php';
    
    $user = 'root';
    $password = '';
    $db = 'lavishdb';
    $db = new mysqli('localhost',$user, $password,$db) or die("Unable to connect!"); 
    $user = $_SESSION['user_login'];
    $sql = "SELECT * FROM user WHERE U_username = '$user'";
    $result = $db->query($sql);
    $row = mysqli_fetch_assoc($result);
    
    $id = $row["U_id"];
    
    $newFname = $_POST["fname"];
    $newLname = $_POST["lname"];
    $newBdate = $_POST["bdate"];
    $newEmail = $_POST["email"];
    $newPass = $_POST["npass"];
    $newPhonenumber = $_POST["phonenumber"];
    $newBAddress = $_POST["baddress"];
    $newDAddress = $_POST["daddress"];

    $sql2 = "UPDATE user SET Fname = '$newFname', Lname ='$newLname', DOB='$newBdate', Email='$newEmail', U_password='$newPass', Mobile_number='$newPhonenumber', B_Address = '$newBAddress', D_Address = '$newDAddress' WHERE U_id='$id'";
    if($db->query($sql2) === TRUE)
    {
        session_start();
        $_SESSION['user_login']=$user;
        header('Location: home.php');
    }
    else
        echo "Error updating record: " . $db->error;
?>