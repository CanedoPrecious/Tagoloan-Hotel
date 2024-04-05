<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
   crossorigin="anonymous"></script>

   <style>  
     *{
       font-family: "Poppins", sans-serif;
      }
      .h-font{
        font-family: "Merienda", cursive;
      }

      #dashboard-home {
        position: fixed;
        height: 100%;
      }
      
    </style>
</head>

<body class= "bg-white">

<div class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between sticky-top">
    <h4 class="mb-0 h-font">HOTEL BOOKING</h4>
    <a href="#" class="btn btn-danger btn-sm">LOGOUT</a>
</div>

<div class="col-lg-2 bg-dark border-top border-3 border-secondary" id="dashboard-home">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid flex-lg-column align-items-stretch">
            <h4 class="mt-2 text-light">ADMIN PANEL</h4>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="navbar">
            <ul class="nav nav-pills flex-column nav-hover">
                <li class="nav-item">
                 <a class="nav-link text-white " href="#">Dashboard</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#">Rooms</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#">Users</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
</div>



    
</body>
</html>