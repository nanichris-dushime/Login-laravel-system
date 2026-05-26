<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <style>
        .logout-form { display: inline; }
    </style>
</head>
<body>
    <h1>Welcome to your secure dashboard!</h1>
    <p>Hello, {{ Auth::user()->name }}!</p>
    <p>Email: {{ Auth::user()->email }}</p>
    
    <form action="{{ url('/logout') }}" method="POST" class="logout-form">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>