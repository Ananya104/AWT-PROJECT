<html>

<head>
  <meta charset="utf-8">
  <title>DogNation</title>

  <!--Favicon link-->

  <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>

  <!--Bootstrap links-->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  
  <!--External Style Sheet-->
 
  <link rel="stylesheet" href="/MyProject/public/style.css">
  
  <!--Google fonts-->

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Ubuntu&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Rampart+One&display=swap" rel="stylesheet">
 
<!--Javascript &Jquery for bootstrap-->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
<!--Font Awesome-->
<script src="https://kit.fontawesome.com/40d8631aeb.js" crossorigin="anonymous"></script>

</head>

<body>

  
  <section id="title">

    <!-- Nav Bar -->

<div class="container-fluid">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <i class="fa-solid fa-shield-dog fa-2x"></i>
        <a class="navbar-brand" href="index.php">DogNation</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">


<ul class="navbar-nav ms-auto">
  <li class="nav-item" id="register-link">

  <div class="login-modal modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Register Here </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
  
          <input type="email" id="defaultForm-email" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
        </div>

        <div class="md-form mb-4">
          <input type="password" id="defaultForm-pass" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type=button class="btn btn-primary">Sign In</button>
      </div>
    </div>
  </div>
</div>

<div class="text-center">
  <a href="" class="btn btn-default btn-rounded mb-4 nav-link"  data-toggle="modal" data-target="#modalLoginForm">Register</a>
</div>
</li>


 <li class="nav-item">
<a class="nav-link" href="About.php">About</a>
 </li>
            <li class="nav-item">
              <a class="nav-link" href="Adopt.php">Adopt</a>
            </li>
            <li class="nav-item dropdown">
              
              
            </li>
            <li class="nav-item">
              <a class="nav-link" href= "Contact.php">Contact </a>
            </li>
          </ul>
          
        </div>
      </div>
    </nav>



    <!-- Title -->

    <div class="row">
        
      <div class="col-lg-6">
      <h1> Because Every Pet Deserves a lovely Home! </i></h1>
      <button type="button" class="btn btn-dark btn-lg download-button"><i class="fa-brands fa-google-play"></i> Download</button>
      <button type="button" class="btn btn-light btn-lg download-button"><i class="fa-brands fa-apple"></i> Download</button>
    
       
      </div>

      <div class="col-lg-6">
        <img class="title-img" src="https://thumbs.dreamstime.com/b/pet-adoption-conce…-was-adopted-sign-studio-background-131557299.jpg">
      </div>
      </div>
  </div>
  
  <h2 class="insight"><center>Adopt-Don't Shop!!</center></h2>
  <p id="insight">
    Six and a half million domestic animals enter shelters in India each year out of which 3.3 million are dogs.
     Just over half of these in shelters are adopted annually — around 3.2 million — and 1.5 million are euthanized. Of dogs admitted into shelters, approximately 700,000 are eventually returned to their original homes, most of which are dogs.
      Around a third of all dogs taken into homes each year are purchased from a breeder, and just under a quarter of dogs are purchased from shelters. The remainder are purchased from friends, another party or are discovered as strays.
  
    </p>
  </section>

  
  
  <!-- Features -->
  
  <h2 class="section-heading insight">
   <mark>Our Features</mark></h2>



  <section class="white-section" id="features">
    <div class="container-fluid">
      <div class="row">


        <div class="col-lg-4 col-md-12 feature-box">
          <i class="fa-solid fa-syringe fa-4x icon"></i>
          <h3 class="feature-title">Safe and Reliable</h3>
          <p>Responsive breeders-vaccinated pets to ensure 100% safety.</p>
        </div>




        <div class="col-lg-4 col-md-12 feature-box">
          <i class="fas fa-check-circle fa-4x icon"></i>
          <h3 class="feature-title">Expert Guidance</h3>
          <p>Easy and haslle-free process to ensure A great user experience.</p>
        </div>
      

        <div class="col-lg-4 col-md-12 feature-box">
          <i class="fas fa-bullseye fa-4x icon"></i>
          <h3 class="feature-title">Wholesome Variety</h3>
          <p>All breeds for the dog lovers out there.  </p>
        </div>


        <div class="col-lg-4 col-md-12 feature-box">
          <i class="fa-solid fa-briefcase-medical fa-4x icon"></i>
          <h3 class="feature-title">Affordable rates</h3>
          <p>Furry friends at feasible prices. </p>
        </div>

        <div class="col-lg-4 col-md-12 feature-box">
          <i class="fa-solid fa-question fa-4x icon"></i>
          <h3 class="feature-title">24/7 Support</h3>
          <p>Specially dedicated cell to resolve all your doubts and queries.  </p>
        </div>


        <div class="col-lg-4 col-md-12 feature-box">
          <i class="fas fa-heart fa-4x icon"></i>
          <h3 class="feature-title">Get Featured</h3>
          <p>Be a part of our dog-fam and get featured on our socials.</p>
        </div>
      </div>
    </div>
  </section>


  <!-- Testimonials -->

  <section class="colored-section" id="testimonials">
    <div id="testimonial-carousel" class="carousel slide" data-ride="false">
      <div class="carousel-inner">
        <div class="carousel-item active container-fluid">
          <h2 class="testimonial-text">I no longer feel lonely for now I have my little partner in crime.</h2>
          <img class="testimonial-image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgJXjAJecJSZ1l0_Bwr3v3asLkH-9J3VMZaA&usqp=CAU" alt="dog-profile">
          <em>Ashika,New Delhi</em>
        </div>
        <div class="carousel-item container-fluid">
          <h2 class="testimonial-text">Adopting a pet was the best decission I made - muddy paws and a happy heart.</h2>
          <img class="testimonial-image" src="https://static.toiimg.com/thumb/msid-88550280,imgs…0,width-800,height-600,resizemode-75/88550280.jpg" alt="lady-profile">
          <em>Vidya,Mumbai</em>
        </div>
        <div class="carousel-item container-fluid">
          <h2 class="testimonial-text">You can't buy love but you can rescue it! Don't breed or buy, while shelter animals die.</h2>
          <img class="testimonial-image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7dhug0GTlxpePK-PpzXmvy8jxgrzKQ76wig&usqp=CAU" alt="lady-profile">
          <em>Binoy,Chennai</em>
        </div>
      </div>
      <a class="carousel-control-prev" href="#testimonial-carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>

      </a>
      <a class="carousel-control-next" href="#testimonial-carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon"></span>

      </a>
    </div>
  </section>


  <!-- Press-->

  <section id="press">
    <img class="press-logo"  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTyrYIg0JzNezMExJrHRd8HTzn9uWFY4NVILw&usqp=CAU" alt="mashable-logo">
    <img class="press-logo"  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSY0pHfwaRyHr9KtpA3xZPub7dfciTxq2KeAw&usqp=CAU" alt="mashable-logo">
    <img class="press-logo"  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8NPmpl9KEu1fXAmO0TwXtHQr7pS0AqN2Pug&usqp=CAU" alt="tc-logo">
  </section>


  <!--Footer-->
  
  <footer id="footer" class="white-section">
    <div class="container-fluid">
      <h4>Join our Dog-fam!</h4>
    <i class="fa-brands fa-square-twitter fa-2x social-icon"></i>
    <i class="fa-brands fa-facebook fa-2x social-icon"></i>
    <i class="fa-brands fa-square-instagram fa-2x social-icon"></i>
    <i class="fa-solid fa-envelope fa-2x social-icon"></i>
    <p id="copyright">© Copyright DogNation</p>
    </div>
  </footer>

</body>

</html>

bash: line 1: ^C: command not found
