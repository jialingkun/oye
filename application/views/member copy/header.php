
    <header class="main-header">
        <!-- Logo -->
        <a href="<?=base_url("index2.html");?>" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Admin</b>LTE</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav"> 
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="hidden-xs" id="username"></span>
                </a>
                <ul class="dropdown-menu">
                <!-- Menu Footer-->
                <li class="user-footer">
                    <div class="pull-left">
                    <a href="<?=base_url("/index.php/changepasswordmember");?>" class="btn btn-default btn-flat">Ubah Password</a>
                    </div>
                    <div class="pull-right">
                    <a href="<?=base_url("index.php/logoutmember");?>" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                </li>
                </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            </ul>
        </div>
        </nav>
    </header>
    