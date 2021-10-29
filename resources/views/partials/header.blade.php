<header>
    <div class="wrap-top">
        <div class="container">

        </div>
    </div>
    <div class="wrap-bot">
        <div class="container">
            <div>
                <a href="{{route('home')}}"><img src="{{asset('images/dc-logo.png')}}" alt="dc logo image"></a>
            </div>
        
            <ul>
                
                @foreach ($links as $link)
                    <li><a href="{{$link['route'] ? route($link['route']) : route('home')}}">{{$link['name']}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
    
</header>