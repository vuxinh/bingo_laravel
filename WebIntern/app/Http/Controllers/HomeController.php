<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CardDetail;
use App\Card;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function start($flag){
        if($flag == 'new') {
            $cardInUser = Card::where('user_id', Auth::user()->id)->first();//
            if($cardInUser == null) {
                $card = new Card();
                $card->user_id = Auth::user()->id;
                $card->id = Auth::user()->id;
                $card->save();
            } else {}
            $card_id = Card::where('user_id', Auth::user()->id)->first()->id;
            return view('BingoGame', compact('card_id'));
        } elseif ($flag == 'old') {
            $cardInUser = Card::where('user_id', Auth::user()->id)->first();//
            if($cardInUser == null) {
                return back()->withErrors(['error' => ['Khong the choi tiep vi chua co Card']]);;
            }
            $card_id = $cardInUser->id;
            return view('BingoGame', compact('card_id'));
        }
    }
}
