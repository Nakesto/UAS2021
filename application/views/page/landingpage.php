<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- font awesome file link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>

  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />


  <!-- custom css file link  -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/landing.css"/>
    
  <title>Hotel Transylvania</title>
</head>
<body>
  
<header class="header ms-2">
    
    <a href="#" class="logo"> 
         <img src="<?= base_url('images/hotel_transylvania.png'); ?>" width="200" height="80" alt="">          
    </a>

    <nav class="navbar">
        <div id="nav-close" class="fas fa-times"></div>
        <a href="#home">home</a>
        <a href="<?= base_url('register'); ?>">register</a>     
        <a href="<?= base_url('login'); ?>">login</a>
    </nav>

    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
    </div>

</header>


<section class="home" id="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

        <div class="swiper-slide">
        <div class="box" style="background: url('images/hotel1.jpeg') no-repeat;">
                    <div class="content">
                        <span>Looking For What lah? </span>
                        <h3 style="color: #4481eb;">Hotel?</h3>
                        <p>Hotel Transylvania is the best thing that could happen to you. Book your hotel
                            in Hotel Transylvania app, We have many offers that could be convinient to you.
                            Wait for what again lah? Let's goooo! Explore the new world with us!
                        </p>
                        <a href="<?= base_url('login'); ?>" class="btn">get started</a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box second" style="background: url('images/hotel2.jpeg') no-repeat;">
                    <div class="content">
                        <span>Not Enough?</span>
                        <h3 style="color: #ffffff;">Restaurant?</h3>
                        <p>We also provide restaurant, so don't worry! Our service is top markotop lah!
                            Our customer so happy lah! Don't waste your time to be confused, use our website to
                            book your dream vacation.
                        </p>
                        <a href="<?= base_url('login'); ?>" class="btn">get started</a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box" style="background: url(images/hotel3.jpeg) no-repeat;">
                    <div class="content">
                        <span>Calm Down and Take</span>
                        <h3 style="color: #ffffff;">Staycation</h3>
                        <br>
                        <p style="color: #ffffff;">Tired at work? Need to rest on weekend? We are the answer to your problem. We provides many
                        service while you were on your staycation. Check our beneficial offers! Let's goooo</p>
                        <a href="<?= base_url('login'); ?>" class="btn">get started</a>
                    </div>
                </div>
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>


<!-- jquery file cdn link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="<?= base_url('assets/'); ?>js/landing.js"></script>

</body>
</html>