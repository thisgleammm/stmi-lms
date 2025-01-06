<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\View;

class lectureController extends Controller
{   
  public function tampil()
  {
    
      $users = User::where('level', 'Dosen')->get();
      return view('lecturedata', compact('users')); 
  }
  
    public function tambah(){
        return view('lecturedata');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);
    
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'level' => 'Dosen', // Default level
        ]);
    
        return redirect()->route('lecturedata')->with('success', 'User added successfully!');
    }

    
    public function update(Request $request, $id)
    {
        // Validasi Input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $id, // Cek email unik kecuali untuk ID ini
            'password' => 'nullable|min:6', // Password opsional
        ]);
    
        // Cari User
        $user = User::findOrFail($id);
    
        // Update Data
        $user->name = $request->name;
        $user->email = $request->email;
    
        // Update Password Hanya Jika Ada
        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }
    
        $user->save();
    
        // Redirect dengan Pesan Sukses
        return redirect()->route('lecturedata')->with('success', 'User updated successfully.');
    }
    
    
}
