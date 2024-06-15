<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <title>How It Works</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-lg py-4">
    <div class="container">
      <a class="navbar-brand fw-bold" href="../index.php">MyTime Planner</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse show" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item ms-0 ms-md-3">
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item ms-0 ms-md-3">
            <a class="nav-link" href="about-us.php">About Us</a>
          </li>
          <li class="nav-item ms-0 ms-md-3">
            <a class="nav-link" href="how-it-works.php">How It Works</a>
          </li>

          <li class="nav-item ms-0 ms-md-3">
            <a class="px-4 py-2 btn btn-primary" href="login.php">Login </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<div class="container py-5 mb-5">
  <div class="row">
    <div class="col-12">
      <h2 class="fw-bold text-primary fs-1 pb-3 text-center">
        How it works
      </h2>

      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button fs-3 text-dark fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              What is MyTime Planner?
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p class="lead">
                MyTime Planner makes managing your personal schedule easy and efficient. It's built on system that's flexible and simple to use.
              </p>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button fs-3 text-dark fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              How can I browse and explore the calendar on MyTime Planner?
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p class="lead">
                Users can create an account or log in to their existing account to access MyTime Planner.
                When users log in, Dashboard displays events and tasks. 
                They can start by adding their plans, events, and tasks to the calendar.
                
              </p>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed fs-3 text-dark fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              What if i have more questions?
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p class="lead">
                If you have further questions do not hesitate to contact us on our email: personalschedsystem@gmail.com
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="footer">&copy;<span id="year"> </span><span class="text-muted"> 2024 MyTime Planner. All rights reserved.</span></div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>