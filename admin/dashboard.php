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
					<div class="quarter Number">
						<div class="stat vilot">
							<i class="fas fa-tag"></i>
							<div>
								<p>Total Products</p>
								<a>
									<div>45</div>
								</a>
							</div>
						</div>
					</div>
					<div class="quarter">
						<div class="stat sky">
							<i class="fas fa-tags"></i>
							<div>
								<p>Pending Products</p>
								<a class="link" href="#">
									<span>85</span>
								</a>
							</div>
						</div>
					</div>
					<div class="quarter Number">
						<div class="stat org">
							<i class="fas fa-comment"></i>
							<div>
								<p>Total Comments</p>
								<a>
									<div>89</div>
								</a>
							</div>
						</div>
					</div>
					<div class="quarter">
						<div class="stat gray">
							<i class="fas fa-comment-alt"></i>
							<div>
								<p>orders</p>
								<a class="link" href="#">
									<span>74</span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="clear">
					<div class="half">
						<div class="handling1">
							<div class="headpan">
								<i class="fa fa-users"></i> Latest Add Products
							</div>
							<div class="bodypan">
								<ul class="latest-list">
									<li>
										<table class="latest-table ">
											<tr>
												<td>Name</td>
												<td>Activation</td>
												<td>Category</td>
												<td>Type</td>
											</tr>
										</table>
									</li>
									<li>
										<table class='latest-table'>
											<tr>
												<td>
													<a href=''>Product Name</a>
												</td>
												<td>Active</td>
												<td>Category</td>
												<td>Type</td>
											</tr>
										</table>
									</li>
									<li>
										<table class='latest-table'>
											<tr>
												<td>
													<a href=''>Product Name</a>
												</td>
												<td>Pending</td>
												<td>Category</td>
												<td>Type</td>
											</tr>
										</table>
									</li>
									<li>
										<table class='latest-table'>
											<tr>
												<td>
													<a href=''>Product Name</a>
												</td>
												<td>Active</td>
												<td>Category</td>
												<td>Type</td>
											</tr>
										</table>
									</li>
									<li>
										<table class='latest-table'>
											<tr>
												<td>
													<a href=''>Product Name</a>
												</td>
												<td>Active</td>
												<td>Category</td>
												<td>Type</td>
											</tr>
										</table>
									</li>								
								</ul>
								<hr>
							</div>
						</div>
					</div>
					<div class="half">
						<div class="handling2">
							<div class="headpan">
								<i class="fa fa-users"></i> Latest Add Comments
							</div>
							<div class="bodypan">
								<ul class="latest-list">
									<li>
										<table class="latest-table tb">
											<tr>
												<td>Name</td>
												<td>Activation</td>
												<td>Product</td>
												<td>Comment</td>
											</tr>
										</table>
									</li>
									<li>
										<table class='latest-table'>
											<tr>
												<td>
													<a href=''>user Name</a>
												</td>
												<td>Active</td>
												<td>Product</td>
												<td>Comment</td>
											</tr>
										</table>
									</li>
									<li>
										<table class='latest-table'>
											<tr>
												<td>
													<a href=''>user Name</a>
												</td>
												<td>Pending</td>
												<td>Product</td>
												<td>Comment</td>
											</tr>
										</table>
									</li>
									<li>
										<table class='latest-table'>
											<tr>
												<td>
													<a href=''>user Name</a>
												</td>
												<td>Active</td>
												<td>Product</td>
												<td>Comment</td>
											</tr>
										</table>
									</li>
									<li>
										<table class='latest-table'>
											<tr>
												<td>
													<a href=''>user Name</a>
												</td>
												<td>Active</td>
												<td>Product</td>
												<td>Comment</td>
											</tr>
										</table>
									</li>
								</ul>
								<hr>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		<script src="../includes/scripts/jquery-3.2.1.min.js"></script>
		<script src="../includes/scripts/adminscript.js"></script>

</body>

</html>