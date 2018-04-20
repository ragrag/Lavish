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
            <form>
                <h2>Editing products</h2>
                        <label>Product name</label>
                        <input id="pEditname" type="text">
                        <br>
                        <label>description</label>
                        <input id="pEditdescription" type="text">
                        <br>
                        <label>Type</label>
                        <input id="pEdittype" type="text">
                        <br>
                        <label>Brand</label>
                        <input id="pEditbrand" type="text">
                        <br>
                        <label>Quantity</label>
                        <input id="pEditquantity" type="text">
                        <br>    
                <div class="ebtnAction">
                    <div class="ebtnLeft">
                        <a href="admin.php" class="ebtn ebtnBack">
                            <i class="fa fa-angle-double-left"></i>Cancel</a>
                    </div>
                    <div class="ebtnLeft ebtnRight">
                        <a href="#" class="ebtn" name="update">Submit</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>