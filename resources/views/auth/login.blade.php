<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <style>
        .form-group { margin-bottom: 15px; }
        .error { color: red; font-size: 14px; }
    </style>
</head>
<body>
    <h2>Login to Your Account</h2>
    <form action="{{ url('/login') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="email">Email Address:</label><br>
            <input type="text" id="email" name="email" value="{{ old('email') }}">
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password">
            @error('password')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <input type="checkbox" id="remember" name="remember">
            <label for="remember">Remember Me</label>
        </div>

        <button type="submit">Login</button>
    </form>

    <p>Don't have an account? <a href="{{ url('/register') }}">Register here</a></p>
</body>
</html>
