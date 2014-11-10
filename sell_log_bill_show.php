<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
  <title>View Bill Details &middot; Sell Log &middot; Janta General Store</title>

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

  <!-- Plugin CSS -->
  <link rel="stylesheet" href="./js/plugins/dataTables/dataTables.bootstrap.css">

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

      <div class="portlet">

        <h3 class="portlet-title">
          <u>View Bill Details</u>
        </h3>
<?php

require 'scripts/config_sql.php';

$id = $_GET['id'];
$row = $mysqli->query("SELECT * FROM sell_log WHERE id='$id' LIMIT 1")->fetch_assoc();

?>
        <div class="portlet-body">

          <h5 id="billno">Bill Number: <?php echo $row['id']; ?></h4>
          <h5 id="billtime">Timestamp: <?php echo $row['timestamp']; ?></h4>

          <table class="table table-striped table-bordered" id="table-1">
            <thead>
              <tr>
                <th style="width: 20%">Item Name</th>
                <th style="width: 12%">Quantity</th>
                <th style="width: 19%">Total Price</th>
              </tr>
            </thead>

            <tfoot>
              <tr>
                <th>Item Name</th>
                <th>Quantity</th>
                <th>Total Price</th>
              </tr>
            </tfoot>
          </table>
          <h5 id="billdiscount">Discount: <?php echo $row['discount']; ?>%</h4>
          <h5 id="billamount">Total Billing Amount: <?php echo $row['billing_amount']; ?></h4>
        </div> <!-- /.portlet-body -->

      </div> <!-- /.portlet -->

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
<script src="./js/plugins/dataTables/jquery.dataTables.js"></script>
<script src="./js/plugins/dataTables/dataTables.bootstrap.js"></script>

<!-- App JS -->
<script src="./js/mvpready-core.js"></script>
<script src="./js/mvpready-admin.js"></script>

<!-- Plugin JS -->
<script>
<?php include('./js/demos/sold_items_table.php'); ?>
</script>

</body>
</html>
