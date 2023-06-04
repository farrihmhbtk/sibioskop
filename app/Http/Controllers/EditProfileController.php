<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class EditProfileController extends Controller
{
    //
    public function editName(Request $request, $user)
    {

        $validatedData = $request->validate([
            'name' => 'required|min:3|different:oldName',
        ]);

        $user = User::find($user);

        $storeName = $user->name;

        if ($storeName != $validatedData['name']) {

            $user->name = $validatedData['name'];

            $user->save();

            return back()->with('editSuccess', 'Nama berhasil di ubah!');
        }

        return back()->with('noChange', 'Tidak ada perubahan');
    }


    public function editPass(Request $request, $user)
    {
        $userAuth = auth()->user();

        $user = User::find($user);

        $validated = $request->validate([
            'oldPassword' => [
                'required',
                function ($attribute, $value, $fail) use ($userAuth) {
                    if (!Hash::check($value, $userAuth->password)) {
                        $fail('Gagal, password lama tidak sama!');
                    }
                }
            ],
            'password' => [
                'required', 'min:3', 'different:oldPassword'
            ],
            'confirm_password' => 'required|same:password|min:3'
        ]);

        if($validated==true){
            $validated['password'] = bcrypt($validated['password']);

            $user->password = $validated['password'];
    
            $user->save();
    
            return back()->with('editSuccess', 'Password berhasil di ubah');
        }

        return back()->with('editError', 'Gagal, password lama tidak sama');


    }

    public function editNoHP(Request $request)
    {
        $user = auth()->user();

        $userId = auth()->user()->id;


        $userSave = User::find($userId);


        $validatedData = $request->validate([
            'phoneNumber' => 'required|min:3|different:oldPhoneNumber',
        ]);

        $storeNoHP = $user->phoneNumber;

        if ($storeNoHP != $validatedData['phoneNumber']) {

            $userSave->phoneNumber = $validatedData['phoneNumber'];

            $userSave->save();

            return back()->with('editSuccess', 'No HP berhasil di ubah!');
        }

        return back()->with('noChange', 'Tidak ada perubahan');
    }

    public function editEmail(Request $request)
    {
        $user = auth()->user();

        $userId = auth()->user()->id;

        $userSave = User::find($userId);

        $validatedData = $request->validate([
            'email' => 'required|different:oldEmail',
        ]);

        $storeEmail = $user->email;

        if ($storeEmail != $validatedData['email']) {

            $userSave->email = $validatedData['email'];

            $userSave->save();

            return back()->with('editSuccess', 'Email berhasil di ubah!');
        }

        return back()->with('noChange', 'Tidak ada perubahan');
    }
}
