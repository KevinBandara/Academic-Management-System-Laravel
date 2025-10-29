<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Update Courses | Students Dashboard</title>
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
          <h2 class="fw-bold header-title1">Update a Course</h2>
          <button class="btn btn-outline-info d-lg-none" type="button" onclick="document.querySelector('.sidebar').classList.toggle('show')">
            ☰ Menu
          </button>
        </div>

        <div class="form-card">
          <h4 class="mb-3 text-info">Find & Update Course</h4>

          @if(session('success'))
            <p class="text-success fw-semibold">{{ session('success') }}</p>
          @endif
          @if(session('error'))
            <p class="text-danger fw-semibold">{{ session('error') }}</p>
          @endif

          <form action="{{ route('courses.updateCourse') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label class="form-label">Select Course to Update:</label>
              <select name="courceID" class="form-select" required>
                <option value="" disabled selected>-- Select Course --</option>
                @foreach($courses as $course)
                  <option value="{{ $course->id }}">{{ $course->courceName }}</option>
                @endforeach
              </select>
            </div>

            <div class="mb-3">
              <label class="form-label">Course Name</label>
              <input type="text" name="courceName" class="form-control" required>
            </div>

            <div class="mb-3">
              <label class="form-label">About</label>
              <textarea name="courceAbout" class="form-control" rows="3" required></textarea>
            </div>

            <div class="mb-3">
              <label class="form-label">Lecture Name</label>
              <input type="text" name="lectureName" class="form-control" required>
            </div>

            <div class="text-end">
              <button type="submit" class="btn btn-info">Update Course</button>
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
