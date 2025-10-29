<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Cource | Students Dasbboard</title>
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
                    <h2 class="fw-bold header-title1">New Cource Page</h2>
                    <button class="btn btn-outline-success d-lg-none" type="button" onclick="document.querySelector('.sidebar').classList.toggle('show')">
                        ☰ Menu
                    </button>
                </div>

                <div class="col-sm-10 col-md-10 col-lg-10 admin-container">
                <h1>Add New Cource</h1>

                @if(session('success'))
                  <p style="color:green;">{{ session('success') }}</p>
                @endif
 
                <form action="{{ route('courses.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label text-info">Course Name:</label>
                        <input type="text" name="courceName" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-info">Course Description:</label>
                        <input type="text" name="courceAbout" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-info">Lecture Name:</label>
                        <input type="text" name="lectureName" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-success">Add Course</button>
                </form>
            </div>
            </main>
    </div>
</div>

<script src="{{ asset('assets/bootstraps/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
