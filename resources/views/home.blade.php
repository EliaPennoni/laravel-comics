@extends('layouts.main')

@section('title','dc-comics | Home')

@section('main-content')
<main>
    <div class="jumbotron"></div>
    
    </div>
    <div class="card-background">
      <h2>
        current series
      </h2>
    </div>
    <div class="row">
        @foreach ($comics as $element)
            <div class="col-2">
                <figure>
                    <img src="{{ $element['thumb'] }}" alt="{{ $element['title'] }}">
                </figure>
                <h4>{{ $element['title'] }}</h4>
            </div>
        @endforeach
    </div>

    <div class="row">
      
        @foreach ($cardLinks as $SingleCard)
            <div class="col-2">
             <figure>
                 <img src="{{ Vite::asset($SingleCard['path']) }}" alt="{{ $SingleCard['name'] }}">
             </figure>
             <h4>
                 {{$SingleCard['name']}}
             </h4>
            </div>
        @endforeach
     </div>
  </main>
@endsection
