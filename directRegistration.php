<?php
    $user = 'root';
    $password = '';
    $db = 'lavishdb';
    $db = new mysqli('localhost',$user, $password,$db) or die("Unable to connect!");   
    
    $username = $_POST["uname"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $bdate = $_POST["bdate"];
    $email = $_POST["email"];
    $daddress = $_POST["daddress"];
    $baddress = $_POST["baddress"];
    $phonenumber = $_POST["phonenumber"];
    $pass = $_POST["pass"];

    echo $fname . "<br>" .
         $lname . "<br>" .
         $bdate . "<br>" .
         $email . "<br>" .
         $daddress . "<br>" .
         $baddress . "<br>" .
         $phonenumber . "<br>" .
         $username . "<br>" .
         $pass . "<br>";

    $sql1 = "SELECT U_id FROM user";
    $idTable = $db->query($sql1);
    $row = mysqli_fetch_assoc($idTable);
    $lastID = intval(end($row));
    $lastID = $lastID +1;
    
    $sql = "INSERT INTO user (U_id,U_username,U_password,Fname,Lname,DOB,Email,D_Address,B_Address,Mobile_Number) VALUES ('$lastID','$username','$pass','$fname','$lname','$bdate','$email','$daddress','$baddress','$phonenumber')";
    
    if($db->query($sql) === TRUE)
    {
        echo "New record created successfully.";
        session_start();
        $_SESSION['user_login']=$username;
        header('Location: home.php');
    }
    else{
        echo "error: ". $sql . "<br>" . $db->error;
    }
    
?>