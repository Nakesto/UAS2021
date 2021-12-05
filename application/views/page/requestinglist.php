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
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/argon.css" type="text/css">
  <style>
  .scaled {
        transform: scale(9);
   }
  </style>
</head>
<?= $navbar ?>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Tables</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="<?= base_url('auth/listrequest'); ?>">Requesting List</a></li>
                </ol>
              </nav>
            </div>
          </div>
          <?php if ($this->session->flashdata('validasi')):?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <span class="alert-icon"><i class="ni ni-notification-70"></i></span>
                <span class="alert-text"><strong>Danger!</strong> <?= $this->session->flashdata('validasi'); ?></span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <?php unset($_SESSION['validasi']);  ?>
                <?php endif;  ?>

                <?php if ($this->session->flashdata('pesan')):?>   
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                  <span class="alert-text"><strong>Success!</strong> <?= $this->session->flashdata('pesan'); ?></span>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  </div>  
                <?php unset($_SESSION['pesan']);  ?>
                <?php endif;  ?>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">Nama User</th>
                    <th scope="col" class="sort" data-sort="name">Nomor Kamar</th>
                    <th scope="col" class="sort" data-sort="name">Nama Kamar</th>
                    <th scope="col" class="sort" data-sort="budget">Tanggal Booking</th>
                    <th scope="col" class="sort" data-sort="status">Tanggal Check-Out</th>
                    <th scope="col" class="sort" data-sort="status">status</th>
                    <th scope="col" class="sort" data-sort="status"></th>
                    
                  </tr>
                </thead>
                <tbody class="list">
                    <?= $tabelrequest; ?>
                </tbody>
              </table>
            </div>
            <!-- Card footer -->
            <div class="card-footer py-4">
              <nav aria-label="...">
              </nav>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
              &copy; 2021 <a  class="font-weight-bold ml-1" target="_blank">Hotel Transylvania</a>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a  class="nav-link" target="_blank">Hotel Transylvania</a>
              </li>
              <li class="nav-item">
                <a  class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a  class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a  class="nav-link" target="_blank">MIT License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
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