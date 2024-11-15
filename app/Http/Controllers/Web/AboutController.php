<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $teams = Team::get();
        return view ('pages.about',compact('teams'));

    }
}
