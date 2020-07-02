<!doctype html>
<html lang="en">
  <head>
    <title>About us</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--My css-->
    <link href="https://fonts.googleapis.com/css2?family=Muli:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/About.css">
</head>
  <body>

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

    <div class="wrapper">
        <div class="team-img"></div>
        <div class="about">
            <div id="its-txt">
            <hr><h1>About Us</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.<br> Quaerat ducimus, esse iusto praesentium <br>
            laborum quo ea suscipit quibusdam delectus quos ullam tenetur<br> molestiae molestias eius est consectetur <br>
            veritatis voluptate dolore? </p>
            <button id="btn"><a href="index.php#contact">Let's Chat</a></button>
            <hr>
</div>
        </div>
    </div>

    <div class="the-team">
       <hr> <h2 id="meet">Meet Our team!</h2>
        <div class="background"></div>
        <div class="team-member"><img src="images/13 (3).jpg" id="team-single"><div id="img-txt">This is Bennet<br>
    Creative Director</div></div>
        <div class="team-member"><img src="images/13 (4).jpg" id="team-single"> <div id="img-txt">This is Luna<br>
    Accountent</div></div>
        <div class="team-member"><img src="images/13 (5).jpg" id="team-single"> <div id="img-txt">This is Nate<br>
    Founder & CEO</div></div>
        <div class="team-member"><img src="images/13 (6).jpg" id="team-single"> <div id="img-txt">This is Ella<br>
    Attorney</div></div>
        <div class="team-member"><img src="images/13 (7).jpg" id="team-single"> <div id="img-txt">This is Fallon<br>
    Trade & communication</div></div>
    </div>

    <div class="more-box">
        <div id="journey">
            <h3><hr>How we got here</h3><br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Mollitia modi rerum quibusdam
            consequuntur id? Nihil quos eos iusto <br>placeat provident deserunt! Iste cum dolore odit 
            id sapiente tempore officia? Dolor?</p><br>
        </div>
        <div id="charity">
            <h3><hr>How we give back</h3><br>
           <p> Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Mollitia modi rerum quibusdam
            consequuntur id? Nihil quos eos iusto <br>placeat provident deserunt! Iste cum dolore odit 
            id sapiente tempore officia? Dolor?</p><br>
        </div>
    </div>
<?php include("inc/footer.php");?>
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>