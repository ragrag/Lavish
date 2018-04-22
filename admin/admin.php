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
    $price =0;
    if (isset($_POST['add'])){
        $pName= $_POST['p_name'];
        $pID = $_POST['p_id'];
        $pDescription = $_POST['p_description'];
        $pType = $_POST['p_type'];
        $pBrand = $_POST['p_brand'];
        $pQuantity = $_POST['p_quantity'];
        $price = $_POST['p_price'];
        $target_saveDir="../images/";
        $target_retDir ="images/";
        $target_file1 = $target_saveDir . basename($_FILES['image1']['name']);
        $target_file2 = $target_saveDir . basename($_FILES['image2']['name']);
        $target_file3 = $target_saveDir . basename($_FILES['image3']['name']);
        move_uploaded_file($_FILES["image1"]["tmp_name"], $target_file1);
        move_uploaded_file($_FILES["image2"]["tmp_name"], $target_file2);
        move_uploaded_file($_FILES["image3"]["tmp_name"], $target_file3);
        $target_file1 = $target_retDir . basename($_FILES['image1']['name']);
        $target_file2 = $target_retDir . basename($_FILES['image2']['name']);
        $target_file3 = $target_retDir . basename($_FILES['image3']['name']);
        mysqli_query($conn,"INSERT INTO product(p_id, p_name, p_type, p_brand, p_quantity ,p_description, price)
         VALUES ('$pID', '$pName', '$pType', '$pBrand', '$pQuantity', '$pDescription','$price')");

        mysqli_query($conn,"INSERT INTO image (i_url,fk_p_id) VALUES ('$target_file1','$pID')");
        mysqli_query($conn,"INSERT INTO image (i_url,fk_p_id) VALUES ('$target_file2','$pID')");
        mysqli_query($conn,"INSERT INTO image (i_url,fk_p_id) VALUES ('$target_file3','$pID')");
        header ('Location admin.php');
	}
	if(isset($_GET['del'])){
		$id=$_GET['del'];
		mysqli_query($conn, "DELETE FROM product WHERE p_id='$id'");
		header('location:admin.php');
	}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<title>Products | Admin</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
	<link rel="stylesheet" href="../includes/styles.css">
	<script src="../includes/scripts/jquery-3.2.1.min.js"></script>
	<script src="../includes/scripts/adminscript.js"></script>
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
                        <td>Price</td>
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
                            <td><?php echo $row ['price'] ?></td>
                            <td>
							
                                <a class='EditBTN converttobtn GreenButton ebtn' href="editForm.php?edit=<?php echo $row['p_id']; ?>"  >
                                    <i class='fa fa-edit'></i> Edit</a>
                                <a href="admin.php?del=<?php echo $row['p_id']; ?>" class='converttobtn RedButton'>
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
				<form method="post" enctype="multipart/form-data">
                    <label>ID</label>
                    <input id="pAddid" type="text" name="p_id">
                    <br>
					<label>Product name</label>
					<input id ="pAddname" type="text" name="p_name">
					<br>
					<label>description</label>
					<input id ="pAdddescription" type="text" name ="p_description">
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
                    <label>Price</label>
					<input id ="p_price" type="text" name ="p_price">
					<br>
					<label>Image</label>
					<input type="file" name ="image1" id="image1">
					<br>
					<label>Image</label>
					<input type="file" name ="image2" id="image2">
					<br>
					<label>Image</label>
					<input type="file" name ="image3" id="image3">
					<br>

					<div class="btnAction">
						<div class="btnLeft">
							<a href="admin.php" class="btn btnBack">
								<i class="fa fa-angle-double-left"></i>Cancel</a>
						</div>
						<div class="btnLeft btnRight" >
							<button type="submit" name="add" class="btn" onclick="PopUpValidation()">Add Product</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>

</html>