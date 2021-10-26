@extends('layouts.main')

@section('content')
@dump($comic)
    <div class="wrapper">
        <div class="row">
            <div class="description">
                <h2>{{$comic['title']}}</h2>
                <div>
                    <p>prezzo</p>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia vel culpa natus harum quo laborum iure tempore maiores ut iste asperiores nemo necessitatibus porro ex officiis, libero, est neque beatae.
                </p>
            </div>
            <div class="adv">
                <img src="{{asset('images/adv.jpg')}}" alt="">
            </div>
        </div>
    </div>

    <div class="wrapper">
        <div class="row">
            <div class="side side-talent">
                <div class="content">
                    <div class="title">
                        <h3>Art by:</h3>
                    </div>
                    <div class="text">
                        <span>tanti artisti</span>
                    </div>
                </div>
                <div class="content">
                    <div class="title">
                        <h3>written by:</h3>
                    </div>
                    <div class="text">
                        <span>tanti artisti</span>
                    </div>
                </div>
            </div>
            <div class="side side-specs">
                <div class="content">
                    <div class="title">
                        <h3>Series:</h3>
                    </div>
                    <div class="text">
                        <span>tanti artisti</span>
                    </div>
                </div>
                <div class="content">
                    <div class="title">
                        <h3>U.S. Price:</h3>
                    </div>
                    <div class="text">
                        <span>tanti artisti</span>
                    </div>
                </div>
                <div class="content">
                    <div class="title">
                        <h3>On Sale Date:</h3>
                    </div>
                    <div class="text">
                        <span>tanti artisti</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper">
        
    </div>
@endsection