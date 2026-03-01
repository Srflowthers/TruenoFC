<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MemberController extends Controller
{
    public function index()
    {
        // Get all members, optionally ordered by ID or Name, including their role relationship
        $members = User::with('role')->orderBy('int_nombre_completo', 'asc')->get();
        return view('admin.members.index', compact('members'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('admin.members.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'int_rol' => 'required|exists:roles,rol_id',
            'int_rut' => 'required|string|max:12|unique:users,int_rut',
            'int_nombre' => 'required|string|max:255',
            'int_apellido_paterno' => 'required|string|max:120',
            'int_apellido_materno' => 'nullable|string|max:120',
            'numero_camiseta' => 'nullable|string|max:10',
            'int_posicion' => 'nullable|string|max:30',
            'int_telefono' => 'nullable|string|max:140',
            'int_fecha_nacimiento' => 'nullable|date',
            'int_instagram' => 'nullable|string|max:30',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $nombreCompleto = trim($request->int_nombre . ' ' . $request->int_apellido_paterno . ' ' . $request->int_apellido_materno);

        User::create([
            'int_rol' => $request->int_rol,
            'int_rut' => $request->int_rut,
            'int_nombre' => $request->int_nombre,
            'int_apellido_paterno' => $request->int_apellido_paterno,
            'int_apellido_materno' => $request->int_apellido_materno,
            'int_nombre_completo' => $nombreCompleto,
            'numero_camiseta' => $request->numero_camiseta,
            'int_posicion' => $request->int_posicion,
            'int_telefono' => $request->int_telefono,
            'int_fecha_nacimiento' => $request->int_fecha_nacimiento,
            'int_instagram' => $request->int_instagram,
            'password' => Hash::make($request->password),
            'int_estado' => true,
        ]);

        return redirect()->route('dashboard')->with('success', 'Integrante registrado exitosamente.');
    }
}
