<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check())
            $id = Auth::id();
        else
            redirect('login');
        $activities = Activity::where('user_id',$id)->get();
        return view('employeesActivity')->with(compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function create()
    {
        return view('ActivityReg');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $activity = new Activity();
        $activity->user_id = Auth::id();
        $activity->calories = Request('calories');
        $activity->date = Request('date');
        $activity->start_time = Request('start_time');
        $activity->end_time = Request('end_time');
        $activity->activity_type = Request('activity_type');
        $activity->save();
        //return view('userinfo');
        return redirect('employeesActivity');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function show()
    {
        //$id = Auth::id();
        $id=1;
        $activities = Activity::find($id);
        return $activities;
        //return redirect('')->with(compact('$activities'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function edit(Request $request)
    {
        //$id = Request('activity_id');
        $id=1;
        $activity = Activity::find($id);
        return $activity;
        //return redirect('edit_activity')->with(compact('activity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Activity $activity)
    {
        //$id = Request('activity_id');
        $id=1;
        $activity = Activity::find($id);
        /*
        $activity->calories = Request('calories');
        $activity->date = Request('date');
        $activity->start_time = Request('start_time');
        $activity->end_time = Request('end_time');
        $activity->activity_type = Request('activity_type');
        $activity->save();
        */
        $activity->calories = 154;
        $activity->activity_type = 'cart';
        $activity->save();
        return $activity;
        //return redirect('edit_activity')->with(compact('activity'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function destroy(Request $request)
    {
        //$id = Request('id');
        $id= 2;
        $record = Activity::find($id);
        $record->delete();
        return 'done';
        //return redirect('home');

    }
}
