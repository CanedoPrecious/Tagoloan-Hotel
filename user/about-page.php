<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel Booking</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>  
     *{
       font-family: "Poppins", sans-serif;
      }
      .h-font{
        font-family: "Merienda", cursive;
      }
      .custom-bg{
        background-color:#b59410;
      }
      .custom-bg-hover{
        background-color:#b2bec3;
      }
      .availability{
        margin-top: -50px;
        z-index:2;
        position:relative;
      }
    </style>

</head>
<body>

<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top ">
  <div class="container-fluid">
			<a class="navbar-nav me-5" href="index.php">
				<img src="../assets/img/Logo.png" alt="Tagoloan Hotel" style="width:150px" >
      </a>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-items-center" id="navbar">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-center">
        <li class="nav-item">
          <a class="nav-link me-2" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active me-2" aria-current="page" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="rooms-page.php">Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="contact-page.php">Contact</a>
        </li>
      </ul>
      <div class="d-flex">
        <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
          Login
       </button>
       <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-1" data-bs-toggle="modal" data-bs-target="#registerModal">
          Register
       </button>
      </div>
    </div>
  </div>
</nav>

<!--Login Modal-->
<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content ">
    <form>
      <div class="modal-header">
        <h5 class="modal-title d-flex align-items-center ">
        <i class="bi bi-person-circle fs-3 me-2"></i>User Login
        </h5>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
         <label class="form-label">Email address</label>
         <input type="email" class="form-control shadow-none">
        </div>
        <div class="mb-4">
         <label class="form-label">Password</label>
         <input type="password" class="form-control shadow-none">
        </div>
        <div>
          <div class="d-flex align-items-center justify-content-between mb-2">
          <button type="submit" class="btn btn-dark shadow-none">LOGIN</button>
          <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password</a>
          </div>
        </div>
      </div>
    </form>
    </div>
  </div>
</div>

<!--Registration Modal-->
<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content ">
    <form>
      <div class="modal-header">
        <h5 class="modal-title d-flex align-items-center ">
        <i class="bi bi-person-fill-add fs-3 me-2"></i>User Registration
        </h5>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
        Note: Please provide a valid information that matches to your preferred ID (Passport, License, etc.)
        that will be required during check-in. THANK YOU.
      </span>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 ps-0 mb-3">
           <label class="form-label">Name:</label>
           <input required type="text" class="form-control shadow-none">
          </div>
          <div class="col-md-6 p-0 mb-3">
            <label class="form-label">Email:</label>
            <input required type="email" class="form-control shadow-none">
          </div>
          <div class="col-md-6 ps-0 mb-3">
            <label class="form-label">Phone Number:</label>
            <input required type="text" class="form-control shadow-none">
          </div>
          <div class="col-md-6 p-0 mb-3">
           <label class="form-label">Picture:</label>
           <input required type="file" class="form-control shadow-none">
          </div>
          <div class="col-md-12 p-0 mb-3">
           <label class="form-label">Address:</label>
           <textarea required class="form-control shadow-none" row="1"></textarea>
          </div>
          <div class="col-md-12 p-0 mb-3">
           <label class="form-label">Date of birth:</label>
           <input required type="date" class="form-control shadow-none">
          </div>
          <div class="col-md-6 ps-0 mb-3">
           <label class="form-label">Password:</label>
           <input required type="password" class="form-control shadow-none">
          </div>
          <div class="col-md-6 p-0 mb-3">
           <label class="form-label">Confirm Password:</label>
           <input required type="password" class="form-control shadow-none">
          </div>
        </div>
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-dark shadow-none">REGISTER</button>
      </div>
      </div>
    </form>
    </div>
  </div>
</div>


<!--About-->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">ABOUT</h2>
<div class="container ">
  <div class="row">
    <div class="col-lg-4 col-md-6 my-3 bg-white rounded">
    <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
     <img src="../assets/img/Logo.png" class="img-thumbnail rounded-end" alt="...">
    </div>
    </div>
  </div>
</div>

<!--Footer-->
<div class="card-footer">
  <div class="container-fluid mt-5">
    <div class="row">
      <div class="col-lg-4 p-4">
        <a class="navbar-nav me-5" href="index.php">
			   <img src="../assets/img/Logo.png" alt="Tagoloan Hotel" style="width:200px" >
         <br>
         <p></p>
        </a>
      </div>
      <div class="col-lg-4 p-4 active-hover">
        <h5 class="mb-3">Links</h5>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a><br>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">About</a><br>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Rooms</a><br>      
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Contact</a><br>
      </div>
      <div class="col-lg-4 p-4">
        <h5 class="mb-3">Follow us</h5>
        <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
          <i class="bi bi-facebook me-1"></i>Facebook
        </a><br>
         <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
          <i class="bi bi-twitter me-1"></i>Twitter
        </a><br>
         <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
          <i class="bi bi-instagram me-1"></i>Instragram
        </a><br>
         <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
          <i class="bi bi-youtube me-1"></i>YouTube
        </a><br>
      </div>
      <hr>

    </div>
  </div> 
</div>
</body>
</html>