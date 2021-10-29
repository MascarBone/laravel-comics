<header>
    <div class="wrap-top">
        <div class="container">
            <div>
                <a href="#">dc power&#8480; visa &reg;</a>
            </div>

            <div>
                <a href="#">additional dc sites &triangledown;</a>
            </div>
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

            <div>
                <a href="#">shop &triangledown;</a>
            </div>

            <div class="searchbar">
                <input type="text" placeholder="Search">
                <i class="fas fa-search"></i>
            </div>
        </div>
    </div>
    
</header>