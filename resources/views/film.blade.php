@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <img src="{{ asset( 'storage/' . $film->getAvatar())}}" class="w-100">
            </div>

            <div class="col-6">
                <h1>{{$film->getTitle()}} ({{$film->getYear()}})</h1>
                <p>{{$film->getDescription()}}</p>

                <p><strong>Cena: {{$film->getPrice()}} zł</strong></p>

                @guest
                    <a href="{{ route('login') }}" class="btn btn-outline-info">Zaloguj, aby dodać do koszyka</a>
                @else
                    <a href="{{route('addFilmToBasket', ['id' => $film->getId()])}}" class="btn btn-success">Dodaj do koszyka</a>
                @endguest

            </div>
        </div>
    </div>
@endsection