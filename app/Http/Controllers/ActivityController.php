<?php

namespace App\Http\Controllers;
use App\Models\Activity;
use Illuminate\Http\Request;
Use App\Http\Requests\Activities\StoreRequest;
use App\Http\Requests\Activities\UpdateRequest;


class ActivityController extends Controller
{
    public function index()
    {
        $activities = Activity::paginate(10); // Adjust the number of items per page as needed
        return view('/admin/activities/index', compact('activities'));
    }

    public function workshop()
    {
        $activities = Activity::paginate(10); // Adjust the number of items per page as needed
        return view('/activities_esc', compact('activities'));
    }

    public function create()
    {
        $activities = Activity::pluck('id', 'name_act');
        return view('admin/activities/create', compact('activities'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request->all();

        if(isset($data["image_activity"])){
            //Cambiar el nombre del archivo a cargar
            $data["image_activity"] = $filename = time(). ".".$data["image_activity"]->extension();
            //Guardar imagen en la carpeta pùblica
            $request->image_activity->move(public_path("image/activities"), $filename);
        }

        Activity::create($data);
        return to_route('activities.index')->with('status', 'Actividad Registrada');
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
         $data = $request->all();

        if(isset($data["image_activity"])){
            //Cambiar el nombre del archivo a cargar
            $data["image_activity"] = $filename = time(). ".".$data["image_activity"]->extension();
            //Guardar imagen en la carpeta pùblica
            $request->image_activity->move(public_path("image/activities"), $filename);
        }

        $activity->update($data);
        return to_route('activities.index')->with('status', 'Activity updated successfully.');
    }

    public function delete(Activity $activity)
    {
        echo view ('admin/activities/delete', compact('activity'));
    }

    public function destroy(Activity $activity)
    {

        // CON AYUDA DE ESTA FUNCIÓN SE PUEDEN ELIMINAR LAS IMÁGENES DE LA ACTIVIDAD DE MANERA PERMANENTE
        // Verifica si la imagen existe y la elimina
        // Asegúrate de que la ruta sea correcta y que el archivo exista antes de intentar eliminarlo
        if($activity->image_activity)
        {
            $imagePath = public_path('image/activities/' . $activity->image_activity);
            if (file_exists($imagePath)) {
                unlink($imagePath); // Delete the image file
            }
        }
        $activity->delete();
        return to_route('activities.index')->with('status', 'Activity deleted successfully.');
    }
}
