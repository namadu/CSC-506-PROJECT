<!doctype html>
<?php 
	require_once 'connect-inc.php' ; 

?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="cssfile.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Registration</title>
  </head>
  <body>

  <nav class="navbar fixed-top navbar-expand-lg navbar-light " id="navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php"><img src="C:\xampp\htdocs\CSC506\images\LOGO3.png" alt="" width="30" height="30" class="d-inline-block align-text-top">Happenings</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Trending</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Politics</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Others
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Corona Virus</a></li>
            <li><a class="dropdown-item" href="#">Football</a></li>
            <li><a class="dropdown-item" href="#">Entertainment</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>





<div class="container">
  <form method="POST" action="">
  <div class="container" id="registrationform">

  <h1>User Registration Page</h1><br>

          <form class="row g-3">
            <div class="col-md-12">
            <label for="inputEmail4" class="form-label">First Name</label>
            <input type="text" class="form-control"  name="firstname" required>
          </div>
          <div class="col-md-12">
            <label for="inputEmail4" class="form-label">Surname</label>
            <input type="text" class="form-control"   name="surname" required>
          </div>
          <div class="col-md-12">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" name="inputEmail4" required>
          </div>
          <div class="col-md-12">
            <label for="inputPassword4" class="form-label">Password</label>
            <input type="password" class="form-control" name="inputPassword4" required>
          </div>
          <div class="col-12">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" class="form-control" name="inputAddress" placeholder="1234 Main St" required>
          </div>
          
          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="gridCheck" required>
              <label class="form-check-label" for="gridCheck">
                I agree to the terms and conditions
              </label>
            </div>
          </div>
          <div class="col-12">
            <button type="submit" name="submit" class="btn btn-primary">Sign Up</button>
          </div>
        </form>







</div>

  </div>

<?php 
					require_once 'connect.php' ;
			?>
		
       


  
<nav class="navbar navbar-light " id="navbar">
  <div class="container-fluid">
    <div class="row">
      <div> <a href="#"> </a> </div>
      <div class="col-4"> </div>
    <a><img src="C:\xampp\htdocs\CSC506\images\LOGO3.png" alt="" width="150" height="150" class="d-inline-block align-text-top"></a> </div>
    <div class="col-2"><a class="navbar-brand">Navbar</a> </div>

  </div> 
</nav>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>
