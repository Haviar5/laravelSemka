<?php

namespace App\Http\Controllers;

use Aginev\Datagrid\Datagrid;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->authorizeResource(User::class, 'user');
    }

    public function index(Request $request)
    {
        $users = User::paginate(8);

        $grid = new Datagrid($users,$request->get('f',[]));
        $grid->setColumn('name', 'Full name')
            ->setColumn('email', 'Email address')
            ->setActionColumn([
                'wrapper' => function($value, $row) {
                return '<a href="' .route('user.edit', [$row->id]) . ' " title="Edit" class="btn btn-sm btn-primary">Edit </a>
                        <a href="' .route ('user.delete', $row->id) . '" title="Delete" class = "btn btn-sm btn-danger" data-confirm="Are you sure?">Delete</a>';
                }
            ]);

        return view('user.index', ['grid' => $grid]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create', [
            'action' => route('user.store'),
            'method' => 'post'
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
        $user = User::create($request->all()); //vytvorenie usera a naplnenie z requestu
        $user->save();
        return redirect()->route('user.index'); // presmerovanie
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
     * @param User $user
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $user->password = '';
        return view('user.edit', [
            'action' => route('user.update' , $user->id) ,
            'method' => 'put',
            'model' => $user

            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request,User $user)
    {
        //dd($request);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'required|min:6']);

        $user->update($request->all());

        if (Auth::user()->getIsAdmin()) {
            return redirect()->route('user.index');
        } else {
            return redirect()->route('feedbackBlog.viewMy');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(User $user)
    {

        $user->feedbacks()->delete();
        $user->delete();


        return redirect()->route('user.index');
    }
}
