<!-- Tambahkan ini di head (sekali saja jika belum) -->
<script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

<header 
    x-data="{ openProfile: false }"
    class="flex items-center justify-between bg-white/80 backdrop-blur-md shadow-md px-6 py-4 sticky top-0 z-40 border-b border-gray-100"
>
    <!-- Judul Dashboard -->
    <h1 class="text-2xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-500">
        Dashboard
    </h1>

    <!-- Bagian kanan: Notifikasi + Profil -->
    <div class="flex items-center gap-4">

        <!-- Tombol Notifikasi -->
        <button 
            class="relative p-2 rounded-full hover:bg-gray-100 transition transform hover:scale-105"
            x-data="{ count: 3 }"
        >
            <i data-lucide="bell" class="w-6 h-6 text-gray-700"></i>
            <template x-if="count > 0">
                <span 
                    x-text="count"
                    class="absolute top-0 right-0 bg-red-500 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center font-bold border-2 border-white animate-pulse"
                ></span>
            </template>
        </button>

        <!-- Profil Admin -->
        <div class="relative" @click.away="openProfile = false">
            <button 
                @click="openProfile = !openProfile"
                class="flex items-center gap-3 p-2 rounded-xl hover:bg-gray-100 transition"
            >
                <img 
                    src="{{ asset('assets/img/admin.png') }}" 
                    alt="Admin" 
                    class="w-10 h-10 rounded-full border-2 border-blue-500 shadow-md"
                >
                <span class="font-semibold text-gray-700">{{ Auth::user()->name ?? 'Admin' }}</span>
                <i data-lucide="chevron-down" 
                    :class="{ 'rotate-180': openProfile }"
                    class="w-4 h-4 text-gray-500 transition-transform"
                ></i>
            </button>

            <!-- Dropdown -->
            <div 
                x-show="openProfile"
                x-transition
                class="absolute right-0 mt-2 w-52 bg-white border border-gray-100 rounded-xl shadow-lg overflow-hidden"
            >
                <div class="px-4 py-3 border-b border-gray-100">
                    <p class="text-sm font-semibold text-gray-800">{{ Auth::user()->name ?? 'Admin' }}</p>
                    <p class="text-xs text-gray-500">{{ Auth::user()->email ?? 'admin@example.com' }}</p>
                </div>
                <ul class="py-1">
                    <li>
                        <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-2 px-4 py-2 hover:bg-gray-50 text-gray-700 text-sm">
                            <i data-lucide="layout-dashboard" class="w-4 h-4"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center gap-2 px-4 py-2 hover:bg-gray-50 text-gray-700 text-sm">
                            <i data-lucide="settings" class="w-4 h-4"></i> Pengaturan
                        </a>
                    </li>
                    <li>
                        <form method="POST" action="">
                            @csrf
                            <button 
                                type="submit" 
                                class="w-full flex items-center gap-2 px-4 py-2 hover:bg-red-50 text-red-600 text-sm"
                            >
                                <i data-lucide="log-out" class="w-4 h-4"></i> Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
</header>

<script>
    lucide.createIcons(); // aktifkan ikon lucide
</script>
