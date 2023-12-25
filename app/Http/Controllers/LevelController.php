<?php

namespace App\Http\Controllers;

use App\Models\Level;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LevelController extends Controller
{


    function index()
    {
        $levels = Level::get();

        return view('admin.managelevels', compact('levels'));
    }


    function  createLevel(Request $request)
    {
        Validator::make($request->all(), [
            'level' => 'integer|unique:levels,level'
        ])->validate();

        Level::create([
            'level' => $request->level
        ]);

        return back()->with('success', 'Level has been created');
    }


    function delete(Request $request)
    {
        $count = Student::where('class', $request->id)->count();
        if($count == 0) {
            Level::where('id', $request->id)->delete();
            return back()->with('success', 'Level has been deleted');
        }

        return back()->with('error', 'You can not delete this level');
    }
}
