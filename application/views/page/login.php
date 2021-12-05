<?php
define('SITE_KEY', '6LfYmXMdAAAAAGVupxfa5eTVvJPQrydQE20lLVBb');
define('SECRET_KEY', '6LfYmXMdAAAAAM-W7A-uAjZ3E6HMepc9C32Gene9');	
?>

<!DOCTYPE html>
<html lang="en">
<?php 
      $segment = $this->uri->segment(1); 
?>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/login.css">
    <title>Hotel Transylvania</title>
</head>

<body>
    <div class="container <?php if($segment=='register'){?><?= 'sign-up-mode'; ?><?php }?>">
        <div class="forms-container">
            <div class="signin-signup">

                <form action="<?= base_url('login'); ?>" method="post" class="sign-in-form">
                    <h2 class="title">Sign in</h2>
                    <?php if($this->session->flashdata('error2')){
                        echo "<h5 style='color:red;'>".$this->session->flashdata('error2')."</h5>";
                        unset($_SESSION['error2']);
                    }  ?>
                    <?php if($this->session->flashdata('error3')){
                        echo "<h5 style='color:red;'>".$this->session->flashdata('error3')."</h5>";
                        unset($_SESSION['error3']);
                    }  ?>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" autocomplete="off" name="email2" placeholder="Email" />
                    </div>
                    <h5 style="color:red;"><?= form_error('email2');?></h5>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" autocomplete="off" name="password2" placeholder="Password" />
                    </div>
                    <h5 style="color:red;"><?= form_error('password2');?></h5>
                    <input type="submit" value="Login" class="btn solid" />
                    <p class="social-text">Or Sign in with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>

                <form action="<?= base_url('register/validasi'); ?>" method="post" class="sign-up-form"> 
                    <h2 class="title">Sign up</h2>
                    <?php if($this->session->flashdata('error')){
                        echo "<h5 style='color:red;'>".$this->session->flashdata('error')."</h5>";
                        unset($_SESSION['error']);
                    }  ?>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="nama-depan" autocomplete="off" placeholder="Nama Depan" value="<?php echo set_value('nama-depan'); ?>" />
                    </div>
                    <h5 style="color:red;"><?= form_error('nama-depan');?></h5>
					<div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="nama-belakang" autocomplete="off" placeholder="Nama Belakang" value="<?php echo set_value('nama-belakang'); ?>"/>
                    </div>
                    <h5 style="color:red;"><?= form_error('nama-belakang');?></h5>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" autocomplete="off" placeholder="Email" value="<?php echo set_value('email'); ?>"/>
                    </div>
                    <h5 style="color:red;"><?= form_error('email');?></h5>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" autocomplete="off" placeholder="Password" />
                    </div>
                    <h5 style="color:red;"><?= form_error('password');?></h5>
                    <div class="g-recaptcha" data-sitekey="6LeC6GIcAAAAAKXaYqv3MmBH1EZZPH7qhFhCIvPW"></div>
                    <?php if($this->session->flashdata('captcha')){
                        echo "<h5 style='color:red;'>".$this->session->flashdata('captcha')."</h5>";
                        
                        unset($_SESSION['captcha']);
                    }  ?>
                    <input type="submit" class="btn" value="Sign up" />
                    <p class="social-text">Or Sign up with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here ?</h3>
                    <p>
                        Join us to get a special reward and price by signing up to Hotel Transylvania !
                    </p>
                    <button class="btn transparent sign-up-mode" id="sign-up-btn">
                        Sign up
                    </button>
                </div>
                <img src="<?=base_url()?>images/log.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us ?</h3>
                    <p>
                        Sign in here to book a hotel room and get rewarded with points that can be redeemed !
                    </p>
                    <button class="btn transparent sign-up-mode" id="sign-in-btn">
                        Sign in
                    </button>
                </div>
                <img src="<?=base_url()?>images/register.svg" class="image" alt="" />
            </div>
        </div>
    </div>

    <script src="<?= base_url('assets/'); ?>js/login.js"></script>
</body>

</html>