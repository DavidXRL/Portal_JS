<?php

namespace App\Http\Controllers;
use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {
        $activities = Activity::paginate(10); // Adjust the number of items per page as needed
        return view('admin/activities/index', compact('activities'));
    }

    public function create()
    {
        $activities = Activity::pluck('id', 'name');
        return view('admin/activities/create', compact('activities'));
    }

    public function store(StoreRequest $request)
    {
        Activity::create($request->all());
        return to_route('activities.index')->with('status', 'Activity created successfully.');
    }

    public function show(Activity $activity){
    return view('admin/activities/show', compact('activity'));
    }

    public function edit(Activity $activity)
    {
        return view('admin/activities/edit', compact('activity'));
    }

    public function update(UpdateRequest $request, Activity $activity)
    {
        $activity->update($request->all());
        return to_route('activities.index')->with('status', 'Activity updated successfully.');
    }

    public function delete(Activity $activity)
    {
        echo view ('admin/activities/delete', compact('activity'));
    }

    public function destroy(Activity $activity)
    {
        $activity->delete();
        return to_route('activities.index')->with('status', 'Activity deleted successfully.');
    }
}
