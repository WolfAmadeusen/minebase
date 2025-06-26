@extends('layouts.base')


@section('content')
    <h1 class="flex justify-center align-center font-bold text-4xl py-4">Какой-то сайт</h1>

    <section class="flex justify-center  font-bold align-center gap-6 mt-10">
        <a class="hover:underline font-mono" href="{{ route('register') }}">register</a>
        <a class="hover:underline font-mono" href="{{ route('login') }}">login</a>
    </section>

    <section class="container mx-auto">
        <h3 class="text-2xl flex align-center justify-center py-8">Сервера</h3>
        <div class="grid grid-cols-4 gap-4">

            @foreach ($servers as $server)
                <div class="border p-4">
                    <h3 class="text-xl font-bold mb-4 flex text-center items-center justify-center">
                        Название: {{ $server->name }}
                    </h3>
                    <div class="flex gap-1">
                        Теги:
                        <span class="font-mono text-sm text-yellow-500 mb-4">{{ $server->tag }}</span>
                    </div>
                    <div class="flex gap-2">
                        Статус:
                        @if ($server->status_server === 1)
                            <span class="font-bold text-sm text-green-700 mb-4">online</span>
                        @else
                            <span class="font-bold text-sm text-red-500 mb-4">not online</span>
                        @endif
                    </div>
                    <div class="flex gap-2">
                        Онлайн:
                        <span class="font-mono text-sm text-gray-500 mb-4">{{ $server->online }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
