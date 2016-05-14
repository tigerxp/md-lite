<?php

namespace App\Http\Controllers;

use App\MClass;
use Illuminate\Http\Request;

use App\Http\Requests;

class ClassesController extends Controller
{
	public function index() {
		$classes = MClass::all();

		return view('classes.index', compact('classes'));
	}
}
