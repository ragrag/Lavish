<?php
session_start();
if(!isset($_SESSION['admin_login']))
{
 header("Location: adminlog.php");
exit();
}
    require '../db_connect.php';
    $conn = OpenCon();
    $query = "SELECT * FROM product";
    $products= mysqli_query($conn,$query);
    $pName="";
    $pID="";
    $pDescription="";
    $pType="";
    $pBrand="";
    $pQuantity=0;
    $update = false;
    if (isset($_POST['add'])){
        $pName= $_POST['p_name'];
        $pID = $_POST['p_id'];
        $pDescription = $_POST['p_desc'];
        $pType = $_POST['p_type'];
        $pBrand = $_POST['p_brand'];
        $pQuantity = $_POST['p_quantity'];
        mysqli_query($conn,"INSERT INTO product(p_id, p_name, p_type, p_brand, p_quantity ,p_description)
         VALUES ('$pID', '$pName', '$pType', '$pBrand', '$pQuantity', '$pDescription')");
    }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<title>Products | Admin</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
	<link rel="stylesheet" href="../includes/styles.css">
</head>

<body>
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
			<h1 class="tit">Product List</h1>
			<div id="OOflow">
				<div class="con">
					<div id="AddProductBTN">
						<a id="btnTrigger" class="converttobtn AddBTN btn" role="button" href="#popupBody">
							<i class="fa fa-plus"></i> Add Product</a>
					</div>

				</div>
			</div>
			<div class="OFlow">
				<table class="managetable">
					<tr>
						<td>ID</td>
						<td>Product Name</td>
						<td>Description</td>
						<td>Type</td>
						<td>Weight</td>
						<td>Quantity</td>
						<td>Control</td>
					</tr>
					<?php while($row = mysqli_fetch_array($products)) {?>
                            <tr>
                            <td><?php echo $row ['p_id'] ?></td>
                            <td><?php echo $row ['p_name'] ?></td>
                            <td><?php echo $row ['p_description'] ?></td>
                            <td><?php echo $row ['p_type'] ?></td>
                            <td><?php echo $row ['p_brand'] ?></td>
                            <td><?php echo $row ['p_quantity'] ?></td>
                            <td>
                                <a id="EditBTN" class='converttobtn GreenButton ebtn' role="button" href="#EditPOP">
                                    <i class='fa fa-edit'></i> Edit</a>
                                <a href='#' class='converttobtn RedButton'>
                                    <i class="fas fa-trash-alt"></i> Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
				</table>
			</div>
		</div>
		<!--add product form form-->
		<div class="popupBody" style="display:none;">
			<div class="pAdd">
				<form method="post">
                    <label>ID</label>
                    <input id="pAddid" type="text" name="p_id">
                    <br>
					<label>Product name</label>
					<input id ="pAddname" type="text" name="p_name">
					<br>
					<label>description</label>
					<input id ="pAdddescription" type="text" name ="p_desc">
					<br>
					<label>Type</label>
					<input id ="pAddtype" type="text" name ="p_type">
					<br>
					<label>Brand</label>
					<input id ="pAddweight" type="text" name ="p_brand">
					<br>
					<label>Quantity</label>
					<input id ="pAddquantity" type="text" name ="p_quantity">
					<br>
					<label>Image</label>
					<input type="file" name ="p_image1">
					<br>
					<label>Image</label>
					<input type="file">
					<br>
					<label>Image</label>
					<input type="file">
					<br>

					<div class="btnAction">
						<div class="btnLeft">
							<a href="#" class="btn btnBack">
								<i class="fa fa-angle-double-left"></i>Cancel</a>
						</div>
						<div class="btnLeft btnRight" >
							<button type="submit" name="add" class="btn" onclick="PopUpValidation()">Add Product</a>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!--edit popup form -->
		<div class="EditPOP" style="display:none;">
			<div class="pEdit">
				<form>
					<label>Product name</label>
					<input id = "pEditname" type="text">
					<br>
					<label>description</label>
					<input id = "pEditdescription" type="text">
					<br>
					<label>Type</label>
					<input id = "pEdittype" type="text">
					<br>
					<label>Weight</label>
					<input id = "pEditweight" type="text">
					<br>
					<label>Quantity</label>
					<input id = "pEditquantity" type="text">
					<br>
					<label>Image</label>
					<input type="file">
					<br>
					<label>Image</label>
					<input type="file">
					<br>
					<label>Image</label>
					<input type="file">
					<br>

					<div class="ebtnAction">
						<div class="ebtnLeft">
							<a href="#" class="ebtn ebtnBack">
								<i class="fa fa-angle-double-left"></i>Cancel</a>
						</div>
						<div class="ebtnLeft ebtnRight">
							<a href="#" class="ebtn" onclick="PopUpValidation()">Submit</a>
						</div>
					</div>
				</form>
			</div>
		</div>

	</div>
	<script src="../includes/scripts/jquery-3.2.1.min.js"></script>
	<script src="../includes/scripts/adminscript.js"></script>

</body>

</html>