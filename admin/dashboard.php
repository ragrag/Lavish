<?php
    require '../db_connect.php';
	$conn = OpenCon();
	$totalProducts="SELECT * FROM product";
	$totalComments="SELECT * FROM review";
	$totalOrders="SELECT * FROM `order`";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<title>Admin Dashboard</title>
	<link rel="stylesheet" href="../includes/styles.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
</head>

<body class="dbody">
	<?php 
session_start();
if(!isset($_SESSION['admin_login']))
{
 header("Location: adminlog.php");
exit();
}
?>
	<div id="admin">
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
		<h1 class="tit">Dashboard</h1>
		<div class="con">
			<div id="HoldBodyContent">
				<div class="clear">
					<table>
						<tr>
							<td>
								<div class="quarter Number">
									<div class="stat vilot">
										<i class="fas fa-tag"></i>
										<div>
											<p>Total Products</p>
											<a href="admin.php">
												<div><?php $num=mysqli_query($conn,$totalProducts); echo mysqli_num_rows($num); ?></div>
											</a>
										</div>
									</div>
								</div>
							</td>
						</tr>
						<tr>	
							<td>
								<div class="quarter1 Number">
									<div class="stat org">
										<i class="fas fa-comment"></i>
										<div>
											<p>Total Reviews</p>
											<a href="Reviews.php">
												<div><?php $comments=mysqli_query($conn,$totalComments); echo mysqli_num_rows($comments); ?></div>
											</a>
										</div>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="quarter2">
									<div class="stat gray">
										<i class="fas fa-comment-alt"></i>
										<div>
											<p>orders</p>
											<a class="link" href="Orders.php">
												<span><div><?php $orders=mysqli_query($conn,$totalOrders); echo mysqli_num_rows($orders); ?></div></span>
											</a>
										</div>
									</div>
								</div>
							</td>
						</tr>	
					</table>
				</div>
				
			</div>
		</div>
	</div>
		<script src="../includes/scripts/jquery-3.2.1.min.js"></script>
		<script src="../includes/scripts/adminscript.js"></script>

</body>

</html>