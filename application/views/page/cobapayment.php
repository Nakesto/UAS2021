<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="<?= base_url("assets")?>/css/payment2.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css
">

    <!-- ===== BOX ICONS ===== -->

    <title>Payment</title>
</head>
<style>
    .button {
  background-color: #008CBA; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  width: 95%;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}


.button1:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}


</style>

<body>
    <div class="container">
        <div class="left">
            <div class="headphone">
                <img src="<?= base_url('images/fasilitas/'). $book['gambar_kamar']; ?>"  height="400"alt="">
            </div>
            <h4 class="title"><?= $book['nama_kamar']?></h4>
            <h2 class="price"><?= "Rp." . $book['harga_kamar']?></h2>
        </div>
        <div class="right">
            <h1 class="heading"><strong>pembayaran</strong></h1>
            <div class="mantap">
                <div class="row">
                    <div class="select-card">
                    <img src="<?= base_url('images/');?>mc.png" alt="">
                    <img src="<?= base_url('images/');?>vi.png" alt="">
                    <img src="<?= base_url('images/');?>pp.png" alt="">
                    </div>
                </div>
                <div class="row">
                <i class="fa fa-user"></i><p style="color: white;"><?= "Nama User: " . $this->session->userdata('nama_depan') . ' ' . $this->session->userdata('nama_belakang') . "<br>" ?></p>
                </div>
                <div class="row">
                <i class="fas fa-envelope-open-text"></i><p style="color: white;"><?= "Email: " . $this->session->userdata('email') . "<br>" ?></p>
                </div>
                <div class="row">
                <i class="fas fa-calendar-week"></i><p style="color: white;"><?= "Tanggal Booking: " . $book['tanggal_book'] . " sampai " . $book['tanggal_out'] ?></p>
                </div>
                <br>
                <hr />
                <div class="row">
                <i  style=" font-weight: bold; color: white; font-size: 20px;" class="fas fa-money-check-alt"></i><p style=" font-weight: bold; font-size: 20px; color: white;"> Total pembayaran: <?="Rp. " .$totalharga ?>
                </div>
            </div>
            <button onclick="location.href='<?=base_url('auth/user'); ?>'" class="button button1"> <i style="font-size: 32; font-weight: bold;"class="far fa-money-bill-alt"> Bayar </i></button>
        </div>
    </div>

</html>