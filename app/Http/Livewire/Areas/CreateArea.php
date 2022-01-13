<?php

namespace App\Http\Livewire\Areas;

use Livewire\Component;
use App\Models\Area;

class CreateArea extends Component
{

    public $open = false;
    public $area_name, $description;

    protected $rules = [
        'area_name' => 'required',
        'description' => 'required'
    ];

    public function save() {

        $this->validate();

        Area::create([
            'area_name' => $this->area_name,
            'description' => $this->description
        ]);
        $this->emit('alert', 'Excelente, Area creado correctamente');
        $this->reset(['area_name', 'description', 'open']);
        $this->emit('render');
    }

    public function render()
    {
        return view('livewire.areas.create-area');
    }
}
