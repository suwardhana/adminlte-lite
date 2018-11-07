<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="dist/adminlte.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">
          <b>A</b>LT</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">
            <b>Admin</b>LTE</span>
          </a>
          <!-- Header Navbar: style can be found in header.less -->
          <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
              <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
              <ul class="nav navbar-nav">
                <!-- Tasks: style can be found in dropdown.less -->
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="img/avatar.png" class="user-image" alt="User Image">
                    <span class="hidden-xs">username</span>
                  </a>
                  <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
                      <img src="img/avatar.png" class="img-circle" alt="User Image">

                      <p>
                        $username
                        <small>//$role</small>
                      </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                      <div class="pull-left">
                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                      </div>
                      <div class="pull-right">
                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
          <!-- sidebar: style can be found in sidebar.less -->
          <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
              <div class="pull-left image">
                <img src="img/avatar.png" class="img-circle" alt="User Image">
              </div>
              <div class="pull-left info">
                <p>Username</p>
                <a href="#">
                  <i class="fa fa-circle text-success"></i> Online</a>
                </div>
              </div>
              <!-- /.search form -->
              <!-- sidebar menu: : style can be found in sidebar.less -->
              <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>
                <li class="active treeview">
                  <a href="#">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li class="active">
                      <a href="index.html">
                        <i class="fa fa-circle-o"></i> Dashboard v1</a>
                      </li>
                      <li>
                        <a href="index2.html">
                          <i class="fa fa-circle-o"></i> Dashboard v2</a>
                        </li>
                      </ul>
                    </li>
                    <li class="treeview">
                      <a href="#">
                        <i class="fa fa-share"></i>
                        <span>Multilevel</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                      </a>
                      <ul class="treeview-menu">
                        <li>
                          <a href="#">
                            <i class="fa fa-circle-o"></i> Level One</a>
                          </li>
                          <li class="treeview">
                            <a href="#">
                              <i class="fa fa-circle-o"></i> Level One
                              <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                              </span>
                            </a>
                            <ul class="treeview-menu">
                              <li>
                                <a href="#">
                                  <i class="fa fa-circle-o"></i> Level Two</a>
                                </li>
                                <li class="treeview">
                                  <a href="#">
                                    <i class="fa fa-circle-o"></i> Level Two
                                    <span class="pull-right-container">
                                      <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                  </a>
                                  <ul class="treeview-menu">
                                    <li>
                                      <a href="#">
                                        <i class="fa fa-circle-o"></i> Level Three</a>
                                      </li>
                                      <li>
                                        <a href="#">
                                          <i class="fa fa-circle-o"></i> Level Three</a>
                                        </li>
                                      </ul>
                                    </li>
                                  </ul>
                                </li>
                                <li>
                                  <a href="#">
                                    <i class="fa fa-circle-o"></i> Level One</a>
                                  </li>
                                </ul>
                              </li>
                              <li>
                                <a href="https://adminlte.io/docs">
                                  <i class="fa fa-book"></i>
                                  <span>Documentation</span>
                                </a>
                              </li>
                            </ul>
                          </section>
                          <!-- /.sidebar -->
                        </aside>

                        <!-- Content Wrapper. Contains page content -->
                        <div class="content-wrapper">
                          <!-- Content Header (Page header) -->
                          <section class="content-header">
                            <h1>
                              judul app
                              <small></small>
                            </h1>
                          </section>

                          <!-- Main content -->
                          <section class="content">
                            <!-- Small boxes (Stat box) -->
                            <div class="row">
                              <div class="panel panel-default">
                                <div class="panel-body">
                                  <div class="row">
t
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- /.row -->
                            <!-- Main row -->
                            <!-- /.row (main row) -->
                          </section>
                          <!-- /.content -->
                        </div>
                        <div class="panel panel-default"></div>
                        <!-- /.panel panel-default -->
                        <!-- /.content-wrapper -->
                        <footer class="main-footer">
                          <div class="pull-right hidden-xs">
                            <b>Version</b> 2.4.0
                          </div>
                          </footer>

                          <!-- Control Sidebar -->
                          <aside class="control-sidebar control-sidebar-dark">
                            <!-- Tab panes -->
                            <div class="tab-content">
                              <form method="post">
                                <h3 class="control-sidebar-heading">General Settings</h3>

                                <div class="form-group">
                                  <label class="control-sidebar-subheading">
                                    Report panel usage
                                    <input type="checkbox" class="pull-right" checked>
                                  </label>

                                  <p>
                                    Some information about this general settings option
                                  </p>
                                </div>
                                <!-- /.form-group -->

                                <div class="form-group">
                                  <label class="control-sidebar-subheading">
                                    Allow mail redirect
                                    <input type="checkbox" class="pull-right" checked>
                                  </label>

                                  <p>
                                    Other sets of options are available
                                  </p>
                                </div>
                                <!-- /.form-group -->

                                <div class="form-group">
                                  <label class="control-sidebar-subheading">
                                    Expose author name in posts
                                    <input type="checkbox" class="pull-right" checked>
                                  </label>

                                  <p>
                                    Allow the user to show his name in blog posts
                                  </p>
                                </div>
                                <!-- /.form-group -->
                              </form>
                              <!-- /.tab-pane -->
                            </div>
                          </aside>
                          <!-- /.control-sidebar -->
                          <!-- Add the sidebar's background. This div must be placed
                          immediately after the control sidebar -->
                          <div class="control-sidebar-bg"></div>
                        </div>
                        <!-- ./wrapper -->

                        <!-- <script src="dist/vendors.bundle.js"></script> -->
                        <script src="dist/adminlte.min.js"></script>

                        <script>
                        var body = $('body');
                        console.log(body);
                        </script>
                      </body>

                      </html>
