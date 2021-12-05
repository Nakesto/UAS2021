<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Hotel Transylvania</title>
  <!-- Favicon -->
  <!-- <link rel="icon" href="assets/img/brand/favicon.png" type="image/png"> -->
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/argon.css?v=1.2.0" type="text/css">
  <style>
  .scaled {
        transform: scale(9);
   }
input[type="file"] {
    display: none;
}

  </style>
</head>

<body>
  <?= $navbar; ?>
    <!-- Header -->
    <!-- Header -->
    <div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url(../assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Hello! <?php if($this->session->userdata('nama_depan')) :?> <?= $this->session->userdata('nama_depan') . ' ' . $this->session->userdata('nama_belakang') ?> </h1>
            <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made with your work and manage your projects or assigned tasks</p>
            <?php if ($this->session->flashdata('validasi1')):?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <span class="alert-icon"><i class="ni ni-notification-70"></i></span>
                <span class="alert-text"><strong>Danger!</strong> <?= $this->session->flashdata('validasi1'); ?></span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <?php unset($_SESSION['validasi1']);  ?>
                <?php endif;  ?>

                <?php if ($this->session->flashdata('pesan1')):?>   
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                  <span class="alert-text"><strong>Success!</strong> <?= $this->session->flashdata('pesan1'); ?></span>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  </div>  
                <?php unset($_SESSION['pesan1']);  ?>
            <?php endif;  ?>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <?php $action=base_url('editprofile/edit');
                    echo form_open_multipart($action);
            ?>
        <div class="container-fluid mt--6">


          <div class="row">
            <div class="col-xl-4 order-xl-2">
              <div class="card card-profile">
                <img src="../assets/img/theme/img-1-1000x600.jpg" alt="Image placeholder" class="card-img-top">
                <div class="row justify-content-center">
                  <div class="col-lg-3 order-lg-2">
                    <div class="card-profile-image">
                      <a href="#">
                        <img src="<?= base_url('images/profile/'). $this->session->userdata('gambar') ;?>" class="rounded-circle">
                      </a>
                    </div>
                  </div>
                </div>
                <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                  <div class="d-flex justify-content-between">
                    <a href="#" class=" mr-4 "></a>
                    <label class="btn btn-sm btn-default float-right">
                      <input name="userfile" id="userfile" type="file"/>
                      Ubah foto
                    </label>
                  </div>
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col">
                      <div class="card-profile-stats d-flex justify-content-center">
                        <div>
                          <span class="heading">0</span>
                          <span class="description">Friends</span>
                        </div>
                        <div>
                          <span class="heading">0</span>
                          <span class="description">Photos</span>
                        </div>
                        <div>
                          <span class="heading">0</span>
                          <span class="description">Comments</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="text-center">
                    <h5 class="h3">
                    <?= $this->session->userdata('nama_depan') . ' ' . $this->session->userdata('nama_belakang') ?><span class="font-weight-light"></span>
                    </h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-8 order-xl-1">
              <div class="card">
                <div class="card-header">
                  <div class="row align-items-center">
                    <div class="col-8">
                      <h3 class="mb-0">Edit profile </h3>
                    </div>
                    <div class="col-4 text-right">
                    </div>
                  </div>
                </div>
                <div class="card-body">
                <form action="<?=base_url('Editprofile/edit') ?>" method="post">
                  <input type="hidden" name="id" value="<?= $this->session->userdata('id_user'); ?> ">
                  <input type="hidden" name="role" id="input-username" class="form-control" placeholder="Role" value="<?= $this->session->userdata('role') ?>">
                    <h6 class="heading-small text-muted mb-4">User information</h6>
                    <div class="pl-lg-4">
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label" for="input-username">Role</label>
                            <input type="text" disabled name="role1" id="input-username" class="form-control" placeholder="Role" value="<?= $this->session->userdata('role') ?>">
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label" for="input-email">Email address</label>
                            <input type="email" id="input-email" name="email" class="form-control" value="<?=$this->session->userdata('email') ?>">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label" for="input-first-name">First name</label>
                            <input type="text" id="input-first-name" name="nama-depan" class="form-control" placeholder="First name" value="<?= $this->session->userdata('nama_depan') ?>">
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label" for="input-last-name">Last name</label>
                            <input type="text" id="input-last-name" name="nama-belakang" class="form-control" placeholder="Last name" value="<?= $this->session->userdata('nama_belakang') ?>">
                          </div>
                        </div>
                        <div class="col-lg-6">
                            <input type="submit" class="btn btn-neutral" value="Submit">
                        </div>
                      </div>
                    </div>
                <hr class="my-4" />
                    <!-- Address -->
          <!-- Footer -->
          <footer class="footer pt-0">
          </footer>
        </div>
      </div>
  </form>
  <?php endif; ?>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="<?= base_url() ;?>assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?= base_url() ;?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ;?>assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="<?= base_url() ;?>assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="<?= base_url() ;?>assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="<?= base_url() ;?>assets/js/argon.js?v=1.2.0"></script>
</body>

</html>