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

<body>
    <?= $navhome ?>

    <!-- header section ends -->

    <!-- home section starts  -->
    <section class="home" id="home">
    <div class="box">
                    <div class="content">
                        <br>
                        <br>
                        <br>
                        <h3>Hotel Transylvania</h3>
                        <p><strong>Hotel Transylvania is the best thing that could happen to you. Book your hotel
                            in Hotel Transylvania app, We have many offers that could be convinient to you.
                            Wait for what again lah? Let's goooo! Explore the new world with us!</strong>
                        </p>
                        <a href="#services" class="btn">Our Services</a>
                    </div>
    </div>

    </section>

    <!-- home section ends -->

    <!-- services section starts  -->

    <section class="services" id="services">
        <br> <br>
        <h1 class="heading"> our <span>services</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="<?= base_url('images/1.png');?>" width="100" height="100" alt="">
                <h3>Hotels</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam distinctio ipsa ab cum error quas fuga ad? Perspiciatis, autem officiis?</p>
                <a href="#featured" class="btn">Book Now</a>
            </div>

            <div class="box">
                <img src="<?= base_url('images/2.png');?>" width="100" height="100" alt="">
                <h3>Restaurant</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam distinctio ipsa ab cum error quas fuga ad? Perspiciatis, autem officiis?</p>
                <a href="#featured" class="btn">Book Now</a>
            </div>

            <div class="box">
                <img src="<?= base_url('images/3.png');?>" width="100" height="100" alt="">
                <h3>Ballroom</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam distinctio ipsa ab cum error quas fuga ad? Perspiciatis, autem officiis?</p>
                <a href="#featured" class="btn">Book Now</a>
            </div>

        </div>

    </section>

    <!-- services section ends -->

    <!-- featured section starts  -->

    <section class="featured" id="featured">
    <br> <br>
        <h1 class="heading"> <span>featured</span> Facilities </h1>

        <div class="box-container">
        <?php foreach ($Facility as $row) {
            $name = $row['nama_kamar'];
			$base_url = base_url();
			$detail = $base_url;
			$id = $row['id_kamar']; ?>
            <div class="box">
                <div class="image-container">
                    <img src="<?= base_url('images/fasilitas/'). $row['gambar_kamar']; ?>" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-film">
                            <h3>1</h3>
                        </a>
                        <a href="#" class="fas fa-camera">
                            <h3>4</h3>
                        </a>
                    </div>
                </div>
                <div class="content">
                    <div class="price">
                        <h3><?= "Rp.". ' '. $row['harga_kamar']; ?></h3>
                        <a href="#contact" class="fas fa-heart"></a>
                        <a href="#contact" class="fas fa-envelope"></a>
                        <a href="#contact" class="fas fa-phone"></a>
                    </div>
                    <div class="location">
                        <h3><?= $row['nama_kamar']; ?></h3>
                        <p>Scientia Boulevard, Hotel Transylvania, 400987</p>
                    </div>
                    <div class="buttons">
                        <a href="<?= base_url('auth/booking/').$name?>" class="btn">Book</a>
                        <a href="<?= base_url('auth/detailroom/').$name?>" class="btn">View Details</a>
                    </div>
                </div>
            </div>

            <?php } ?>

        </div>

    </section>

    <!-- featured section ends -->

    <!-- agents section starts  -->
   
    <section class="agents" id="agents">
            <br> <br> 
        <h1 class="heading"> professional <span>agents</span> </h1>

        <div class="box-container">

            <div class="box">

                <img src="<?= base_url('images/author/jezreel.jpg'); ?>" alt="">
                <h3>Jezreel Kosasih</h3>
                <span>agent</span>
                <div class="share">
                    <a href="#!" class="fab fa-facebook-f"></a>
                    <a href="#!" class="fab fa-twitter"></a>
                    <a href="https://www.instagram.com/jezreelkosasih13/" class="fab fa-instagram"></a>
                    <a href="#!" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <img src="<?= base_url('images/author/richie.jpg'); ?>" alt="">
                <h3>Richie Darmawan Oey</h3>
                <span>agent</span>
                <div class="share">
                    <a href="#!" class="fab fa-facebook-f"></a>
                    <a href="#!" class="fab fa-twitter"></a>
                    <a href="https://www.instagram.com/richieoey/" class="fab fa-instagram"></a>
                    <a href="#!" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <img src="<?= base_url('images/author/rommy.jpg'); ?>" alt="">
                <h3>Rommy Kusuma Jaya</h3>
                <span>agent</span>
                <div class="share">
                    <a href="#!" class="fab fa-facebook-f"></a>
                    <a href="#!" class="fab fa-twitter"></a>
                    <a href="https://www.instagram.com/rommykj_/" class="fab fa-instagram"></a>
                    <a href="#!" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <img src="<?= base_url('images/author/vincent.jpg'); ?>" alt="">
                <h3>Vincent Gunawan</h3>
                <span>agent</span>
                <div class="share">
                    <a href="#!" class="fab fa-facebook-f"></a>
                    <a href="#!" class="fab fa-twitter"></a>
                    <a href="https://www.instagram.com/vinboy_huang/" class="fab fa-instagram"></a>
                    <a href="#!" class="fab fa-linkedin"></a>
                </div>
            </div>

        </div>

    </section>

    <!-- agents section ends -->

    <!-- contact section starts  -->
    <section class="contact" id="contact">
    <br> <br>
        <h1 class="heading"> <span>contact</span> us </h1>

        <div class="icons-container">

            <div class="icons">
                <img src="<?= base_url('images/icon-1.png'); ?>" alt="">
                <h3>phone number</h3>
                <p>+123-456-7890</p>
                <p>+111-222-3333</p>
            </div>

            <div class="icons">
                <img src="<?= base_url('images/icon-2.png'); ?>" alt="">
                <h3>email address</h3>
                <a href="mailto:hoteltransylvania30114@gmail.com" style="color: #000000; font-size: 15px;">hoteltransylvania30114@gmail.com</a>
                <br> <br>
                <a href="mailto:jezreelkosasih@gmail.com" style="color: #000000; font-size: 15px;">jezreelkosasih@gmail.com</a>
            </div>

            <div class="icons">
                <img src="<?= base_url('images/icon-3.png'); ?>" alt="">
                <h3>office address</h3>
                <p>Gang Tunggal 1, Palembang, 30114</p>
            </div>

        </div>

        <div class="row">

        <form method="post" autocomplete="off" name="google-sheet">
                <div class="inputBox">
                    <input type="text" name="name" placeholder="name" value="<?=  $this->session->userdata('nama_depan'). ' ' . $this->session->userdata('nama_belakang') ?>">
                    <input type="number" name="number" placeholder="number">
                </div>
                <div class="inputBox">
                    <input type="email" name="email" placeholder="email" value="<?= $this->session->userdata('email')?>">
                    <input type="text" name="subject" placeholder="subject">
                </div>
                <div class="inputBox">
                <input type="text" name="message" placeholder="message" id="message">
                </div>
                <input type="submit" value="send message" class="btn">
        </form>
        <iframe
        width="450px"
        height="400px"
        frameborder="0" style="border:0"
        src="https://www.google.com/maps/embed/v1/view?key=AIzaSyB6AEV5hQ22UnaOnUrOuGv-7etcSO_w8ek&center=-2.9726937,104.7574747&zoom=20&maptype=satellite" allowfullscreen>
        </iframe>
        </div>

    </section>

    <!-- contact section ends -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="footer-container">

            <div class="box-container">

                <div class="box">
                    <h3>branch location</h3>
                    <a href="#!">Kenten</a>
                    <a href="#!">Rajawali</a>
                    <a href="#!">Cinde</a>
                    <a href="#!">Palembang Icon</a>
                    <a href="#!">Ampera</a>
                </div>

                <div class="box">
                    <h3>quick links</h3>
                    <a href="#home">home</a>
                    <a href="#services">services</a>
                    <a href="#featured">featured</a>
                    <a href="#agents">agents</a>
                    <a href="#contact">contact</a>
                </div>

                <div class="box">
                    <h3>extra links</h3>
                    <a href="<?= base_url('auth/profuser') ?>">my account</a>
                    <a href="#">my favorite</a>
                    <a href="<?= base_url('auth/requser'); ?>">my list</a>
                </div>

                <div class="box">
                    <h3>follow us</h3>
                    <a href="#agents">facebook</a>
                    <a href="#agents">twitter</a>
                    <a href="#agents">instagram</a>
                    <a href="#agents">linkedin</a>
                </div>

            </div>

            <div class="credit">created by <span> Kelompok 3 </span> | all rights reserved! </div>

        </div>

    </section>

    <!-- footer section ends -->







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