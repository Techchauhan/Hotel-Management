<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Login</title>
    <!-- Vite CSS for Tailwind -->
    @vite('resources/css/app.css')
</head>
<body class="flex justify-center items-center h-screen bg-black">
    <div class="bg-blue-600 px-6 py-4 rounded-lg w-80">
        <h2 class="text-2xl font-bold mb-4 text-center text-white">Login</h2>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-2 mb-3 rounded">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST" class="flex flex-col space-y-3">
            @csrf
            
            <!-- Email Field -->
            <input type="email" name="email" placeholder="Email" required 
                class="rounded p-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400">
            @error('email')
            <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror

            <!-- Password Field -->
            <input type="password" name="password" required placeholder="Password" 
                class="rounded p-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400">
            @error('password')
            <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror

            <!-- Login Button -->
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                Login
            </button>
        </form>
    </div>
</body>
</html>
