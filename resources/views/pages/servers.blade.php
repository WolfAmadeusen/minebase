@extends('layouts.main')

@section('title')
    Servers
@endsection

@section('content')
    <h1 class="text-2xl font-mono my-10">Servers</h1>
    <a href="{{ route('home') }}">Назад</a>
    <br><br>
    <div class="max-w-7xl mx-auto">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Список игровых серверов</h1>

        <!-- Grid контейнер -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
            <!-- Сервер 1 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden border-l-4 border-green-500">
                <div class="p-4">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-lg font-bold text-gray-800">Survival World</h3>
                        <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">Активен</span>
                    </div>
                    <div class="flex items-center text-gray-600 text-sm mb-1">
                        <span>⭐ 4.8/5.0</span>
                        <span class="mx-2">|</span>
                        <span class="text-blue-600">🟢 124 онлайн</span>
                    </div>
                    <p class="text-gray-500 text-sm mt-2">IP: play.survival-world.ru</p>
                </div>
            </div>

            <!-- Сервер 2 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden border-l-4 border-yellow-500">
                <div class="p-4">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-lg font-bold text-gray-800">Creative Build</h3>
                        <span class="bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded-full">Тех. работы</span>
                    </div>
                    <div class="flex items-center text-gray-600 text-sm mb-1">
                        <span>⭐ 4.5/5.0</span>
                        <span class="mx-2">|</span>
                        <span class="text-gray-500">🔴 0 онлайн</span>
                    </div>
                    <p class="text-gray-500 text-sm mt-2">IP: build.creative-server.com</p>
                </div>
            </div>

            <!-- Сервер 3 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden border-l-4 border-red-500">
                <div class="p-4">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-lg font-bold text-gray-800">SkyBlock Pro</h3>
                        <span class="bg-red-100 text-red-800 text-xs px-2 py-1 rounded-full">Не активен</span>
                    </div>
                    <div class="flex items-center text-gray-600 text-sm mb-1">
                        <span>⭐ 3.9/5.0</span>
                        <span class="mx-2">|</span>
                        <span class="text-gray-500">🔴 0 онлайн</span>
                    </div>
                    <p class="text-gray-500 text-sm mt-2">IP: sky.pro-block.org</p>
                </div>
            </div>

            <!-- Сервер 4 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden border-l-4 border-green-500">
                <div class="p-4">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-lg font-bold text-gray-800">PixelMon</h3>
                        <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">Активен</span>
                    </div>
                    <div class="flex items-center text-gray-600 text-sm mb-1">
                        <span>⭐ 4.9/5.0</span>
                        <span class="mx-2">|</span>
                        <span class="text-blue-600">🟢 256 онлайн</span>
                    </div>
                    <p class="text-gray-500 text-sm mt-2">IP: pixel.mon-server.top</p>
                </div>
            </div>

            <!-- Сервер 5 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden border-l-4 border-green-500">
                <div class="p-4">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-lg font-bold text-gray-800">Anarchy</h3>
                        <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">Активен</span>
                    </div>
                    <div class="flex items-center text-gray-600 text-sm mb-1">
                        <span>⭐ 4.2/5.0</span>
                        <span class="mx-2">|</span>
                        <span class="text-blue-600">🟢 87 онлайн</span>
                    </div>
                    <p class="text-gray-500 text-sm mt-2">IP: anarchy.mc-world.com</p>
                </div>
            </div>

            <!-- Сервер 6 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden border-l-4 border-yellow-500">
                <div class="p-4">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-lg font-bold text-gray-800">BedWars</h3>
                        <span class="bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded-full">Тех. работы</span>
                    </div>
                    <div class="flex items-center text-gray-600 text-sm mb-1">
                        <span>⭐ 4.7/5.0</span>
                        <span class="mx-2">|</span>
                        <span class="text-gray-500">🔴 0 онлайн</span>
                    </div>
                    <p class="text-gray-500 text-sm mt-2">IP: bed.wars-game.net</p>
                </div>
            </div>
        </div>
    </div>
@endsection
