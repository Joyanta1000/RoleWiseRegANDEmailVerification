<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Task;

class tasks extends Controller
{
    public function save(Request $request)
    {
    	$task = new Task;

    	$task->id = $request->id;
    	$task->name = $request->name;
    	$task->details = $request->details;
    	$task->status = $request->status;
    	$task->created_by = $request->created_by;

    	if($task->save())
    	{
return Task::all();
    	}
    }

    public function show()
    {
    	return Task::all();
    }
}
