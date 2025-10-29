<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | Dashboard</title>
    <link href="{{ asset('assets/bootstraps/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body class="bg-dark text-light d-flex align-items-center justify-content-center vh-100">
    
   <!-- <div class="card bg-secondary text-light p-4" style="width: 400px;">
        <h3 class="text-center mb-3">Login</h3>

        @if ($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ url('/login') }}">
            @csrf
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button class="btn btn-success w-100">Login</button>
        </form>
    </div> -->

    <div class="login-container">
        <div class="login-box">
            <h1 class="title">Welcome Back 👋</h1>
            <p class="subtitle">Please enter your credentials to log in.</p>

            @if ($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif

            <form action="{{ url('/login') }}" method="POST" class="login-form">
                @csrf 
                <div class="input-group">
                    <label for="username">Email</label>
                    <input type="email" id="username" name="email" placeholder="Enter your username or email" required>
                </div>

                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <button class="btn btn-success w-100">Login</button>
            </form>

            <div class="register-link">
                Don't have an account? <a href="/register">Sign Up</a>
            </div>
        </div>
    </div>

</body>
</html>
