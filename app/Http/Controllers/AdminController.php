<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Venta;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate();

        return view('soloAdmin.adminview', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * $users->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('soloAdmin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $identidad = $request->input('identidad');
        $name = $request->input('name');
        $email = $request->input('email');
        $tipo = $request->input('tipo');
        $password = $request->input('password');
        $passwordconfirm = $request->input('passwordconfirmation');
        if ($password == $passwordconfirm) {
            $user = new User();
            $user->identidad = $identidad;
            $user->name = $name;
            $user->email = $email;
            $user->tipo = $tipo;
            $user->password = Hash::make($password);
            $user->save();
            return redirect()->route('administrar.index');
        }else{
            echo "<script> alert('Error, las contraseñas no son iguales') </script>";
            return view('soloAdmin.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('soloAdmin.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->tipo = $request->input('tipo');
        $user->save();
        return redirect()->route('administrar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }


    public function creacionApi()
    {
        return view('soloAdmin.api');
    }

    public function datosApi()
    {
        $ventas = Venta::all();
        return json_encode($ventas);
    }

}
