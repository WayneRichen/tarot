<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consult;

class ConsultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consults = Consult::orderBy('id', 'desc')->paginate(15);
        foreach ($consults as $index => $consult) {
            $cards = json_decode($consult->cards);
            foreach ($cards as $cardIndex => $card) {
                $url = $card->reversed ? request()->schemeAndHttpHost() . '/reversed/' . $card->file_name : request()->schemeAndHttpHost() . '/tarot/' . $card->file_name ;
                $cards[$cardIndex]->file_name = $url;
            }
            $consults[$index]->cards = $cards;
            $consults[$index]->times_ago = time_elapsed_string($consult->created_at);
        }

        return inertia('Dashboard/Consult', ['consults' => $consults]);
    }

    public function latest()
    {
        $consults = Consult::whereNotNull('question')->orderBy('id', 'desc')->paginate(15);
        foreach ($consults as $index => $consult) {
            $cards = json_decode($consult->cards);
            foreach ($cards as $cardIndex => $card) {
                $url = $card->reversed ? request()->schemeAndHttpHost() . '/reversed/' . $card->file_name : request()->schemeAndHttpHost() . '/tarot/' . $card->file_name ;
                $cards[$cardIndex]->file_name = $url;
            }
            $consults[$index]->cards = $cards;
            $consults[$index]->times_ago = time_elapsed_string($consult->created_at);
        }

        return inertia('Dashboard/Latest', ['consults' => $consults]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view($id)
    {
        $consult = Consult::find($id);
        $cards = json_decode($consult->cards);
        foreach ($cards as $index => $card) {
            $url = $card->reversed ? request()->schemeAndHttpHost() . '/reversed/' . $card->file_name : request()->schemeAndHttpHost() . '/tarot/' . $card->file_name ;
            $cards[$index]->file_name = $url;
        }
        $consult->cards = $cards;
        $consult->created = $consult->created_at->format('Y-m-d H:i:s');
        $consult->replyed = $consult->updated_at->format('Y-m-d H:i:s');

        return inertia('Dashboard/View', ['consult' => $consult]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $consult = Consult::find($id);
        $consult->reply = $request->reply;
        $consult->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Consult::find($id)->delete();
    }
}
