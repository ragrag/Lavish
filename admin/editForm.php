<!DOCTYPE html>
<html>

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
    <?php 
        session_start();
        if(!isset($_SESSION['admin_login']))
        {
         header("Location: adminlog.php");
        exit();
        }
    require '../db_connect.php';
    $conn = OpenCon();
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$record = mysqli_query($conn, "SELECT * FROM product WHERE p_id='$id'");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$pName= $n['p_name'];
            $pType = $n['p_type'];
            $pDescription = $n['p_description'];
            $pBrand = $n['p_brand'];
            $pQuantity = $n['p_quantity'];
            $price = $n['price'];
		}
	}
    if (isset($_POST['update'])) {
        $id = $_POST['p_id'];
        $pName= $_POST['p_name'];
        $pType = $_POST['p_type'];
        $pDescription = $n['p_description'];
        $pBrand = $_POST['p_brand'];
        $pQuantity = $_POST['p_quantity'];
        $price = $n['price'];

	       mysqli_query($conn, "UPDATE product SET p_name='$pName', p_type='$pType', p_brand='$pBrand', p_quantity='$pQuantity', price='$price',  WHERE p_id='$id'");
    }
    ?>
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

    <div class="EditPOP" style="display:block;">
        <div class="pEdit">
            <form method='post'>
                <h2>Editing products</h2>
                        <input type="hidden" name="p_id" value="<?php echo $id; ?>">
                        <label>Product name</label>
                        <input id="pEditname" name="p_name" type="text" value="<?php echo $pName; ?>">
                        <br>
                        <label>description</label>
                        <input id="pEditdescription" type="text" value="<?php echo $pDescription; ?>">
                        <br>
                        <label>Type</label>
                        <input id="pEdittype" type="text" name="p_type" value="<?php echo $pType; ?>">
                        <br>
                        <label>Brand</label>
                        <input id="pEditbrand" type="text" name="p_brand" value="<?php echo $pBrand; ?>">
                        <br>
                        <label>Quantity</label>
                        <input id="pEditquantity" type="text" name="p_quantity" value="<?php echo $pQuantity; ?>">
                        <label>Price</label>
                        <input id="pEditquantity" type="text" name="price" value="<?php echo $price; ?>">
                        <br>    
                <div class="ebtnAction">
                    <div class="ebtnLeft">
                        <a href="admin.php" class="ebtn ebtnBack">
                            <i class="fa fa-angle-double-left"></i>Cancel</a>
                    </div>
                    <div class="ebtnLeft ebtnRight">
                        <button class="ebtn" name="update">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>