<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scholarship Exam Result</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light px-4 border-bottom">
            <div class="container-fluid">
              <a class="navbar-brand fs-1"  href="#">EduGaon-<span class="text-primary">Result</span></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-5 text-center">
                  <li class="nav-item">
                    <a class="nav-link active texyt-primary" aria-current="page" href="{{ '/' }}">Home</a>
                  </li>
              </div>
            </div>
          </nav>
    </header>

<div class="container mt-4">
    <h2 class="text-center text-white p-3 rounded" style="background: linear-gradient(to right, #ff512f, #dd2476);">
        Scholarship Exam Result
    </h2>

    <table class="table table-bordered table-striped text-center">
        <thead class="table-danger">
            <tr>
                <th>Name</th>
                <th>Total Marks</th>
                <th>Marks</th>
                <th>Score</th>
                <th>Course Fees</th>
                <th>Discount</th>
                <th>Pay</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->total_marks }}</td>
                <td>{{ $student->marks }}</td>
                <td>{{ $student->score }}</td>
                <td>{{ $student->course_fees }}</td>
                <td>{{ $student->discount }}</td>
                <td>{{ $student->Pay }}</td>
            </tr>
        </tbody>
    </table>
</div>

</body>
</html>
