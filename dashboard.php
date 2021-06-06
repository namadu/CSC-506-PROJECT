<!doctype html>
<?php
include'connect-inc.php';
    $s="select*from record where id='$_SESSION[id]'";
    $qu= mysqli_query($conn, $s);
    $f=mysqli_fetch_assoc($qu);
    ?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="cssfile.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Dashboard</title>
  </head>
  <body>

  <nav class="navbar fixed-top navbar-expand-lg navbar-light " id="navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="C:\Users\Favour Maitera\Desktop\CSC506\images\LOGO3.png" alt="" width="30" height="30" class="d-inline-block align-text-top">Happenings</a>
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






<div class="container" id="registrationform">

<h1>My Profile Page</h1><br>
  <div class="row">
    <div class="col"><img  id="profilepic" src="C:\xampp\htdocs\CSC506\images\image1.jpg" class="img-fluid" alt="..." width="100" height="100"> </div>
  </div>
  
 <table class="table" name= >
  <thead>
    <tr>
      <th scope="col">My Details</th>
    

	
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">First Name</th>
      <td><?php echo $f['firstname'];?></td>
      
    </tr>
    <tr>
      <th scope="row">Surname</th>
      <td><?php echo $f['surname'];?></td>
     
    </tr>
    <tr>
      <th scope="row">Email	</th>
      <td colspan="2"><?php echo $f['email'];?></td>
     
     
    </tr>
	 <tr>
      <th scope="row">Address</th>
      <td colspan="2"><?php echo $f['address'];?></td>
     
    </tr>
  </tbody>
</table>
  
  
  
</div>








  
<nav class="navbar navbar-light " id="navbar">
  <div class="container-fluid">
    <div class="row">
      <div> <a href="#"> </a> </div>
      <div class="col-4"> </div>
    <a><img src="C:\Users\Favour Maitera\Desktop\CSC506\images\LOGO3.png" alt="" width="150" height="150" class="d-inline-block align-text-top"></a> </div>
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
