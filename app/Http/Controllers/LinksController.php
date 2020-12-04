<?php

namespace App\Http\Controllers;

use App\Models\Link;

class LinksController extends Controller
{
    public function index()
    {
        $links = Link::latest()->paginate(Link::NUM_ITEMS_PER_PAGE);

        return view('links.index', compact('links'));
    }

    public function create()
    {
        return view('links.create');
    }

    public function store()
    {
        $validatedData = request()->validate([
            'link' => 'required|string|active_url',
            'description' => 'required|string|min:8',
        ]);

        Link::create($validatedData);

        return back()->withSuccess('Saved Successfully !');
    }

    public function destroy(Link $link)
    {
        $link->delete();

        return back()->withSuccess('Delete Successfully !');
    }
}
