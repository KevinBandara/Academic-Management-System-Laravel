<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Student | Student Dashboard</title>
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
                    <h2 class="fw-bold header-title1">New Student Page</h2>
                    <button class="btn btn-outline-success d-lg-none" type="button" onclick="document.querySelector('.sidebar').classList.toggle('show')">
                        ☰ Menu
                    </button>
                </div>

                <div class="col-sm-10 col-md-10 col-lg-10 admin-container">
                <h1>Add New Students</h1>

                @if(session('success'))
                  <p style="color:green;">{{ session('success') }}</p>
                @endif
 
                <form action="{{ route('students.store') }}" method="POST">
                     @csrf
                   <label>First Name:</label><br>
                        <input type="text" name="studentFname"><br><br>
                    <label>Last Name:</label><br>
                        <input type="text" name="studentLname"><br><br>
                    <label>Email:</label><br>
                        <input type="email" name="email"><br><br>
                    <label>Telephone:</label><br>
                        <input type="text" name="telephone"><br><br>
                    <label>Location:</label><br>
                        <input type="text" name="address"><br><br>
                    <button type="submit">Add Student</button>
                </form>
            </div>
            </main>
    </div>
</div>

<script src="{{ asset('assets/bootstraps/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
