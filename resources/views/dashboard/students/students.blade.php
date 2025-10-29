<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Students | Student Dashboard</title>
    <link href="{{ asset('assets/bootstraps/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/dash.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style2.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/dashboard-responsive.css') }}" rel="stylesheet">
</head>
<body class="bg-dark text-light">

<div class="container-fluid p-0">
    <div class="row g-0">
        @include('components.sidebar')

         <main class="col-lg-10 col-12 admin-container">
            <div class="p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="fw-bold text-light header-title1">Students Page</h2>
                    <button class="btn btn-outline-success d-lg-none" type="button" onclick="document.querySelector('.sidebar').classList.toggle('show')">
                        ☰ Menu
                    </button>
                </div>

                <div class="col-sm-10 col-md-10 col-lg-10 admin-container">
                <h1>Students List</h1>

                @if(session('success'))
                  <p style="color:green;">{{ session('success') }}</p>
                @endif
 
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Updated At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $student)
                        <tr>
                            <th scope="row">{{ $student->id }}</th>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->created_at }}</td>
                            <td>{{ $student->updated_at }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>


                <div class="space" style="margin-bottom: 200px"></div>

                    <!-- Actions List --> 
                    <div class="container-fluid mt-5">
                        <h2 class="header-title1 mb-3">Quick Actions</h2>
                        <p class="text">Manage cources quickly create, update, or delete items using the shortcuts below <span style="color: red">(NOTE: ONLY FOR ADMINS)</span>.</p>

                        <div class="row g-3">
                            <div class="col-lg-4 col-md-6">
                                    <div class="action-card text-center p-4">
                                        <h5 class="text-success mb-2"><i class="fas fa-plus-circle me-2"></i>Create Courses</h5>
                                        <p class="small mb-3">Add a new course/courses.</p>
                                        <a href="/dashboard/cources/create" class="btn btn-outline-success w-100">
                                            Create Now
                                        </a>
                                    </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                    <div class="action-card text-center p-4">
                                        <h5 class="text-info mb-2"><i class="fas fa-edit me-2"></i>Update Courses</h5>
                                        <p class="small mb-3">Modify existing courses with up-to-date information.</p>
                                        <a href="/dashboard/cources/update" class="btn btn-outline-info w-100">
                                            Update Now
                                        </a>
                                    </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                    <div class="action-card text-center p-4">
                                        <h5 class="text-danger mb-2"><i class="fas fa-trash-alt me-2"></i>Delete Courses</h5>
                                        <p class="small mb-3">Remove unwanted or outdated courses permanently.</p>
                                        <a href="/dashboard/cources/delete" class="btn btn-outline-danger w-100">
                                            Delete Now
                                         </a>
                                    </div>
                            </div>
                        </div>
                    </div>
                       <!-- Actions List END -->
            </div>
            </main>

    </div>
</div>

<script src="{{ asset('assets/bootstraps/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
