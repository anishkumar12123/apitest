<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
<!-- Font Awesome CDN Link -->
<!-- Font Awesome CDN Link -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light px-4 border-bottom">
    <div class="container-fluid">
      <a class="navbar-brand fs-1"  href="#">Techo-<span class="text-primary">Web</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-5 text-center">
          <li class="nav-item">
            <a class="nav-link active texyt-primary" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Get My Result</a>
          </li>
          {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Services
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">SEO</a></li>
              <li><a class="dropdown-item" href="#">Web Design</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Grapics Sesign</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Our Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul> --}}
      </div>
    </div>
  </nav>

  {{-- <div id="carouselExample" class="carousel slide"> --}}
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="store/ravi.jpeg" class="d-block w-100" alt="..." width="100%" height="650px">

      </div>
</header>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>





<!-- Bootstrap Modal -->
<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalToggleLabel">Enter Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <!-- Form inside modal -->
          <form id="captchaForm" method="GET">
            @csrf
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control" id="username" placeholder="Enter your name">
            </div>

            <div class="mb-3">
                <label for="username" class="form-label">Mobile Number</label>
                <input type="text" class="form-control" id="username" placeholder="Enter your MobileNumber">
              </div>

            <!-- Captcha Code -->
            <div class="mb-3 text-center">
              <span id="captchaCode" class="fw-bold p-2 bg-light border rounded">1234AB</span>
              <button type="button" class="btn btn-sm btn-secondary" onclick="generateCaptcha()">⟳ Refresh</button>
            </div>

            <!-- Captcha Input -->
            <div class="mb-3">
              <label for="captchaInput" class="form-label">Enter Captcha</label>
              <input type="text" class="form-control" id="captchaInput" placeholder="Enter Captcha">
            </div>

            <button type="submit" class="btn btn-primary w-100">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
      <div class="modal-content">
       </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Modal 2</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Hide this modal and show the first with the button below.
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>
        </div>
      </div>
    </div>
  </div>
  {{-- <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Open first modal</button> --}}



  <script>
    function generateCaptcha() {
        let chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        let captcha = "";
        for (let i = 0; i < 6; i++) {
            captcha += chars.charAt(Math.floor(Math.random() * chars.length));
        }
        document.getElementById("captchaCode").innerText = captcha;
    }

    // Auto-generate captcha when modal opens
    document.addEventListener("DOMContentLoaded", function () {
        generateCaptcha();
    });

    // Captcha validation
    document.getElementById("captchaForm").addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent form submission
        let enteredCaptcha = document.getElementById("captchaInput").value;
        let actualCaptcha = document.getElementById("captchaCode").innerText;

        if (enteredCaptcha === actualCaptcha) {
            alert("Captcha Verified Successfully!");
        } else {
            alert("Captcha Incorrect! Try Again.");
            generateCaptcha();
        }
    });
    </script>
