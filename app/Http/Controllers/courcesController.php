<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class courcesController extends Controller
{
    public function create()
    {
        return view('dashboard.cources.create.create');
    }

    public function delete()
    {
        // load all courses to show in dropdown
        $courses = Course::all();
        return view('dashboard.cources.delete.delete', compact('courses'));
    }

    public function updateForm()
{
    // show the update form
    $courses = \App\Models\Course::all();
    return view('dashboard.cources.update.update', compact('courses'));
}

public function updateCourse(Request $request)
{
    $request->validate([
        'courceID' => 'required|exists:courses,id', // adjust if your PK field name differs
        'courceName' => 'required|string|max:255',
        'courceAbout' => 'required|string|max:500',
        'lectureName' => 'required|string|max:255',
    ]);

    $course = \App\Models\Course::find($request->courceID);
    $course->update([
        'courceName' => $request->courceName,
        'courceAbout' => $request->courceAbout,
        'lectureName' => $request->lectureName,
    ]);

    return redirect('/dashboard/cources/update')->with('success', 'Course updated successfully!');
}


    public function store(Request $request)
    {
        $request->validate([
            'courceName' => 'required|string|max:255',
            'courceAbout' => 'required|string|max:500',
            'lectureName' => 'required|string|max:255',
        ]);

        Course::create($request->only('courceName', 'courceAbout', 'lectureName'));

        return redirect('/dashboard/cources/create')->with('success', 'Course added successfully!');
    }

    public function destroy(Request $request)
    {
        $request->validate([
            'courceName' => 'required|string'
        ]);

        $course = Course::where('courceName', $request->courceName)->first();

        if ($course) {
            $course->delete();
            return redirect()->back()->with('success', 'Course deleted successfully!');
        }

        return redirect()->back()->with('error', 'Course not found!');
    }
}
