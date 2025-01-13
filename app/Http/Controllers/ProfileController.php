<?php

namespace App\Http\Controllers;


use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;
use App\Models\Student;
use App\Models\User;
use App\Http\Requests\PhoneNumber;
use App\Http\Requests\ChangePasswordReq;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        $user = Auth::user();
        // Split the name into parts (first name and last name)
        $nameParts = explode(' ', Auth::user()->name);

        // If there are more than 1 part, treat the first part as first name and the rest as last name
        if (count($nameParts) > 1) {
            $firstName = implode(' ', array_slice($nameParts, 0, -1));  // all parts except the last one
            $lastName = $nameParts[count($nameParts) - 1];  // the last part
        } else {
            // If only one part exists, treat it as the first name, and leave the last name empty
            $firstName = $nameParts[0];
            $lastName = '';
        }

        $levelTranslations = [
            'mahasiswa' => 'Student',
            'dosen' => 'Lecturer',
            'admin' => 'Administrator',
            // Tambahkan level lain sesuai kebutuhan
        ];

        $userLevel = Auth::user()->level;
        $levelDisplay = $levelTranslations[$userLevel] ?? ucwords($userLevel);

        $query = Student::select('phone_number')->where('user_id', $user->id)->get();

        $data = [
            'name' => Auth::user()->name,
            'firstName' => $firstName,
            'lastName' => $lastName,
            'role' => $levelDisplay,
            'phone_number' => Auth::user()->phone_number,
            'email' => Auth::user()->email,
        ];

        // Return 
        return view('Profile', ["user" => $data]);
    }

    /**
     * Update the user's profile information.
     */
    // public function updatePhone(PhoneNumber $request)
    // {
    //     $user = Auth::user();
    //     $student = Student::all()->where('user_id', '==', $user->id);
    //     $currentStudent = $student[0];

    //     if (!Hash::check($request->validated(['password']), $user->password)) {
    //         return Redirect::back()->withErrors(['password' => 'The provided password is incorrect.']);
    //     }

    //     if ($currentStudent->phone_number !== $request->validated(['currentphone'])) {
    //         return Redirect::back()->withErrors(['currentphone' => 'The current phone number does not match.']);
    //     }

    //     $currentStudent->phone_number = $request->validated(['newnumber']);

    //     $currentStudent->save();
    //     return Redirect::to('/profile')->with('success', 'Phone number updated successfully.');
    // }

    // public function updatePassword(ChangePasswordReq $request)
    // {
    //     $user = Auth::user();

    //     $userModel = User::all()->where('id', '==', $user->id);

    //     if (!$user->name === $userModel[0]->name) {
    //         return Redirect::back()->withErrors(['name' => 'The name does not match.']);
    //     }

    //     if (!Hash::check($request->validated(['currentpassword']), $user->password)) {
    //         return Redirect::back()->withErrors(['password' => 'The provided password is incorrect.']);
    //     }

    //     if ($request->validated(['newpassword']) !== $request->validated(['confirmpassword'])) {
    //         return Redirect::back()->withErrors(['confirmpassword' => 'The password confirmation does not match.']);
    //     }

    //     $user->password = Hash::make($request->validated(['newpassword']));
    //     $userModel->password($user->password)->save();

    //     return Redirect::to('/profile')->with('success', 'Password updated successfully.');
    // }
}
