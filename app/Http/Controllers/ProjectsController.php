<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProjectResource;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends RestController
{
//    ToDo add service, dto and query filters

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $projects = Project::with(['category', 'stageOfReady', 'company', 'status']);

        if ($request->has('categories')) {
            $projects->whereIn('category_id', $request->get('categories'));
        }

        if ($request->has('statuses')) {
            $projects->whereIn('status_id', $request->get('statuses'));
        }

        if ($request->has('stages')) {
            $projects->whereIn('stage_id', $request->get('stagesOfReady'));
        }

        if ($request->has('cities')) {
            $projects->whereIn('city_id', $request->get('cities'));
        }

        return $this->sendResponse(
            ProjectResource::collection($projects->get())
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = Project::input($request->input());

        return $this->sendResponse(ProjectResource::make($project));
    }

    /**
     * Display the specified resource.
     *
     * @param  Project $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return $this->sendResponse(ProjectResource::make(
            $project->load(['category', 'stageOfReady', 'company', 'status']))
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Project $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $project->update($request->input());

        return $this->sendResponse(ProjectResource::make(
            $project->load(['category', 'stageOfReady', 'company']))
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
