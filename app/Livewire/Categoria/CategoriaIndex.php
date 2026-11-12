<?php

namespace App\Livewire\Categoria;

use App\Models\Categoria;
use Livewire\Component;

class CategoriaIndex extends Component
{
    public function excluir($categoria_id){
        $categoria = Categoria::find($categoria_id);

        if($categoria == null){
            session()->flash('error', 'Não encontrado');
            return redirect()->route('categoria.index');
        }

        $categoria->delete();

        session()->flash('success', 'Excluído');
        return redirect()->route('categoria.index');
    }

    public function render()
    {
        $categorias = Categoria::all();

        return view('livewire.categoria.categoria-index', compact('categorias'));
    }
}
