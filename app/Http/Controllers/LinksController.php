<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class LinksController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $links = Auth::user()->links()->latest()->paginate(Link::NUM_ITEMS_PER_PAGE);
        return view('links.index', compact('links'));
    }

    public function show()
    {
        $link = Link::where('link_key', request('link_key'))->first();
        return view('links.show', compact('link'));
    }

    public function create()
    {
        return view('links.create');
    }

    public function store()
    {
        $validatedData = request()->validate([
            'title' => 'required|string',
            'link' => 'required|string|active_url',
            'description' => 'required|string|min:8',
        ]);
        $link_key = Auth::user()->id . Str::random(9) . substr(strftime("%Y", time()),2);
        $validatedData['link_key'] = $link_key;
        Auth::user()->links()->create($validatedData);
        return back()->withSuccess('Saved Successfully !');
    }

    public function destroy()
    {
        request()->user()->delete();
        return back()->withSuccess('Delete Successfully !');
    }
}
