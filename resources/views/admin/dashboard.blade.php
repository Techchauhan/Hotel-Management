<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
    <h2>Welcome, {{ auth()->user()->admin_name }}</h2>
    <p>Your hotel: {{ auth()->user()->hotel_name }}</p>
    <p>Your email: {{ auth()->user()->email }}</p>
    
    <p><a href="{{ route('admin.register') }}">Register Another Admin</a></p>
</body>
</html>
