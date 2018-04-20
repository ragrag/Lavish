<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
	<title>Reviews</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
	<link rel="stylesheet" href="../includes/styles.css">
</head>

<body>
<?php
    session_start();
    if(!isset($_SESSION['admin_login']))
    {
     header("Location: adminlog.php");
    exit();
    }
    require '../db_connect.php';
    $conn = OpenCon();
    $query = "SELECT r.*, u.U_username, p.p_name FROM review r 
            JOIN user u ON u.U_id = r.fk_u_id
            JOIN product p ON r.fk_p_id = p.p_id
            WHERE confirmed='N'";
    $reviews= mysqli_query($conn,$query);
     if (isset($_GET['del'])) {
	   $id = $_GET['del'];
	   mysqli_query($conn, "DELETE FROM review WHERE r_id='$id'");
	   header('location: reviews.php');
    }
    if (isset($_GET['approve'])) {
		$id = $_GET['approve'];
		$record = mysqli_query($conn, "SELECT confirmed FROM review WHERE r_id=$id");
		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			mysqli_query($conn, "UPDATE review SET confirmed=1 WHERE r_id=$id");
		}
	}
?>
	<div id="admin">
		<div class="fbody">
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
								<a href="../logout.php" class="logout-button"><i class="fa fa-sign-out">&nbsp;Logout</i></a>    
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<h1 class="tit">Reviews</h1>
			<div id="OOflow">
				
			</div>
			<div class="OFlow">
				<table class="managetable">
					<tr>
					
						<td>Product</td>
						<td>Description</td>
						<td>User</td>
						<td>Control</td>
					</tr>
                    <?php while ($row = mysqli_fetch_array($reviews)) { ?>
					<tr>
						
						<td><?php echo $row['p_name']; ?></td>
						<td><?php echo $row['description']; ?></td>
						<td><?php echo $row['U_username']; ?></td>
						<td>
							<a id="EditBTN2" class='converttobtn GreenButton ebtn' role="button" href="reviews.php?approve=<?php echo $row['r_id']; ?>">
								<i class='fa fa-edit'></i> Approve</a>
							<a href="reviews.php?del=<?php echo $row['r_id']; ?>" class='converttobtn RedButton'>
								<i class="fas fa-trash-alt"></i> Delete</a>
						</td>
					</tr>
                    <?php } ?>
					
				</table>
			</div>
		</div>
	
		

	</div>
	<script src="../includes/scripts/jquery-3.2.1.min.js"></script>
	<script src="../includes/scripts/adminscript.js"></script>

</body>

</html>