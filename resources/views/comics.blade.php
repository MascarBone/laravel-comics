@extends('home')

<div class="cards">    
    @section('content')
        @foreach ($cards as $card)
            <div class="card">
                <div class="card_image">
                    <img src="{{$card['thumb']}}" alt="{{$card['title']}}">
                </div>
                <div class="card_text">
                    <h3>{{$card['series']}}</h3>
                </div>
            </div>
        @endforeach
    @endsection
</div>