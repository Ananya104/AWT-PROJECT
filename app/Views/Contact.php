<html>

<head>
  <meta charset="utf-8">
  <title>ContactUs</title>

  <!--Favicon link-->

  <link href="favicon.ico" rel="icon" type="image/x-icon">

  <!--Bootstrap links-->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  
  <!--External Style Sheet-->
 
  <link rel="stylesheet" href="/MyProject/public/style.css">
  
  <!--Google fonts-->

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
                <a class="navbar-brand" href="<?php echo base_url(); ?>/index.php ">DogNation</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url(); ?>/index.php/about ">About</a>
                    </li>
                    <li class="nav-item">
                     <a class="nav-link" href="<?php echo base_url(); ?>/index.php/adopt ">Adopt</a>
                    </li>
                    <li class="nav-item dropdown">
                      
                      
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url(); ?>/index.php/contact ">Contact</a>
                    </li>
                  </ul>
                  
                </div>
              </div>
            </nav>
        
        
        
  <h1 class="contact-heading"><i class="fa-solid fa-paperclip"></i> Let's Connect</h1> 
  
<div class="container py-4">

    <form id="contactForm">
  
      
      <div class="mb-3">
        <label class="form-label" for="name">Name</label>
        <input class="form-control" id="name" type="text" placeholder="Name" data-sb-validations="required" />
        <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
      </div>
  
      <div class="mb-3">
        <label class="form-label" for="emailAddress">Email Address</label>
        <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" data-sb-validations="required, email" />
        <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.</div>
        <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
      </div>

      <div class="mb-3">
        <label class="form-label" for="Contact">Contact</label>
        <input class="form-control" id="Contact" type="tel" placeholder="Phone Number" data-sb-validations="required, contact" />
        <div class="invalid-feedback" data-sb-feedback="Contact:required">Phone Number is required.</div>
        <div class="invalid-feedback" data-sb-feedback="Contact:email">Phone Number  is not valid.</div>
      </div>



  
    
      <div class="mb-3">
        <label class="form-label" for="message">Message/Suggestions</label>
        <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;" data-sb-validations="required"></textarea>
        <div class="invalid-feedback" data-sb-feedback="message:required">Message is required.</div>
      </div>
  
      <div class="d-none" id="submitSuccessMessage">
        <div class="text-center mb-3">Form submission successful!</div>
      </div>
  
    
      <div class="d-none" id="submitErrorMessage">
        <div class="text-center text-danger mb-3">Error sending message!</div>
      </div>
  
      
      <div class="d-grid">
        <button class="btn btn-primary btn-lg submit-btn" type="submit">Submit</button>
      </div>
  
    </form>
   
  
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
