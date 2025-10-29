<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Registration | Dashboard</title>
    <link href="{{ asset('assets/bootstraps/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body class="bg-dark text-light d-flex align-items-center justify-content-center vh-100">
    <div class="login-container">
        <div class="login-box">
            <h1 class="title">Student Registration Page 🟢</h1>
            <p class="subtitle">Please enter your real credentials to register and log in.</p>

            @if ($errors->any())
                <div style="color: red;">
                  @foreach ($errors->all() as $error)
                     <p>{{ $error }}</p>
                  @endforeach
                </div>
            @endif

            @if (session('success'))
                <p style="color: lightgreen;">{{ session('success') }}</p>
            @endif

            <form action="{{ route('registerStudent') }}" method="POST" class="login-form">
                @csrf 
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Enter your username or email" required>
                </div>

                <div class="input-group">
                    <label for="username">First Name</label>
                    <input type="text" id="username" name="studentFname" placeholder="Enter your username or email" required>
                </div>

                <div class="input-group">
                    <label for="username">Last Name</label>
                    <input type="text" id="username" name="studentLname" placeholder="Enter your username or email" required>
                </div>

                <div class="input-group">
                    <label for="username">Email</label>
                    <input type="email" id="username" name="email" placeholder="Enter your username or email" required>
                </div>

                <div class="input-group">
                    <label for="username">Telephone</label>
                    <input type="text" id="telephone" name="telephone" placeholder="Enter your username or email" required>
                </div>

                <div class="input-group">
                    <label for="username">Address</label>
                    <input type="text" id="address" name="address" placeholder="Enter your username or email" required>
                </div>

                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>

                <div class="input-group">
                    <label for="password">Password Confirmation</label>
                    <input type="password" id="password" name="password_confirmation" placeholder="Enter your password" required>
                </div>


                <button class="btn btn-success w-100" type="submit">Register</button>
            </form>

            <div class="register-link">
                Already have an account? <a href="/login">Login</a>
            </div>
        </div>
    </div>

</body>
</html>
