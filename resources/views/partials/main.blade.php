<main>
    <section id="comics">
        <div class="ivy_container">
            <h1 class="ivy_comics_title">current series</h1>
            <ul class="ivy_comic_list">
            @foreach ( $comics as $comic )
            <li>
                <div class="ivy_thumb">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                </div>
                <h5 class="ivy_comic_title">{{ $comic['title'] }}</h5>
            </li>
            @endforeach
            </ul>
            <button class="ivy_load_more">load more</button>
        </div>
    </section>
    <nav>
        <div class="ivy_container">
            <ul class="ivy_nav_items">
                @foreach ( $mainNav as $item)
                <li class="ivy_nav_item">
                    <a href="{{ $item['link'] }}">
                        <img src="{{ Vite::asset($item['icon']) }}" alt="{{ $item['name'] }}">
                        {{ $item['name'] }}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </nav>
</main>