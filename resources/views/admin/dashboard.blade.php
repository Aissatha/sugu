<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Vuexy Style</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-800 p-5 flex flex-col">
            <h1 class="text-xl font-bold text-purple-400">Vuexy</h1>
            <nav class="mt-5 space-y-2">
                <a href="#" class="flex items-center p-2 rounded-lg bg-purple-600">
                    <span>📊 Analytics</span>
                </a>
                <a href="#" class="flex items-center p-2 hover:bg-gray-700 rounded-lg">
                    <span>🛒 eCommerce</span>
                </a>
                <a href="#" class="flex items-center p-2 hover:bg-gray-700 rounded-lg">
                    <span>📩 Email</span>
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Navbar -->
            <header class="bg-gray-800 p-4 flex justify-between items-center">
                <input type="text" placeholder="Search..." class="p-2 bg-gray-700 rounded-lg w-1/3">
                <div class="flex space-x-4 items-center">
                    <span class="text-gray-400">🔔 5</span>
                    <span class="text-gray-400">🌙</span>
                    <img src="https://via.placeholder.com/40" class="rounded-full">
                </div>
            </header>

            <!-- Dashboard Content -->
            <main class="p-5 grid grid-cols-3 gap-5">
                <!-- Analytics Cards -->
                <div class="bg-gray-800 p-5 rounded-lg shadow-md">
                    <h2 class="text-lg font-semibold text-purple-400">Website Analytics</h2>
                    <p class="text-sm text-gray-400">Total 28.5% Conversion Rate</p>
                    <div class="mt-4 flex justify-between">
                        <div>
                            <h3 class="text-xl">$42.5k</h3>
                            <p class="text-green-400">+18.2%</p>
                        </div>
                        <span class="text-2xl">📈</span>
                    </div>
                </div>
                <div class="bg-gray-800 p-5 rounded-lg shadow-md">
                    <h2 class="text-lg font-semibold text-green-400">Revenue Generated</h2>
                    <p class="text-xl">97.5k</p>
                </div>
                <div class="bg-gray-800 p-5 rounded-lg shadow-md">
                    <h2 class="text-lg font-semibold text-yellow-400">Support Tracker</h2>
                    <p class="text-xl">164 Total Tickets</p>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
