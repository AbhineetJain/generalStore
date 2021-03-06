<?php

include_once 'scripts/access.php';

if(!isManager()){
  echo '<script>
    alert("YOU ARE NOT AUTHORISED");
    location.href = "./";
    </script>';
  die();
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
  <title>Update Entry &middot; Commodities &middot; Janta General Store</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Google Font: Open Sans -->
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,800,800italic">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300,700">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="./css/font-awesome.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="./css/bootstrap.min.css">

  <!-- App CSS -->
  <link rel="stylesheet" href="./css/mvpready-admin.css">
  <link rel="stylesheet" href="./css/mvpready-flat.css">
  <!-- <link href="./css/custom.css" rel="stylesheet">-->

  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.ico">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
</head>

<body class=" ">

<div id="wrapper">

  <?php
            include_once("navbar.php");
  ?>

  <div class="content">

    <div class="container">

      <div class="row">

        <div class="col-md-6 col-md-push-3 col-sm-8 col-sm-push-2 ">

          <div class="portlet">	    

            <h2 class="portlet-title">
              <u>Update Entry</u>
            </h2>			

            <div class="portlet-body">  

              <form action="scripts/update_commodity.php" data-validate="parsley" class="form parsley-form">
<?php

require 'scripts/config_sql.php';

$id = @$_GET['id'];

$data_row = $mysqli->query("SELECT * FROM commodities WHERE id='$id' LIMIT 1")->fetch_assoc();

?>
                <input hidden value="<?php echo $data_row['id'];?>" type="text" name="id">
                
                <div class="form-group">  
                  <label for="name">Commodity Name</label>
                  <input value="<?php echo $data_row['name'];?>" type="text" id="commname" name="name" class="form-control parsley-validated" data-required="true">  
                </div> <!-- /.form-group -->

                <div class="form-group">  
                  <label for="type">Description</label>
                  <input value="<?php echo $data_row['description'];?>" type="text" id="description" name="description" class="form-control parsley-validated" data-required="true">
                </div> <!-- /.form-group -->

                <div class="form-group">
                  <label for="price">Price</label>
                  <input value="<?php echo $data_row['price'];?>" type="number" id="price" name="price" step="0.01" class="form-control half-width parsley-validated" data-required="true">
                </div>
                
                <div class="form-group">
                  <label for="qty_in_shop">Quantity In Shop</label>
                  <input value="<?php echo $data_row['qty_in_shop'];?>" type="number" id="qty_in_shop" name="qty_in_shop" class="form-control half-width parsley-validated" data-required="true">
                </div>
                
                <div class="form-group">
                  <label for="qty_in_godown">Quantity In Godown</label>
                  <input value="<?php echo $data_row['qty_in_godown'];?>" type="number" id="qty_in_godown" name="qty_in_godown" class="form-control half-width parsley-validated" data-required="true">
                </div>
                
                <div class="form-group">  
                  <label for="location_in_shop">Location In Shop</label>
                  <input value="<?php echo $data_row['location_in_shop'];?>" type="text" id="location" name="location_in_shop" class="form-control parsley-validated" data-required="true">
                </div> <!-- /.form-group -->
<!--                
                <div class="form-group">  
                  <label for="commodity_type">Type</label>
                  <select id="commodity_type" name="type" class="form-control parsley-validated" data-required="true">
                    <option value="">Please Select</option>
                    <option value="Confectionery">Confectionery</option>
                    <option value="Toiletries">Toiletries</option>
                    <option value="Stationery">Stationery</option>
                    <option value="Miscellaneous">Miscellaneous</option>
                  </select>
                </div>

                <div class="form-group hide-and-show">  
                  <label for="batch_no">Batch No.</label>
                  <input type="text" id="batch_no" name="batch_no" class="form-control parsley-validated">
                </div>

                <div class="form-group hide-and-show">
                  <label for="date_of_expiry">Date of Expiry</label>
                  <input type="text" id="date_of_expiry" name="date_of_expiry" class="form-control parsley-validated">
                </div>
-->
                <div class="form-group">
                  <button type="submit" class="btn btn-danger">Update</button>
                </div> <!-- /.form-group -->

              </form>

            </div> <!-- /.portlet-body -->

          </div> <!-- /.portlet -->

        </div> <!-- /.col -->

      </div> <!-- /.row -->

    </div> <!-- /.container -->



  </div> <!-- .content -->

</div> <!-- /#wrapper -->

<footer class="footer">
  <div class="container">
    <p class="pull-left">Copyright &copy; 2014 Janta General Store.</p>
  </div>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Core JS -->
<script src="./js/libs/jquery-1.10.2.min.js"></script>
<script src="./js/libs/bootstrap.min.js"></script>

<!--[if lt IE 9]>
<script src="./js/libs/excanvas.compiled.js"></script>
<![endif]-->

<!-- Plugin JS -->
<script src="./js/plugins/parsley/parsley.js"></script>

<!-- App JS -->
<script src="./js/mvpready-core.js"></script>
<script src="./js/mvpready-admin.js"></script>

<!-- Plugin JS -->
<script src="./js/demos/validation.js"></script>

<script src="./js/hide_and_show.js"></script>
<script>
$("#nav_commodities").addClass("active")
</script>

</body>
</html>
