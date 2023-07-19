<header>
    <nav>
        <div class="ivy_container">
            <div class="ivy_logo_box">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="dc logo">
            </div>
            <ul class="ivy_nav_items">
                @foreach ( $headerNav as $navLink )
                <li class="{{ ($navLink['active']) ? 'ivy_active ' : '' }} ivy_item">
                    <a href="{{ $navLink['link'] }}">
                        {{ $navLink['name'] }}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </nav>
    <section id="jumbotron">
    </section>
</header>