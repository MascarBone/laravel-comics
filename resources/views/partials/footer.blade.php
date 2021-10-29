<footer>
    <div class="wrap-top">
        <div class="footer-top">
            <div class="footer-text">

                <div class="footer-list footer-list-wrap">

                    <div class="footer-list footer-list-content">
                        <h2>{{$links['title']}}</h2>
                        <ul>
                            @foreach ($links['list'] as $link)
                                <li><a href="{{$link['route']}}">{{$link['name']}}</a></li>
                            @endforeach
                        </ul>
                    </div>
            
                    <div class="footer-list footer-list-content">
                        <h2>{{$shops['title']}}</h2>
                        <ul>
                            @foreach ($shops['list'] as $shop)
                                <li><a href="{{$shop['route']}}">{{$shop['name']}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    
                    <div class="footer-list footer-list-content">
                        <h2>{{$infos['title']}}</h2>
                        <ul>
                            @foreach ($infos['list'] as $info)
                                <li><a href="{{$info['route']}}">{{$info['name']}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    
                    <div class="footer-list footer-list-content">
                        <h2>{{$sites['title']}}</h2>
                        <ul>
                            @foreach ($sites['list'] as $site)
                                <li><a href="{{$site['route']}}">{{$site['name']}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                        
                </div>

                <p>All site Content TM and &Coproduct; 2020 DC Entertainment, unless otherwise <a class="linked" href="#">noted here</a>. All rights reserved. <a class="linked" href="#">Cookies Settings</a></p>
                        
            </div>

            <div class="footer-logo">
                <img src="{{asset('images/dc-logo-bg.png')}}" alt="">
            </div>
        </div>
    </div>
    <div class="wrap-bot">
        <div class="footer-bot">
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
    </div>

</footer>