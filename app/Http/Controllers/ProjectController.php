<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
public function index():Renderable
		{
			$projects = Project::paginate();
			return view('project.index',compact('projects'));
		}
}
