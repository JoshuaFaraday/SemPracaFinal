<?php

namespace App\Http\Controllers;

use Aginev\Datagrid\Datagrid;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::paginate(25);
        $grid = new Datagrid($users, $request->get('f',[]));

        $grid->setColumn('name','Full name')
        ->setColumn('email','Email Address')
            ->setActionColumn([
                'wrapper' => function ($value, $row) {
                    if (Auth::user()->email === 'Admin@stranka.sk') {

                        return '<a href="' . route('user.edit', [$row->id]) . '" title="Edit" class="btn btn-sn btn-primary">Edit</a>
                        <a href="' . route('user.delete', $row->id) . '" title="Delete" data-method="DELETE" class="btn btn-sn btn-danger" data-confirm="Are you sure?">Delete</a>';
                    } elseif (Auth::user()->email == $row->email) {
                        return '<a href="' . route('user.edit', [$row->id]) . '" title="Edit" class="btn btn-sn btn-primary">Edit</a>';
                    }
                }
            ]);
        return view('user.index', ['grid' =>$grid] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return  view('user.create', [
            'action' => route ('user.store'),
            'method' =>  'post'


        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
          'name' => 'required',
           'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed'
       ]);

        $users = USER::create($request->all());
        $users->save();
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $user->password = '';
        return view('user.edit', [
            'action' => route('user.update',$user->id),
            'method' => 'put',
            'model' => $user

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, User $user)
    {
        $user->update($request->all());

        $request->validate([
           'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'required|min:8|confirmed'
       ]);

        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index');
    }

/*    public function getName(User $id)
    {
        return select()->route('name');
    }*/
}
