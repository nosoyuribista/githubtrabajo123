<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectController extends Controller
{


    public function __construct(){
        $this->middleware('auth');
    }






    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::latest()->get();


        return view('adminproyectos', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create',[

            'project' => new Project

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {



        $fields=request()->validate([
            'title'=> 'required',
            'type' => 'required',
            'description'=> 'required',
            'students_number'=>'required'

        ]);

        //creo una tabla con la request y solo los campos en only.

        Project::create($fields);

        //redirecciono a otra vista por la ruta adminproyectoindex

        return redirect()->route('adminproyectos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {

        return view('projects.show', [
            'project' => $project

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {

          return view('projects.edit', [
            'project' => $project

        ]);      
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Project $project)
    {

         $fields=request()->validate([
            'title'=> 'required',
            'type' => 'required',
            'description'=> 'required',
            'students_number'=>'required'

        ]);
        $project->update($fields);

        return redirect()->route('adminproyectos.show', $project);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('adminproyectos.index');
    }


    public function search()

    {
      $id=request()->validate([
            'id'=> 'required'
        ]);
        $project = Project::findOrFail($id);
        return redirect()->route('adminproyectos.show', $project);
    }
}
