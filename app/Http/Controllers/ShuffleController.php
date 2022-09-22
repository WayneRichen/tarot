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
        return inertia('Shuffle/Index', ['id' => $id]);
    }
}
