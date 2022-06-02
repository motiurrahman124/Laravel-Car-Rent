<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link">
      <img src="{{asset('assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text text-lime">Admin Dashboard </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar ">
     
      <nav class="mt-2 ">
        <ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu" data-accordion="false">
         
          
          <li class="nav-item ">
            <a href="{{route('add_car')}}" class="nav-link text-lime">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Add Car
              </p>
            </a>
            </li>

            <li class="nav-item">
            <a href="{{route('car_list')}}" class="nav-link text-lime">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Car List
              </p>
            </a>
          </li>

            <li class="nav-item">
            <a href="{{route('car_book_list')}}" class="nav-link text-lime">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Car Booking List
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="{{route('user_list')}}" class="nav-link text-lime">
              <i class="nav-icon fas fa-th"></i>
              <p>
                User List
              </p>
            </a>
          </li>
          
            <li class="nav-item mr-5 ml-5">
            <a href="{{route('admin_logout')}}" class="nav-link btn btn-danger text-lime">
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>