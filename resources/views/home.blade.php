@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('searchFilm')}}" class="form-inline">
        <div class="form-group w-50">
            <select name="category" class="form-control w-100">
                <option value="All" {{ app('request')->input('category') == 'All' ? 'selected' : '' }}>Wszystkie</option>
                <option value="Komedia"  {{ app('request')->input('category') == 'Komedia' ? 'selected' : '' }}>Komedia</option>
                <option value="Dramat"  {{ app('request')->input('category') == 'Dramat' ? 'selected' : '' }}>Dramat</option>
                <option value="Horror"  {{ app('request')->input('category') == 'Horror' ? 'selected' : '' }}>Horror</option>
                <option value="Fantasy"  {{ app('request')->input('category') == 'Fantasy' ? 'selected' : '' }}>Fantasy</option>
                <option value="Obyczajowy"  {{ app('request')->input('category') == 'Obyczajowy' ? 'selected' : '' }}>Obyczajowy</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary ml-2">Wyszukaj</button>
    </form>

    <hr>

    @forelse ($films as $film)
        <div class="row align-items-center">
            <div class="col"><a href="{{ route('film', ['id' => $film->getId()]) }}"><img src="{{ asset( 'storage/' . $film->getAvatar())}}"></a></div>
            <div class="col">{{$film->getTitle()}}</div>
            <div class="col">Reżyser: {{$film->getDirector()}}</div>
            <div class="col">Kategoria: {{$film->category->getName()}}</div>
            <div class="col">
                <a href="{{route('film', ['id' => $film->getId()])}}" class="btn btn-primary">Szczegóły filmu</a>
            </div>
            <div class="col">
                @guest
                    <a href="{{ route('login') }}" class="btn btn-outline-info">Zaloguj, aby dodać do koszyka</a>
                @else
                    <p class="text-center">
                        Cena: {{$film->getPrice()}} zł
                    </p>
                    <div>
                        <a href="{{ route('addFilmToBasket', ['id' => $film->getId()]) }}" class="btn btn-outline-primary w-100">Dodaj do koszyka</a>
                    </div>
                @endguest
            </div>
        </div>
    @empty
        <div class="alert alert-info">Nie znaleziono filmów</div>
    @endforelse

    {{ $films->links() }}
</div>
@endsection
