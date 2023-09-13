<!-- partial:partials/_header.html -->
<nav class="t-header">
    <div class="t-header-content-wrapper">
        <div class="t-header-content">
            <a href="{{route('welcome')}}" >
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAADH0lEQVR4nO2YW4hOURSAP7kOk8tMGBph8ICkeFAKoZRLqXkwpZSUKKQMDTUy0ow88uCBKDQP4oHkRU0mpNwmlFybRImEYpgb82vX+mt1Zp+z55zZ/xzpfLU7f//aa+21zj7nrLU2ZGRkRLEWuA90AjngG7AxMOck0CVyn6NT1l7TH+dthpvVnCKgpwDO59Qw9lcnCeCBxVjYDuR3qFDjXpIAtFMlDDwlav2OuMpLlHI76dGu/DA+9YnBQItSbCQ9GpUfLeKbk+1K6RcwlfQoB9qUP9tcCuOAz0qhlvQ5qPz5ApRGTT6hJrcCI0if4cBr5dfxsImzgW41sZJ/h0rlV7f42osaNanJIp8k/5tRlkA+GbgD3JbfcfWblH/G117UqglHHAEeSCDfp+TVCfQPK/khWwCb1IRrjk9af+U7LPILMfS32AKoAH6r+qNKyZZKNsx5ks8PrL0skPmj9I1sLiGcD9Qgz4EnEQVbEvkNtd5u4CHwJ4b+JSIolsIprKi6BTyKkN91yFslORnmWORvA1VAcJjyegwOiuQlCVahDcAwYBRwJtAD/ACOiq5Nbmqas8B4tc5Y4KPIu+QZLxP905Yeo1bs9xmtPCQkay8EFgBDQ+SLZIwOWaMUWCzB2PS1D7Hpl7InclkAhO9Ag6dOrBOoT2MHfLaRHWkE4Mv5XB/XKGgANuqUvK5Aa0SSz37mmlYAPQ4fImkW5ZuOhjus6a9xlb+4bbh8wFVWLJerjXrJwGFfEFMcvpFRkdBGscOH/5tjciJga258MxN4FTNHOPmuXiCzjYVkb4Ic4eScMvI+pE/1uQMvY+YIJxOAT8rIY/mvUBQDV3wGkG/1dF3+ApiHf2bIDfK6A3k2WJqTPdLc9JeRwH7gp7LfJUeI3gIwrJfvtTb6DtgpHVRcyuXI8EPApjk6XCFz8u+EuXphVki/bA6Ar8pZz0pgunRT+Ts8UU4hqqTtDGvirwNTAi92tTxe3jCt4y65+76q0KfAOgYY8/xvlbuZxGmTIC/Kjg0iZaYBm4FTUnyZ3fkqCbBNnvNnwGU5HlwlJ84ZGRkZ8BcOJFBLhKuf9wAAAABJRU5ErkJggg==">
            </a>
            <h3></h3>
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
            
        </ul>
    </div>
    </div>
</nav>
