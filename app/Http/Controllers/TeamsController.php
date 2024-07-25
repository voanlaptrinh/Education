<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Teams;
use App\Models\Web_config;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    public function index(Classes $class, Request $request)
    {
        $query = Teams::query();
        $search = $request->input('search');

        if ($search) {
            $query->where('name', 'LIKE', "%{$search}%")
                ->orWhere('email', 'LIKE', "%{$search}%");
        }

        $teams = $query->paginate(10);
        $webConfig = Web_config::find(1);
        $classes = Classes::where('status', 1)->get();
        return view('teams.index', compact('teams', 'webConfig','classes','search'));
    }


    public function detail($id)
    {
        $teamsItem = Teams::findOrFail($id);
        $webConfig = Web_config::find(1);
        $teams = Teams::all();
        $classes = Classes::where('status', 1)->get();
        return view('teams.detail', compact('teamsItem','classes','webConfig','teams'));
    }
}
