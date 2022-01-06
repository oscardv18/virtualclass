<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class TablePosts extends Component
{
    protected $listeners = ['render'];

    public function render()
    {
        $posts = DB::table('posts')->orderBy('id', 'desc')->get();
        return view('livewire.table-posts', compact('posts'));
    }
}
