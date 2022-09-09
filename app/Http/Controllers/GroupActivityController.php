<?php

namespace App\Http\Controllers;

use App\Models\Group_Activity;
use Illuminate\Http\Request;

class GroupActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $activities = Group_Activity::all();
        return view('group_activities')->with(compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('GroupActivityReg');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $group_activity = new Group_Activity();
        $group_activity->date = Request('date');
        $group_activity->time = Request('time');
        $group_activity->location = Request('location');
        $group_activity->description = Request('description');
        $group_activity->save();
        return redirect('Group_Activities');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Group_Activity  $group_Activity
     * @return \Illuminate\Http\Response
     */
    public function show(Group_Activity $group_Activity)
    {
        //$id = Auth::id();
        $id=1;
        $group_activity = Group_Activity::find($id);
        return $group_activity;
        //return redirect('')->with(compact('$group_activity'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Group_Activity  $group_Activity
     * @return \Illuminate\Http\Response
     */
    public function edit(Group_Activity $group_Activity)
    {
        //$id = Request('activity_id');
        $id=1;
        $group_activity = Group_Activity::find($id);
        return $group_activity;
        //return redirect('edit_group_activity')->with(compact('group_activity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Group_Activity  $group_Activity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group_Activity $group_Activity)
    {
        //$id = Request('activity_id');
        $id=1;
        $group_activity = Group_Activity::find($id);
        /*
        $group_activity->date = Request('date');
        $group_activity->time = Request('time');
        $group_activity->location = Request('location');
        $group_activity->description = Request('description');
        $group_activity->save();
        */
        $group_activity->location = 'here';
        $group_activity->description = 'any description';
        $group_activity->save();
        return $group_activity;
        //return redirect('edit_group_activity')->with(compact('group_activity'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Group_Activity  $group_Activity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group_Activity $group_Activity)
    {
        //$id = Request('id');
        $id= 1;
        $record = Group_Activity::find($id);
        $record->delete();
        return 'done';
        //return redirect('home');
    }
}
