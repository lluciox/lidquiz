<?php

namespace App\Http\Controllers;
use App\pesquisa;
use Illuminate\Http\Request;

class ControladorPesquisa extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }


    public function store(Request $request)
    {
     $regras = 
     [
        'matricula' => 'required|min:1|max:6|unique:pesquisas',
        'nome' => 'required',
        'nomesup' => 'required',
        'Q1' => 'max:1',
        'Q2' => 'max:1',
        'Q3' => 'max:1',
        'Q4' => 'max:1',
        'Q5' => 'max:1',
        'Q6' => 'max:1',
        'Q7' => 'max:1',
        'Q8' => 'max:1',
        'Q9' => 'max:1',
        'Q0' => 'max:1'
    ];

    $Mensagens = 
    [
        'required' => 'O Campo :attribute não pode ser em branco.',
        'matricula.required' => 'o Campo Matricula não pode estar em branco.',
        'matricula.max' => 'O tamanho Maximo do campo Matricula é 6 caracteres.',
        'matricula.min' => 'O tamanho minimo do campo Matricula é 1 caracter.',
        'matricula.unique' => 'Atividade já Respondida.',
        'nome.required' => 'O campo Nome não pode estar em branco.',
        'nomesup.required' => 'O campo Nome Supervisor não pode estar em branco.',
        'Q1.max' => 'A Pergunta Nr1 deve ser Respondida.',
        'Q2.max' => 'A Pergunta Nr2 deve ser Respondida.',
        'Q3.max' => 'A Pergunta Nr3 deve ser Respondida.',
        'Q4.max' => 'A Pergunta Nr4 deve ser Respondida.',
        'Q5.max' => 'A Pergunta Nr5 deve ser Respondida.',
        'Q6.max' => 'A Pergunta Nr6 deve ser Respondida.',
        'Q7.max' => 'A Pergunta Nr7 deve ser Respondida.',
        'Q8.max' => 'A Pergunta Nr8 deve ser Respondida.',
        'Q9.max' => 'A Pergunta Nr9 deve ser Respondida.',
        'Q0.max' => 'A Pergunta Nr10 deve ser Respondida.'


    ];

    $request->validate($regras, $Mensagens);

    $pesquisar = new pesquisa();
    $pesquisar->matricula = $request->input('matricula');
    $pesquisar->nome = $request->input('nome');
    $pesquisar->nomesup = $request->input('nomesup');
    $pesquisar->Q1 = $request->input('Q1');
    $pesquisar->Q2 = $request->input('Q2');
    $pesquisar->Q3 = $request->input('Q3');
    $pesquisar->Q4 = $request->input('Q4');
    $pesquisar->Q5 = $request->input('Q5');
    $pesquisar->Q6 = $request->input('Q6');
    $pesquisar->Q7 = $request->input('Q7');
    $pesquisar->Q8 = $request->input('Q8');
    $pesquisar->Q9 = $request->input('Q9');
    $pesquisar->Q0 = $request->input('Q0');
    $pesquisar->save();
    return redirect('/')->with('success', 'Atividade Avaliativa Respondida com Sucesso!');
}

}
