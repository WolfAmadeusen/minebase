@extends('layouts.main')


@section('content')
    <div class="container mx-auto px-4 py-8">
        <!-- Заголовок сервера -->
        <div class="flex items-center mb-8">
            <div
                class="w-20 h-20 rounded-full bg-green-600 flex items-center justify-center text-white text-3xl font-bold mr-4">
                S
            </div>
            <div>
                <h1 class="text-3xl font-bold text-gray-800">Название сервера</h1>
                <p class="text-gray-600">Описание сервера или краткое приветствие</p>
            </div>
        </div>

        <!-- Статистика сервера -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
            <div class="bg-white p-4 rounded-lg shadow">
                <h3 class="text-gray-500 text-sm font-medium">Онлайн</h3>
                <p class="text-2xl font-bold text-green-600">1,245</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <h3 class="text-gray-500 text-sm font-medium">Всего игроков</h3>
                <p class="text-2xl font-bold text-green-600">24,890</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <h3 class="text-gray-500 text-sm font-medium">Рейтинг</h3>
                <p class="text-2xl font-bold text-green-600">#12</p>
            </div>
        </div>

        <!-- Основной контент -->
        <div class="bg-white rounded-lg shadow overflow-hidden mb-8">
            <div class="p-6">
                <h2 class="text-xl font-bold text-gray-800 mb-4">О нашем сервере</h2>
                <p class="text-gray-600 mb-4">
                    Добро пожаловать на наш сервер! Мы предлагаем уникальный игровой опыт с модификациями,
                    регулярными событиями и дружелюбным сообществом.
                </p>
                <p class="text-gray-600">
                    Наш сервер работает 24/7, с минимальным даунтаймом и профессиональной администрацией.
                </p>
            </div>
        </div>

        <!-- Особенности сервера -->
        <div class="mb-8">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Особенности</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-green-600 mb-2">Уникальные моды</h3>
                    <p class="text-gray-600">Кастомные модификации, которых нет на других серверах</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-green-600 mb-2">Еженедельные ивенты</h3>
                    <p class="text-gray-600">Регулярные события с призами для всех участников</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-green-600 mb-2">Античит</h3>
                    <p class="text-gray-600">Надежная защита от читеров и мошенников</p>
                </div>
            </div>
        </div>

        <!-- Кнопка подключения -->
        <div class="text-center">
            <button
                class="bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-6 rounded-lg transition duration-200">
                Подключиться к серверу
            </button>
        </div>
    </div>
@endsection
