<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
  <title>Add Entry &middot; Sell Log &middot; Janta General Store</title>

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

              <form id="sell-log-form" action="" data-validate="parsley" class="form parsley-form">

                <div class="itemDesc">
                  <!--<div id="itemDiv0" class="itemDivs">
                    <div class="form-group place-inline">  
                      <label for="item0">Item Name</label>
                      <select id="item0" name="item0" class="place-inline item form-control parsley-validated" data-required="true">
                        <option value="Item no. 1">Item no. 1</option>
                      </select>
                    </div>

                    <div class="form-group place-inline">
                      <label for="qty0">Quantity</label>
                      <input type="number" id="qty0" name="qty0" class="place-inline form-control half-width parsley-validated" data-required="true">
                    </div>

                    <div class="form-group place-inline">
                      <label for="total_price0">Price</label>
                      <input type="number" id="price0" name="total_price0" step="0.01" class="place-inline form-control half-width parsley-validated" data-required="true">
                    </div>
                    <button id="close0" class="closebutton btn btn-danger place-inline"><i class="fa fa-times"></i></button>
                    <hr>
                  </div>-->
                </div>

                <button class="btn btn-success" id="add_item"><i class="fa fa-plus"></i> Add Item</button>

                <div class="form-group">
                  <label for="discount">Discount</label>
                  <input type="number" id="disc" name="discount" min=0 value=0 max=100 step="0.01" class="form-control half-width parsley-validated" data-required="true">
                </div> <!-- /.form-group -->
                
                <div class="form-group">
                  <label for="billing_amount">Total Billing Amount</label>
                  <input type="number" id="bill" name="billing_amount" class="form-control half-width parsley-validated" data-required="true">
                </div> <!-- /.form-group -->

                <div class="form-group">
                  <input type="submit" class="btn btn-danger" value="Add" />
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

<script src="./js/customized.js"></script>

</body>
</html>
