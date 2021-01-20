<?php

namespace App\Http\Controllers;


use App\Models\Gallery;
use http\Client\Request;
use App\Models\Reviews;
use Illuminate\Support\Facades\Auth;


class GalleryController extends Controller

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
{
    public function index()
    {
        $gallery = Gallery::all()->toArray();
        return view('gallery.index', compact('gallery'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('gallery.create', [
            'action' => route('gallery.store'),
            'method' => 'post'


        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

        $galleries = Gallery::create($request->all());
        $galleries->AuthorID = Auth::user()->id;
        $galleries->save();
        return redirect()->route('galleries.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {

        return view('gallery.edit', [
            'action' => route('gallery.update',$gallery->id),
            'method' => 'put',
            'model' => $gallery

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Gallery $gallery)
    {
        $gallery->update($request->all());
        return redirect()->route('gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        return redirect()->route('gallery.index');
    }

    public function Zobrazclanok()
    {
        return redirect()->route('views.gallery.zobrazclanok');
    }




}
