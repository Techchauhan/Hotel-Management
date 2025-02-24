<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Management</title>
    <!-- Add Font Awesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Vite CSS for Tailwind -->
    @vite('resources/css/app.css')
</head>
<body class="bg-black">
    <!-- Navbar Component -->
    <x-navbar/>

    <!-- Subscription Plans Section -->
    <div class="flex gap-4 justify-center mt-10">

    <!-- Basic Plan -->
        <x-subscription-plan title="Basic Plan" description="Comes with Basic Features" price="700" :features="['1 user', '5Gb Storage', 'Baisc Support']"   />

        <!--  Standard Plan-->
        <x-subscription-plan title="Standard Plan" description="Comes with Grate Features" price="1200" :features="['2 user', '10Gb Storage', 'Full Support']"   />

        <!-- Premium Plan -->
        <x-subscription-plan title="Premium Plan" description="Comes with Advance Features" price="1999" :features="['5 user', '20Gb Storage', 'Full Support']"   />


    </div>

    <!-- Footer Component -->
    <x-footer/>
</body>
</html>
