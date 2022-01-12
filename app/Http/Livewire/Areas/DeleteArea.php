<?php

namespace App\Http\Livewire\Areas;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class DeleteArea extends Component
{
    public $open = false, $area_id, $area_name;

    public function mount($id, $name) {
        $this->area_id = $id;
        $this->area_name = $name;
    }

    public function delete() {
        DB::table('area')->where('id', '=', $this->area_id)->delete();

        $this->emit('render');
        $this->reset(['open', 'area_id', 'area_name']);
        $this->emit('delete-alert', 'Excelente, Post eliminado correctamente');
    }

    public function render()
    {
        return view('livewire.areas.delete-area');
    }
}
