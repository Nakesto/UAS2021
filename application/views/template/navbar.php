<header>

<a href="<?= base_url('auth/user/')?>" class="logo"> 
     <img src="<?= base_url('images/hotel_transylvania.png'); ?>" width="200" height="80" alt="">          
</a>
    <nav class="navbar">
        <a  class=" <?php if($this->uri->segment(1, 0)=='home'){?><?= 'active'; ?><?php }?>" href="<?= base_url('auth/user/')?>#home">Home</a>
        <a  class=" <?php if($this->uri->segment(1, 0)=='services'){?><?= 'active'; ?><?php }?>" href="<?= base_url('auth/user/')?>#services">Services</a>
        <a  class=" <?php if($this->uri->segment(1, 0)=='featured'){?><?= 'active'; ?><?php }?>" href="<?= base_url('auth/user/')?>#featured">Featured</a>
        <a  class=" <?php if($this->uri->segment(1, 0)=='agents'){?><?= 'active'; ?><?php }?>" href="<?= base_url('auth/user/')?>#agents">Agents</a>
        <a  class=" <?php if($this->uri->segment(1, 0)=='contact'){?><?= 'active'; ?><?php }?>" href="<?= base_url('auth/user/')?>#contact">Contact</a>
    </nav>

    <div class="icons">
        <div id="menu-bars" class="fas fa-bars"></div>
    </div>

    <ul class="navbar-nav align-items-center  ml-auto ml-md-0">
        <li class="nav-item dropdown">
          <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center"></div>
              <span class="avatar avatar-sm rounded-circle">
                <img alt="image placeholder" src="<?= base_url('images/profile/'). $this->session->userdata('gambar') ;?>">
              </span>
              <div class="media-body ml-2 d-none d-lg-block">
                <span class="mb-0 font-weight-bold" style="font-size: 15px; text-align: center;"> <?php if($this->session->userdata('nama_depan')) : ?>
                <?= $this->session->userdata('nama_depan'). ' ' . $this->session->userdata('nama_belakang') ?> 
              <?php endif; ?></span>
              </div>
            </div>
          </a>
          <div class="dropdown-menu  dropdown-menu-right ">
            <div class="dropdown-header noti-title">
            </div>
            <div class="dropdown-divider"></div>
                <a href="<?=base_url('auth/profuser')?>" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>Profile</span>
            <div class="dropdown-divider"></div>
                <a href="<?=base_url('auth/requser')?>" class="dropdown-item">
                <i class="fa fa-list"></i>
                <span>Request List</span>
            <div class="dropdown-divider"></div>
            <a href="<?= base_url('Auth/logout') ?>" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </ul>

</header>