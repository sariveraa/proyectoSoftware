<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

use Barryvdh\DomPDF\Facade\Pdf;

class UserController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('solouser',['only'=> ['index']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    

    public function index()
    {
        return view('user.PrincipalUser');
    }

    public function catalogo()
    {
        $productos = Producto::all();

        return view('user.cata', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crear.create');
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
        $passwordconfirm = $request->input('password-confirm');

        $user = new User();
        $user->identidad = $identidad;
        $user->name = $name;
        $user->email = $email;
        $user->tipo = $tipo;
        $user->password = $password;
        $user->passwordconfirm = $passwordconfirm;
        $user->save();


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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function generar_pdf2(){
        $users = User::all();
        $pdf = PDF::loadView('soloAdmin.generar_pdf2', compact('users'));
        return $pdf->download('users.pdf');
    }
}
