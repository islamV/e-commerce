<div class="nav-left-sidebar sidebar-dark">
  <div class="menu-list">
      <nav class="navbar navbar-expand-lg navbar-light">
          <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav flex-column">
                  <li class="nav-divider">
                      Menu
                  </li>
                  <li class="nav-item ">
                      <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-desktop"></i>Dashboard <span class="badge badge-success">6</span></a>
                      <div id="submenu-1" class="collapse submenu" style="">
                          <ul class="nav flex-column">
                              <li class="nav-item">
                                  <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-2" aria-controls="submenu-1-2">E-Commerce</a>
                                  <div id="submenu-1-2" class="collapse submenu" style="">
                                      <ul class="nav flex-column">
                                          <li class="nav-item">
                                              <a class="nav-link" href="{{route('dashboard')}}">E Commerce Dashboard</a>
                                          </li>
                                          <li class="nav-item">
                                              <a class="nav-link" href="{{route('Products.index')}}">Product List</a>
                                          </li>
                                          <li class="nav-item">
                                              <a class="nav-link" href="ecommerce-product-single.html">Product Single</a>
                                          </li>
                                          <li class="nav-item">
                                              <a class="nav-link" href="ecommerce-product-checkout.html">Product Checkout</a>
                                          </li>
                                      </ul>
                                  </div>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="">Finance</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="">Sales</a>
                              </li>
                          
                          </ul>
                      </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fa fa-fw fa-box"></i>Categorys</a>
                    <div id="submenu-3" class="collapse submenu" style="">
                        <ul class="nav flex-column">

                            <li class="nav-item">
                                <a class="nav-link" href="pages/cards.html">Laptops & Computers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/cards.html">Smart Phones</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/cards.html"> Smart TV </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/cards.html"> Controllers </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/cards.html"> Smart Watches</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/cards.html">VR</a>
                                </li>
                        </ul>
                    </div>
                </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-users"></i>Users</a>
                    <div id="submenu-2" class="collapse submenu" style="">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('UsersList.index')}}">Users </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('EmployeeList.index')}}">Employees</a>
                            </li>
                        
                        </ul>
                    </div>
                </li>
              </ul>
          </div>
      </nav>
  </div>
</div>