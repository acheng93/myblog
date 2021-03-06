<header class="main-header">
  <!-- Logo -->
  <a href="<?php echo site_url('home') ?>" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>93jc</b></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>93jc.pw</b></span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">切换导航</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- Notifications: style can be found in dropdown.less -->
        <li class="dropdown notifications-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-bell-o"></i>
            <span class="label label-warning">10</span>
          </a>
          <ul class="dropdown-menu">
            <li class="header">You have 10 notifications</li>
            <li>
              <!-- inner menu: contains the actual data -->
              <ul class="menu">
                <li>
                  <a href="#">
                    <i class="fa fa-users text-aqua"></i> 5 new members joined today
                  </a>
                </li>
              </ul>
            </li>
            <li class="footer"><a href="#">View all</a></li>
          </ul>
        </li>
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="<?php echo base_url('public/common/dist/img/user2-160x160.jpg') ?>" class="user-image" alt="User Image">
            <span class="hidden-xs">Alexander Pierce</span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="<?php echo base_url('public/common/dist/img/user2-160x160.jpg') ?>" class="img-circle" alt="User Image">

              <p>
                Alexander Pierce - Web Developer
                <small>Member since Nov. 2012</small>
              </p>
            </li>
            <!-- Menu Body -->
            <li class="user-body">
              <div class="row">
                <div class="col-xs-4 text-center">
                  <a href="#">Followers</a>
                </div>
                <div class="col-xs-4 text-center">
                  <a href="#">Sales</a>
                </div>
                <div class="col-xs-4 text-center">
                  <a href="#">Friends</a>
                </div>
              </div>
              <!-- /.row -->
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">个人资料</a>
              </div>
              <div class="pull-right">
                <a href="#" id="loginout" class="btn btn-default btn-flat">退出登录</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('public/common/dist/img/user2-160x160.jpg') ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>谭佳成</p>
          <a href="#"><i class="fa fa-circle text-success"></i> 在线</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">操作面板</li>
        <li currentmethod="cate"><a href="<?php echo site_url('admin/cate') ?>"><i class="fa fa-bookmark-o"></i> <span>模块分类管理</span></a></li>
        <li class="treeview" currentmethod="article">
          <a href="#">
            <i class="fa fa-book"></i> <span>文章管理</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li currentmethod="allarticle"><a href="<?php echo site_url('admin/article/allarticle')?>"><i class="fa fa-file-text-o"></i> 所有文章</a></li>
            <li currentmethod="createArticle"><a href="<?php echo site_url('admin/article/createArticle')?>"><i class="fa fa-pencil-square-o"></i> 撰写新文章</a></li>
          </ul>
        </li>
        <li currentmethod="Website"><a href="<?php echo site_url('admin/Website') ?>"><i class="fa fa-mouse-pointer"></i> <span>优站推荐</span></a></li>
        <li currentmethod="Soulwords"><a href="<?php echo site_url('admin/Soulwords') ?>"><i class="fa  fa-heart-o"></i> <span>心灵鸡汤</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>