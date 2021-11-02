@extends('layouts.main')

@section('content')
    <div class="container cards">
        @foreach ($cards as $card)
        <div class="card-wrap">
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
        </div>
        @endforeach    
    </div>

    <div class="wrapper-bg-blue">
        <div class="container box">
                <div class="box-item">
                    <img src="/images/buy-comics-digital-comics.png" alt="digital comics image">
                    <p class="upper-case">digital comics</p>
                </div>
                <div class="box-item">
                    <img src="/images/buy-comics-merchandise.png" alt="digital comics image">
                    <p class="upper-case">dc merchandise</p>
                </div>
                <div class="box-item">
                    <img src="/images/buy-comics-subscriptions.png" alt="digital comics image">
                    <p class="upper-case">subscritions</p>
                </div>
                <div class="box-item">
                    <img src="/images/buy-comics-shop-locator.png" alt="digital comics image">
                    <p class="upper-case">comic shop locator</p>
                </div>
                <div class="box-item">
                    <img src="/images/buy-dc-power-visa.svg" alt="digital comics image">
                    <p class="upper-case">dc power visa</p>
                </div>

        </div>
    </div>
@endsection 