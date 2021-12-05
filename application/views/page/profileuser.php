<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/profile.css">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <title>Profile Card</title>
</head>
<style>
    .main .image {
	position: relative;
	width: 110px;
	height: 110px;
	border-radius: 50%;
	background: url('<?= base_url('images/profile/'). $this->session->userdata('gambar') ;?>') no-repeat center / cover;
	border: 4px solid #00d8fe;
	margin-bottom: 2px;
	overflow: hidden;
	cursor: pointer;
}
input[type="file"] {
    display: none;
}
</style>
<body>
<?php $action=base_url('editprofile/edit2');
                    echo form_open_multipart($action);
            ?>
    <div class="modal">
        <img src="<?= base_url('images/profile/'). $this->session->userdata('gambar') ;?>" alt="">
        <div class="close"></div>
    </div>
    
    <div class="controller">
        <div class="card">
            <div class="header">
                <a href="<?= base_url('auth/user'); ?>">
                <div class="hamburger-menu">
                    <div class="center">
                    </div>
                </div>
                </a>
                <a class="mail">
                <label class="btn-ubah">
                <i class="fas fa-edit"></i><input name="userfile" id="userfile" type="file" />
                      Ubah foto
                    </label>
                </a>
                <div class="main">
                    <div class="image">
                        <div class="hover">
                            <i class="fas fa-camera fa-2x"></i>
                        </div>
                    </div>
                    <h3 class="name"><?= $this->session->userdata('nama_depan'). ' ' . $this->session->userdata('nama_belakang') ?></h3>
                    <h3 class="sub-name"><?= '@'.$this->session->userdata('nama_depan') ?></h3>
                </div>
            </div>
            <div class="content">
                <div class="left">
                    <input type="hidden" name="role" value="<?= $this->session->userdata('role') ?>">
                    <input type="hidden" name="id" value="<?= $this->session->userdata('id_user') ?>">
                    <div class="about-container">
                        <label for="namadepan" class="title">Nama Depan</label>
                        <input type="text" required name="nama-depan" class="input-text" value="<?= $this->session->userdata('nama_depan') ?>">
                    </div>
                    <div class="about-container">
                        <label for="Nama Belakang" class="title">Nama Belakang</label>
                        <input type="text"  name="nama-belakang" class="input-text" value="<?= $this->session->userdata('nama_belakang') ?>">
                    </div>
                    <div class="about-container">
                        <label for="email" class="title">Email</label>
                        <input type="text" required name="email" class="input-text" value="<?= $this->session->userdata('email') ?>">
                    </div>
                    <?php if($this->session->flashdata('pesan2')) : ?>
                        <p style="color:lightgreen; margin-top: 3px;"><?= $this->session->flashdata('pesan2'); ?></p>
                        <?php unset($_SESSION['pesan2']);  ?>
                    <?php endif;  ?>
                    <?php if($this->session->flashdata('validasi2')) : ?>
                        <p style="color:red; margin-top: 3px;"><?= $this->session->flashdata('validasi2'); ?></p>
                    <?php unset($_SESSION['validasi2']);  ?>
                    <?php endif;  ?>
                    <div class="icons-container">
                        <a href="#" class="icon">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-google-plus-g"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                    <div class="buttons-wrap">
                        <div class="follow-wrap">
                            <button type="submit" class="follow">Edit</button>
                        </div>
                        <div class="share-wrap">
                            <button class="share" type="reset">Reset</button>
                        </div>
                    </div>
                </div>

                <div class="right">
                    <div>
                        <h3 class="number">0</h3>
                        <h3 class="number-title">Posts</h3>
                    </div>
                    <div>
                        <h3 class="number">0</h3>
                        <h3 class="number-title">Following</h3>
                    </div>
                    <div>
                        <h3 class="number">0</h3>
                        <h3 class="number-title">Followers</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
    <script src="<?=base_url('assets/')?>js/profile.js"></script>
</body>
</html>