
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Access DashBoard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="{{asset('css')}}/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('css')}}/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('css')}}/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">

  <link rel="stylesheet" href="{{asset('css/backend.css')}}">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="{{asset('css')}}/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <style>

  </style>
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="/index" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Access</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="">
            <a href="/message" class="dropdown-toggle fa fa-envelope-o" >
              <span class="label" style="background-color: red">{{\App\message::all()->count()}}</span>
            </a>
           </li>


                <!-- inner menu: contains the actual data -->


          <!-- /.messages-menu -->

          <!-- Notifications Menu -->

          <!-- Tasks Menu -->
          <li class="dropdown tasks-menu">
            <!-- Menu Toggle Button -->


          </li>
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
             {{-- <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">--}}
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <p>
                  {{ Auth::user()->name }} - Web Developer
                  <small>Member since Nov. 2015</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">

                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="{{url('/main/successlogin')}}" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="{{ url('/main/logout') }}" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->

        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          <!-- Status -->
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Access</li>
        <!-- Optionally, you can add icons to the links -->
        {{-------------------------------------------------------------------------------------------------------------------------------------------}}

        {{-----------------------------------------Home Page ------------------------------------------------}}
        <li class="@yield('active1')"><a href="/"><i class="fa fa-home"></i> <span>Home Page</span></a></li>

                                {{-------------Slider--------------}}

        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Slider</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li class="@yield('active2')"><a href="{{url('/addSlider')}}"><i class="fa fa-link"></i> <span>Add Slider</span></a></li>
            <li class="@yield('active1')"><a href="{{url('/Slider')}}"><i class="fa fa-link"></i> <span>Edit/Delete</span></a></li>


          </ul>
        </li>
               {{---------------------------Counter-------------------------------}}
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span> Counter </span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li class="@yield('active4')"><a href="{{url('/addCounter')}}"><i class="fa fa-link"></i> <span>Add Counter</span></a></li>
            <li class="@yield('active3')"><a href="{{url('/counter')}}"><i class="fa fa-link"></i> <span>Edit/Delete</span></a></li>

          </ul>
        </li>

{{-------------------------------------------------------------------------------------------------------------------------------------------------------}}
        {{---------------------------------------About Us--------------------------------------------------}}
        <li class="header">About Us</li>


                    {{--------------About Us Content-----------------}}
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>About Us Content</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li class="@yield('active7')"><a href="{{url('/addAboutContent')}}"><i class="fa fa-link"></i> <span>Add content</span></a></li>
            <li class="@yield('active8')"><a href="{{url('/aboutContent')}}"><i class="fa fa-link"></i> <span>Edit/Delete</span></a></li>
          </ul>
        </li>
                  {{----------------------------Address---------------------}}

        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Address</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li class="@yield('active11')"><a href="{{url('/addAddress')}}"><i class="fa fa-link"></i> <span>Add Address</span></a></li>
            <li class="@yield('active12')"><a href="{{url('/address')}}"><i class="fa fa-link"></i> <span>Edit/Delete</span></a></li>

          </ul>
        </li>


        {{-----------------------------------------------------------------------------------------------------------------------------}}

              {{------------------------------------------projects---------------------------------------------------}}
        <li class="header">Projects</li>


        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Projects</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="@yield('active13')"><a href="{{url('/addProject')}}"><i class="fa fa-link"></i> <span>Add Project</span></a></li>
            <li class="@yield('active14')"><a href="{{url('/Project')}}"><i class="fa fa-link"></i> <span>Edit/Delete</span></a></li>
          </ul>
        </li>
{{---------------------------------------------- Messages -------------------------------}}
        <li class="@yield('active18')"><a href="{{url('/message/')}}"><i class="fa fa-comments"></i> <span>Messages</span></a></li>




        <li class="@yield('active10')"><a href="{{url('/setting/1/edit')}}"><i class="fa fa-link"></i> <span>Setting</span></a></li>
        <li class="@yield('active10')"><a href="{{url('/index')}}"><i class="fa fa-link"></i> <span>Project Page</span></a></li>
        <li class="@yield('active17')"><a href="{{url('/main/allcustmer')}}"><i class="fa fa-link"></i> <span>Admins</span></a></li>


      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>
</br>
    <!-- Main content -->
    <section class="content container-fluid ">

      <!------------------s--------
        | Your Page Content Here |
        -------------------------->
    @yield('content')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2019 <a href="#">MH</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
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
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('js/adminlte.min.js')}}"></script>

<script type="text/javascript">

  $("#uploadFile").change(function(){
    $('#image_preview').html("");
    var total_file=document.getElementById("uploadFile").files.length;
    for(var i=0;i<total_file;i++)
    {
      $('#image_preview').append("<img class='thumbnail img-responsive' style='width: 150px;height: 150px;border-radius: 50%' src='"+URL.createObjectURL(event.target.files[i])+"'>");
    }
  });

</script>


<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>