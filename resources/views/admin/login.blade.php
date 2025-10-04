<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body
    class="bg-gradient-to-br from-blue-500 to-indigo-600 min-h-screen flex flex-col items-center justify-center font-sans">

    <!-- Logo -->
    <div class="mb-1 flex flex-col items-center">
        <img src="assets/Logo Quickfix-05.png" alt="Logo website"
            class="w-28 h-28 mb-4 rounded-full shadow-md border-2 border-white/30">
    </div>

    <!-- Form Card -->
    <div class="bg-white rounded-3xl shadow-2xl p-12 w-full max-w-lg">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Login Admin</h2>

        <form action="{{ route('admin.login.post') }}" method="POST" class="space-y-6">
            @csrf

            <!-- Email -->
            <div>
                <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                <input type="email" name="email" id="email" placeholder="Masukkan email"
                    class="w-full px-5 py-3 border rounded-2xl focus:outline-none focus:ring-2 focus:ring-blue-500"
                    value="{{ old('email') }}">
            </div>

            <!-- Password -->
            <div class="relative">
                <label for="password" class="block text-gray-700 font-medium mb-2">Password</label>
                <input type="password" name="password" id="password" placeholder="Masukkan password"
                    class="w-full pr-12 px-5 py-3 border rounded-2xl focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-2xl font-semibold transition-colors">
                Masuk
            </button>
        </form>



        <div class="text-right mb-5">
            <div class="text-right mt-2 mb-4">
                <a href="lupa_password.php"
                    class="inline-flex items-center text-blue-600 font-medium text-sm hover:text-blue-800 transition-colors duration-300">
                    <span>Lupa Password?</span>
                    <svg class="w-4 h-4 ml-1 transition-transform duration-300 group-hover:translate-x-1" fill="none"
                        stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>

    </div>


    <script>
        lucide.createIcons();

        const togglePassword = document.getElementById('togglePassword');
        const password = document.getElementById('password');

        togglePassword.addEventListener('click', () => {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            togglePassword.innerHTML = type === 'password' ? '<i data-lucide="eye"></i>' : '<i data-lucide="eye-off"></i>';
            lucide.createIcons();
        });
    </script>
</body>

</html>