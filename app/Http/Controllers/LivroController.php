<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function index()
    {
        return Livro::all();
    }

    public function show($id)
    {
        return Livro::findOrFail($id);
    }

    public function store(Request $request)
    {
        return Livro::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $livro = Livro::findOrFail($id);
        $livro->update($request->all());
        return $livro;
    }

    public function destroy($id)
    {
        Livro::destroy($id);
        return response()->json(['mensagem' => 'Livro deletado com sucesso.']);
    }
}

