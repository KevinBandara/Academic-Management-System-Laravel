<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home - Students Dashboard</title>
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
                    <h2 class="fw-bold text-light">Multi-features Dashboard</h2>
                   <button class="btn btn-outline-success d-lg-none" type="button" onclick="document.querySelector('.sidebar').classList.toggle('show')">
                        ☰ Menu
                    </button>

                </div>

                <div class="row g-4">
                    <div class="col-md-4 col-sm-12">
                        <div class="card bg-gradient-dark text-light shadow-sm border-0">
                            <div class="card-body">
                                <h5 class="card-title">All the users</h5>
                                <p class="card-text fs-6">The current number of users are <strong>{{ $users->count() }}</strong></p>
                                <a href="#" class="btn btn-outline-success w-100">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="card bg-gradient-dark text-light shadow-sm border-0">
                            <div class="card-body">
                                <h5 class="card-title">Students Count</h5>
                                <p class="card-text fs-5">The current number of students is <strong>{{ $students->count() }}</strong>.</p>
                                <a href="/dashboard" class="btn btn-outline-success w-100">More Details</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="card bg-gradient-dark text-light shadow-sm border-0">
                            <div class="card-body">
                                <h5 class="card-title">Courses Available</h5>
                                <p class="card-text fs-5">There are <strong>{{ $courses->count() }}</strong> courses available.</p>
                                <a href="/dashboard/cources" class="btn btn-outline-success w-100">View Courses</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-5">
                    <h3 class="header-title1 mb-3">Student Details</h3>
                    <div class="table-responsive">
                        <table class="table table-dark table-striped align-middle text-center">
                            <thead class="table-success text-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Full Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Telephone</th>
                                    <th>Address</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $index => $student)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $student->studentFname }}</td>
                                        <td>{{ $student->studentLname }}</td>
                                        <td>{{ $student->email }}</td>
                                        <td>{{ $student->telephone }}</td>
                                        <td>{{ $student->address }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>


                <div class="mt-5">
                    <h3 class="header-title1 mb-3">Courses Details</h3>
                    <div class="table-responsive">
                        <table class="table table-dark table-striped align-middle text-center">
                            <thead class="table-success text-dark">
                                <tr>
                                    <th>#</th>
                                    <th>CourseID</th>
                                    <th>Cource Name</th>
                                    <th>Cource Details Count</th>
                                    <th>Lecture Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($courses as $index => $course)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $course->id }}</td>
                                        <td>{{ $course->name }}</td>
                                        <td>{{ $course->details_count }}</td>
                                        <td>{{ $course->lecture_name }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<script src="{{ asset('assets/bootstraps/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
