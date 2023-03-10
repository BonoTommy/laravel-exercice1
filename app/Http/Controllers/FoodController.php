<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class FoodController extends Controller
{
    public function index() {
        return view('home');
    }

    public function menu() {
        return view('menu');
    }

    public function about() {
        return view('about');
    }

    public function book() {
        return view('book');
    }

    public function reservationList() {
        $books = Book::select()->paginate(1);
       // return $books;
        return view('reservation-list', ['books' => $books]);
    }

    public function formBook(Request $request) {

        $request->validate([
            'name'         => 'required|max:80',
            'phone_number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'email'        => 'required|email',
            'guest_nbr'    => 'required',
            'date'         => 'required|after_or_equal:today',
            'time'         => 'required'
        ]);
        
        $newBook = new Book;
        $newBook->name = $request->name;
        $newBook->phone_number = $request->phone_number;
        $newBook->email = $request->email;
        $newBook->guest_nbr = $request->guest_nbr;
        $newBook->date = $request->date;
        $newBook->time = $request->time;
        $newBook->save();
        return redirect('/reservation-list');
    }
}
