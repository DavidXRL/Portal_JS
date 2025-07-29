<?php

namespace App\Http\Controllers;
use App\Models\WorkshopActivity;
use App\Models\Workshop;
use Illuminate\Http\Request;
Use App\Http\Requests\Workshops_Activities\StoreRequest;
Use App\Http\Requests\Workshops_Activities\UpdateRequest;


class WorkshopActivityController extends Controller
{

public function __construct()
{
    $this->middleware('auth')->except('workshop_activities');
}
    public function index()
    {
        $workshops_activities = WorkshopActivity::paginate(10); // Adjust the number of items per page as needed
        return view('/admin/workshops_activities/index', compact('workshops_activities'));
    }

    public function workshop_activities()
    {
        $workshops_activities = WorkshopActivity::paginate(10); // Adjust the number of items per page as needed
        return view('/workshop_activities', compact('workshops_activities'));
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
            $request->image_activity->move(public_path("image/workshops_activities"), $filename);
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
    $workshops = Workshop::all(); // o pluck('name_workshop', 'id') si prefieres
    return view('admin/workshops_activities/edit', compact('workshop_activity', 'workshops'));
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

    public function delete(WorkshopActivity $workshop_activity)
    {
        echo view('admin/workshops_activities/delete', compact('workshop_activity'));
    }

    public function destroy(WorkshopActivity $workshop_activity)
    {
        // Eliminar la imagen asociada si existe
        if ($workshop_activity->image_activity) {
            $imagePath = public_path('image/workshops_activities/' . $workshop_activity->image_activity);
            if (file_exists($imagePath)) {
                @unlink($imagePath);
            }
        }

        $workshop_activity->delete();
        return to_route('workshops_activities.index')->with('status', 'Eliminado exitosamente');
    }
}
