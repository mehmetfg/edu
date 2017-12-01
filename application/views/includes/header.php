<!-- BEGIN HEADER -->
<div id="header" class="navbar navbar-inverse navbar-fixed-top">
<!-- BEGIN TOP NAVIGATION BAR -->
<div class="navbar-inner">
    <div class="container-fluid">
        <!--BEGIN SIDEBAR TOGGLE-->
        <div class="sidebar-toggle-box hidden-phone">
            <div class="icon-reorder tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <!--END SIDEBAR TOGGLE-->
        <!-- BEGIN LOGO -->
        <a class="brand" href="<?php echo base_url("index/anasayfa");?>">
            <img src="<?php echo base_url("assets");?>/img/logo.png" alt="Metro Lab" />
        </a>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="arrow"></span>
        </a>
        <!-- END RESPONSIVE MENU TOGGLER -->

        <!-- END  NOTIFICATION -->
        <div class="top-nav ">
            <ul class="nav pull-right top-menu" >
                <!-- BEGIN SUPPORT -->

                <!-- END SUPPORT -->
                <!-- BEGIN USER LOGIN DROPDOWN -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?php echo base_url("assets");?>/img/avatar1_small.jpg" alt="">
                        <span class="username">Jhon Doe</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
                        <li><a href="#"><i class="icon-cog"></i> My Settings</a></li>
                        <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
                    </ul>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
            </ul>
            <!-- END TOP NAVIGATION MENU -->
        </div>
    </div>
</div>
<!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->