<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Admin/Roles/Index',[
            'roles' => Role::all(),
            'users'=> User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Admin/Roles/Create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'nom' => ['required'],
        ])->validate();
  
        Role::create($request->all());
  
        return redirect()->back()
                    ->with('message', 'Role Created Successfully.');   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function show(Role $roles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return Inertia::render('Admin/Role/Edit/', [
            'role' => Role::findOrFail($id)
        ]);    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Validator::make($request->all(), [
            'nom' => ['required'],
        ])->validate();

        if ($request->has('id')) {
            Role::find($request->input('id'))->update($request->all());
            return redirect()->back()
                    ->with('message', 'Role Updated Successfully.');
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request): \Illuminate\Http\RedirectResponse
    {
        Role::destroy($request->id);

        return redirect()->back()
            ->with('message', 'Role deleted successfully.');
    }
}

