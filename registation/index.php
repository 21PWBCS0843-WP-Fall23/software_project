<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Analytica</title>

    <!-- 
    - favicon
  -->
    <link
      rel="shortcut icon"
      href="./assets/images/car-logo-01.png"
      type="image/svg+xml"
    />

    <!-- 
    - custom css link
  -->
    <link rel="stylesheet" href="./SE-PROJECT//assets/css/style.css" />

    <!-- 
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&family=Open+Sans&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <!-- 
    - #HEADER
  -->

    <header class="header" data-header>
      <div class="container">
        <div class="overlay" data-overlay></div>

        <div class="logo-container">
          <a href="index.php" class="logo">
            <img src="./assets/images/car-logo.png" alt="Ridex logo" />
          </a>
          <a href="index.php"><p class="logo-text">Analytica</p></a>
        </div>

        <nav class="navbar" data-navbar>
          <ul class="navbar-list">
            <li>
              <a href="index.php" class="navbar-link" data-nav-link>Home</a>
            </li>
            <li>
              <a href="../brands.html" class="navbar-link" data-nav-link>Brands</a>
            </li>
            <li>
              <a href="./SE-PROJECT/services.html" class="navbar-link" data-nav-link
                >Services</a
              >
            </li>
            <li>
              <a href="./SE-PROJECT/about.html" class="navbar-link" data-nav-link
                >About Us</a
              >
            </li>
            <li>
              <a href="./SE-PROJECT/contact.php" class="navbar-link" data-nav-link
                >Contact</a
              >
            </li>
          </ul>
        </nav>

        <div class="header-actions">
          <a href="./SE-PROJECT/brands.html" class="btn" aria-labelledby="aria-label-txt">
            <ion-icon name="car-outline"></ion-icon>

            <span id="aria-label-txt">Explore cars</span>
          </a>

          <a href="./SE-PROJECT/contact.php" class="btn user-btn" aria-label="Profile">
            <ion-icon name="person-outline"></ion-icon>
          </a>

          <button
            class="nav-toggle-btn"
            data-nav-toggle-btn
            aria-label="Toggle Menu"
          >
            <span class="one"></span>
            <span class="two"></span>
            <span class="three"></span>
          </button>
        </div>
      </div>
    </header>

    <main>
      <article>
        <!-- 
        - #HERO
      -->
        <button id="scroll-btn" class=""></button>
        <section class="section hero" id="home">
          <div class="container">
            <div class="hero-content">
              <h2 class="h1 hero-title">The easy way to takeover a lease</h2>

              <p class="hero-text">
                Live in New York, New Jerset and Connecticut!
              </p>
            </div>

            <div class="hero-banner"></div>

            <form action="" class="hero-form">
              <div class="input-wrapper">
                <label for="input-1" class="input-label"
                  >Car, model, or brand</label
                >

                <input
                  type="text"
                  name="car-model"
                  id="input-1"
                  class="input-field"
                  placeholder="What car are you looking?"
                />
              </div>

              <div class="input-wrapper">
                <label for="input-2" class="input-label"
                  >Max. monthly payment</label
                >

                <input
                  type="text"
                  name="monthly-pay"
                  id="input-2"
                  class="input-field"
                  placeholder="Add an amount in $"
                />
              </div>

              <div class="input-wrapper">
                <label for="input-3" class="input-label">Make Year</label>

                <input
                  type="text"
                  name="year"
                  id="input-3"
                  class="input-field"
                  placeholder="Add a minimal make year"
                />
              </div>

              <button type="submit" class="btn">Search</button>
            </form>
          </div>
        </section>

        <!-- 
        - #FEATURED CAR
      -->

        <section class="section featured-car" id="featured-car">
          <div class="container">
            <div class="title-wrapper">
              <h2 class="h2 section-title">Featured cars</h2>

              <a href="brands.html" class="featured-car-link">
                <span>View more</span>

                <ion-icon name="arrow-forward-outline"></ion-icon>
              </a>
            </div>

            <ul class="featured-car-list">
              <li>
                <div class="featured-car-card">
                  <figure class="card-banner">
                    <img
                      src="./assets/images/toyota01.jpg"
                      alt="Toyota RAV4 2021"
                      loading="lazy"
                      width="440"
                      height="300"
                      class="w-100"
                    />
                  </figure>

                  <div class="card-content">
                    <div class="card-title-wrapper">
                      <h3 class="h3 card-title">
                        <a href="./brandsCards_Pages/Toyota.html">Toyota</a>
                      </h3>
                      <div class="card-price-wrapper">
                        <!-- <p class="card-price"><strong>$440</strong> / month</p>
  
                        <button
                          class="btn fav-btn"
                          aria-label="Add to favourite list"
                        >
                          <ion-icon name="heart-outline"></ion-icon> -->
                          <a href="./brandsCards_Pages/Toyota.html"><button class="btn">See Details</button></a>
                        </button>
                      </div>
                    </div>

                    <ul class="card-list">
                      <li class="card-list-item">
                        <ion-icon name="people-outline"></ion-icon>

                        <span class="card-item-text">4 People</span>
                      </li>

                      <li class="card-list-item">
                        <ion-icon name="flash-outline"></ion-icon>

                        <span class="card-item-text">Hybrid</span>
                      </li>

                      <li class="card-list-item">
                        <ion-icon name="speedometer-outline"></ion-icon>

                        <span class="card-item-text">6.1km / 1-litre</span>
                      </li>

                      <li class="card-list-item">
                        <ion-icon name="hardware-chip-outline"></ion-icon>

                        <span class="card-item-text">Automatic</span>
                      </li>
                    </ul>

                  
                  </div>
                </div>
              </li>

              <li>
                <div class="featured-car-card">
                  <figure class="card-banner">
                    <img
                      src="./assets/images/bmw01.jpg"
                      alt="BMW 3 Series 2019"
                      loading="lazy"
                      width="440"
                      height="300"
                      class="w-100"
                    />
                  </figure>

                  <div class="card-content">
                    <div class="card-title-wrapper">
                      <h3 class="h3 card-title">
                        <a href="./brandsCards_Pages/BMW.html">BMW</a>
                      </h3>
                      <div class="card-price-wrapper">
                        <a href="./brandsCards_Pages/BMW.html"><button class="btn">See Details</button></a>
                        <!-- <p class="card-price"><strong>$350</strong> / month</p>
  
                        <button
                          class="btn fav-btn"
                          aria-label="Add to favourite list"
                        >
                          <ion-icon name="heart-outline"></ion-icon>
                        </button> -->
                      </div>
                      
                    </div>

                    <ul class="card-list">
                      <li class="card-list-item">
                        <ion-icon name="people-outline"></ion-icon>

                        <span class="card-item-text">4 People</span>
                      </li>

                      <li class="card-list-item">
                        <ion-icon name="flash-outline"></ion-icon>

                        <span class="card-item-text">Gasoline</span>
                      </li>

                      <li class="card-list-item">
                        <ion-icon name="speedometer-outline"></ion-icon>

                        <span class="card-item-text">8.2km / 1-litre</span>
                      </li>

                      <li class="card-list-item">
                        <ion-icon name="hardware-chip-outline"></ion-icon>

                        <span class="card-item-text">Automatic</span>
                      </li>
                    </ul>

                    
                  </div>
                </div>
              </li>

              <li>
                <div class="featured-car-card">
                  <figure class="card-banner">
                    <img
                      src="./assets/images/audi01.jpg"
                      alt="Volkswagen T-Cross 2020"
                      loading="lazy"
                      width="440"
                      height="300"
                      class="w-100"
                    />
                  </figure>

                  <div class="card-content">
                    <div class="card-title-wrapper">
                      <h3 class="h3 card-title">
                        <a href="./brandsCards_Pages/Audi.html">Audi</a>
                      </h3>
                      <div class="card-price-wrapper">
                        <a href="./brandsCards_Pages/Audi.html"><button class="btn">See Details</button></a>
                        <!-- <p class="card-price"><strong>$400</strong> / month</p>
  
                        <button
                          class="btn fav-btn"
                          aria-label="Add to favourite list"
                        >
                          <ion-icon name="heart-outline"></ion-icon>
                        </button> -->
                      </div>
                      
                    </div>

                    <ul class="card-list">
                      <li class="card-list-item">
                        <ion-icon name="people-outline"></ion-icon>

                        <span class="card-item-text">4 People</span>
                      </li>

                      <li class="card-list-item">
                        <ion-icon name="flash-outline"></ion-icon>

                        <span class="card-item-text">Gasoline</span>
                      </li>

                      <li class="card-list-item">
                        <ion-icon name="speedometer-outline"></ion-icon>

                        <span class="card-item-text">5.3km / 1-litre</span>
                      </li>

                      <li class="card-list-item">
                        <ion-icon name="hardware-chip-outline"></ion-icon>

                        <span class="card-item-text">Automatic</span>
                      </li>
                    </ul>

                  
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </section>

        <!-- 
        - #GET START
      -->

        <section class="section get-start">
          <div class="container">
            <h2 class="h2 section-title">Get started with 4 simple steps</h2>

            <ul class="get-start-list">
              <li>
                <div class="get-start-card">
                  <div class="card-icon icon-1">
                    <ion-icon name="person-add-outline"></ion-icon>
                  </div>

                  <h3 class="card-title">Create a profile</h3>

                  <p class="card-text">
                    If you are going to use a passage of Lorem Ipsum, you need
                    to be sure.
                  </p>

                  <a href="#" class="card-link">Get started</a>
                </div>
              </li>

              <li>
                <div class="get-start-card">
                  <div class="card-icon icon-2">
                    <ion-icon name="car-outline"></ion-icon>
                  </div>

                  <h3 class="card-title">Tell us what car you want</h3>

                  <p class="card-text">
                    Various versions have evolved over the years, sometimes by
                    accident, sometimes on purpose
                  </p>
                </div>
              </li>

              <li>
                <div class="get-start-card">
                  <div class="card-icon icon-3">
                    <ion-icon name="person-outline"></ion-icon>
                  </div>

                  <h3 class="card-title">Match with seller</h3>

                  <p class="card-text">
                    It to make a type specimen book. It has survived not only
                    five centuries, but also the leap into electronic
                  </p>
                </div>
              </li>

              <li>
                <div class="get-start-card">
                  <div class="card-icon icon-4">
                    <ion-icon name="card-outline"></ion-icon>
                  </div>

                  <h3 class="card-title">Make a deal</h3>

                  <p class="card-text">
                    There are many variations of passages of Lorem available,
                    but the majority have suffered alteration
                  </p>
                </div>
              </li>
            </ul>
          </div>
        </section>

        <!-- 
        - #BLOG
      -->

        <section class="section blog" id="blog">
          <div class="container">
            <h2 class="h2 section-title">Our Blog</h2>

            <ul class="blog-list has-scrollbar">
              <li>
                <div class="blog-card">
                  <figure class="card-banner">
                    <a href="#">
                      <img
                        src="./assets/images/blog-1.jpg"
                        alt="Opening of new offices of the company"
                        loading="lazy"
                        class="w-100"
                      />
                    </a>

                    <a href="#" class="btn card-badge">Company</a>
                  </figure>

                  <div class="card-content">
                    <h3 class="h3 card-title">
                      <a href="#">Opening of new offices of the company</a>
                    </h3>

                    <div class="card-meta">
                      <div class="publish-date">
                        <ion-icon name="time-outline"></ion-icon>

                        <time datetime="2022-01-14">January 14, 2022</time>
                      </div>

                      <div class="comments">
                        <ion-icon name="chatbubble-ellipses-outline"></ion-icon>

                        <data value="114">114</data>
                      </div>
                    </div>
                  </div>
                </div>
              </li>

              <li>
                <div class="blog-card">
                  <figure class="card-banner">
                    <a href="#">
                      <img
                        src="./assets/images/blog-2.jpg"
                        alt="What cars are most vulnerable"
                        loading="lazy"
                        class="w-100"
                      />
                    </a>

                    <a href="#" class="btn card-badge">Repair</a>
                  </figure>

                  <div class="card-content">
                    <h3 class="h3 card-title">
                      <a href="#">What cars are most vulnerable</a>
                    </h3>

                    <div class="card-meta">
                      <div class="publish-date">
                        <ion-icon name="time-outline"></ion-icon>

                        <time datetime="2022-01-14">January 14, 2022</time>
                      </div>

                      <div class="comments">
                        <ion-icon name="chatbubble-ellipses-outline"></ion-icon>

                        <data value="114">114</data>
                      </div>
                    </div>
                  </div>
                </div>
              </li>

              <li>
                <div class="blog-card">
                  <figure class="card-banner">
                    <a href="#">
                      <img
                        src="./assets/images/blog-3.jpg"
                        alt="Statistics showed which average age"
                        loading="lazy"
                        class="w-100"
                      />
                    </a>

                    <a href="#" class="btn card-badge">Cars</a>
                  </figure>

                  <div class="card-content">
                    <h3 class="h3 card-title">
                      <a href="#">Statistics showed which average age</a>
                    </h3>

                    <div class="card-meta">
                      <div class="publish-date">
                        <ion-icon name="time-outline"></ion-icon>

                        <time datetime="2022-01-14">January 14, 2022</time>
                      </div>

                      <div class="comments">
                        <ion-icon name="chatbubble-ellipses-outline"></ion-icon>

                        <data value="114">114</data>
                      </div>
                    </div>
                  </div>
                </div>
              </li>

              <li>
                <div class="blog-card">
                  <figure class="card-banner">
                    <a href="#">
                      <img
                        src="./assets/images/blog-4.jpg"
                        alt="What´s required when renting a car?"
                        loading="lazy"
                        class="w-100"
                      />
                    </a>

                    <a href="#" class="btn card-badge">Cars</a>
                  </figure>

                  <div class="card-content">
                    <h3 class="h3 card-title">
                      <a href="#">What´s required when renting a car?</a>
                    </h3>

                    <div class="card-meta">
                      <div class="publish-date">
                        <ion-icon name="time-outline"></ion-icon>

                        <time datetime="2022-01-14">January 14, 2022</time>
                      </div>

                      <div class="comments">
                        <ion-icon name="chatbubble-ellipses-outline"></ion-icon>

                        <data value="114">114</data>
                      </div>
                    </div>
                  </div>
                </div>
              </li>

              <li>
                <div class="blog-card">
                  <figure class="card-banner">
                    <a href="#">
                      <img
                        src="./assets/images/blog-5.jpg"
                        alt="New rules for handling our cars"
                        loading="lazy"
                        class="w-100"
                      />
                    </a>

                    <a href="#" class="btn card-badge">Company</a>
                  </figure>

                  <div class="card-content">
                    <h3 class="h3 card-title">
                      <a href="#">New rules for handling our cars</a>
                    </h3>

                    <div class="card-meta">
                      <div class="publish-date">
                        <ion-icon name="time-outline"></ion-icon>

                        <time datetime="2022-01-14">January 14, 2022</time>
                      </div>

                      <div class="comments">
                        <ion-icon name="chatbubble-ellipses-outline"></ion-icon>

                        <data value="114">114</data>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </section>
      </article>
    </main>

    <!-- 
    - #FOOTER
  -->

    <footer class="footer">
      <div class="container">
        <div class="footer-top">
          <div class="footer-brand">
            <a href="#" class="logo">
              <img src="./assets/images/logo.svg" alt="Ridex logo" />
            </a>

            <p class="footer-text">
              Search for cheap rental cars in New York. With a diverse fleet of
              19,000 vehicles, Waydex offers its consumers an attractive and fun
              selection.
            </p>
          </div>

          <ul class="footer-list">
            <li>
              <p class="footer-list-title">Company</p>
            </li>

            <li>
              <a href="#" class="footer-link">About us</a>
            </li>

            <li>
              <a href="#" class="footer-link">Pricing plans</a>
            </li>

            <li>
              <a href="#" class="footer-link">Our blog</a>
            </li>

            <li>
              <a href="#" class="footer-link">Contacts</a>
            </li>
          </ul>

          <ul class="footer-list">
            <li>
              <p class="footer-list-title">Support</p>
            </li>

            <li>
              <a href="#" class="footer-link">Help center</a>
            </li>

            <li>
              <a href="#" class="footer-link">Ask a question</a>
            </li>

            <li>
              <a href="#" class="footer-link">Privacy policy</a>
            </li>

            <li>
              <a href="#" class="footer-link">Terms & conditions</a>
            </li>
          </ul>

          <ul class="footer-list">
            <li>
              <p class="footer-list-title">Neighborhoods in New York</p>
            </li>

            <li>
              <a href="#" class="footer-link">Manhattan</a>
            </li>

            <li>
              <a href="#" class="footer-link">Central New York City</a>
            </li>

            <li>
              <a href="#" class="footer-link">Upper East Side</a>
            </li>

            <li>
              <a href="#" class="footer-link">Queens</a>
            </li>

            <li>
              <a href="#" class="footer-link">Theater District</a>
            </li>

            <li>
              <a href="#" class="footer-link">Midtown</a>
            </li>

            <li>
              <a href="#" class="footer-link">SoHo</a>
            </li>

            <li>
              <a href="#" class="footer-link">Chelsea</a>
            </li>
          </ul>
        </div>

        <div class="footer-bottom">
          <ul class="social-list">
            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-skype"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="mail-outline"></ion-icon>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </footer>

    <!-- 
    - custom js link
  -->
    <script src="./assets/js/script.js"></script>

    <!-- 
    - ionicon link
  -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
  </body>
</html>
