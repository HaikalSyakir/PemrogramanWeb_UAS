<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>WEBSITE KOPI</title>
    <!-- custom css link -->
    <link rel="stylesheet" type="text/css" href="home.css" />
    <!-- font awesome cdn link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
  </head>
  <body>
    <!-- header section start -->
    <div class="header" id="home">
      <nav id="navbar">
        <a href="#" class="logo"><img src="img/logo.webp" /></a>

        <div class="links" id="nav">
          <a href="#home">homne</a>
          <a href="#about">about</a>
          <a href="#blog">blog</a>
          <a href="#service">service</a>
          <a href="#contact">contact</a>
          <a href="login.php">Login</a>
        </div>

        <div class="fas fa-bars" id="menu-btn" onclick="openmenu()"></div>
        <div class="fa-solid fa-xmark" id="close" onclick="closemenu()"></div>
      </nav>

      <div class="content">
        <h3>SEKARANG ANDA BISA MERASAKAN ENERGI</h3>
        <h1>awali hari Anda dengan<br />kopi hitam</h1>
        <button class="btn">Beli Sekarang</button>
      </div>
    </div>

    <!-- header section ends -->

    <!-- about section start -->
    <section class="about" id="about">
      <div class="container">
        <div class="image">
          <img src="img/play.webp" />
        </div>

        <div class="about-content">
          <h4>PROSES PEMBUATAN KOPI LANGSUNG.</h4>
          <h1>
            kami menyiarkan langsung pembuatan kopi <br />
            kami
          </h1>
          <h3>
            kami di sini untuk mendengarkan dari Anda memberikan keunggulan
          </h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do<br />
            eiusmod tempor incididunt ut labore et dolore magna aliqua.<br />
            Ut enim ad minim .
          </p>
          <img src="img/sign.webp" />
        </div>
      </div>
    </section>
    <!-- about section end -->

    <!-- blog section start -->

    <section class="blog" id="blog">
      <h1 class="heading">kita <span>Blog</span></h1>
      <p class="heading-description">
        baca blog kami dan ketahui lebih banyak tentang artikel pembaruan
        terbaru kami..
      </p>

      <div class="container">
        <div class="post">
          <div class="blog-img">
            <img src="img/post1.jpg" />
            <span>24<br />JUN</span>
          </div>

          <div class="blog-content">
            <h3>BY ADMIN | <span> Kopi Puncak </span></h3>
            <h1>semua jenis kue, puff, kue kering</h1>
          </div>
        </div>

        <div class="post">
          <div class="blog-img">
            <img src="img/post2.jpg" />
            <span>24<br />JUN</span>
          </div>

          <div class="blog-content">
            <h3>BY ADMIN | <span> COPI </span></h3>
            <h1>semua jenis kue, puff, kue kering</h1>
          </div>
        </div>

        <div class="post">
          <div class="blog-img">
            <img src="img/post3.jpg" />
            <span>24<br />JUN</span>
          </div>

          <div class="blog-content">
            <h3>BY ADMIN | <span> CAKE </span></h3>
            <h1>semua jenis kue, puff, kue kering</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="blog" id="blog">
      <h1 class="heading">Produk <span>Kami</span></h1>
      <p class="heading-description">
        Kami Memberikan dan membuat kopi sesuai keinginan anda.
      </p>

      <div class="container">
        <div class="post">
          <div class="blog-img">
            <img src="img/1.jpg" />
          </div>
          <div class="blog-content">
            <h1>semua jenis kue, puff, kue kering</h1>
            <i class="bi bi-cart-check-fill"></i>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              fill="currentColor"
              class="bi bi-cart-check-fill"
              viewBox="0 0 16 16">
              <path
                d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z" />
            </svg>
          </div>
        </div>

        <div class="post">
          <div class="blog-img">
            <img src="img/2.jpg" />
          </div>

          <div class="blog-content">
            <h3>Kopi <span> Bemotif</span></h3>
            <h1>semua jenis kue, puff, kue kering</h1>
            <i class="bi bi-cart-check-fill"></i>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              fill="currentColor"
              class="bi bi-cart-check-fill"
              viewBox="0 0 16 16">
              <path
                d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z" />
            </svg>
          </div>
        </div>

        <div class="post">
          <div class="blog-img">
            <img src="img/4.jpg" />
          </div>

          <div class="blog-content">
            <h1>Es kopi sangat segar</h1>
            <i class="bi bi-cart-check-fill"></i>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              fill="currentColor"
              class="bi bi-cart-check-fill"
              viewBox="0 0 16 16">
              <path
                d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z" />
            </svg>
          </div>
        </div>
      </div>
    </section>

    <!-- blog section end -->

    <!-- service section start -->

    <section class="service" id="service">
      <h1 class="heading">kita <span>Layanan</span></h1>
      <p class="heading-description">
        kami mengirimkan produk kami gratis dari pintu ke pintu 24x7=360.
      </p>

      <div class="container">
        <div class="service-box">
          <div class="service-img">
            <img src="img/ser1.jpg" />
          </div>
          <div class="service-content">
            <h3>bermacam-macam luas</h3>
            <p>
              bermacam-macam luas adalah kesamaan kita, pengalaman universal
            </p>
          </div>
        </div>

        <div class="service-box">
          <div class="service-img">
            <img src="img/ser2.jpg" />
          </div>
          <div class="service-content">
            <h3>bermacam-macam luas</h3>
            <p>
              bermacam-macam luas adalah kesamaan kita, pengalaman universal
            </p>
          </div>
        </div>

        <div class="service-box">
          <div class="service-img">
            <img src="img/ser3.jpg" />
          </div>
          <div class="service-content">
            <h3>bermacam-macam luas</h3>
            <p>
              bermacam-macam luas adalah kesamaan kita, pengalaman universal
            </p>
          </div>
        </div>

        <div class="service-box">
          <div class="service-img">
            <img src="img/ser4.jpg" />
          </div>
          <div class="service-content">
            <h3>bermacam-macam luas</h3>
            <p>
              bermacam-macam luas adalah kesamaan kita, pengalaman universal
            </p>
          </div>
        </div>

        <div class="service-box">
          <div class="service-img">
            <img src="img/ser5.jpg" />
          </div>
          <div class="service-content">
            <h3>bermacam-macam luas</h3>
            <p>
              bermacam-macam luas adalah kesamaan kita, pengalaman universal
            </p>
          </div>
        </div>

        <div class="service-box">
          <div class="service-img">
            <img src="img/ser6.jpg" />
          </div>
          <div class="service-content">
            <h3>bermacam-macam luas</h3>
            <p>
              bermacam-macam luas adalah kesamaan kita, pengalaman universal
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- service section end -->

    <!-- team section start -->

    <section class="team" id="team">
      <h1 class="heading">kita <span>team</span></h1>
      <p class="heading-description">
        tradisi tahan lama & cinta sejati untuk kopi..
      </p>

      <div class="container">
        <div class="team-box">
          <div class="team-img">
            <img src="img/team1.jpg" />
          </div>
          <div class="team-content">
            <h3>Meri</h3>
            <p>cook</p>

            <div class="social">
              <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
              <a href="#"><i class="fa-brands fa-instagram"></i></a>
              <a href="#"><i class="fa-brands fa-twitter"></i></a>
            </div>
          </div>
        </div>

        <div class="team-box">
          <div class="team-img">
            <img src="img/team2.jpg" />
          </div>
          <div class="team-content">
            <h3>Jhon</h3>
            <p>waiter</p>

            <div class="social">
              <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
              <a href="#"><i class="fa-brands fa-instagram"></i></a>
              <a href="#"><i class="fa-brands fa-twitter"></i></a>
            </div>
          </div>
        </div>

        <div class="team-box">
          <div class="team-img">
            <img src="img/team3.jpg" />
          </div>
          <div class="team-content">
            <h3>Yuriy</h3>
            <p>waitress</p>

            <div class="social">
              <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
              <a href="#"><i class="fa-brands fa-instagram"></i></a>
              <a href="#"><i class="fa-brands fa-twitter"></i></a>
            </div>
          </div>
        </div>

        <div class="team-box">
          <div class="team-img">
            <img src="img/team4.jpg" />
          </div>
          <div class="team-content">
            <h3>Budid</h3>
            <p>brista</p>

            <div class="social">
              <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
              <a href="#"><i class="fa-brands fa-instagram"></i></a>
              <a href="#"><i class="fa-brands fa-twitter"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- team section ends -->

    <!-- contact section start -->

    <section class="contact" id="contact">
      <h1 class="heading">contact <span>us</span></h1>
      <p class="heading-description">kami selalu di sini untuk Anda. .</p>

      <div class="container">
        <div class="contact-box">
          <div>
            <i class="fa-solid fa-envelope"></i>
            <h2>
              Alamat Email <br />
              <span>skirim email secepatnya kapan saja</span>
            </h2>
          </div>

          <div>
            <p>
              kopipuncaks@gmail.com <br />
              info@example.com
            </p>
            <i class="fa-solid fa-right-long"></i>
          </div>
        </div>

        <div class="contact-box">
          <div>
            <i class="fa-solid fa-location-dot"></i>
            <h2>
              Alamat <br />
              <span>Puncak Indoensia</span>
            </h2>
          </div>

          <div>
            <p>jaringan reatif <br /></p>
            <i class="fa-solid fa-right-long"></i>
          </div>
        </div>

        <div class="contact-box">
          <div>
            <i class="fa-solid fa-phone"></i>
            <h2>
              call us <br />
              <span>call us asap anytime</span>
            </h2>
          </div>

          <div>
            <p>
              0812378383 <br />
              021834939
            </p>

            <i class="fa-solid fa-right-long"></i>
          </div>
        </div>
      </div>
    </section>

    <!-- contact section ends -->

    <!-- footer section start -->

    <section class="footer" id="footer">
      <div class="container">
        <div class="footer-box">
          <h3>Tentang Kmai</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
          <p>copyright &copy;2023 all rights reserved by | <a href=""> </a></p>
        </div>

        <div class="footer-box">
          <h3>buletin</h3>
          <p>tetap update dengan terbaru kami</p>

          <form>
            <input type="email" name="email" placeholder="enter email" />
            <button type="submit">
              <i class="fa-solid fa-right-long"></i>
            </button>
          </form>
        </div>

        <div class="footer-box">
          <h3>follow us</h3>
          <p>marilah kita bersosialisasi</p>

          <div>
            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-youtube"></i></a>
          </div>
        </div>
      </div>
    </section>

    <!-- footer section ends -->

    <!-- javascript code -->

    <script type="text/javascript"></script>
  </body>
</html>
