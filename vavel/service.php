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

        .trip img {
         width: 200px;
         height: auto;
         box-sizing: border-box;
         object-fit: cover;
         border-radius: 10px;
       }

       #featured > div.row.mx-auto.container > div.row.mx-auto.container > div.row.mx-auto.container > div.row.mx-auto.container > div.row.mx-auto.container > div.row.mx-auto.container > nav > ul > li.page-item.active > a{
        background-color: black;
       }
       img{
        width: 200px;
       }
        .trip {
        margin: 10px; /* Adjust margin as needed */
        border-radius: 10px; /* Adjust border-radius as needed */
        overflow: hidden; /* Ensure border-radius works properly */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
        margin-left: 70px;
        margin-bottom: 10px;
       }  

       .pagination a {
        color: #000;
       }

       #featured > div.row.mx-auto.container > div.row.mx-auto.container > div.row.mx-auto.container > div.row.mx-auto.container > div.row.mx-auto.container > div.row.mx-auto.container > nav > ul > li:nth-child(n):hover>a{
        background-color: coral;
        color: white;
       }

       body > footer > div.copyright > div{
        align-items: center;
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
                <a class="nav-link" href="#"><i class="fa-solid fa-briefcase"></i>Service</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php"><i class="fa-solid fa-address-book"></i>Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="admin/login.php"><i class="fa-solid fa-right-to-bracket"></i>Sign-in</a>
              </li>
              
          </div>
        </div>
      </nav>

      <section id="featured" class="my-5 py-5">
        <div class="container mt-5 py-5">
          <h2 class="font-weight-bold">Our Featured</h2>
          <hr>
          <p>Here You Can Check Out Our Trips</p>
        </div>
        <div class="row mx-auto container">
          <div onclick="window.location.href='strip.php';" class="trip col-lg-2 col-md-4 col-12 text-center">
            <img class="img-fluid mb-3" src="img/Australia/1.jpg" alt="">            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h5 class="t-name">Australia</h5>
            <h4 class="t-price">230k</h4>
            <button class="Book">Book Now</button>
          </div>
          <div class="trip text-center col-lg-2 col-md-4 col-12">
            <img class="img-fluid mb-3" src="img/Brazil/1.jpg" alt="">
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h5 class="t-name">Brazil</h5>
            <h4 class="t-price">300k</h4>
            <button class="Book">Book Now</button>
          </div>
          <div class="trip text-center col-lg-2 col-md-4 col-12">
            <img class="img-fluid mb-3" src="img/China/1.jpg" alt="">
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h5 class="t-name">China</h5>
            <h4 class="t-price">350k</h4>
            <button class="Book">Book Now</button>
          </div>
          <div class="trip text-center col-lg-2 col-md-4 col-12">
            <img class="img-fluid mb-3" src="img/Japan/4.jpg" alt="">
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h5 class="t-name">Japan</h5>
            <h4 class="t-price">990k</h4>
            <button class="Book">Book Now</button>
          </div>
          <div class="row mx-auto container">
            <div class="trip text-center col-lg-2 col-md-4 col-12">
              <img class="img-fluid mb-3" src="img/Saudi Arabia/4.jpg" alt="">
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h5 class="t-name">Saudi Arabia</h5>
              <h4 class="t-price">1199k</h4>
              <button class="Book">Book Now</button>
            </div>
            <div class="trip text-center col-lg-2 col-md-4 col-12">
              <img class="img-fluid mb-3" src="img/Turkey/1.jpg" alt="">
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h5 class="t-name">Turkey</h5>
              <h4 class="t-price">1400k</h4>
              <button class="Book">Book Now</button>
            </div>
            <div class="trip text-center col-lg-2 col-md-4 col-12">
              <img class="img-fluid mb-3" src="img/UAE/1.jpg" alt="">
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h5 class="t-name">UAE</h5>
              <h4 class="t-price">4600k</h4>
              <button class="Book">Book Now</button>
            </div>
            <div class="trip text-center col-lg-2 col-md-4 col-12">
              <img class="img-fluid mb-3" src="img/USA/1.jpg" alt="">
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h5 class="t-name">USA</h5>
              <h4 class="t-price">3500K</h4>
              <button class="Book">Book Now</button>
            </div>
            <div class="row mx-auto container">
                <div class="trip text-center col-lg-2 col-md-4 col-12">
                  <img class="img-fluid mb-3" src="img/Afganistan/1.jpg" alt="">
                  <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                  <h5 class="t-name">Afganistan</h5>
                  <h4 class="t-price">2500K</h4>
                  <button class="Book">Book Now</button>
                </div>
                <div class="trip text-center col-lg-2 col-md-4 col-12">
                  <img class="img-fluid mb-3" src="img/Bangladesh/3.jpg" alt="">
                  <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                  <h5 class="t-name">Bangladesh</h5>
                  <h4 class="t-price">6999k</h4>
                  <button class="Book">Book Now</button>
                </div>
                <div class="trip text-center col-lg-2 col-md-4 col-12">
                  <img class="img-fluid mb-3" src="img/Bankok/1.jpg" alt="">
                  <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                  <h5 class="t-name">Bankok</h5>
                  <h4 class="t-price">7500k</h4>
                  <button class="Book">Book Now</button>
                </div>
                <div class="trip text-center col-lg-2 col-md-4 col-12">
                  <img class="img-fluid mb-3" src="img/Canada/1.jpg" alt="">
                  <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                  <h5 class="t-name">Canada</h5>
                  <h4 class="t-price">5500k</h4>
                  <button class="Book">Book Now</button>
                </div>
                <div class="row mx-auto container">
                    <div class="trip text-center col-lg-2 col-md-4 col-12">
                      <img class="img-fluid mb-3" src="img/India/1.jpg" alt="">
                      <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                      </div>
                      <h5 class="t-name">India</h5>
                      <h4 class="t-price">1500k</h4>
                      <button class="Book">Book Now</button>
                    </div>
                    <div class="trip text-center col-lg-2 col-md-4 col-12">
                      <img class="img-fluid mb-3" src="img/Iraq/1.jpg" alt="">
                      <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                      </div>
                      <h5 class="t-name">Iraq</h5>
                      <h4 class="t-price">8000k</h4>
                      <button class="Book">Book Now</button>
                    </div>
                    <div class="trip text-center col-lg-2 col-md-4 col-12">
                      <img class="img-fluid mb-3" src="img/Korea/1.jpg" alt="">
                      <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                      </div>
                      <h5 class="t-name">Korea</h5>
                      <h4 class="t-price">2500k</h4>
                      <button class="Book">Book Now</button>
                    </div>
                    <div class="trip text-center col-lg-2 col-md-4 col-12">
                      <img class="img-fluid mb-3" src="img/Kuwait/1.jpg" alt="">
                      <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                      </div>
                      <h5 class="t-name">Kuwait</h5>
                      <h4 class="t-price">2050k</h4>
                      <button class="Book">Book Now</button>
                    </div>
                    <div class="row mx-auto container">
                        <div class="trip text-center col-lg-2 col-md-4 col-12">
                          <img class="img-fluid mb-3" src="img/Oman/1.jpg" alt="">
                          <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                          </div>
                          <h5 class="t-name">Oman</h5>
                          <h4 class="t-price">1200k</h4>
                          <button class="Book">Book Now</button>
                        </div>
                        <div class="trip text-center col-lg-2 col-md-4 col-12">
                          <img class="img-fluid mb-3" src="img/Palastine/1.jpg" alt="">
                          <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                          </div>
                          <h5 class="t-name">Palastine</h5>
                          <h4 class="t-price">1500k</h4>
                          <button class="Book">Book Now</button>
                        </div>
                        <div class="trip text-center col-lg-2 col-md-4 col-12">
                          <img class="img-fluid mb-3" src="img/Paris/1.jpg" alt="">
                          <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                          </div>
                          <h5 class="t-name">Paris</h5>
                          <h4 class="t-price">1350k</h4>
                          <button class="Book">Book Now</button>
                        </div>
                        <div class="trip text-center col-lg-2 col-md-4 col-12">
                          <img class="img-fluid mb-3" src="img/Qatar/1.jpg" alt="">
                          <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                          </div>
                          <h5 class="t-name">Qatar</h5>
                          <h4 class="t-price">3000k</h4>
                          <button class="Book">Book Now</button>
                        </div>
                        <div class="row mx-auto container">
                            <div class="trip text-center col-lg-2 col-md-4 col-12">
                              <img class="img-fluid mb-3" src="img/Russia/1.jpg" alt="">
                              <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                              </div>
                              <h5 class="t-name">Russia</h5>
                              <h4 class="t-price">2200k</h4>
                              <button class="Book">Book Now</button>
                            </div>
                            <div class="trip text-center col-lg-2 col-md-4 col-12">
                              <img class="img-fluid mb-3" src="img/Africa/1.jpg" alt="">
                              <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                              </div>
                              <h5 class="t-name">Africa</h5>
                              <h4 class="t-price">4500k</h4>
                              <button class="Book">Book Now</button>
                            </div>
                            <div class="trip text-center col-lg-2 col-md-4 col-12">
                              <img class="img-fluid mb-3" src="img/Iran/1.jpg" alt="">
                              <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                              </div>
                              <h5 class="t-name">Iran</h5>
                              <h4 class="t-price">5500k</h4>
                              <button class="Book">Book Now</button>
                            </div>
                            <div class="trip text-center col-lg-2 col-md-4 col-12">
                              <img class="img-fluid mb-3" src="img/Malasia/1.jpg" alt="">
                              <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                              </div>
                              <h5 class="t-name">Malasia</h5>
                              <h4 class="t-price">7000k</h4>
                              <button class="Book">Book Now</button>
                            </div>

                            <nav aria-label="...">
                              <ul class="pagination mt-5">
                                <li class="page-item disabled">
                                  <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item " aria-current="page">
                                  <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                  <a class="page-link" href="#">Next</a>
                                </li>
                              </ul>
                            </nav>
                            
        </div>
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
  
        <div class="copyright">
                    
            <div class="text-nowrap mb-2">
              <p>Vavel Tour&Travel © 2023. All Right Reserved</p>
            </div>
            
          </div>
        </div>
      </footer>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>