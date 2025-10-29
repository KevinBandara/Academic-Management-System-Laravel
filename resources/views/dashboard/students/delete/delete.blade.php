<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Delete Student | Student Dashboard</title>
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
            <h2 class="fw-bold header-title1">Delete Students Page</h2> 
            <button class="btn btn-outline-success d-lg-none" type="button" onclick="document.querySelector('.sidebar').classList.toggle('show')">
                ☰ Menu
            </button>
        </div>
        
        <div class="col-sm-10 col-md-10 col-lg-10 admin-container"> 
            <h1>Delete Students Page</h1>

            @if(session('success'))
                <div class="alert alert-success" role="alert"> 
                    {{ session('success') }}
                </div>
            @endif
        
            <form action="{{ route('students.deleteByName') }}" method="POST">
                @csrf
                <label for="studentFname">Enter the first name of Student to be Deleted:</label><br>
                <input type="text" name="studentFname" id="studentFname"><br><br>
                <button type="submit">Delete Student</button>
            </form>
        </div>
    </div>
</main>
    </div>
</div>

<script src="{{ asset('assets/bootstraps/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
