<style>
    .scale{
      transform: scale(2.5);
    }
</style>
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a  class="navbar-brand" href="javascript:void(0)">
          <img src="<?= base_url('images/hotel_transylvania.png')?>" class="scale" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
          <?php if($this->session->userdata('role') === 'management'):  ?>
            <li class="nav-item">
              <a class="nav-link <?php if($this->uri->segment(2)=='management'){?><?= 'active'; ?><?php }?>" href="<?= base_url('auth/admin')?>">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if($this->uri->segment(2)=='profile'){?><?= 'active'; ?><?php }?>" href="<?= base_url('auth/profile')?>">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Profile</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if($this->uri->segment(2)=='facilitylist'){?><?= 'active'; ?><?php }?>" href="<?= base_url('auth/facilitylist')?>">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Facility List</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if($this->uri->segment(2)=='reqlist'){?><?= 'active'; ?><?php }?>" href="<?= base_url('auth/reqlist')?>">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Requesting List</span>
              </a>
            </li>
          <?php endif;  ?>
          <?php if($this->session->userdata('role') === 'admin'):  ?>
          <li class="nav-item">
              <a class="nav-link <?php if($this->uri->segment(2)=='admin'){?><?= 'active'; ?><?php }?>" href="<?= base_url('auth/admin')?>">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if($this->uri->segment(2)=='profile'){?><?= 'active'; ?><?php }?>" href="<?= base_url('auth/profile')?>">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Profile</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if($this->uri->segment(2)=='userlist'){?><?= 'active'; ?><?php }?>" href="<?= base_url('auth/userlist')?>">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">User List</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if($this->uri->segment(2)=='facilitylist'){?><?= 'active'; ?><?php }?>" href="<?= base_url('auth/facilitylist')?>">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Facility List</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if($this->uri->segment(2)=='listrequest'){?><?= 'active'; ?><?php }?>" href="<?= base_url('auth/listrequest')?>">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Requesting List</span>
              </a>
            </li>
          <?php endif;  ?>  
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main"
              aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin"
                data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="<?= base_url('images/profile/'). $this->session->userdata('gambar') ;?>">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold"><?php if($this->session->userdata('nama_depan')) : ?>
                      <?= $this->session->userdata('nama_depan')." ".$this->session->userdata('nama_belakang'); ?>
                      <?php endif;  ?>	</span>
                  </div>
                </div>
              </a>
              <?php if($this->session->userdata('role') === 'admin'):  ?>
                <div class="dropdown-menu  dropdown-menu-right ">
                  <div class="dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Welcome!</h6>
                  </div>
                  <a href="<?= base_url('auth/profile') ?>" class="dropdown-item">
                    <i class="ni ni-single-02"></i>
                    <span>My profile</span>
                  </a>
                  <a href="<?= base_url('auth/userlist') ?>" class="dropdown-item">
                    <i class="ni ni-calendar-grid-58"></i>
                    <span>Activity</span>
                  </a>
                  <a href="<?= base_url('auth/listrequest') ?>" class="dropdown-item">
                    <i class="ni ni-support-16"></i>
                    <span>Support</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="<?= base_url('auth/logout'); ?>" class="dropdown-item">
                    <i class="ni ni-user-run"></i>
                    <span>Logout</span>
                  </a>
                </div>
              <?php endif;  ?>  
              <?php if($this->session->userdata('role') === 'management'):  ?>
                <div class="dropdown-menu  dropdown-menu-right ">
                  <div class="dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Welcome!</h6>
                  </div>
                  <a href="<?= base_url('auth/profile') ?>" class="dropdown-item">
                    <i class="ni ni-single-02"></i>
                    <span>My profile</span>
                  </a>
                  <a href="<?= base_url('auth/reqlist') ?>" class="dropdown-item">
                    <i class="ni ni-calendar-grid-58"></i>
                    <span>Activity</span>
                  </a>
                  <a href="<?= base_url('auth/facilitylist') ?>" class="dropdown-item">
                    <i class="ni ni-support-16"></i>
                    <span>Support</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="<?= base_url('auth/logout'); ?>" class="dropdown-item">
                    <i class="ni ni-user-run"></i>
                    <span>Logout</span>
                  </a>
                </div>
              <?php endif;  ?>  
            </li>
          </ul>
        </div>
      </div>
    </nav>