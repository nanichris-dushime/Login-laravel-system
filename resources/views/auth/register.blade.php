<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <style>
        .form-group { margin-bottom: 15px; }
        .error { color: red; font-size: 14px; }
    </style>
</head>
<body>
    <h2>Create an Account</h2>
    <form action="{{ url('/register') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Full Name:</label><br>
            <input type="text" id="name" name="name" value="{{ old('name') }}">
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

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
            <label for="password_confirmation">Confirm Password:</label><br>
            <input type="password" id="password_confirmation" name="password_confirmation">
        </div>

        <button type="submit">Register</button>
    </form>

    <p>Already have an account? <a href="{{ url('/login') }}">Login here</a></p>
</body>
</html>
