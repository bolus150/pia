@extends('layouts.app')

@section('content')
    <?php $totalCost = 0; ?>
    <div class="container">
        <table class="table">
            <thead>
                <th>Tytuł</th>
                <th>Kategoria</th>
                <th>Cena</th>
                <th></th>
            </thead>
            <tbody>
                @if(count($films) > 0)
                    @foreach($films as $film)
                        <tr>
                            <td>{{$film->film->getTitle()}}</td>
                            <td>{{$film->film->category->getName()}}</td>
                            <td>{{$film->film->getPrice()}} zł</td>
                            <td>
                                <a href="{{route('removeFilmFromBasket', ['id' => $film->getId()])}}" class="btn btn-danger">Usuń</a>
                            </td>
                        </tr>
                        <?php $totalCost += $film->film->getPrice()?>
                    @endforeach
                    <tr>
                        <td><a href="{{route('home')}}" class="btn btn-primary">Do sklepu</a></td>
                        <td></td>
                        <td>{{$totalCost}} zł</td>
                        <td><button class="btn btn-success disabled">Do kasy</button></td>
                    </tr>
                @else
                    <tr>
                        <td>Brak filmów w koszyku</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection