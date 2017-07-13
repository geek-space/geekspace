<nav id="mainNav" class="navbar navbar-inverse navbar-fixed-top">
    <!-- Left-Side of Navbar (Logo) -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span> <span class="menuTextColor"><i class="fa fa-bars"></i></span>
        </button>
        <a href="/home">
            <div class="navbar-logo">
                <span class="navbar-logoName">g</span>
                <img class="navbar-logoImg" src="/img/green-nerdy-glasses.png" onContextMenu="return false;">
                <span class="navbar-logoName" id="kspace">kspace</span>
            </div>
        </a>
    </div>

    <!-- Right-Side of Navbar -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="/home">Home</a></li>
            
            <!-- User Account Dropdown (doesn't appear on mobile) -->
            <li class="dropdown userAccount">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-user-circle-o userIcon" aria-hidden="true"></i>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <div class="navbar-content">
                            <div class="row">
                                <div class="col-md-5">
                                    <img src="http://placehold.it/120x120" alt="Alternate Text" class="img-responsive"/>
                                    <p class="text-center small"><a href="#">Change Photo</a></p>
                                </div>
                                <div class="col-md-7">
                                    <span>Lorem Ipsum</span>
                                    <p class="text-muted small">mail@gmail.com</p>
                                    <div class="divider"></div>
                                    <a href="#" class="btn btn-primary btn-sm active">View Profile</a>
                                </div>
                            </div>
                        </div>
                        <div class="navbar-footer">
                            <div class="navbar-footer-content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="#" class="btn btn-default btn-sm">Change Password</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="#" class="btn btn-default btn-sm pull-right">Sign Out</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
            <!-- End of User Account Dropdown -->
        </ul>
    </div>
</nav>