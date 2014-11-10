<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
  <title>Add Entry &middot; Employees &middot; Janta General Store</title>

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
              <u>Add Entry</u>
            </h2>			

            <div class="portlet-body">  

              <form action="scripts/add_employee.php" data-validate="parsley" class="form parsley-form">

                <div class="form-group">  
                  <label for="empname">Employee Name</label>
                  <input type="text" id="empname" name="name" class="form-control parsley-validated" data-required="true">  
                </div> <!-- /.form-group -->

                <div class="form-group">  
                  <label for="salary">Salary</label>
                  <input type="number" id="salary" name="salary" step="0.01" class="form-control half-width parsley-validated" data-required="true">
                </div> <!-- /.form-group -->

                <div class="form-group">
                  <label for="address">Address</label>
                  <textarea data-required="true" data-minlength="5" name="address" id="address" cols="10" rows="2" class="form-control parsley-validated"></textarea>
                </div> <!-- /.form-group -->

                <div class="form-group">
                  <label for="contact">Contact</label>
                  <input type="text" id="contact" name="contact" class="form-control parsley-validated" data-required="true">
                </div> <!-- /.form-group -->

                <div class="form-group">
                  <label for="doj">Date of Joining</label>
                  <input type="date" id="doj" name="date_of_joining" class="form-control parsley-validated" data-required="true">
                </div> <!-- /.form-group -->

                
                <div class="form-group">
                  <button type="submit" class="btn btn-danger">Add</button>
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
<script>
$("#nav_employee").addClass("active")
</script>

</body>
</html>
