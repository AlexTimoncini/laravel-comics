<footer>
    <nav>
        <div class="ivy_container">
            <div class="ivy_navbar_lists">
                @foreach ( $footerNav as $navItem)
                <ul class="ivy_navbar_list">
                    <li>
                        <h1 class="ivy_navbar_title">
                            {{ $navItem['title'] }}
                        </h1>
                    </li>
                        @foreach ( $navItem['navbarList'] as $link)
                        <li class="ivy_navbar_item">
                            <a href="{{ $link['link'] }}">
                            {{ $link['name'] }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                    @endforeach
            </div>
            <div class="ivy_big_logo">
                <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="dc logo">
            </div>
        </div>
    </nav>
    <section id="footerContacts">
        <div class="ivy_container">
            <button class="ivy_signup">Sign-up now!</button>
            <ul class="ivy_social_box">
                <li class="ivy_social_header">Follow Us</li>
                @foreach ( $socialMedias as $social)
                <li class="ivy_social_media">
                    <a href="{{ $social['link'] }}">
                        <img src="{{ Vite::asset($social['icon']) }}" alt="{{ $social['name'] }}">
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </section>
</footer>