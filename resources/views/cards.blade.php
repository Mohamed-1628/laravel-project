@extends('slm')


@section('content')

    <div>

        @foreach ($cards as $card)
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <p class="title">{{$card->name}}</p>
                    <p><img src="{{$card->image}}" alt="yo"></p>
                </div>
                <div class="flip-card-back">
                    <a href="{{$card->adress}}">
                        <div class="link">
                            <p class="title">Descrition</p>
                            <p class="desciption">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, eos rem animi cumque quam veritatis, suscipit voluptatibus odit eaque hic modi. Doloremque pariatur debitis aut eos. Porro aut quod quos?</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

@endsection
