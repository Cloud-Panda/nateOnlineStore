<!doctype html>
<html lang="en">
  <head>
    <title>Saint's</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--My css-->
    <link href="https://fonts.googleapis.com/css2?family=Muli:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/landingStyle.css">
</head>
  <body>
      <div class="covid"><p id="covid-txt">STAY HOME STAY SAFE PREVENT COVID19 !! </p></div>
        <nav class="navbar navbar-expand-md nav-back navbar-light">
          <!-- Brand -->
          <li><a href="index.php">Home</a></li>
          <li id="logo">SAINT'S</li>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="shopping.php"><img src="images/3.png" id="shopping"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="checkout.php"><img src="images/cart.png" id="carting"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="cart.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item"
              class="badge badge-danger"></span></a>
        </li>
      </ul>
    </div>
  </nav>

    <div class="App">
         
      <div class="first">
          <hr id="hr-first"><h2 id="newin"><a href="about.php">ABOUT</a></h2>
      </div>

      <div class="mid">
          <div class="top">
              <h2><a href="#contact">CONTACT</a></h2>
          </div>
          <div class="bottom">
              <h2><a href="">LOCATION</a></h2>
          </div>
      </div>

      <div class="last">
      <hr id="hr-last"> <h2 id="plus"><a href="shopping.php">SHOP</a></h2>
      </div>

  </div>

  <div class="Coming-Soon">
      <div class="left">
          <h1 id="header">Saint's Kitchen!</h1>
          <p id="description">
              Welcome to Saint's Kitchen!<br> our new top of the line kichen <br>could be yours in just a short few months<br>
              This collection entails everything from<br> a rustic touch to a modern flair<br>We at Saint's are excited to <br>introduce Saint's Kitchen<br>
              <br>
              Coming to you...
              <h3>November 18 2020!</h3>

          </p>
  </div>
      <div class="right">
          <div class="new"><h4>COMING</h4></div>
          <!--Carousel here-->
          <div id="carouselId" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                  <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselId" data-slide-to="1"></li>
                  <li data-target="#carouselId" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                      <img src="images/10 (1).jpg" id="soon-hero" alt="First slide">
                  </div>
                  <div class="carousel-item">
                      <img src="images/10 (2).jpg" id="soon-hero" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                      <img src="images/10 (3).jpg" id="soon-hero" alt="Third slide">
                  </div>
                  <div class="carousel-item">
                      <img src="images/10.jpg" id="soon-hero" alt="Third slide">
                  </div>
                  <div class="carousel-item">
                      <img src="images/10 (4).jpg" id="soon-hero" alt="Third slide">
                  </div>
              </div>
              <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
              </a>
          </div>
          <div class="newer"><h4>SOON</h4></div>
      </div>
      </div>

      <div class="Featured">
          <h3 id="customer-txt">Customer Favourites</h3>
          <div class="features"><img src="images/9.jpg" alt="" id="feature-img"><div class="middle"><a href="shopping.php"><p class="text">Shop</p></a></div></div>
          <div class="features"><img src="images/21 (1).png" alt="" id="feature-img"><div class="middle"><a href="shopping.php"><p class="text">Shop</p></a></div></div>
          <div class="features"><img src="images/30 (2).jpg" alt="" id="feature-img"><div class="middle"><a href="shopping.php"><p class="text">Shop</p></a></div></div>
          <div class="features"><img src="images/19 (1).png" alt="" id="feature-img"><div class="middle"><a href="shopping.php"><p class="text">Shop</p></a></div></div>
      </div>

      <div class="gallery">
      <h2 id="gallery-title">Our most recent additions</h2>
<div class="row">

  <div class="column">
    <img src="images/21 (10).jpg" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="images/19 (6).jpg" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="images/30 (4).jpg"onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="images/1.jpg" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  </div>
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="images/21 (10).jpg" id="modal-img">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="images/19 (6).jpg" id="modal-img">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="images/30 (4).jpg" id="modal-img">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img src="images/1.jpg" id="modal-img">
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
</div>
    </div>

<div class="map-contact">
<div class="gmap_canvas">
<iframe id="gmap_canvas" src="https://maps.google.com/maps?ll=-33.924998,18.4486469&q=Old Castle Brewery&t=&z=14&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
</iframe>
</div>

  <form id="contact-form">
  <h2 id="contact">- ContactUs -</h2>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">
    <input type="text" id="email" name="email" placeholder="Your email..">
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
     <button class="contact-btn">Send</button>
  </form>
</div>

      <?php include("inc/footer.php");?>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="script/gallery.js"></script>
</body>

</html>