<!Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Webpro Car Rental</title>
    <!-- Icon for tab -->
    <link rel="shortcut icon" href="../assests/icons/car-rental-sign-black.png">


    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">

    <style>
      #side_img{
        width: 150%;
      }

      #second_column{
        margin-top: 85px !important;
        max-width: 600px !important;
        margin-left: 200px!important;
      }
    </style>
  </head>
  <body>

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="../indexCar.php">
            <img src="../assests/icons/car-rental-sign.png" width="30" height="30" class="d-inline-block align-top" alt="Logo">
          </a>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../indexCar.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="">Rent a car</a>
          <a class="dropdown-item" href="parking_rental.php">Reserve a parking</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Book a flight</a>
        </div>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a class="btn btn-light my-2 my-sm-0" type="button" href="login.php">Log In</a>
    </form>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
          <img src="../assests/icons/cart_empty.png" width="30" height="30" class="d-inline-block align-top" alt="Cart" style="margin-left: 20px;">
        </a>
  </div>
</nav>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-4">
      <img  id="side_img" src="../assests/img/plane_2.png" alt="Car" style="margin-top: 70px; margin-left: 40px;">
    </div>
    <div id ="second_column" class="col-md-8 text-center">
        <h1 class="display-4 text-center font-weight-normal">Worry about the ticket, we worry about the plan!</h1>
        <p class="lead text-center">Trip planning has never been easy than right now.
                                    We have the best market possible for ticket right now at the best price.
                                    Plan your next trip with us and enjoy great discount.</p>
    </div>
  </div>
</div><br><br><br><br><br>
<div class="container">
  <p class="text-center display-4">Let's get started</p>
    <hr><br>

    <div class="py-5 text-center">
    <h2>Checkout form</h2>
    <p class="lead">Below is the form to fill in order to get price and ticket availability.</p>
  </div>

    <div class="col-md-12 mb-3 text-center center">
      <!--<select type="" name="" value="" class="form-control" style="width: 50%; margin: 0 auto;">-->

    <div class="form-group">
      <div class="form-group">
        <label for="exampleFormControlSelect1">Select a trip type?</label>
          <select class="form-control" id="exampleFormControlSelect1" style="width: 50%; margin: 0 auto;">
           <option>Select</option>
           <option>One way</option>
           <option>Round trip</option>
          </select>
        </div>
     </div>
   </div><br>

   <div class="row">
     <div class="col-md-6 mb-3">
       <label for="From">From</label>
       <input type="date" name="" value="" class="form-control">
     </div>
     <div class="col-md-6 mb-3">
       <label for="To">To</label>
       <input type="date" name="" value="" class="form-control">
     </div><br>
   </div>


   <div class="row">
     <div class="col-md-6 mb-3">
       <label for="From">From</label>
       <input type="text" name="" value="" class="form-control" placeholder="Atlanta, Ga">
     </div>
     <div class="col-md-6 mb-3">
       <label for="To">To</label>
       <input type="text" name="" value="" class="form-control" placeholder="New York, NY">
     </div><br>
   </div>

   <div class="form-group">
     <div class="form-group text-center">
       <label for="exampleFormControlSelect1">Select class?</label>
         <select class="form-control" id="exampleFormControlSelect1" style="width: 50%; margin: 0 auto;">
          <option>Select</option>
          <option>Business</option>
          <option>Economy</option>
         </select>
       </div>
    </div>

    <div class="row">
      <div class="col-md-6 mb-3">
        <label for="From">Adults?</label>
        <input type="number" name="" value="" class="form-control" placeholder="0">
      </div>
      <div class="col-md-6 mb-3">
        <label for="To">Kids?</label>
        <input type="number" name="" value="" class="form-control" placeholder="0">
      </div><br>
    </div>
  </div><br>




  <div class="col-md-12 mb-3 text-center center">
    <button type="button" name="" value="" class="btn btn-primary btn-lg">Find price</button>
  </div>
</div>
</div>



  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <img class="mb-2" src="../assests/icons/car-rental-sign-black.png" alt="" width="60" height="60" style="margin-left: 50px;">
        <small class="d-block mb-3 text-muted" style="margin-left: 50px;">&copy; 2019-2020</small>
      </div>
      <div class="col-6 col-md">
        <h5>Features</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Car rental</a></li>
          <li><a class="text-muted" href="#">Parking reservation</a></li>
          <li><a class="text-muted" href="#">Flight booking</a></li>
          <li><a class="text-muted" href="#">Monetize your car</a></li>
          <li><a class="text-muted" href="#">Airbnb rental</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Resources</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Financial resource</a></li>
          <li><a class="text-muted" href="#">Technical ressource</a></li>
          <li><a class="text-muted" href="#">Associate ressource</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>About</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Team</a></li>
          <li><a class="text-muted" href="#">Locations</a></li>
          <li><a class="text-muted" href="#">Privacy</a></li>
          <li><a class="text-muted" href="#">Terms</a></li>
        </ul>
      </div>
    </div>
  </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
