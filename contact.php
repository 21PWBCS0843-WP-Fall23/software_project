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
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./assets/css/contact.css">

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
            <a href="index.html" class="logo">
              <img src="./assets/images/car-logo.png" alt="Ridex logo">
            </a>
            <a href="index.html"><p class="logo-text">Analytica</p></a>
          </div>

        <nav class="navbar" data-navbar>
          <ul class="navbar-list">
            <li>
              <a href="index.html" class="navbar-link" data-nav-link>Home</a>
            </li>
            <li>
              <a href="brands.html" class="navbar-link" data-nav-link>Brands</a>
            </li>
            <li><a href="services.html" class="navbar-link" data-nav-link>Services</a></li>
            <li>
              <a href="about.html" class="navbar-link" data-nav-link>About Us</a>
            </li>
            <li>
              <a href="contact.html" class="navbar-link" data-nav-link>Contact</a>
            </li>
          </ul>
        </nav>

        <div class="header-actions">
          <a href="brands.html" class="btn" aria-labelledby="aria-label-txt">
            <ion-icon name="car-outline"></ion-icon>

            <span id="aria-label-txt">Explore cars</span>
          </a>

          <a href="contact.html" class="btn user-btn" aria-label="Profile">
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


    <!-- Contact-->
    <form action="contact.php" method="post">

    <div class="contact">
      <div class="row">
          <div class="col-6">
              <h1>Contact Us</h1>
              <p>Feel free to get in touch with us. We'll get back to you as soon as possible.</p>
          </div>
          <div class="col-6">
    
   
              <form action="" method="" class="contact-form">
            
              <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Your existing code here

  $first_name = isset($_POST['first_name']) ? $_POST['first_name'] : '';
  $last_name = isset($_POST['last_name']) ? $_POST['last_name'] : '';
  $email = isset($_POST['email']) ? $_POST['email'] : '';
  $message_t = isset($_POST['message_t']) ? $_POST['message_t'] : '';


try {
   $dsn = "mysql:host=localhost;dbname=contactInfo";
   $dbusername = "root";
   $password = "";

   $pdo = new PDO($dsn, $dbusername, $password);
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $query = "INSERT INTO contact (first_name, last_name, email, message_t) VALUES (:first_name, :last_name, :email, :message_t)";
   $statement = $pdo->prepare($query);

   $statement->bindParam(":first_name", $first_name, PDO::PARAM_STR);
   $statement->bindParam(":last_name", $last_name, PDO::PARAM_STR);
   $statement->bindParam(":email", $email, PDO::PARAM_STR);
   $statement->bindParam(":message_t", $message_t, PDO::PARAM_STR);

   $statement->execute();
   echo "Successfully inserted data.";
} catch (PDOException $e) {
   echo "Error found: " . $e->getMessage();
} 
}
?>

                  <div class="row mb-3">
                      <div class="col-6">
                          <label for="first-name" class="form-label">First Name</label>
                          <input type="text" id="first-name" name="first_name" class="form-control" required>
                      </div>
                      <div class="col-6">
                          <label for="last-name" class="form-label">Last Name</label>
                          <input type="text" id="last-name" name="last_name" class="form-control" required>
                      </div>
                  </div>
                  <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" id="email" name="email" class="form-control" required>
                  </div>
                  <div class="mb-3">
                      <label for="message" class="form-label">Message</label>
                      <textarea id="message" name="message_t" rows="5" class="form-control" required></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
              </form>
          </div>
      </div>
  </div>
</form>
  <!-- contact -->

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
