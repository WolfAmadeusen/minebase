<header class="container mx-auto px-4 py-3">
    <section class="big-text font-400">
        <a href="{{ route('home') }}">
            <div class="color-lime-400">MINE</div>
            <div>BASE</div>
        </a>
    </section>
    <ul class="#">
        <li><a href="#">Играть</a></li>
        <li><a href="#">Сервера</a></li>
        <li><a href="#">Услуги</a></li>
        <li><a href="#">Помощь</a></li>

        @auth
            <li><a href="#dashboard"> Кобинет </a></li>
        @endauth

        @guest
            <li><a href="{{ route('register') }}">Регистрация</a></li>
        @endguest
    </ul>
</header>


<nav class="container mx-auto">
    <article class="sub-images container">
        <section>
            MineBase — это сеть серверов Minecraft <br>
            для игроков любого уровня. У нас уютное <br>
            комьюнити, уникальные игровые
            механики <br> и регулярные обновления
        </section>
        <section class="flex text-center gap-4">
            <a href="#" class="font-400 text-lime-500">Скачать лаунчер</a>
            <a href="#" class="font-400 text-lime-500">Начать играть</a>
        </section>
    </article>
    <div class="images"><img draggable="false" src="{{ asset('images/border/border.jpg') }}" alt="banner"></div>
</nav>
