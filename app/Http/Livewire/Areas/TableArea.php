<?php

namespace App\Http\Livewire\Areas;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class TableArea extends Component
{
    protected $listeners = ['render'];

    public function render()
    {
        $areas = DB::table('area')->get();
        return view('livewire.areas.table-area', compact('areas'));
    }
}
