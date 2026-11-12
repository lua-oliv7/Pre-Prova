<?php

namespace App\Livewire\Categoria;

use App\Models\Categoria;
use Livewire\Component;

class CategoriaCreate extends Component
{
    public $nome;

    public function store(){

    //validar os dados
    //salva
    //exibir a msg
    //redirecionar
        Categoria::create([
            'nome' => $this->nome
        ]);

        session()->flash('success', 'Cadastrado');
        return redirect()->route('categoria.index');
    }

    public function render()
    {
        return view('livewire.categoria.categoria-create');
    }
}
