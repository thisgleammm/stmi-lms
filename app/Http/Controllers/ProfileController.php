<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
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

        $data = [
            'name' => Auth::user()->name,
            'firstName' => $firstName,
            'lastName' => $lastName,
            'role' => $levelDisplay,
            'phone_number' => 120381083,
            'email' => Auth::user()->email,
        ];


        // Return 
        return view('Profile', ["user" => $data]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
