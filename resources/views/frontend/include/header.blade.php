<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>
  
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
  
  <link rel="stylesheet" href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('assets/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/css/AdminLTE.min.css')}}">
  
  <link rel="stylesheet" href="{{asset('assets/css/skins/skin-blue.min.css')}}">
  
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap-table.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap_tables.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/sweetalert2.min.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/sweet_alert2.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  
   <style type="text/css">
	.pdt_error_class_validate  
	{
		color:#FF0000;
		font-style:italic;
		font-size:15px;
		text-align:left;
	}

	</style>
  
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">Sub</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Subscription</b></span>
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
          
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
             
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">@if(Session::has('adminUserName'))
                              {{ Session::get('adminUserName') }} @endif</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                

                <p>
                  @if(Session::has('adminUserName'))
					  {{ Session::get('adminUserName') }} 
				  @endif
                   <small>@if(Session::has('adminUserEmail'))
					  {{ Session::get('adminUserEmail') }} 
				  @endif</small>
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
               
                <div class="pull-right">
                  <a href="{{ route('logout') }}" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>