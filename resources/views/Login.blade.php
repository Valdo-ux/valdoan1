<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white shadow-md rounded-lg p-8 w-full max-w-sm">
        <h2 class="text-2xl font-semibold text-center text-gray-700 mb-6">Login to Your Account</h2>
        <form action="#" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-600 mb-1" for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="you@example.com"
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div class="mb-6">
                <label class="block text-gray-600 mb-1" for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="********"
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <button type="submit"
                    class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 rounded-lg transition">
                Login
            </button>
        </form>
    </div>

</body>
</html>
