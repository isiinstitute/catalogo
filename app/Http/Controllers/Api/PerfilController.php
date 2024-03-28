<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class PerfilController extends Controller
{
    public function editar(Request $request)
    {
        $validation =  Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'nullable|confirmed',
            'password_confirmed' => 'nullable',
        ]);

        if ($validation->fails()) {
            $data = [
                'message' => 'Error en los datos',
                'errors' => $validation->errors()
            ];

            return response()->json($data, 422);
        }

        try {
            $usuario = auth()->user();
            $usuario->name = $request->name;
            $usuario->email = $request->email;
            if (!is_null($request->password) && $request->password != '') {
                $usuario->password = Hash::make($request->password);
            }
            $usuario->save();
            $data = ['message' => 'Datos de usuario actualizados correctamente'];

            return response()->json($data, 200);
        } catch (\Throwable $error) {
            Log::error($error->getMessage());
            $data = ['message' => 'Error al actualizar datos del usuario'];
            return response()->json($data, 500);
        }
    }
}
