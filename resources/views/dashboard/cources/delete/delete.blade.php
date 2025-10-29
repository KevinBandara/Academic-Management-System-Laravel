<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Delete Courses | Students Dashboard</title>
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
                    <h2 class="fw-bold header-title1">Delete Course Page</h2>
                    <button class="btn btn-outline-success d-lg-none" type="button"
                        onclick="document.querySelector('.sidebar').classList.toggle('show')">☰ Menu
                    </button>
                </div>

                <div class="col-sm-10 col-md-10 col-lg-10 admin-container">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @elseif(session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    <form action="{{ route('courses.destroy') }}" method="POST" class="p-3 rounded">
                        @csrf
                        <div class="mb-3">
                            <label for="courceName" class="form-label text-info">Select Course to Delete:</label>
                            <select name="courceName" id="courceName" class="form-select" required>
                                <option value="" disabled selected>-- Select Course --</option>
                                @foreach($courses as $course)
                                    <option value="{{ $course->courceName }}">{{ $course->courceName }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-danger">Delete Course</button>
                    </form>
                </div>
            </div>
        </main>
    </div>
</div>

<script src="{{ asset('assets/bootstraps/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
