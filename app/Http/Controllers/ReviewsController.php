<?php

namespace App\Http\Controllers;

use Aginev\Datagrid\Datagrid;
use App\Models\Reviews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(/*Request $request*/)
    {
       /* /*$reviews = Reviews::paginate(25);
        $grid = new Datagrid($reviews, $request->get('f', []));

        $grid->setColumn('popis', 'Title')
            ->setColumn('text', 'Text')
            ->setColumn('hodnotenie', 'Hodnotenie')
            ->setActionColumn([
                'wrapper' => function ($value, $row) {
                    if (Auth::user() != null) {
                        if (Auth::user()->email == 'Admin@stranka.sk') {

                            return '<a href="' . route('reviews.edit', [$row->id]) . '" title="Edit" class="btn btn-sn btn-primary">Edit</a>
                        <a href="' . route('reviews.delete', $row->id) . '" title="Delete" data-method="DELETE" class="btn btn-sn btn-danger" data-confirm="Are you sure?">Delete</a>';
                        } elseif (Auth::user()->email == $row->email) {
                            return '<a href="' . route('reviews.edit', [$row->id]) . '" title="Edit" class="btn btn-sn btn-primary">Edit</a>
                        <a href="' . route('reviews.delete', $row->id) . '" title="Delete" data-method="DELETE" class="btn btn-sn btn-danger" data-confirm="Are you sure?">Delete</a>';


                        }
                    }
                }
            ]);
        return view('reviews.index', ['grid' => $grid]);
    }*/


        $reviews = Reviews::all()->toArray();
        return view('reviews.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('reviews.create', [
            'action' => route('reviews.store'),
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

        $reviews = Reviews::create($request->all());
        $reviews->AuthorID = Auth::user()->id;
        $reviews->save();
        return redirect()->route('reviews.index');
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
    public function edit(Request $request,Reviews $review)
    {

        return view('reviews.edit', [
            'action' => route('reviews.update',$review->id),
            'method' => 'put',
            'model' => $review

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Reviews $reviews)
    {
        $reviews->update($request->all());
        return redirect()->route('reviews.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Reviews $reviews)
    {
        $reviews->delete();
        return redirect()->route('reviews.index');
    }
}
