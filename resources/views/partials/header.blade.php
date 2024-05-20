<header>
    <div class="container d-flex justify-content-between align-items-center">
        <div id="logo">
            <img class="img-fluid" src="/images/dc-logo.png" alt="Logo" />
        </div>
        <ul class="d-flex">
            @foreach ($headerMenu as $menu)
                <li>
                    <a class="d-flex align-items-center text-uppercase" href="{{ $menu['url'] }}">{{ $menu['name'] }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</header>