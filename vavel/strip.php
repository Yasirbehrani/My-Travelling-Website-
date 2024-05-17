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
        
        body > section.strip.container.my-5.pt-5 > div{
          border-radius: 10px;
          box-sizing: border-box;

        }
        .small-img {
    height: 70px; /* Set the desired fixed height */
    width: 100%;
    object-fit: cover;
        }
        .strip {
  box-sizing: border-box;
  border-radius: 10px;
  border: 2px solid #ddd; /* Optional: Add border styling */
  padding: 20px; /* Adjust padding as needed */
  /* Your existing styles for .strip */
}

.strip .container {
  border: 1px solid #ccc; /* Optional: Add border styling */
  padding: 15px; /* Adjust padding as needed */
  border-radius: 8px; /* Adjust border-radius as needed */
}

.strip img {
  width: 100%; /* Make sure the image takes the full width of its container */
  border-radius: 8px; /* Optional: Add border-radius for the image */
  margin-bottom: 15px; /* Optional: Add margin as needed */
}

.strip h6 {
  font-size: 16px; /* Optional: Adjust font size as needed */
  color: #555; /* Optional: Adjust text color as needed */
}

.strip h3 {
  background-color: #f8f9fa; /* Optional: Add background color for h3 */
  padding: 10px; /* Optional: Adjust padding as needed */
  border-radius: 8px; /* Optional: Add border-radius for h3 */
  margin-bottom: 20px; /* Optional: Add margin as needed */
}

.strip h2 {
  color: #007bff; /* Optional: Adjust text color as needed */
}

.strip select {
  width: 100%; /* Optional: Make the select element take the full width */
  padding: 10px; /* Optional: Adjust padding as needed */
  margin-bottom: 15px; /* Optional: Add margin as needed */
}

.strip button.Book-btn {
  background-color: #28a745; /* Optional: Add background color for the button */
  color: #fff; /* Optional: Add text color for the button */
  padding: 10px 20px; /* Optional: Adjust padding as needed */
  border: none; /* Optional: Remove border */
  border-radius: 5px; /* Optional: Add border-radius for the button */
  cursor: pointer; /* Optional: Add pointer cursor */
}

.strip h4 {
  font-size: 18px; /* Optional: Adjust font size as needed */
  margin-top: 20px; /* Optional: Add margin as needed */
}

.strip span {
  display: block; /* Optional: Make the span a block element */
  margin-bottom: 20px; /* Optional: Add margin as needed */
}
        .strip img {
          border-radius: 10px;
          box-sizing: border-box;
        }
        .small-img-group{
           display: flex;
           justify-items: space-between; 
        }

        .small-img-col{
            flex-basis: 24%;
            cursor: pointer;
        }

        .strip select{
            display: block;
            padding: 5px 10px;
        }

        .strip input{
            width: 50px;
            height: 40px;
            padding-left: 10px;
            font-size: 16px;
            margin-right: 10px;
        }

        .strip input:focus {
            outline: none;
        }

        .Book-btn{
            background-color: coral;
            opacity: 1;
            transition: 0.3s all;
        }
          /* Apply styles to the container */
  .container-fluid {
    margin-top: 20px; /* Adjust margin as needed */
  }
  body > section.strip.container.my-5.pt-5 > div > div.col-lg-5.col-md-12.col-12{
    box-sizing: border-box;
    border-radius: 20px;
  }
  #featured > div.row.mx-auto.container-fluid{
    display: flex;
  justify-content: center;
  align-items: center;
  }

  /* Apply styles to the trip */
  .trip {
    margin: 10px;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out; /* Add transition for a smooth effect */
  }

  /* Apply styles to the image */
  .trip img {
    width: 100%;
    height: auto;
    border-bottom: 2px solid #ddd; /* Add a border at the bottom of the image */
  }

  /* Apply styles to the star rating */
  .star {
    color: #f8ce0b; /* Set star color */
    margin-bottom: 5px; /* Adjust margin as needed */
  }

  /* Apply styles to the name and price */
  .t-name,
  .t-price {
    margin: 5px 0;
    padding: 0 10px; /* Add padding to the name and price */
  }

  /* Apply styles to the Book Now button */
  .Book-btn {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
    transition: background-color 0.3s ease-in-out; /* Add transition for a smooth effect */
  }

  /* Hover effect for the Book Now button */
  .Book-btn:hover {
    background-color: #0056b3;
  }

  /* Hover effect for the trip */
  .trip:hover {
    transform: scale(1.05); /* Scale up the trip on hover */
  }
  .modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0,0.9);
  padding-top: 60px;
}

.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  cursor: pointer;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
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

    <section class="strip container my-5 pt-5">
        <div class="row mt-5">
            <div class="col-lg-5 col-md-12 col-12">
                <img class="img-fluid w-100 pb-1" src="img/Australia/1.jpg" id="MainImg" alt="">

                <div class="small-img-group">
                    <div class="small-img-col">
                        <img src="img/Australia/2.jpg" width="100%" class="small-img" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="img/Australia/3.jpg" width="100%" class="small-img" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="img/Australia/4.jpg" width="100%" class="small-img" alt="">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-12">
                <h6>Home / Trip</h6>
                <h3 class="py-4">Trip Booking</h3>
                <h2>230k</h2>
                <select class="my-3">
                    <option>Select Packages</option>
                    <option>15 Days</option>
                    <option>Month</option>
                    <option>Above</option>
                </select>
                
                <button class="Book-btn">Book Now</button>
                <h4 class="mt-5 mb-5">Trip Detail</h4>
                <span>Embarking on a journey is not just about reaching a destination; it's a holistic experience that encompasses exploration, discovery, and creating lasting memories. Imagine a trip where every moment is not just a destination, but a unique adventure enriched with special offerings. At the heart of this extraordinary travel experience lies a commitment to enhancing your journey in ways that go beyond expectations.</span>

            </div>
        </div>
    </section>
    
    <section id="featured" class="my-5 pb-5">
        <div class="container text-center mt-5 py-5">
          <h3>More Trips</h3>
          <hr class="mx-auto">
        </div>
        <div class="row mx-auto container-fluid">
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
            <button class="Book-btn">Book Now</button>
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
            <button class="Book-btn">Book Now</button>
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
            <button class="Book-btn">Book Now</button>
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
            <h4 class="t-price">259k</h4>
            <button class="Book-btn">Book Now</button>
          </div>
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
<div id="imageModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="modalImage">
</div>

<!-- Add this script at the end of your HTML body or in a script file -->
<script>
  // Get the modal and images
  var modal = document.getElementById('imageModal');
  var modalImg = document.getElementById('modalImage');

  // Get the small images
  var smallImages = document.querySelectorAll('.small-img');

  // Loop through each small image and add a click event listener
  smallImages.forEach(function (smallImg) {
    smallImg.addEventListener('click', function () {
      modal.style.display = 'block';
      modalImg.src = this.src;
    });
  });

  // Close the modal when the 'x' is clicked
  var closeModal = document.querySelector('.close');
  closeModal.addEventListener('click', function () {
    modal.style.display = 'none';
  });

  // Close the modal when clicking outside the image
  window.addEventListener('click', function (event) {
    if (event.target == modal) {
      modal.style.display = 'none';
    }
  });
</script>
</html>