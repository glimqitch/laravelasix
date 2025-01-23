<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class GameController extends Controller
{
    public function index(): View {
        $games = Game::all();
        return view('games.index', compact('games'));
    }

    public function create(): View {
        return view('games.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required',
            'platform' => 'required',
            'release_year' => 'required|integer',
            'description' => 'required',
            'rating' => 'required|numeric|min:0|max:10'
        ]);

        Game::create($request->all());

        return redirect()->route('games.index');
    }

    public function edit(Game $game): View {
        return view('games.edit', compact('game'));
    }

    public function update(Request $request, Game $game): RedirectResponse {
        $request->validate([
            'title' => 'required',
            'platform' => 'required',
            'release_year' => 'required|integer',
            'description' => 'required',
            'rating' => 'required|numeric|min:0|max:10'
        ]);

        $game->update($request->all());

        return redirect()->route('games.index');
    }

    public function delete(Game $game): View {
        return view('games.delete', compact('game'));
    }

    public function destroy(Game $game): RedirectResponse {
        $game->delete();
        return redirect()->route('games.index');
    }

    public function show(Game $game): View {
        return view('games.show', compact('game'));
    }
}

