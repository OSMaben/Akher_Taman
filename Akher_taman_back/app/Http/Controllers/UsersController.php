<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Http\Requests\StoreUsersRequest;
use App\Http\Requests\UpdateUsersRequest;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUsersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Users $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Users $users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUsersRequest $request, Users $users)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Users $users)
    {
        //
    }


    public function register()
    {
        return 'page has been showed';
    }

    public function registerUser(Request $request)
    {
        $user = new Users();;
        $user->UserName = $request->name;
        $user->role_id = $request->role_id;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->password = bcrypt($request->password);
        $user->PhoneNumber = $request->PhoneNumber;
        $user->save();

        return "registered successfully";
    }

    public function login()
    {
        return "pages has been showed";
    }

    public function loginUser(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $user = Users::where('email', $credentials['email'])->first();
        if($user &&  Hash::check($credentials['password'], $user->password))
        {
            session(['user_id' => $user->id]); //store the id of the loged in user inside of the session
            return "login successfuly";
        }
        else
            return "not Valide";
    }
}
