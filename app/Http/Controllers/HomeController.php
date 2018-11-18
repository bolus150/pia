<?php

namespace App\Http\Controllers;

use App\Basket;
use App\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $films = Film::with('category')->paginate(10);

        return view('home', compact('films'));
    }

    public function film($id)
    {
        $film = Film::with('category')->find($id);
        return view('film', compact('film'));
    }

    public function addFilmToBasket($id)
    {

        Basket::create(array(
            'user_id' => Auth::id(),
            'film_id' => $id
        ));


        return back()->with('success', 'Pomyślnie dodano');
    }

    public function removeFilmFromBasket($id)
    {
        Basket::where('id', $id)->where('user_id', Auth::id())->first()->delete();

        return back()->with('success', 'Pomyślnie usunięto');
    }

    public function basket()
    {
        $films = Basket::with('film', 'film.category')->where('user_id', Auth::id())->get();

        return view('basket', compact('films'));
    }

    public function searchFilm(Request $request)
    {
        if($request->input('category') == 'All') {
            $films = Film::with('category')->paginate(10);
        } else {
            $films = Film::with('category')->whereHas('category', function ( $query ) use ($request) {
                $query->where('name',  $request->input('category'));
            })->paginate(10);
        }


        return view('home', compact('films'));
    }
}
