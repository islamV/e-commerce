<!-- partial:partials/_header.html -->
<nav class="t-header">
    <div class="t-header-content-wrapper">
        <div class="t-header-content">
            <a class="navbar-brand" href="{{route('dashbord')}}">islam</a>
            <ul class="nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="notificationDropdown" data-toggle="dropdown"
                        aria-expanded="false">
                        <i class="mdi mdi-bell-outline mdi-1x"></i>

                        <span
                            class="notification-indicator notification-indicator-primary notification-indicator-ripple"></span>
                    </a>
                    <div class="dropdown-menu navbar-dropdown dropdown-menu-right"
                        aria-labelledby="notificationDropdown">
                        <div class="dropdown-header">
                            <h6 class="dropdown-title">Notifications</h6>
                            <p class="dropdown-title-text">You have # unread notification</p>
                        </div>
                        <div class="dropdown-body">
                            <div class="dropdown-list">
                                <div class="icon-wrapper rounded-circle bg-inverse-primary text-primary">
                                    <i class="mdi mdi-bullseye"></i>
                                </div>
                                <div class="content-wrapper">

                                </div>
                            </div>


                        </div>
                        <div class="dropdown-footer">
                            <a href="#">View All</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="messageDropdown" data-toggle="dropdown"
                        aria-expanded="false">
                        <i class="mdi mdi-message-outline mdi-1x"></i>
                        <span
                            class="notification-indicator notification-indicator-primary notification-indicator-ripple"></span>
                    </a>


                    <div class="dropdown-menu navbar-dropdown dropdown-menu-right" aria-labelledby="messageDropdown">
                        <div class="dropdown-header">
                            <h6 class="dropdown-title">Messages</h6>
                            <p class="dropdown-title-text">You have # unread messages</p>
                        </div>
                        <div class="dropdown-body">

                            <div class="dropdown-list">

                            </div>

                        </div>
                        <div class="dropdown-footer">
                            <a href="#">View All</a>
                        </div>
                    </div>
                </li>
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                    src="{{asset('assets/islam.jpg')}}"
                                    class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown"
                                aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">islam abdelkarim</h5>
                                    
                                    <span class="badge-dot badge-success mr-1"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                </div>
        </ul>
    </div>
    </div>
</nav>
