<?php

namespace App\Http\Controllers;

use Aginev\Datagrid\Datagrid;
use App\Models\Feedback;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return array|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $feedbacks = Feedback::all();
        return view('feedbackBlog.index', ['feedbacks' => $feedbacks]);
    }

    public function viewMy()
    {
        $feedbacks = Auth::user()->feedbacks;
        return view('feedbackBlog.myFeedback', ['feedbacks' => $feedbacks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('feedbackBlog.create', [
            'action' => route('feedbackBlog.store'),
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
        //dd($request);
        $feedback = Feedback::create([

            'text' => request('text'),
            'title' => request('title'),
            'user_id' => auth()->id(),
            'opinion' => request('opinion')

        ]); //vytvorenie feedbacku a naplnenie z requestu
        $feedback->save();
        return redirect()->route('feedbackBlog.index'); // presmerovanie
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function edit( Feedback $feedback)
    {
        //$feedback = DB::table('feedback')->where('id',$id);

        return view('feedbackBlog.edit', [
            'action' => route('feedbackBlog.update', $feedback->id),
            'method' => 'put',
            'model' => $feedback

        ]);




    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, int $id)
    {

        $feedback = DB::table('feedback')->where('id',$id)->get()[0];

        //dd($feedback);
        $request->validate([
            'title' => 'required',
            'text' => 'required']);

        //dd($feedback);
        //$feedback->update($request->all());
        DB::table('feedback')->where('id',$id)->update(array('title' => request('title')));
        DB::table('feedback')->where('id',$id)->update(array('text' => request('text')));
        DB::table('feedback')->where('id',$id)->update(array('opinion' => request('opinion')));
        //$feedback->save();
        if (Auth::user()->getIsAdmin()) {
            return redirect()->route('feedbackBlog.index');
        } else {
            return redirect()->route('feedbackBlog.viewMy');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Feedback $feedback)
    {
        // DB::table('feedback')
        //  ->where('id',$id)
        // ->delete();
        $feedback->delete();
        return redirect()->route('feedbackBlog.index');
    }
}
