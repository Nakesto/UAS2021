<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Transylvania</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

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
<style>
    .tabel2{
        position: absolute;
        width: 100%;
        margin-top: 9%;
    }
    @media (max-width:768px) {
        .tabel2{
        position: absolute;
        width: 100%;
        margin-top: 20%;
    }

    @media (max-width:450px) {

    .tabel2{
        position: absolute;
        width: 100%;
        margin-top: 30%;
    }

}
</style>
<body>
<?= $navhome; ?>

<div class="tabel2">
<?= $tabelrequser; ?>
</div>



<script src="<?= base_url() ;?>assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?= base_url() ;?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ;?>assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="<?= base_url() ;?>assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="<?= base_url() ;?>assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="<?= base_url() ;?>assets/js/argon.js?v=1.2.0"></script>

  <script type="text/javascript">
    const scriptURL = 'https://script.google.com/macros/s/AKfycbx9W3muD_zbTRKZh_GXC8DkDQwCG13s4nR_0Zc_2gTtypE4sT-OodCUNSzkaHM1F68b/exec'
        const form = document.forms['google-sheet']
        
        form.addEventListener('submit', e => {
            e.preventDefault()
            fetch(scriptURL, { method: 'POST', body: new FormData(form)})
            .then(response => alert("You have successfully submitted."))
            .catch(error => console.error('Error!', error.message))
        })
    </script>




    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="<?= base_url('assets/'); ?>js/script.js"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="<?= base_url('assets/'); ?>js/landing.js"></script>

</body>

</html>