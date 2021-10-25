<header>
    <ul>
        
        @foreach ($links as $link)
            <li><a href="{{route($link['route'])}}">{{$link['name']}}</a></li>
        @endforeach
    </ul>
</header>