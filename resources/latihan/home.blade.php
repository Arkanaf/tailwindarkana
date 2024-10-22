<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="app.css" />
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>Tugas MK3</title>
  </head>
  <body>
    <nav>
      <div class="nav__bar">
        <div class="nav__logo"><a href="#">ShirtStyleS</a></div>
        <ul class="nav__links">
          <li class="link"><a href="#home">HOME</a></li>
          <li class="link"><a href="#about">ABOUT</a></li>
          <li class="link"><a href="#project">ARTICLE</a></li>
          <li class="link"><a href="#contact">CONTACT</a></li>
        </ul>
        <div class="nav__btns">
          <button class="btn btn__primary">Log In</button>
          <button class="btn btn__secondary">Sign In</button>
        </div>
      </div>
    </nav>

    <header class="header">
      <div class="header__container">
        <div class="header__content">
          <h1>Style inspired by you, for you. Discover our collection now</h1>
          <p>
            Find your style with our collection designed to look stunning everytime you want!!
          </p>
          <div class="header__btns">
            <button class="btn btn__secondary">Buy Now</button>
            <button class="btn btn__primary">Learn More</button>
          </div>
        </div>
        <div class="header__image">
          <img src="imagee.png" alt="header" />
        </div>
      </div>
    </header>

    <section class="section_container about_container" id="about">
      <div class="about__image">
        <img src="aboutt.jpg" alt="about" />
      </div>
      <div class="about__content">
        <h3>ABOUT US</h3>
        <h2 class="section__header">
          Since 2018
        </h2>
        <p class="section__subheader">
          We are more than just a clothing brand. We are the embodiment of style, creativity and confidence. Every collection we create is designed with love and attention to detail, to inspire you to look your best in every moment.
        </p>
        <div class="about__grid">
          <div class="about__card">
            <h4>PREVIOUS ARTICLE</h4>
            <p>34+</p>
          </div>
          <div class="about__card">
            <h4>BEST SELLER ARTICLE</h4>
            <p>10+</p>
          </div>
          <div class="about__card">
            <h4>NEW ARTICLE</h4>
            <p>5</p>
          </div>
        </div>
      </div>
    </section>

    <section class="project__container" id="project">
      <div class="project__header">
        <div>
          <h2 class="section__header">Our Article</h2>
          <p class="section__subheader">
            We are dedicated to helping you find your dream outfits with ease
            and confidence.
          </p>
        </div>
        <div class="project__nav">
          <span><i class="ri-arrow-left-line"></i></span>
          <span><i class="ri-arrow-right-line"></i></span>
        </div>
      </div>
      <!-- Slider main container -->
      <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <div class="project__card">
              <img src="product-1.jpg" alt="project" />
              <div class="project__content">
                <div class="project__details">
                  <h4>Black Knight Hoodie</h4>
                  <p>
                  </p>
                  <button>Buy Now</button>
                </div>
                <div class="project__ratings">
                  <div class="stars">
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-half-fill"></i></span>
                    <span><i class="ri-star-line"></i></span>
                  </div>
                  <div class="price">50$</div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="project__card">
              <img src="product-2.jpg" alt="project" />
              <div class="project__content">
                <div class="project__details">
                  <h4>Skeleton Sweater</h4>
                  <p>
                  </p>
                  <button>Buy Now</button>
                </div>
                <div class="project__ratings">
                  <div class="stars">
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-half-fill"></i></span>
                  </div>
                  <div class="price">40$</div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="project__card">
              <img src="product-3.jpg" alt="project" />
              <div class="project__content">
                <div class="project__details">
                  <h4>Cream Sweater</h4>
                  <p>
                  </p>
                  <button>Buy Now</button>
                </div>
                <div class="project__ratings">
                  <div class="stars">
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                  </div>
                  <div class="price">50$</div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="project__card">
              <img src="product-4.jpg" alt="project" />
              <div class="project__content">
                <div class="project__details">
                  <h4>Spider Hoodie</h4>
                  <p>
                  </p>
                  <button>Buy Now</button>
                </div>
                <div class="project__ratings">
                  <div class="stars">
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-half-fill"></i></span>
                  </div>
                  <div class="price">50$</div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="project__card">
              <img src="product-5.jpg" alt="project" />
              <div class="project__content">
                <div class="project__details">
                  <h4>White Custom Hoodie</h4>
                  <p>
                  </p>
                  <button>Buy Now</button>
                </div>
                <div class="project__ratings">
                  <div class="stars">
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-half-fill"></i></span>
                    <span><i class="ri-star-line"></i></span>
                  </div>
                  <div class="price">40$</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section_container contact_container" id="contact">
      <div class="contact__image">
        <img src="contactt.jpg" alt="contact" />
      </div>
      <div class="contact__content">
        <h2 class="section__header">Contact Us</h2>
        <p class="section__subheader">
          Discover the difference, where expertise meets excellence in real
          estate. Let's embark on this exciting journey together.
        </p>
        <form action="#">
          <div class="form__group">
            <input type="text" placeholder="First Name" />
            <input type="text" placeholder="Last Name" />
          </div>
          <div class="form__group">
            <input type="text" placeholder="Email Address" />
            <input type="text" placeholder="Phone Number" />
          </div>
          <textarea cols="30" rows="5" placeholder="Description"></textarea>
          <button>SEND MESSAGE</button>
        </form>
      </div>
    </section>

    <footer class="footer">
      <div class="section_container footer_container">
        <div class="footer__col">
          <h4>ShirtStyleS</h4>
          <p>
            Our team of seasoned professionals is committed to providing you
            with exceptional service, in-depth market knowledge, and
            personalized solutions tailored to your unique needs.
          </p>
          <div class="footer__socials">
            <span>
              <a href="#"><i class="ri-facebook-circle-fill"></i></a>
            </span>
            <span>
              <a href="#"><i class="ri-instagram-line"></i></a>
            </span>
            <span>
              <a href="#"><i class="ri-twitter-fill"></i></a>
            </span>
          </div>
        </div>
        <div class="footer__col">
          <h4>Company Info</h4>
          <a href="#home">Home</a>
          <a href="#about">About</a>
          <a href="#project">Project</a>
          <a href="#contact">Contact</a>
        </div>
        <div class="footer__col">
          <h4>Resources</h4>
          <a href="#">Terms</a>
          <a href="#">Conditions</a>
          <a href="#">Policy</a>
        </div>
        <div class="footer__col">
          <h4>Contact</h4>
          <a href="#">
            <span><i class="ri-mail-line"></i></span> ShirtStyleS@gmail.com
          </a>
          <a href="#">
            <span><i class="ri-phone-line"></i></span> +629876543210
          </a>
        </div>
      </div>
      <div class="footer__bar">
        Copyright © 2023 ShirtStyleS. All rights reserved.
      </div>
    </footer>
  </body>
</html>