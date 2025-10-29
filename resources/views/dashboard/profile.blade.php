<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile | Dashboard</title>
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
                    <button class="btn btn-outline-success d-lg-none" type="button" onclick="document.querySelector('.sidebar').classList.toggle('show')">
                        ☰ Menu
                    </button>
                </div>
                
            <div class="container py-4">
                <div class="profile-card mx-auto col-lg-8 col-md-10 col-sm-12">
                    <div class="profile-header text-center mb-4">
                        <img
                            src="{{ asset('avatars/' . ($user->avatar ?? 'default.png')) }}"
                            alt="Avatar"
                            class="profile-avatar mb-3"
                        />
                        <h4 class="mb-1">{{ $user->username }}</h4>
                        <p class="text-muted small mb-0">{{ $user->email }}</p>
                    </div>

                @if(session('success'))
                    <div class="alert alert-success text-center">{{ session('success') }}</div>
                @endif

        <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
          @csrf
          
          <div class="row g-3">
            <div class="col-md-12 text-center">
              <label class="form-label fw-semibold">Change Avatar</label>
              <input type="file" name="avatar" class="form-control text-center">
            </div>

            <div class="col-md-6">
              <label class="form-label">First Name</label>
              <input type="text" name="studentFname" class="form-control" value="{{ $user->studentFname ?? '' }}" required>
            </div>

            <div class="col-md-6">
              <label class="form-label">Last Name</label>
              <input type="text" name="studentLname" class="form-control" value="{{ $user->studentLname ?? '' }}" required>
            </div>

            <div class="col-md-6">
              <label class="form-label">Email</label>
              <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
            </div>

            <div class="col-md-6">
              <label class="form-label">Username</label>
              <input type="text" name="username" class="form-control" value="{{ $user->username }}" required>
            </div>

            <div class="col-md-6">
              <label class="form-label">Telephone</label>
              <input type="text" name="telephone" class="form-control" value="{{ $student->telephone ?? '' }}">
            </div>

            <div class="col-md-6">
              <label class="form-label">Address</label>
              <input type="text" name="address" class="form-control" value="{{ $student->address ?? '' }}">
            </div>

            <div class="col-md-6">
              <label class="form-label">New Password</label>
              <input type="password" name="password" class="form-control" placeholder="Leave blank to keep current">
            </div>

            <div class="col-md-6">
              <label class="form-label">Confirm Password</label>
              <input type="password" name="password_confirmation" class="form-control">
            </div>
          </div>

          <div class="d-flex justify-content-between mt-4">
            <button class="btn btn-edit px-4">💾 Save Changes</button>
            <a href="{{ route('logout') }}" class="btn btn-outline-danger px-4">🚪 Logout</a>
          </div>
        </form>
      </div>
    </div>
  </div>
                </main>
    </div>
</div>
    
</body>
</html>
