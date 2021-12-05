<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Tra</title>

    <!-- font awesome cdn link  -->
    
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
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>
<body></body>
    
<!-- header section starts  -->

<?= $navhome; ?>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <form action="<?= base_url('auth/requestinglist') ?>" method="post">
        <h3>Booking Your Facilities</h3>
        <?php if ($this->session->flashdata('gagal')):?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <span class="alert-icon"><i class="ni ni-notification-70"></i></span>
                <span class="alert-text"><strong>Danger!</strong> <?= $this->session->flashdata('gagal'); ?></span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <?php unset($_SESSION['gagal']);  ?>
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
        <div class="inputBox"> 
            <input type="hidden" name="gambar_kamar" value="<?= $det['gambar_kamar']; ?>"> 
            <input type="hidden" name="harga_kamar" value="<?= $det['harga_kamar'] ?>"> 
            <input type="hidden" name="id_kamar" value="<?= $det['id_kamar'] ?>">
            <input type="hidden" name="id_user" value="<?= $this->session->userdata('id_user') ?>">
            <input type="text" disabled value="<?= $this->session->userdata('nama_depan'); ?>" name="nama_depan1" placeholder="Nama Depan">
            <input type="text" disabled value="<?= $this->session->userdata('nama_belakang');?>" name="nama_belakang1" placeholder="Nama Belakang">
            <input type="hidden" name="nama_kamar" value="<?php echo $det['nama_kamar']; ?>">
            <input type="text" name="nama_kamar1" disabled value="<?php echo $det['nama_kamar']; ?>">
            <select name="nomor" id="nomor">
                <?php foreach ($value as $value) { ?>
                    <option><?php echo $value['nokam']; ?></option>
               <?php } ?>
            </select>
		<input type="text" autocomplete="off" id="from" name="from" placeholder="Tanggal Check-In" required>
		<input type="text "autocomplete="off" id="to" placeholder="Tanggal Check-Out"  name="to" required >
        </div>

        <input type="submit" value="Book!" class="btn">

    </form>

</section>

<script src="<?= base_url() ;?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Argon JS -->
    <!-- custom js file link  -->

</body>
    <script type="text/javascript">
var dates1 = [];
var dates2 = [];
var dates3 = [];
var range1 = [];
var range2 = [];
var range3 = [];
let kamar = 0;
<?php foreach($booking as $book) :?>
  <?php $no = $book['nomor_kamar']; ?>
  <?php $booked = $book['tanggal_book']; ?>
  <?php $outed = $book['tanggal_out'] ?>
   kamar = "<?php echo"$no"?>";
    if(kamar == 1){
    dates1.push("<?php echo"$booked"?>") ;
    dates1.push("<?php echo"$outed"?>") ;
    range1.push(dates1);
    dates1 = [];
    } 
    if (kamar == 2){
    dates2.push("<?php echo"$booked"?>") ;
    dates2.push("<?php echo"$outed"?>") ;
    range2.push(dates2);
    dates2 = [];
    } 
    if (kamar == 3){
    dates3.push("<?php echo"$booked"?>") ;
    dates3.push("<?php echo"$outed"?>") ;
    range3.push(dates3);
    dates3 = [];
    }
<?php endforeach;  ?>
var dateFormat = "dd/mm/yy";
var nomor = 1;

function ganti(){
    var no = $('#nomor').val();
     return no;
}
function disableDates(date){
          nomor = ganti();
          var dateRange = [];
          if(nomor == 1){
          for(i=0; i < range1.length; i++){
          for (var d = new Date(range1[i][0]); d <= new Date(range1[i][1]); d.setDate(d.getDate() + 1)) {
          dateRange.push($.datepicker.formatDate('yy-mm-dd', d));
          }
          }
          }
          if(nomor == 2){
          for(i=0; i < range2.length; i++){
          for (var d = new Date(range2[i][0]); d <= new Date(range2[i][1]); d.setDate(d.getDate() + 1)) {
          dateRange.push($.datepicker.formatDate('yy-mm-dd', d));
          }
          }
          }
          if(nomor == 3){
          for(i=0; i < range3.length; i++){
          for (var d = new Date(range3[i][0]); d <= new Date(range3[i][1]); d.setDate(d.getDate() + 1)) {
          dateRange.push($.datepicker.formatDate('yy-mm-dd', d));
          }
          }
          }
          var dateString = jQuery.datepicker.formatDate('yy-mm-dd', date);
          return [dateRange.indexOf(dateString) == -1];
}
  
    from = $( "#from" )
        .datepicker({
          beforeShowDay: disableDates,
          defaultDate: "+1",
          changeMonth: true,
          changeYear: true,
		      dateFormat:"dd/mm/yy",
          minDate: 0,
          maxDate: '+1Y',
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
      to = $( "#to" ).datepicker({
        beforeShowDay: disableDates,
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 1,
        minDate: '+1d',
		    dateFormat:"dd/mm/yy",
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
      });

      function getDate( element ) {
      var date;
      try {
        date = $.datepicker.parseDate( dateFormat, element.value );
      } catch( error ) {
        date = null;
      }
      return date;
    }
    
  </script>
</html>