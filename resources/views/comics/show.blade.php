@extends('layouts.main')

@section('content')

    <div class="wrapper-art">
        <div class="container art">
            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="description">
                <h2>{{$comic['title']}}</h2>
                <div>
                    <p>{{$comic['price']}}</p>
                </div>
                <p>{{$comic['description']}}</p>
            </div>
            <div class="adv">
                <img src="{{asset('images/adv.jpg')}}" alt="">
            </div>
        </div>
    </div>

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

    <div class="wrapper">
        
    </div>
@endsection