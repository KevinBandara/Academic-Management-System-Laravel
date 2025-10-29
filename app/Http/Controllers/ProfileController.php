<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function showProfile()
    {
        $user = Auth::user();
        return view('dashboard.profile', compact('user'));
    }

    public function updateProfile(Request $request)
{
    $user = Auth::user();

    $request->validate([
        'username' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'password' => 'nullable|min:6|confirmed',
        'telephone' => 'nullable|string|max:20',
        'address' => 'nullable|string|max:255',
        'avatar' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
    ]);

    // Update avatar if uploaded
    if ($request->hasFile('avatar')) {
        $avatarName = time() . '.' . $request->avatar->extension();
        $request->avatar->move(public_path('avatars'), $avatarName);
        $user->avatar = $avatarName;
    }

    // Update user fields
    $user->username = $request->username;
    $user->email = $request->email;

    if ($request->filled('password')) {
        $user->password = \Illuminate\Support\Facades\Hash::make($request->password);
    }

    $user->save();

    // Update student details (if found)
    $student = \App\Models\Student::where('email', $user->email)->first();
    if ($student) {
        $student->telephone = $request->telephone;
        $student->address = $request->address;
        $student->save();
    }

    return redirect()->route('profile.show')->with('success', 'Profile updated successfully!');
}

}
