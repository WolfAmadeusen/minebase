@extends('layouts.base')

@push('style')
    <link rel="stylesheet" href="{{ asset('style.css') }}">
@endpush

@push('script')
    <script src="{{ asset('scripts/accordion.js') }}"></script>
@endpush


@section('content')
    <article class="teams">
        <h1 class="text-4xl font-bold">
            <span class="text-lime-500">Игровое</span> сообщество
        </h1>
        <div class="grid grid-cols-3 gap-2 mt-10">
            <div></div>
            <div>
                <p class="font-light">
                    MineBase — это не просто сервер, <br>
                    а большая семья, где каждый найдёт <br>
                    друзей и единомышленников. Наше <br>
                    комьюнити объединяет более 50 тысяч игроков <br>
                    — от новичков, делающих первые шаги в Minecraft, до опытных <br>
                    строителей и бесстрашных исследователей.
                </p>
            </div>
            <div>
                <p class="font-light">
                    Что делает нас особенными? Прежде <br>
                    всего — атмосфера. Мы ценим <br>
                    креативность, взаимовыручку <br>
                    и желание создавать что‑то вместе. <br>
                    В нашем Discord-чате вы всегда <br>
                    найдёте компанию для совместных <br>
                    проектов,
                    обсуждения новых идей <br>
                    или просто весёлого общения.
                </p>
            </div>
        </div>
    </article>

    <div class="mt-16">
        <div class="bg-[#111416] rounded-lg overflow-hidden shadow-md">
            <div class="border-b border-gray-700">
                <button class="w-full flex justify-between items-center p-4 text-left text-white accordion-header">
                    <span>В Дискорде — 10 000 участников!</span>
                    <svg class="w-5 h-5 transform transition-transform duration-300" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="accordion-body max-h-0 overflow-hidden transition-all duration-500 text-gray-300 px-4">
                    <p class="py-2">
                        Отмечаем круглую цифру: всех ждёт розыгрыш 5 премиум-аккаунтов, квест <br> с мемами
                        и голосование за новый ивент. А ещё запустили канал <a href="#"
                            class="text-lime-500 underline">#находки </a> — <br> там можно хвастаться
                        странностями
                        (вчера нашли деревню, где все жители <br> — рыбаки в алмазных ботинках). Заглядывайте, тут каждый
                        день
                        что‑то <br> новое!
                    </p>
                    <br>
                    <a href="#" class="font-xl hover:text-lime-500">Читать</a>
                    <br>
                    <br>
                </div>
            </div>
            <div class="border-b border-gray-700">
                <button class="w-full flex justify-between items-center p-4 text-left text-white accordion-header">
                    <span>Гильдия «Redstone Masters» бьёт рекорд!</span>
                    <svg class="w-5 h-5 transform transition-transform duration-300" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="accordion-body max-h-0 overflow-hidden transition-all duration-500 text-gray-300 px-4">
                    <p class="py-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam dolores cupiditate,
                        voluptas sed atque officiis dignissimos earum numquam assumenda eligendi est omnis iusto similique
                        doloribus ratione mollitia exercitationem. Ratione, repudiandae.</p>
                </div>
            </div>
            <div class="border-b border-gray-700">
                <button class="w-full flex justify-between items-center p-4 text-left text-white accordion-header">
                    <span>Технические работы 5 июля.</span>
                    <svg class="w-5 h-5 transform transition-transform duration-300" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="accordion-body max-h-0 overflow-hidden transition-all duration-500 text-gray-300 px-4">
                    <p class="py-2">Встречайте новый биом — <br> «Хрустальные пещеры»!</p>
                </div>
            </div>

            <div class="border-b border-gray-700">
                <button class="w-full flex justify-between items-center p-4 text-left text-white accordion-header">
                    <span>
                        Встречайте новый биом — <br>
                        «Хрустальные пещеры»!
                    </span>
                    <svg class="w-5 h-5 transform transition-transform duration-300" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="accordion-body max-h-0 overflow-hidden transition-all duration-500 text-gray-300 px-4">
                    <p class="py-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore perferendis commodi
                        nostrum enim ullam aut minus possimus quaerat iusto odio! Consequuntur quaerat vero, ex deserunt
                        consequatur neque sed beatae nesciunt?</p>
                </div>
            </div>
        </div>
    </div>
@endsection
