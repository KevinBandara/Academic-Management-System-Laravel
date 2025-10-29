<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User; 
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function showRegister()
{
    // Show the registration page
    return view('auth.register');
}

    public function registerStudent(Request $request)
{
    $request->validate([
        'username' => 'required|string|max:50|unique:users,username',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6|confirmed',
        'studentFname' => 'required|string|max:100',
        'studentLname' => 'required|string|max:100',
        'telephone' => 'required|string|max:20',
        'address' => 'required|string|max:255',
    ]);

    // Create login user
    $user = \App\Models\User::create([
        'username' => $request->username,
        'email' => $request->email,
        'password' => \Illuminate\Support\Facades\Hash::make($request->password),
        'role' => 'student',
    ]);

    // Create student profile
    \App\Models\Student::create([
        'studentFname' => $request->studentFname,
        'studentLname' => $request->studentLname,
        'email' => $request->email,
        'telephone' => $request->telephone,
        'address' => $request->address,
    ]);

    return redirect()->route('login')->with('success', 'Student registered successfully! You can now log in.');
}


    public function dashboard()
    {
    $students = Student::all();
    return view('dashboard.dashboard', compact('students'));
    }

    public function create()
    {
        return view('dashboard.students.create.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'studentFname' => 'required',
            'studentLname' => 'required',
            'telephone' => 'required',
            'email' => 'required|email',
            'address' => 'required'
        ]);

        Student::create($request->all());
        return redirect('/dashboard')->with('success', 'Student added successfully!');
    }
    public function deleteByName(Request $request)
    {
        $request->validate([
           'studentFname' => 'required'
         ]);

        $name = $request->input('studentFname');
        $deleted = Student::where('studentFname', $name)->delete();

        if ($deleted) {
            return redirect('/dashboard')->with('success', "$deleted student(s) deleted!");
        } else {
            return redirect('/dashboard')->with('error', "No student found with name $name.");
         }
    }

    public function updateForm()
{
    // Show the update form
    return view('dashboard.students.update.update');
}

public function updateStudent(Request $request)
{
    $request->validate([
        'studentID' => 'required|exists:students,studentID',
        'studentFname' => 'required',
        'studentLname' => 'required',
        'telephone' => 'required',
        'email' => 'required|email',
        'address' => 'required',
    ]);

    $student = \App\Models\Student::find($request->studentID);
    $student->update([
        'studentFname' => $request->studentFname,
        'studentLname' => $request->studentLname,
        'telephone' => $request->telephone,
        'email' => $request->email,
        'address' => $request->address,
    ]);

    return redirect('/dashboard')->with('success', 'Student updated successfully!');
}

    public function showProfile()
    {
    return view('dashboard.profile'); 
    }
    
}

