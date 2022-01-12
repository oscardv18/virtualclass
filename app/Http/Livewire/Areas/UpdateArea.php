<?php

namespace App\Http\Livewire\Areas;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UpdateArea extends Component
{
    public $open = false, $area_id, $area_name, $description;
    protected $rules = [
        'area_name' => 'required',
        'description' => 'required'
    ];

    public function mount ($id, $name, $description) {
        $this->area_id = $id;
        $this->area_name = $name;
        $this->description = $description;
    }

    public function edit(){

        $this->validate();

        DB::table('area')->where('id', "=", $this->area_id)->update([
            'area_name' => $this->area_name,
            'description' => $this->description,
        ]);

        $this->emit('render');
        $this->reset(['open', 'area_name', 'description']);
        $this->emit('update-alert', 'Area Modificado con exito');
    }

    public function render()
    {
        return view('livewire.areas.update-area');
    }
}
