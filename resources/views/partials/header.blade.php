<header>
    <div class="header-section">
        <a href="{{route('admin.comics.index')}}">
            <img src="{{ Vite::asset ('resources/img/dc-logo.png') }}" alt="Dc Main Logo">
        </a>
        <nav class="nav-bar">
            <ul>
            @foreach ($navbarLinks as $link)
                <li class="{{ ($link['active']) ? 'active' : ''}}">
                    {{$link['text']}}
                </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>