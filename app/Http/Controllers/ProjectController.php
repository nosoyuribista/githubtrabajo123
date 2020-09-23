<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Type;
use App\User;


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

            'project' => new Project,
            'types' => $types = Type::all(),
            'users' => $user = User::join('assigned_roles','assigned_roles.user_id', '=','users.id')
                                            ->where('role_id',2)->get()
                    


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
            'type_id' => 'required',
            'justification'=> 'required',
            'students_number'=>'required'

        ]);
        $user_id=request()->validate([
            'user_id' => 'required'
        ]);


        Project::create($fields)->users()->attach($user_id,['role_id'=>2]);

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
            'project' => $project,
            'types' => $types = Type::all()

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

          return view('projects._tabs_edit', [
            'project' => $project,
            'types' => $types = Type::all(),
            'teachers' => $teachers = User::join('assigned_roles','assigned_roles.user_id', '=','users.id')
            ->where('role_id',6)->get(),
            'students' => $students = User::join('assigned_roles','assigned_roles.user_id', '=','users.id')
            ->where('role_id',5)->get()
            
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
            'type_id' => 'required',
            'justification'=> 'required',
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
         $id=request()->get('id');
         //return $id;
        $project = Project::find($id);
        return redirect()->route('adminproyectos.show', $project);
    }

    public function adduser(Project $project,Request $request)
    {
        $user_id = $request->input('user_id');
        $role_id= $request->input('role_id');
        $project->users()->attach($user_id,['role_id'=>$role_id]);
        return redirect()->back();
    }
    public function deleteuser($project_id,$user_id){
       $project = Project::find($project_id);
       $project->users()->detach($user_id);
        return redirect()->back();
    }

    
}
