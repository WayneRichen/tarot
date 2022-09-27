<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShuffleController extends Controller
{
    public function index()
    {
        $id = 3;
        return redirect('shuffle/' . $id);
    }

    public function shuffle($id)
    {
        $tarots = ['https://mytarotdiary.files.wordpress.com/2012/09/rws_tarot_20_judgement.jpg', 'https://mytarotdiary.files.wordpress.com/2012/09/rws_tarot_20_judgement.jpg', 'https://mytarotdiary.files.wordpress.com/2012/09/rws_tarot_20_judgement.jpg'];
        return inertia('Shuffle/Index', ['id' => $id, 'tarots' => $tarots]);
    }

    public function consult($id)
    {
        $tarots = ['https://mytarotdiary.files.wordpress.com/2012/09/rws_tarot_20_judgement.jpg', 'https://mytarotdiary.files.wordpress.com/2012/09/rws_tarot_20_judgement.jpg', 'https://mytarotdiary.files.wordpress.com/2012/09/rws_tarot_20_judgement.jpg'];
        return inertia('Shuffle/Consult', ['id' => $id, 'tarots' => $tarots]);
    }

    public function consultTeacher(Request $request, $id)
    {
        $validated = $request->validate([
            'question' => 'required|max:255',
        ]);
        
        return redirect('success/' . $id);
    }

    public function success($id)
    {
        $tarots = ['https://mytarotdiary.files.wordpress.com/2012/09/rws_tarot_20_judgement.jpg', 'https://mytarotdiary.files.wordpress.com/2012/09/rws_tarot_20_judgement.jpg', 'https://mytarotdiary.files.wordpress.com/2012/09/rws_tarot_20_judgement.jpg'];
        return inertia('Shuffle/Success', ['id' => $id, 'tarots' => $tarots, 'question' => 'd']);
    }

    public function result($id)
    {
        $tarots = ['https://mytarotdiary.files.wordpress.com/2012/09/rws_tarot_20_judgement.jpg', 'https://mytarotdiary.files.wordpress.com/2012/09/rws_tarot_20_judgement.jpg', 'https://mytarotdiary.files.wordpress.com/2012/09/rws_tarot_20_judgement.jpg'];
        return inertia('Shuffle/Result', ['id' => $id, 'tarots' => $tarots, 'question' => '我想知道...', 'reply' => 'Teacher']);
    }
}
