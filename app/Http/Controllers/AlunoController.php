<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index(Request $request)
    {
        return view('aluno');
    }
}
