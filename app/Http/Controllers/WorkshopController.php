<?php

namespace App\Http\Controllers;
use App\Models\Workshop;
use Illuminate\Http\Request;
Use App\Http\Requests\Workshops\StoreRequest;
Use App\Http\Requests\Workshops\UpdateRequest;

class WorkshopController extends Controller
{
    public function index()
    {
        $workshops = Workshop::paginate(10); // Adjust the number of items per page as needed
        return view('/admin/workshops/index', compact('workshops'));
    }

    public function workshopp()
    {
        $workshops = Workshop::paginate(10); // Adjust the number of items per page as needed
        return view('/workshop', compact('workshops'));
    }

    public function create()
    {
        $workshops = Workshop::pluck('id', 'name_workshop');
        return view('admin/workshops/create', compact('workshops'));
    }
    public function store(StoreRequest $request)
    {
        $data = $request->all();

        if(isset($data["image_workshop"])){
            //Cambiar el nombre del archivo a cargar
            $data["image_workshop"] = $filename = time(). ".".$data["image_workshop"]->extension();
            //Guardar imagen en la carpeta pùblica
            $request->image_workshop->move(public_path("image/workshops"), $filename);
        }

        Workshop::create($data);
        return to_route('workshops.index')->with('status', 'Registrado exitosamente');
    }

    public function show(Workshop $workshop)
    {
        return view('admin/workshops/show', compact('workshop'));
    }

    public function edit(Workshop $workshop)
    {
        return view('admin/workshops/edit', compact('workshop'));
    }

    public function update(UpdateRequest $request, Workshop $workshop)
    {
        $data = $request->all();

        if(isset($data["image_workshop"])){
            //Cambiar el nombre del archivo a cargar
            $data["image_workshop"] = $filename = time(). ".".$data["image_workshop"]->extension();
            //Guardar imagen en la carpeta pùblica
            $request->image_workshop->move(public_path("image/workshops"), $filename);
        }

        $workshop->update($data);
        return to_route('workshops.index')->with('status', 'Actualizado exitosamente');
    }

    public function delete(Workshop $workshop)
    {
     echo view('admin/workshops/delete', compact('workshop'));
    }

    public function destroy(Workshop $workshop)
    {
        if($workshop->image_workshop){
            $imagePath = public_path("image/workshops/{$workshop->image_workshop}");
            if(file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        $workshop->delete();
        return to_route('workshops.index')->with('status', 'Eliminado exitosamente');
    }
}
