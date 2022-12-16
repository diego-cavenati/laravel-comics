<header>
    <nav class="navbar">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="logo">
                <img src="{{ Vite::asset('resources/img/dc-logo.png')}}" alt="">
            </div>
            <ul class="main-menu">
                @foreach($menu_links as $voice)
                <li>
                    <a href="{{$voice['href']}}">{{ $voice['text'] }}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </nav>
</header>