<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
</head>
<body>

    <h2>Admin Registration</h2>
    
    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
        @csrf  <!-- 🔹 CSRF Token Added (Fixes 419 Error) -->

        <label for="admin_name">Admin Name:</label>
        <input type="text" name="admin_name" required><br>

        <label for="hotel_name">Hotel Name:</label>
        <input type="text" name="hotel_name" required><br>

        <label for="hotel_image">Hotel Image:</label>
        <input type="file" name="hotel_image"><br>

        <label for="hotel_website">Hotel Website:</label>
        <input type="url" name="hotel_website"><br>

        <label for="owner_name">Owner Name:</label>
        <input type="text" name="owner_name" required><br>

        <label for="establishment_date">Establishment Date:</label>
        <input type="date" name="establishment_date" required><br>

        <label for="legally_registered">Legally Registered:</label>
        <input type="radio" name="legally_registered" value="yes" required> Yes
        <input type="radio" name="legally_registered" value="no" required> No <br>

        <label for="contact_number">Contact Number:</label>
        <input type="text" name="contact_number" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="address">Address:</label>
        <textarea name="address" required></textarea><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <button type="submit">Register</button>
    </form>

</body>
</html>
