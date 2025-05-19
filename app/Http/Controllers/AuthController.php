<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Ordenes;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    
    public function login(Request $request) {
        //dd($request->all());
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
            //'device_name' => 'required',
        ]);
        
        if ($validator->fails()) {
            return response()->json([
                'status' => 'fail',
                'message' => $validator->errors()], 422); // Código de estado para errores de validación
        }

        $data = $request->all();
        
        $user = User::where('email', $data['email'])->first();
        
        if (! $user || !Hash::check($data['password'], $user->password)) {
            return response()->json([
                'status' => 'fail',
                'message' => 'Credenciales Invalidas'], 401);
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }
        
        $userData = [
            'name' => $user->name,
            'email' => $user->email,
            'token' => $user->createToken('auth_token')->plainTextToken
        ];
        
        return response()
        ->json([
            'status'=>'success',
            'data'=> $userData
        ], 200);
        //return $user->createToken($request->device_name)->plainTextToken;
    }

    public function logout(Request $request) {
        auth()->user()->tokens()->delete();
        return response(['message' => 'has cerrdo sesion en todos tus dispositivos'], 201);
    }

    public function listOrders() {
        $orders = Ordenes::all();
        return response($orders);
    }

}
