<?php

namespace App\Livewire\Categoria;

use App\Models\Categoria;
use Livewire\Component;

class CategoriaEdit extends Component
{
    public $categoria_id;
    public $nome;    

    //função mount()
    //receber id de referencia do que será editado (via rota)
    //buscar por id
    //validar se a pesquisa retornou resultado
    //capturar os dados dos campos

    //função update()
    //receber id de referencia do que será editado (via rota)
    //buscar por id
    //validar se a pesquisa retornou resultado
    //capturar os dados dos campos
    //atualizar
    //retornar e redirecionar

    public funtion mount($id){
        $categoria = Categoria::find($id);

        if($categoria == null){
            session()->flash('error', 'Categoria não encontrada');
            return redirect()->route('categoria.index');
        }

        $this->categoria_id = $categoria->id;
        $this->nome = $categoria->nome;
    }

    public function update(){
        $categoria = Categoria::find($this->categoria_id);

        if($categoria == null){
            session()->flash('error', 'Categoria não encontrada');
            return redirect()->route('categoria.index');
        }

        $categoria->nome = $this->nome;

        $categoria->save();

        session()->flash('success', 'Atualizado');
            return redirect()->route('categoria.index');
    }


    public function render()
    {
        return view('livewire.categoria.categoria-edit');
    }
}
