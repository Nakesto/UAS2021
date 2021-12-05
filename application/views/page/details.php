<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/details.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
<!-- Icons -->
<link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/nucleo/css/nucleo.css" type="text/css">
<link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
<!-- Page plugins -->
<!-- Argon CSS -->
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/argon.css?v=1.2.0" type="text/css">

<!-- custom css file link  -->
<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style.css">


</head>


<body>
   
<?= $navhome ?>

<div class="box-container">

    <div class="box">
        <div class="image-container">

            <div class="big-image">
                <img name="gambar_kamar" src="<?= base_url('images/fasilitas/'). $Details['gambar_kamar']; ?>" alt="">
            </div>
        </div>

        <div class="content">	
            <h3 class="title"><?= $Details['nama_kamar'];?></h3>
            <div class="price"><?= "Rp." . ' '.  $Details['harga_kamar'];?></div>
            <p><?= $Details['deskripsi'];?></p>
                <div class="dropDown">
                    
                </div>

                <div class="quantity">

                </div>
              <a href="<?= base_url('auth/booking/') . $Details['nama_kamar']; ?>"><button class="btn"> <i class="fas fa-shopping-cart"></i> Booking </button></a>
            </form>
           
        </div>

    </div>

</div>    


<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="<?= base_url('assets/')?>js/details.js"></script>


<script src="<?= base_url() ;?>assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?= base_url() ;?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ;?>assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="<?= base_url() ;?>assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="<?= base_url() ;?>assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="<?= base_url() ;?>assets/js/argon.js?v=1.2.0"></script>




    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="<?= base_url('assets/'); ?>js/script.js"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="<?= base_url('assets/'); ?>js/landing.js"></script>

</body>
</html>