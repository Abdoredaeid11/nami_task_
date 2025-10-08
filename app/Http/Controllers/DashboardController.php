<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Project;
use App\Models\WorkTime;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('dashboard', compact('projects'));
        
    }
    //
    public function getData(Request $request)
    {
        $projectId = $request->project_id;

        if ($projectId === 'all' || !$projectId) {
            $workTimes = WorkTime::with(['employee', 'project', 'modul'])->get();
        } else {
            $workTimes = WorkTime::with(['employee', 'project', 'modul'])
                ->where('project_id', $projectId)
                ->get();
        }

        $employees = $workTimes->pluck('employee')->unique('id')->values();

        $projects = $workTimes->pluck('project')->unique('id')->values();

        return response()->json([
            'employees' => $employees,
            'projects' => $projects,
            'workTimes' => $workTimes,
        ]);
    }
}
