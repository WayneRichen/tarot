<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consult;
use App\Models\Tarot;
use Illuminate\Support\Facades\Cache;

class TarotController extends Controller
{
    public function index()
    {
        $tarots = Cache::rememberForever('TAROTS', function () {
            return Tarot::get();
        });

        $shuffle = [];
        while (count($shuffle) < 3) {
            $cardNumber = rand(0, count($tarots) - 1);
            $shuffle[$cardNumber] = rand(0, 1);
        }

        $shuffleResult = [];
        foreach ($shuffle as $cardId => $reversed) {
            $shuffleResult[] = [
                'name' => $reversed ? $tarots[$cardId]->name . '•逆位' : $tarots[$cardId]->name,
                'file_name' => $reversed ? $tarots[$cardId]->reversed_file_name : $tarots[$cardId]->file_name,
                'reversed' => $reversed ? true : false,
            ];
        }

        $consult = Consult::create(['cards' => json_encode($shuffleResult, JSON_UNESCAPED_UNICODE)]);

        return redirect('shuffle/' . $consult->hash);
    }

    public function shuffle($hash)
    {
        $consult = Consult::byHashOrFail($hash);
        $cards = json_decode($consult->cards);
        foreach ($cards as $index => $card) {
            $url = $card->reversed ? request()->schemeAndHttpHost() . '/reversed/' . $card->file_name : request()->schemeAndHttpHost() . '/tarot/' . $card->file_name ;
            $cards[$index]->file_name = $url;
        }

        return inertia('Shuffle/Index', ['id' => $hash, 'tarots' => $cards]);
    }

    public function consult($hash)
    {
        $consult = Consult::byHashOrFail($hash);
        $cards = json_decode($consult->cards);
        foreach ($cards as $index => $card) {
            $url = $card->reversed ? request()->schemeAndHttpHost() . '/reversed/' . $card->file_name : request()->schemeAndHttpHost() . '/tarot/' . $card->file_name ;
            $cards[$index]->file_name = $url;
        }

        return inertia('Shuffle/Consult', ['id' => $hash, 'tarots' => $cards]);
    }

    public function consultTeacher(Request $request, $hash)
    {
        $validated = $request->validate([
            'question' => 'required|max:255',
        ]);

        $consult = Consult::byHashOrFail($hash);
        $consult->update(['question' => $request->question]);
        $consult->save();
        
        return redirect('success/' . $hash);
    }

    public function success($hash)
    {
        $consult = Consult::byHashOrFail($hash);
        $cards = json_decode($consult->cards);
        foreach ($cards as $index => $card) {
            $url = $card->reversed ? request()->schemeAndHttpHost() . '/reversed/' . $card->file_name : request()->schemeAndHttpHost() . '/tarot/' . $card->file_name ;
            $cards[$index]->file_name = $url;
        }

        return inertia('Shuffle/Success', ['id' => $hash, 'tarots' => $cards, 'url' => route('shuffle.result', $hash)]);
    }

    public function result($hash)
    {
        $consult = Consult::byHashOrFail($hash);
        $cards = json_decode($consult->cards);
        foreach ($cards as $index => $card) {
            $url = $card->reversed ? request()->schemeAndHttpHost() . '/reversed/' . $card->file_name : request()->schemeAndHttpHost() . '/tarot/' . $card->file_name ;
            $cards[$index]->file_name = $url;
        }

        return inertia('Shuffle/Result', ['tarots' => $cards, 'question' => $consult->question, 'reply' =>  $consult->reply]);
    }
}
