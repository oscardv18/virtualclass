<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class ShowPosts extends Component
{
    protected $listeners = ['render'];

    public function render()
    {
        $posts = DB::table('posts')->orderBy('id', 'desc')->get();
        return view('livewire.show-posts', compact('posts'));
    }
}
