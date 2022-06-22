 <!-- Main Sidebar -->
 <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
          <div class="main-navbar">
            <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0" style="line-height: 25px;background:#a68e47;height:100px">
              <a class="navbar-brand w-100 mr-0" href="#" style="line-height: 25px;background:#a68e47;height:120px">
                <div class="d-table m-auto" >
                  <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 130px;" src="/img/logo1.png" alt="Shards Dashboard">
                  <span class="d-none d-md-inline ml-1"></span>
                </div>
              </a>
              <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                <i class="material-icons">&#xE5C4;</i>
              </a>
            </nav>
          </div>
          <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
            <div class="input-group input-group-seamless ml-3">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fas fa-search"></i>
                </div>
              </div>
              <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search"> </div>
          </form>
          <div class="nav-wrapper "style="margin-top:15%;">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="/admin">
                  <i class="material-icons">edit</i>
                  <span>statistic</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="/Adminrooms">
                  <i class="material-icons">vertical_split</i>
                  <span>Rooms Manegment</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="/Adminbooking">
                  <i class="material-icons">note_add</i>
                  <span>Booking Manager</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{ route('admin.service.index') }}">
                  <i class="material-icons">view_module</i>
                  <span>Services managment</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{ route('user.contactus.index') }}">
                  <i class="material-icons">chat</i>
                  <span>Viewers Messages</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="user-profile-lite.html">
                  <i class="material-icons">person</i>
                  <span>User Profile</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{ route('front.hotel.index') }}">
                  <i class="material-icons">error</i>
                  <span>hotel</span>
                </a>
              </li>
            </ul>
          </div>
        </aside>
        <!-- End Main Sidebar -->