<?php

namespace App\Http\Controllers;
use App\Models\Loker;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index($idloker)
    {
        $lokers = Loker::findorfail($idloker);
        return view ('view', compact('lokers'));
    }
}
