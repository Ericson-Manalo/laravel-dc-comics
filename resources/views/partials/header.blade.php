<header>
    <div class="header-section">
        <img src="{{ Vite::asset ('resources/img/dc-logo.png') }}" alt="Dc Main Logo">
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