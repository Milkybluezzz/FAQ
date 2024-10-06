<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Example</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Logo Section -->
            <div class="flex flex-col">
                <h1 class="text-3xl font-bold text-white">LOGO</h1> <!-- Pastikan warna logo cukup terang -->
            </div>

            <!-- Links Section -->
            <div class="flex space-x-12">
                <!-- Get Started -->
                <div>
                    <h4 class="font-semibold mb-4">Get started</h4>
                    <ul>
                        <li><a href="#" class="text-gray-400 hover:text-white">Home</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Sign up</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Downloads</a></li>
                    </ul>
                </div>
                <!-- About Us -->
                <div>
                    <h4 class="font-semibold mb-4">About us</h4>
                    <ul>
                        <li><a href="#" class="text-gray-400 hover:text-white">About</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Contact us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Reviews</a></li>
                    </ul>
                </div>
                <!-- Support -->
                <div>
                    <h4 class="font-semibold mb-4">Support</h4>
                    <ul>
                        <li><a href="#" class="text-gray-400 hover:text-white">FAQ</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Help desk</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Forums</a></li>
                    </ul>
                </div>
            </div>

            <!-- Social and Contact Section -->
            <div class="flex flex-col items-center">
                <div class="flex space-x-4 mb-4 pr-10" >
                    <a href="#" class="text-gray-400 hover:text-white">Twitter</a>
                    <a href="#" class="text-gray-400 hover:text-white">Facebook</a>
                    <a href="#" class="text-gray-400 hover:text-white">Google</a>
                </div>
                <button class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600
                "onclick="window.location.href='contact'">Contact us</button>
            </div>
        </div>

        <!-- Copyright Section -->
        <div class="text-center mt-8">
            <p class="text-gray-500">&copy; 2024 BandungAppFAQ. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
