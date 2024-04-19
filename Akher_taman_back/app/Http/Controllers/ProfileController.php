<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class ProfileController extends Controller
{
    public function Profile($id)
    {
        $userInfo = User::find($id);
        return view('profile', compact('userInfo'));
    }

    public function UpdateProfile($id , Request $request)
    {

            $validator = Validator::make($request->all(), [
                'name'=>'required',
                'image'=>'image|mimes:jpeg,jpg,png,gif',
                'phone'=>'digits:10',
                'location' =>'string'
            ]);

            if($validator->fails()){
                    $errors = $validator->errors();
                    $errorMessage = '';

                foreach ($errors->all() as $error)
                {
                    $errorMessage = $error;
                }

                return back()->with('error', $errorMessage);

            }

            $user = User::find($id);

            $user->name = $request->name;
            $user->phone_number = $request->phone;
            $user->address = $request->location;

            if($request->hasFile('image'))
            {
                $image = $request->file('image');
                $imageFormat = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('storage/imageProfile'), $imageFormat);
                $user->image = $imageFormat;
            }

            $user->save();

            return redirect()->to('dashboard')->with('success', 'Congrates ✨  your profile has been updated !');

    }
}
