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

              <form id="demo-validation" action="./components-validation.html" data-validate="parsley" class="form parsley-form">

                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" id="name" name="name" class="form-control parsley-validated" data-required="true">
                </div> <!-- /.form-group -->

                <div class="form-group">
                  <label for="textarea-input">Textarea</label>
                  <textarea data-required="true" data-minlength="5" name="textarea-input" id="textarea-input" cols="10" rows="2" class="form-control parsley-validated"></textarea>
                </div> <!-- /.form-group -->

                <div class="form-group">  
                  <label for="validateSelect">Select</label>
                  <select id="validateSelect" name="validateSelect" class="form-control parsley-validated" data-required="true">
                    <option value="">Please Select</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                  </select>
                </div> <!-- /.form-group -->

                <div class="form-group">
                  <label for="select-multi-input">Select (multiple)</label>
                  <select data-required="true" multiple="" id="select-multi-input" class="form-control parsley-validated">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                  </select>
                </div> <!-- /.form-group -->

                <div class="form-group">
                  <label>Checkbox (stacked)</label>

                  <div class="checkbox">
                    <label>
                    <input type="checkbox" name="checkbox-1" class="parsley-validated" data-mincheck="2">
                    Option 1
                    </label>
                  </div> <!-- /.checkbox -->

                  <div class="checkbox">
                    <label>
                    <input type="checkbox" name="checkbox-1" class="parsley-validated" data-mincheck="2">
                    Option 2
                    </label>
                  </div> <!-- /.checkbox -->

                </div> <!-- /.form-group -->


                <div class="form-group">
                  <label>Radio (stacked)</label>

                  <div class="radio">
                    <label>
                    <input type="radio" name="radio-1" class="parsley-validated" data-required="true">
                    Option 1
                    </label>
                  </div> <!-- /.radio -->

                  <div class="radio">
                    <label>
                    <input type="radio" name="radio-1" class="parsley-validated" data-required="true">
                    Option 2
                    </label>
                  </div> <!-- /.radio -->
                  
                </div> <!-- /.form-group -->

                <div class="form-group">
                  <button type="submit" class="btn btn-danger">Validate</button>
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