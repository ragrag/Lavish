<?php
    $user = 'root';
    $password = '';
    $db = 'lavishdb';
    $db = new mysqli('localhost',$user, $password,$db) or die("Unable to connect!");   

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
         $pass . "<br>";

    $sql = "INSERT INTO user (U_id,U_username,U_password,Fname,Lname,DOB,Email,D_Address,B_Address,Mobile_Number) VALUES ('4','batta','$pass','$fname','$lname','$bdate','$email','$daddress','$baddress','$phonenumber')";
    
    if($db->query($sql) === TRUE)
    {
        echo "New record created successfully.";
        //session_start();
        //$_SESSION['user_login']=$fname;
        header('Location: home.php');
    }
    else{
        echo "error: ". $sql . "<br>" . $db->error;
    }

?>