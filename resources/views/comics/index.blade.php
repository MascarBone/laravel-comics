@extends('layouts.main')

@section('content')
    <div class="cards">
        @foreach ($cards as $card)
        <a href="{{route('comics.show', ['num'=>$loop->index])}}">
            <div class="card">
                <div class="card_image">
                    <img src="{{$card['thumb']}}" alt="{{$card['title']}}">
                </div>
                <div class="card_text">
                    <h3>{{$card['series']}}</h3>
                </div>
            </div>
        </a>
        @endforeach    
    </div>
@endsection 