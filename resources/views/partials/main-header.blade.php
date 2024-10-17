<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <figure>
                <img src="{{Vite::asset('resources/img/img/dc-logo.png')}}" alt="logo">
            </figure>
            <ul>
                @foreach ($menuLinks as $link)
                    <li>
                        <a href="#">{{$link['name']}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </nav>
</header>
