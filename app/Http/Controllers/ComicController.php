<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->getValidationRules());
        $comic_data = $request->all();
        $new_comic = new Comic();
        $new_comic->fill($comic_data);
        $new_comic->save();

        return redirect()->route('comics.show', ['comic' => $new_comic->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $selected_comic = Comic::find($id);
        return view('comics.show', compact('selected_comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $selected_comic = Comic::find($id);
        return view('comics.edit', compact('selected_comic'));
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
        $request->validate($this->getValidationRules());
        $new_data = $request->all();
        $selected_comic = Comic::find($id);
        $selected_comic->update($new_data);

        return redirect()->route('comics.show', ['comic' => $selected_comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic_to_destroy = Comic::find($id);
        $comic_to_destroy->delete();
        return redirect()->route('comics.index');
    }

    private function getValidationRules() {
        return [
            'title' => 'required|max:100|min:5',
            'description' => 'required',
            'thumb' => 'required',
            'price' => 'required',
            'series' => 'required|max:100|min:5',
            'sale_date' => 'required|date',
            'type' => 'required|max:100|min:5' 
        ];
    }
}
