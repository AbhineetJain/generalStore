  <header class="navbar navbar-inverse" role="banner">

    <div class="container">

      <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <i class="fa fa-cog"></i>
        </button>

        <a href="./home.php" class="navbar-brand navbar-brand-img">
          <img src="./img/logo.png" alt="JGS" class="navbar-brand navbar-brand-img">
        </a>
      </div> <!-- /.navbar-header -->


      <nav class="collapse navbar-collapse" role="navigation">

        <ul class="nav navbar-nav navbar-right">    

          <li>
            <a href="./home.php">Home</a>
          </li> 

          <li class="dropdown navbar-profile">
            <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;">
              <span class="">Welcome, <?php session_start(); echo $_SESSION['user']['name']; ?> &nbsp;</span>
              <i class="fa fa-caret-down"></i>
            </a>

            <ul class="dropdown-menu" role="menu">

              <li>
                <a href="scripts/logout.php">
                  <i class="fa fa-sign-out"></i> 
                  &nbsp;&nbsp;Logout
                </a>
              </li>

            </ul>

          </li>

        </ul>

      </nav>

    </div> <!-- /.container -->

  </header>


  <div class="mainnav">

    <div class="container">

      <a class="mainnav-toggle" data-toggle="collapse" data-target=".mainnav-collapse" style="text-align: left;">
        <span class="sr-only">Toggle navigation</span>
        <i class="fa fa-bars"></i>
      </a>

      <nav class="collapse mainnav-collapse" role="navigation">

        <ul class="mainnav-menu">

          <li class="dropdown active">
            <a href="./wholesaler_add_entry.html" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
            Wholesalers
            <i class="mainnav-caret"></i>
            </a>

            <ul class="dropdown-menu" role="menu">
              <li>
                <a href="wholesaler_add_entry.php">
                <i class="fa fa-plus"></i> 
                &nbsp;&nbsp;Add Entry
                </a>
              </li>

              <li>
                <a href="wholesaler_show.php">
                <i class="fa fa-tasks"></i> 
                &nbsp;&nbsp;Show Wholesalers
                </a>
              </li>

            </ul>
          </li>

          <li class="dropdown">
          	<a href="./buy_log_add_entry.html" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
          	Buy Log
          	<i class="mainnav-caret"></i>
          	</a>

          	<ul class="dropdown-menu" role="menu">
              <li>
                <a href="buy_log_add_entry.php">
                <i class="fa fa-plus"></i> 
                &nbsp;&nbsp;Add Entry
                </a>
              </li>

              <li>
                <a href="./buy_log_show.php">
                <i class="fa fa-tasks"></i> 
                &nbsp;&nbsp;Show Buy Logs
                </a>
              </li>

          	</ul>
          </li>


          <li class="dropdown ">

            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
            Sell Log
            <i class="mainnav-caret"></i>					
            </a>

            <ul class="dropdown-menu" role="menu">

              <li>
                <a href="sell_log_add_entry.php">
                <i class="fa fa-plus"></i> 
                &nbsp;&nbsp;Add Entries
                </a>
              </li>

              <li>
                <a href="./sell_log_show.php">
                <i class="fa fa-tasks"></i> 
                &nbsp;&nbsp;View Bills
                </a>
              </li>

              </ul>
          </li>


          <li class="dropdown ">

            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
            Commodities
            <i class="mainnav-caret"></i>
            </a>

            <ul class="dropdown-menu" role="menu">
              <li>
                <a href="commodities_add_entry.php">
                <i class="fa fa-plus"></i> 
                &nbsp;&nbsp;Add Entries
                </a>
              </li>

              <li>
                <a href="commodities_show.php">
                <i class="fa fa-tasks"></i> 
                &nbsp;&nbsp;Show Commodities
                </a>
              </li>

              <li>
                <a href="#">
                <i class="fa fa-pencil-square-o"></i> 
                &nbsp;&nbsp;Update Commodity
                </a>
              </li>

            </ul>
          </li> 

          <li class="dropdown ">

            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
            Employees
            <i class="mainnav-caret"></i>
            </a>

            <ul class="dropdown-menu" role="menu">
              <li>
                <a href="employee_add_entry.php">
                <i class="fa fa-plus"></i> 
                &nbsp;&nbsp;Add Employee
                </a>
              </li>

              <li>
                <a href="employee_change_posts.php">
                <i class="fa fa-gear"></i> 
                &nbsp;&nbsp;Change posts
                </a>
              </li>

              <li>
                <a href="employee_show.php">
                <i class="fa fa-tasks"></i> 
                &nbsp;&nbsp;Show Employees
                </a>
              </li>

              <li>
                <a href="#">
                <i class="fa fa-pencil-square-o"></i> 
                &nbsp;&nbsp;Update Employee
                </a>
              </li>

            </ul>
          </li> 

        </ul>

      </nav>

    </div> <!-- /.container -->

  </div> <!-- /.mainnav -->
