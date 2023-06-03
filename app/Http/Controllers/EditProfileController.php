<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class EditProfileController extends Controller
{
    //
    public function editName(Request $request, $user)
    {

        $validatedData = $request->validate([
            'name' => 'required|min:3',
        ]);

        $user = User::find($user);

        $storeName = $user->name;

        if($storeName != $validatedData['name']){
            
            $user->name = $validatedData['name'];
    
            $user->save();
    
            return back()->with('editSuccess', 'Nama berhasil di ubah!');
        }

        return redirect()->intended('/editName');
 
    }
}
