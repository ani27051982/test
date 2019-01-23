 <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      

      <!-- search form (Optional) -->
      <!--<form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>-->
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu</li>
        <!-- Optionally, you can add icons to the links -->
		@if(Session::has('adminUserCategory'))
			@if(Session::get('adminUserCategory')=="superadmin")
        	<li {!! (Request::is('subscription') || Request::is('addeditsubscription') ? 'class="active"': '') !!}><a href="{{URL::to('/')}}/subscription"><i class="fa fa-newspaper-o"></i> <span>Subscription</span></a></li>
			<li {!! (Request::is('users')? 'class="active"': '') !!}><a href="{{URL::to('/')}}/users"><i class="fa fa-user"></i> <span>Users</span></a></li>
			@elseif(Session::get('adminUserCategory')=="superadminorganization")
			<li {!! (Request::is('users')? 'class="active"': '') !!}><a href="{{URL::to('/')}}/users"><i class="fa fa-user"></i> <span>Users</span></a></li>
			@endif
		@endif
        <!--<li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li>-->
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
  
  