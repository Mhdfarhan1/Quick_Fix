@extends('layouts.admin')

@section('title', 'Dashboard | Admin Quickfix')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 mb-8">
    {{-- Card contoh --}}
    <div class="bg-gradient-to-r from-blue-500 to-cyan-400 text-white rounded-xl p-4 shadow-md transform hover:scale-105 transition duration-300 w-80">
        <div class="flex items-center justify-between mb-2">
            <h2 class="text-md font-medium">Total Users</h2>
            <div class="p-2 rounded-full bg-white bg-opacity-20">
                <i data-lucide="users" class="w-5 h-5"></i>
            </div>
        </div>
        <p class="text-2xl font-extrabold">150</p>
        <p class="flex items-center mt-1 text-white/80 text-sm">
            <i data-lucide="trending-up" class="w-3 h-3 mr-1"></i>
            +12% sejak bulan lalu
        </p>
    </div>



</div>

<div class="bg-white rounded-xl shadow-lg border border-gray-100 p-5 overflow-x-auto">
    <h2 class="text-xl font-bold text-gray-800 mb-4">Recent Users</h2>
    <table class="w-full text-left text-sm text-gray-500">
        <thead class="bg-gray-50 text-gray-700 uppercase text-xs">
            <tr>
                <th class="py-3 px-6">Name</th>
                <th class="py-3 px-6">Email</th>
                <th class="py-3 px-6">Role</th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-b hover:bg-gray-50">
                <td class="py-4 px-6 font-medium text-gray-900">John Doe</td>
                <td class="py-4 px-6">john@example.com</td>
                <td class="py-4 px-6"><span class="bg-primary-100 text-primary-800 px-2 py-1 rounded-full text-xs">Admin</span></td>
            </tr>
        </tbody>
    </table>
</div>


@endsection