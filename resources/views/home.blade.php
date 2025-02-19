<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scholarship Exam</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light px-4 border-bottom">
            <div class="container-fluid">
              <a class="navbar-brand fs-1"  href="#">EduGaon-<span class="text-primary">Web</span></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-5 text-center">
                  <li class="nav-item">
                    <a class="nav-link active texyt-primary" aria-current="page" href="{{ '/' }}">Home</a>
                  </li>
                  <li class="nav-item">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Check Result</button>
                </li>
              </div>
            </div>
          </nav>
    </header>
    <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="store/ravi.jpeg" class="d-block w-100" alt="..." width="100%" height="650px">

        </div>
<div class="container mt-5">
    {{-- <h2 class="text-center">Scholarship Exam Result</h2> --}}

    <!-- Button to Open Modal -->
    {{-- <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Check Result</button> --}}

    <!-- Bootstrap Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Enter Your Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="resultForm">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>

                        <div class="mb-3">
                            <label for="mobile" class="form-label">Mobile Number</label>
                            <input type="text" class="form-control" id="mobile" name="mobile" required>
                        </div>

                        <!-- Captcha Code -->


                        <!-- Captcha Input -->
                        <div class="mb-3 text-center">
                            <span id="captchaCode" class="fw-bold p-2 bg-light border rounded"></span>
                            <button type="button" id="refreshCaptcha" class="btn btn-sm btn-secondary">⟳ Refresh</button>
                        </div>

                        <div class="mb-3">
                            <label for="captcha" class="form-label">Enter Captcha</label>
                            <input type="text" class="form-control" id="captcha" name="captcha" required>
                        </div>


                        <button type="submit" class="btn btn-success w-100">Submit</button>
                    </form>

                    <div id="error-message" class="alert alert-danger mt-2 d-none"></div>
                </div>
            </div>
        </div>
    </div>
</div>



<script>
    function generateCaptcha() {
        $.ajax({
            url: "{{ route('generate.captcha') }}",
            method: "GET",
            success: function(response) {
                $("#captchaCode").text(response.captcha);
            }
        });
    }

    $(document).ready(function() {
        generateCaptcha(); // Page Load Par Captcha Generate Ho

        $("#resultForm").on("submit", function(e) {
            e.preventDefault();

            $.ajax({
                url: "{{ route('get.result') }}",
                method: "POST",
                data: $(this).serialize(),
                success: function(response) {
                    if (response.success) {
                        window.location.href = response.redirect;
                    } else {
                        $("#error-message").text(response.error).removeClass("d-none");
                        generateCaptcha(); // Error aane par captcha refresh hoga
                    }
                }
            });
        });

        // Captcha Refresh Button
        $("#refreshCaptcha").on("click", function() {
            generateCaptcha();
        });
    });
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
