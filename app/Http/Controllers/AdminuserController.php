<?php

namespace App\Http\Controllers;

use App\Models\Adminuser;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class AdminuserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Adminuser::get();

        return view('Admin.users', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.adduser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'fullname'=> 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' =>'required|string|min:8'

        ]);

        $data['active'] = isset($request->active);


       Adminuser::create($data);
//  return 'data inserted successfully';
    return redirect('Admin.users');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user= Adminuser::findOrFail($id);

        return view('adminprofile', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user= Adminuser::findOrFail($id);

        return view('admin.edituser', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id):RedirectResponse
    {
        $data = $request->validate([
            'fullname'=> 'required|string|max:255',
            'username' => 'required|string|max:255',

            'email' => 'required|email|unique:users,email',

        ]);
        $data['active'] = isset($request->active);

        Adminuser::where('id', $id)->update($data);
        return redirect('Admin.users');
        //  return 'Updated';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
