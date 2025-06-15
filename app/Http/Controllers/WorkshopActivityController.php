<?php

namespace App\Http\Controllers;
use App\Models\WorkshopActivity;
use App\Models\Workshop;
use Illuminate\Http\Request;
Use App\Http\Requests\Workshops_Activities\StoreRequest;
Use App\Http\Requests\Workshops_Activities\UpdateRequest;


class WorkshopActivityController extends Controller
{
    public function index()
    {
        $workshops_activities = WorkshopActivity::paginate(10); // Adjust the number of items per page as needed
        return view('/admin/workshops_activities/index', compact('workshops_activities'));
    }

    public function create()
    {
        $workshops = \App\Models\Workshop::pluck('name_workshop', 'id');
        return view('admin/workshops_activities/create', compact('workshops'));
    }


    public function store(StoreRequest $request)
    {
        $data = $request->all();

        if(isset($data["image_activity"])){
            //Cambiar el nombre del archivo a cargar
            $data["image_activity"] = $filename = time(). ".".$data["image_activity"]->extension();
            //Guardar imagen en la carpeta pùblica
            $request->image_activity->move(public_path("image/workshops"), $filename);
        }

        WorkshopActivity::create($data);
        return to_route('workshops_activities.index')->with('status', 'Registrado exitosamente');
    }

public function show($id)
{
    $workshop_activity = WorkshopActivity::with('workshop')->findOrFail($id);
    return view('admin/workshops_activities/show', compact('workshop_activity'));
}


    public function edit(WorkshopActivity $workshop_activity)
    {
        return view('admin/workshops_activities/edit', compact('workshop_activity'));
    }

    public function update(UpdateRequest $request, WorkshopActivity $workshop_activity)
    {
        $data = $request->all();

        if(isset($data["image_activity"])){
            //Cambiar el nombre del archivo a cargar
            $data["image_activity"] = $filename = time(). ".".$data["image_activity"]->extension();
            //Guardar imagen en la carpeta pùblica
            $request->image_activity->move(public_path("image/workshops"), $filename);
        }

        $workshop_activity->update($data);
        return to_route('workshops_activities.index')->with('status', 'Actualizado exitosamente');
    }
}
