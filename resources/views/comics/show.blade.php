@extends('layouts.main')

@section('content')

    <div class="wrapper-art">
        <div class="container art">
            <div class="art-img">
                <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                <div class="art-comic">
                    <span class="upper-case">comic book</span>
                </div>
                <div class="art-gallery">
                    <span class="upper-case">viewgallery</span>
                </div>
            </div>
            
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="description">
                <h2>{{$comic['title']}}</h2>
                <div class="available">
                    <div class="available-text">
                        <p><span class="text-transparent">U.S. Price: </span>{{$comic['price']}}</p>
                        <p class="upper-case"><span class="text-transparent">Available</span></p>
                    </div>
                    <div class="available-btn">
                        <p>Check Availablility &triangledown;</p>
                    </div>
                </div>
                <p>{{$comic['description']}}</p>
            </div>
            <div class="adv">
                <img src="{{asset('images/adv.jpg')}}" alt="">
            </div>
        </div>
    </div>

    <div class="wrapper bg-grey">
        <div class="container">
            <div class="row">
                <div class="side side-talent">
                    <h2 class="border-bot">Talent</h2>
                    <div class="content border-bot">
                        <div class="title">
                            <h3>Art by:</h3>
                        </div>
                        <div class="text">
                            @foreach ($comic['artists'] as $artist)
                                <span>{{$artist}}, </span>
                            @endforeach
                        </div>
                    </div>
                    <div class="content border-bot">
                        <div class="title">
                            <h3>Written by:</h3>
                        </div>
                        <div class="text">
                            @foreach ($comic['writers'] as $writer)
                                <span>{{$writer}}, </span>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="side side-specs">
                    <h2 class="border-bot">Specs</h2>
                    <div class="content border-bot">
                        <div class="title">
                            <h3>Series:</h3>
                        </div>
                        <div class="text">
                            <span>{{$comic['series']}}</span>
                        </div>
                    </div>
                    <div class="content border-bot">
                        <div class="title">
                            <h3>U.S. Price:</h3>
                        </div>
                        <div class="text">
                            <span>{{$comic['price']}}</span>
                        </div>
                    </div>
                    <div class="content border-bot">
                        <div class="title">
                            <h3>On Sale Date:</h3>
                        </div>
                        <div class="text">
                            <span>{{$comic['sale_date']}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-top">
            <div class="container">
                <div class="buy-comics">
                    <div class="buy-comics_box border-left">
                        <h3 class="upper-case">digital comics</h3>
                        <img src="/images/buy-comics-digital-comics.png" alt="digital-comics image">
                    </div>
                    <div class="buy-comics_box border-left">
                        <h3 class="upper-case">shop dc</h3>
                        <img src="/images/buy-comics-merchandise.png" alt="subscritions image">
                    </div>
                    <div class="buy-comics_box border-left">
                        <h3 class="upper-case">comic shop locator</h3>
                        <img src="/images/buy-comics-shop-locator.png" alt="subscritions image">
                    </div>
                    <div class="buy-comics_box border-left border-right">
                        <h3 class="upper-case">subscritions</h3>
                        <img src="/images/buy-comics-subscriptions.png" alt="subscritions image">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection