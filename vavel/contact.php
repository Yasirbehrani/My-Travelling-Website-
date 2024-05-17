<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vavel</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5/10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGKvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <style>

        #Contact{
      background-image: url("img/Contact.jpg");
      width: 100%;
      height: 90vh;
      background-size: cover;
      background-position: top 100% center;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: flex-start;
      }

      #Contact\ us > div {
          margin-left: 40%;
      }
          form {
            width: 400px;
            font-weight: 600;
            background-color: transparent;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 90px;
            margin-bottom: 50px; /* Optionally add margin-bottom for extra space */
        }
        
        #Contact\ us > div > h1 > b{
          align-items: center;
          justify-content: center;

        }
        form {
            width: 400px;
            background-color: none;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: coral;
        }
    </style>
</head>
<body>

    <!--NAVIGATION-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><h1>Vavel</h1></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php"><i class="fa-solid fa-house"></i>Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="About.php"><i class="fa-solid fa-circle-exclamation"></i>About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="service.php"><i class="fa-solid fa-briefcase"></i>Service</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa-solid fa-address-book"></i>Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="admin/login.php"><i class="fa-solid fa-right-to-bracket"></i>Sign-in</a>
              </li>
              
          </div>
        </div>
      </nav>

      <section id="Contact">
        <div class="text container-fluid ">
            
            
            
          </div>
      </section>

      <section id="Contact us">
        <div class="text container">
            <h1><b>Contact Vavel</b></h1>
            Let's Connect!

            <form action="your_server_script.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone">

                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>

                <button type="submit">Submit</button>
            </form>
      </section>

      <footer class="py-5">
        <div class="row container mx-auto pt-5">
          <div class="footer-one col-lg-3 col-md-6 col-12">
            <a href="#"><h3>Vavel</h3></a>
            <p class="pt-3">Welcome to Vavel, your gateway to exceptional travel experiences. We aim to be your trusted partner in exploring the world's wonders, ensuring each journey is nothing short of extraordinary,At Vavel, we're committed to crafting seamless and unforgettable travel adventures for our discerning clientele. Our dedicated team curates the finest destinations and top-notch services to make your globetrotting dreams a reality Indulge in a world of wanderlust with Vavel's premium travel services. Our mission is to elevate your travel expectations, delivering excellence and personalized attention wherever your heart desires.</p>
          </div>
          <div class="footer-one col-lg-3 col-md-6 col-12 mb-3">
            <h5 class="pb-2">Featured</h5>
            <ul class="text-uppercase list-unstyled">
              <li><a href="#">Brazil</a></li>
              <li><a href="#">UAE</a></li>
              <li><a href="#">Turkey</a></li>
              <li><a href="#">Canada</a></li>
              <li><a href="#">Saudi Arabia</a></li>
              <li><a href="#">China</a></li>
              <li><a href="#">See More</a></li>
            </ul>
          </div>
          <div class="footer-one col-lg-3 col-md-6 col-12 mb-3">
            <h5 class="pb-2">Contact Us</h5>
            <div>
              <h6 class="text-uppercase">Address</h6>
              <p>MBBS DADU CAMPUS</p>
            </div>
            <div>
              <h6 class="text-uppercase">Phone</h6>
              <p>+92 30000000</p>
            </div>
            <div>
              <h6 class="text-uppercase">Email</h6>
              <p>xyz@gmail.com</p>
            </div>
          </div>
         
          <div class="footer-one col-lg-3 col-md-6 col-12">
            <h5 class="pb-2">Our Gallery</h5>
            <div class="row">
              <img class="img-fluid w-25 h-100 m-2" src="img/Our Gallery/1.jpg" alt="">
              <img class="img-fluid w-25 h-100 m-2" src="img/Our Gallery/2.jpg" alt="">
              <img class="img-fluid w-25 h-100 m-2" src="img/Our Gallery/3.jpg" alt="">
              <img class="img-fluid w-25 h-100 m-2" src="img/Our Gallery/4.jpg" alt="">
              <img class="img-fluid w-25 h-100 m-2" src="img/Our Gallery/5.jpg" alt="">
            </div>
          </div>
        </div>
  
        <div class="copyright mt-5">
          <div class="row container mx-auto">
  
            <div class="col-lg-3 col-md-6 col-12 mb-4">
              <img src="img/payment.png" alt="">
            </div>
            <div class=" col-lg-4 col-md-6 col-12 text-nowrap mb-2">
              <p>Vavel Tour&Travel © 2023. All Right Reserved</p>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
      </footer>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>