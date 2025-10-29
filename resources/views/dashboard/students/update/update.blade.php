<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Update Student | Student Dashboard</title>
  <link href="{{ asset('assets/bootstraps/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/sidebar.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/dash.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/style2.css') }}" rel="stylesheet">
</head>

<body class="bg-dark text-light">
<div class="container-fluid p-0">
  <div class="row g-0">
    @include('components.sidebar')

    <main class="col-lg-10 col-12 admin-container">
      <div class="p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <h2 class="fw-bold header-title1">Update a Student</h2>
          <button class="btn btn-outline-info d-lg-none" type="button" onclick="document.querySelector('.sidebar').classList.toggle('show')">
            ☰ Menu
          </button>
        </div>

        <div class="form-card">
          <h4 class="mb-3 text-info">Find & Update Student</h4>

          @if(session('success'))
            <p class="text-success fw-semibold">{{ session('success') }}</p>
          @endif
          @if(session('error'))
            <p class="text-danger fw-semibold">{{ session('error') }}</p>
          @endif

          <form action="{{ route('students.update') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label class="form-label">Enter Student ID to Update:</label>
              <input type="text" name="studentID" class="form-control" placeholder="e.g. 1" required>
            </div>

            <div class="mb-3">
              <label class="form-label">First Name</label>
              <input type="text" name="studentFname" class="form-control">
            </div>

            <div class="mb-3">
              <label class="form-label">Last Name</label>
              <input type="text" name="studentLname" class="form-control">
            </div>

            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" name="email" class="form-control">
            </div>

            <div class="mb-3">
              <label class="form-label">Telephone</label>
              <input type="text" name="telephone" class="form-control">
            </div>

            <div class="mb-3">
              <label class="form-label">Address</label>
              <input type="text" name="address" class="form-control">
            </div>

            <div class="text-end">
              <button type="submit" class="btn btn-info">Update Student</button>
            </div>
          </form>
        </div>
      </div>
    </main>
  </div>
</div>

<script src="{{ asset('assets/bootstraps/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
