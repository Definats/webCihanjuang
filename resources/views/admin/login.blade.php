<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>

    <!-- Panggil CSS -->
    <link rel="stylesheet" href="{{ asset('css/loginadmin.css') }}">
</head>
<body>

<div class="card">
    <h2>Profile Desa Cihanjuang</h2>
    <p>Sign In</p>

    <form method="POST" action="{{ route('admin.login.submit') }}">
        @csrf

        <div class="form-group">
            <label>Email address</label>
            <input type="email" name="email" required>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" required>
        </div>

        <button type="submit">Sign In</button>
    </form>

    @if($errors->any())
        <div class="error">
            {{ $errors->first() }}
        </div>
    @endif
</div>

</body>
</html>