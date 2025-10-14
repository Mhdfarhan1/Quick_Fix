<aside id="sidebar"
    class="fixed md:relative top-0 left-0 h-full w-64 bg-white shadow-xl flex flex-col z-50 transition-all duration-300 ease-in-out -translate-x-full md:translate-x-0 border-r border-gray-100">

    <!-- Header Logo -->
    <div class="flex items-center justify-center h-20 border-b border-primary-100 bg-gradient-to-r from-blue-600 to-cyan-500 px-6">
        <div class="flex items-center gap-4">
            <!-- Logo -->
            <img src="{{ asset('assets/img/Logo_quickfix.png') }}" alt="Quickfix Logo"
                class="w-12 h-12 object-contain bg-white rounded-full p-1 shadow-md">

            <!-- Judul -->
            <div class="flex flex-col">
                <span class="text-xl font-bold tracking-wide text-white">Quickfix</span>
                <span class="text-sm text-blue-100">Admin Panel</span>
            </div>
        </div>
    </div>


    <!-- Navigation Menu -->
    <!-- Menu Kecil / Shortcut di atas -->
    <div class="px-4 py-3">
        <span class="text-sm font-medium text-gray-500 block mt-6 mb-2">Menu</span>
        <div class="border-b border-gray-200"></div>
    </div>


    <!-- Menu utama -->
    <nav class="flex-1 p-4 space-y-2 overflow-y-auto">
        @php
        $activeClass = 'bg-blue-50 text-blue-600 font-semibold shadow-sm';
        $defaultClass = 'text-gray-600 hover:bg-blue-50 hover:text-blue-600';
        @endphp

        <!-- Dashboard -->
        <a href=""
            class="flex items-center gap-3 p-3 rounded-xl transition {{ request()->routeIs('admin.dashboard') ? $activeClass : $defaultClass }}">
            <i data-lucide="home" class="w-5 h-5"></i>
            <span>Dashboard</span>
        </a>

        <!-- Menu Label dengan garis pemisah -->
        <div class="px-4 py-2">
            <span class="text-sm font-medium text-gray-500 block mt-6 mb-2">Fitur</span>
            <div class="border-b border-gray-200"></div>
        </div>

        <!-- Users -->
        <a href=""
            class="flex items-center gap-3 p-3 rounded-xl transition {{ request()->routeIs('admin.users') ? $activeClass : $defaultClass }}">
            <i data-lucide="users" class="w-5 h-5"></i>
            <span>Users</span>
        </a>

        <!-- Notifications -->
        <a href=""
            class="flex items-center gap-3 p-3 rounded-xl transition {{ request()->routeIs('admin.notifications') ? $activeClass : $defaultClass }}">
            <i data-lucide="bell" class="w-5 h-5"></i>
            <span>Notifications</span>
            <span class="ml-auto bg-red-500 text-white text-xs font-medium px-2 py-0.5 rounded-full">3</span>
        </a>

        <!-- Settings -->
        <a href=""
            class="flex items-center gap-3 p-3 rounded-xl transition {{ request()->routeIs('admin.settings') ? $activeClass : $defaultClass }}">
            <i data-lucide="settings" class="w-5 h-5"></i>
            <span>Settings</span>
        </a>
    </nav>


    <!-- Logout -->
    <div class="p-4 border-t border-gray-100">
        <form action="" method="POST">
            @csrf
            <button type="submit"
                class="flex items-center w-full gap-3 p-3 rounded-xl text-gray-600 hover:bg-red-50 hover:text-red-600 transition">
                <i data-lucide="log-out" class="w-5 h-5"></i>
                <span>Log Out</span>
            </button>
        </form>
    </div>
</aside>

<!-- Mobile Overlay -->
<div id="overlay"
    class="fixed inset-0 bg-black bg-opacity-40 z-40 hidden md:hidden transition-opacity duration-300"></div>

<script>
    lucide.createIcons();

    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');

    // Fungsi untuk toggle sidebar di mobile
    function toggleSidebar(show = null) {
        const isHidden = sidebar.classList.contains('-translate-x-full');
        const shouldShow = show !== null ? show : isHidden;

        if (shouldShow) {
            sidebar.classList.remove('-translate-x-full');
            overlay.classList.remove('hidden');
        } else {
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('hidden');
        }
    }

    // Tutup sidebar saat klik overlay
    overlay.addEventListener('click', () => toggleSidebar(false));
</script>