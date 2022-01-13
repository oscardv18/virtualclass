<?php

namespace App\Http\Livewire\Areas;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class ShowArea extends Component
{
    protected $listeners = ['render'];
    public $area;

    public function render()
    {
        $areas = DB::table('area')->where('area_name', 'like', '%' . $this->area . '%')
                                       ->orWhere('description', 'like', '%' . $this->area . '%')
                                       ->get();
        return view('livewire.areas.show-area', compact('areas'));
    }
}
