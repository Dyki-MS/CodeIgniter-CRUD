
    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">\
        <a class="nav-link" href="<?php echo site_url('admin') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item dropdown  <?php echo $this->uri->segment(2) == '' ? 'product': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-table"></i>
          <span>Menu</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="<?php echo site_url('admin/products/add') ?>">New Product</a>
          <a class="dropdown-item" href="<?php echo site_url('admin/products') ?>">List Product</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-key"></i>
          <span>Users</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-cogs"></i>
          <span>Settings</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-user-circle"></i>
          <span>About</span></a>
      </li>
    </ul>

    