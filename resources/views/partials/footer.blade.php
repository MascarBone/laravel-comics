<footer>
    <div class="footer-wrap-top">
        <div class="footer-text">

            <div class="footer-list">

                <div class="footer-list">
                    <h2>{{$links['title']}}</h2>
                    <ul>
                        @foreach ($links['list'] as $link)
                            <li><a href="{{$link['route']}}">{{$link['name']}}</a></li>
                        @endforeach
                    </ul>
                </div>
        
                <div class="footer-list">
                    <h2>{{$shops['title']}}</h2>
                    <ul>
                        @foreach ($shops['list'] as $shop)
                            <li><a href="{{$shop['route']}}">{{$shop['name']}}</a></li>
                        @endforeach
                    </ul>
                </div>
                
                <div class="footer-list">
                    <h2>{{$infos['title']}}</h2>
                    <ul>
                        @foreach ($infos['list'] as $info)
                            <li><a href="{{$info['route']}}">{{$info['name']}}</a></li>
                        @endforeach
                    </ul>
                </div>
                
                <div class="footer-list">
                    <h2>{{$sites['title']}}</h2>
                    <ul>
                        @foreach ($sites['list'] as $site)
                            <li><a href="{{$site['route']}}">{{$site['name']}}</a></li>
                        @endforeach
                    </ul>
                </div>
                    
            </div>
                    
        </div>

        <div class="footer-logo">
            <img src="{{asset('images/dc-logo-bg.png')}}" alt="">
        </div>
    </div>
    <div class="footer-wrap-bot">
        <div class="footer-btn">
            <button type="button">sign-up now!</button>
        </div>
        <div class="footer-icons">
            <div class="footer-icons-title">
                <h3>follow us</h3>
            </div>
            <div class="footer-icon">
                <img src="{{asset('images\footer-facebook.png')}}" alt="facebook icon">
            </div>
            <div class="footer-icon">
                <img src="{{asset('images\footer-twitter.png')}}" alt="twitter icon">
            </div>
            <div class="footer-icon">
                <img src="{{asset('images\footer-youtube.png')}}" alt="youtube icon">
            </div>
            <div class="footer-icon">
                <img src="{{asset('images\footer-pinterest.png')}}" alt="pinterest icon">
            </div>
            <div class="footer-icon">
                <img src="{{asset('images\footer-periscope.png')}}" alt="periscope icon">
            </div>
        </div>
    </div>
</footer>