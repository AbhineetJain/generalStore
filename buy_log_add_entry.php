<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
  <title>Add Entry &middot; Buy Log &middot; Janta General Store</title>

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
            include_once("navbar.html");
  ?>

  <div class="content">

    <div class="container">

      <div class="row">

        <div class="col-md-6 col-md-push-3 col-sm-8 col-sm-push-2 ">

          <div class="portlet">	    

            <h2 class="portlet-title">
              <u>Add Entry</u>
            </h2>			

            <div class="portlet-body">  

              <form action="./scripts/add_buy_log.php" method="get" data-validate="parsley" class="form parsley-form">

                <div class="form-group">  
                  <label for="wholesalerSelect">Wholesaler Name</label>
                  <select id="wholesalerSelect" name="wholesaler_id" class="form-control parsley-validated" data-required="true">
                    <option value="">Please Select</option>
                    <?php
                      require 'scripts/config_sql.php';

                      $sql = $mysqli->query("SELECT * from wholesalers WHERE id>0");

                      while($row = $sql->fetch_assoc())
                        echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
                    ?>
                  </select>
                </div> <!-- /.form-group -->

                <div class="form-group">  
                  <label for="commodity">Commodity</label>
                  <input type="text" id="commodity" name="commodity" class="form-control parsley-validated" data-required="true">
                </div> <!-- /.form-group -->

                <div class="form-group">
                  <label for="qty">Quantity</label>
                  <input type="number" id="qty" name="quantity" class="form-control parsley-validated" data-required="true">
                </div> <!-- /.form-group -->

                <div class="form-group">
                  <label for="priceRs">Price</label>
                  <input type="number" id="price" name="price" step="0.01" class="form-control half-width parsley-validated" data-required="true">
                </div> <!-- /.form-group -->

                <div class="form-group">
                  <label for="dop">Date of Purchase</label>
                  <input type="text" id="dop" name="date_of_purchase" class="form-control parsley-validated" data-required="true">
                </div> <!-- /.form-group -->

                
                <div class="form-group">
                  <input type="submit" class="btn btn-danger" value="Add">
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
    <p class="pull-left">Copyright &copy; 2013 MVP Ready.</p>
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


</body>
</html>
