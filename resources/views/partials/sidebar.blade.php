@inject('request', 'Illuminate\Http\Request')
 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ URL::asset('/') }}" class="brand-link">
      <img src="{{ URL::asset('resources/images/AdminLTELogo.png') }}"
           alt="Admin Logo"
           class="brand-image elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Loan Marketplace</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="{{ URL::asset('admin') }}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>          
          <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="fa fa-users"></i>
                  <span class="title">Category</span>
                  <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                  </span>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="{{ route('admin.category.index') }}" class="nav-link ">
                          <i class="fa fa-user"></i>
                          <span class="title">
                              All Category                          
                          </span>
                      </a>
                  </li>
                  <li class=" nav-item">
                      <a href="{{ route('admin.category.create') }}" class="nav-link ">
                          <i class="fa fa-cog"></i>
                          <span class="title">
                              Add Category
                          </span>
                      </a>
                  </li>                  
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="fa fa-users"></i>
                  <span class="title">Sub Category</span>
                  <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                  </span>
              </a>
              <ul class="nav nav-treeview">                  
                  <li class="nav-item">
                      <a href="{{ route('admin.subcategory.index') }}" class="nav-link ">
                          <i class="fa fa-user"></i>
                          <span class="title">
                              All Sub Category                          
                          </span>
                      </a>
                  </li>
                  <li class=" nav-item">
                      <a href="{{ route('admin.subcategory.create') }}" class="nav-link ">
                          <i class="fa fa-cog"></i>
                          <span class="title">
                              Add Sub Category
                          </span>
                      </a>
                  </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="fa fa-users"></i>
                  <span class="title">Banner</span>
                  <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                  </span>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="{{ route('admin.banner.index') }}" class="nav-link ">
                          <i class="fa fa-user"></i>
                          <span class="title">
                              All Banner                          
                          </span>
                      </a>
                  </li>
                  <li class=" nav-item">
                      <a href="{{ route('admin.banner.create') }}" class="nav-link ">
                          <i class="fa fa-cog"></i>
                          <span class="title">
                              Add Banner
                          </span>
                      </a>
                  </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="fa fa-users"></i>
                  <span class="title">Article</span>
                  <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                  </span>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="{{ route('admin.article.index') }}" class="nav-link ">
                          <i class="fa fa-user"></i>
                          <span class="title">
                              All Article                          
                          </span>
                      </a>
                  </li>
                  <li class=" nav-item">
                      <a href="{{ route('admin.article.create') }}" class="nav-link ">
                          <i class="fa fa-cog"></i>
                          <span class="title">
                              Add Article
                          </span>
                      </a>
                  </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="fa fa-users"></i>
                  <span class="title">Product</span>
                  <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                  </span>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="{{ route('admin.product.index') }}" class="nav-link ">
                          <i class="fa fa-user"></i>
                          <span class="title">
                              All Product                          
                          </span>
                      </a>
                  </li>
                  <li class=" nav-item">
                      <a href="{{ route('admin.product.create') }}" class="nav-link ">
                          <i class="fa fa-cog"></i>
                          <span class="title">
                              Add Product
                          </span>
                      </a>
                  </li>
              </ul>
            </li>
            <li class="nav-item">
                <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">{{ __('Logout') }}</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
