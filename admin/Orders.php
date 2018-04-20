<?php
session_start();
if(!isset($_SESSION['admin_login']))
{
 header("Location: adminlog.php");
exit();
}
    require '../db_connect.php';
    $conn = OpenCon();
    $orderQuery=" SELECT o.*, u.U_username FROM `order` o JOIN user u ON o.fk_U_id=u.U_id";
    $orders= mysqli_query($conn,$orderQuery);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Products | Admin</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1"
        crossorigin="anonymous">
    <link rel="stylesheet" href="../includes/styles.css">
    <script src="../includes/scripts/jquery-3.2.1.min.js"></script>
    <script src="../includes/scripts/adminscript.js"></script>
</head>
<body id="admin" class="fbody">
    <nav class="mnav">
        <div class="con">
            <div class="lnav">
                <ul class="lul">
                    <li>
                        <a href="dashboard.php">Admin area</a>
                    </li>
                    <li>
                        <a href="reviews.php">Reviews</a>
                    </li>
                    <li>
                        <a href="admin.php">Products</a>
                    </li>
                    <li>
                        <a href="../logout.php" class="logout-button">
                            <i class="fa fa-sign-out">&nbsp;Logout</i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="OFlow">
        <table class="managetable" style="margin-top:12%;" >
            <tr>
                <td>User</td>
                <td>Order ID</td>
                <td>Date</td>
                <td>Status</td>
                <td>Control</td>
            </tr>
            <?php while($row = mysqli_fetch_array($orders)) {?>
                <tr>
                <td><?php echo $row ['U_username'] ?></td>
                <td><?php echo $row ['O_id'] ?></td>
                <td><?php echo $row ['O_date'] ?></td>
                <td><?php echo $row ['O_status'] ?></td>
                <td>
                    
                    <?php
                    $oid = $row['O_id'];
                        if($row ['O_status']== "Confirmed")
                            {
                               echo "<a class='converttobtn GreenButton ebtn EditBTN' href='Orders.php?del=$oid >
                                    <i class='fas fa-trash-alt'></i>Delivered</a>";
                            }
                         else if($row ['O_status']=="Pending")
                            {
                                echo "<a href='Orders.php?del=$oid' class='converttobtn GreenButton ebtn EditBTN'> Accept</a>";
                                $row ['O_status']="Confirmed";
                            }
                    ?>
                    <a href="Orders.php?del=<?php echo $row['O_id']; ?>" class='converttobtn RedButton'>
                        <i class="fas fa-trash-alt"></i>cancel</a>
                </td>
            </tr>
        <?php } ?>
        </table>
    </div>
</body>

</html>