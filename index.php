<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>MyTime Planner</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-lg py-4">
    <div class="container">
      <a class="navbar-brand fw-bold" href="index.php">MyTime Planner</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse show" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item ms-0 ms-md-3">
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item ms-0 ms-md-3">
            <a class="nav-link" href="php/about-us.php">About Us</a>
          </li>
          <li class="nav-item ms-0 ms-md-3">
            <a class="nav-link" href="php/how-it-works.php">How It Works</a>
          </li>

          <li class="nav-item ms-0 ms-md-3">
            <a class="px-4 py-2 btn btn-primary" href="php/login.php">Login </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <header class="hero-section">
        <div class="container">
          <div class="row align-items-center py-4 g-5">
            <div class="col-12 col-md-6">
              <div class="text-center text-md-start">
                <h1 class="display-md-2 display-4 fw-bold text-dark pb-2">
                  <span class="text-primary">Plan </span>Your Time, Simplify Life
                </h1>
                <p class="lead">
                  Explore our scheduler designed to streamline your daily planning, event management and elevate
                  your digital lifestyle.
                </p>
                <button class="btn btn-primary px-5 py-3 mt-3 fs-5 fw-medium" type="button">
                  <a class="nav-link" href="php/signup.php">Sign Up</a>
                </button>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <img src="assets/man.png" class="img-fluid" alt="a man using laptop">
            </div>
          </div>
        </div>
      </header>
  </nav>

  <div class="footer">&copy;<span id="year"> </span><span class="text-muted"> 2024 MyTime Planner. All rights reserved.</span></div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>