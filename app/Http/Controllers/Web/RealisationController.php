<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Realisation;
use Illuminate\Http\Request;

class RealisationController extends Controller
{
    public function index()
    {
        $realisations = Realisation::get();
        return view('pages.realisations', compact('realisations'));
    }
}
