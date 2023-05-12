<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $admin = Admin::all();
        return response()->json($admin);
    }

    public function show($id)
    {
        $admin = Admin::findOrFail($id);
        return response()->json($admin);
    }

    public function store(Request $request)
    {
        $admin = Admin::create($request->all());
        return response()->json($admin, 201);
    }

    public function update(Request $request, $id)
    {

        $admin = Admin::find($id);

        if ($admin) {
            $admin->name = $request->name;
            $admin->address = $request->address;
            $admin->email = $request->email;
            $admin->password = $request->password;
            return $admin->save();

            return response()->json([
                'status' => 202,
                'admin' => $admin
            ]);
        }
    }

    public function destroy($id)
    {
        $administrador = Admin::findOrFail($id);
        $administrador->delete();
        return response()->json(null, 204);
    }
}
