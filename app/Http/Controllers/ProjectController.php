<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

/**
 * Short desc
 *
 * @category ProjectController
 * @package  Null
 * @author   Display Name <Sim@localhost.local>
 * @license  GPL http://opensource.org
 * @link     http://opensource.org/licenses/gpl-license.php GNU Public License
 */

class ProjectController extends Controller
{

   /**
     * Projects
     */
    public $projects;
    /**
     * Logged in user required on all route methods except index|show
     */
    public function __construct()
    {
        //$this->middleware('auth')->except(['index','show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @param \App\Project object $project comment text
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $projects=Project::all();  //all the projects
          $projects=auth()->user()->projects; //list projects belonging to logged in user
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('projects.create', ['project' => new Project]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes=request()->validate([
            'projectName'=>'required',
            'shortDescription'=>'required',
        ]);
        auth()->user()->projects()->create($attributes);
        //dd(Auth::id());
        return redirect('/projects');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        if (auth()->user()->isNot($project->owner)) {
             abort(403);
        }
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
